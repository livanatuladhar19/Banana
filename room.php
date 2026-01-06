<?php
// room.php
require_once 'db_connect.php';
require_once 'functions.php';

$id = intval($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM rooms WHERE id = ?");
$stmt->execute([$id]);
$room = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$room) {
    die('Room not found');
}

$pre_check_in = isset($_GET['check_in']) ? sanitize_date($_GET['check_in']) : '';
$pre_check_out = isset($_GET['check_out']) ? sanitize_date($_GET['check_out']) : '';

?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title><?=htmlspecialchars($room['title'])?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-4">
  <a href="index.php" class="btn btn-link mb-3">&larr; Back</a>
  <div class="row">
    <div class="col-md-6">
      <?php if($room['image']): ?>
        <img src="<?=htmlspecialchars($room['image'])?>" class="img-fluid" alt="">
      <?php else: ?>
        <div class="border p-5 text-center text-muted">No image</div>
      <?php endif; ?>
    </div>
    <div class="col-md-6">
      <h2><?=htmlspecialchars($room['title'])?></h2>
      <p><?=nl2br(htmlspecialchars($room['description']))?></p>
      <p><strong>Price:</strong> $<?=number_format($room['price'],2)?> / night</p>
      <p><strong>Amenities:</strong> <?=htmlspecialchars($room['amenities'])?></p>

      <hr>
      <h4>Book this room</h4>
      <?php if(!is_logged_in()): ?>
        <p>Please <a href="login.php">login</a> to book.</p>
      <?php else: ?>
        <form method="post" action="book.php">
          <input type="hidden" name="room_id" value="<?=$room['id']?>">
          <input type="hidden" name="csrf_token" value="<?=csrf_token()?>">
          <div class="mb-3"><label>Check-in</label><input class="form-control" type="date" name="check_in" required value="<?=$pre_check_in?>"></div>
          <div class="mb-3"><label>Check-out</label><input class="form-control" type="date" name="check_out" required value="<?=$pre_check_out?>"></div>
          <button class="btn btn-success" type="submit">Book Now</button>
        </form>
      <?php endif; ?>
    </div>
  </div>
</div>
</body>
</html>
