<?php
// user_bookings.php
require_once 'db_connect.php';
require_once 'functions.php';
if(!is_logged_in()){ header('Location: login.php'); exit; }

$stmt = $pdo->prepare("SELECT b.*, r.title FROM bookings b JOIN rooms r ON r.id=b.room_id WHERE b.user_id = ? ORDER BY b.created_at DESC");
$stmt->execute([$_SESSION['user_id']]);
$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>My Bookings</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="py-4">
<div class="container">
  <a href="index.php" class="btn btn-link">&larr; Home</a>
  <?php flash('msg'); ?>
  <h2>My Bookings</h2>
  <table class="table">
    <thead><tr><th>Room</th><th>Check-in</th><th>Check-out</th><th>Amount</th><th>Status</th></tr></thead>
    <tbody>
    <?php foreach($bookings as $b): ?>
      <tr>
        <td><?=htmlspecialchars($b['title'])?></td>
        <td><?=htmlspecialchars($b['check_in'])?></td>
        <td><?=htmlspecialchars($b['check_out'])?></td>
        <td>$<?=number_format($b['total_amount'],2)?></td>
        <td><?=htmlspecialchars($b['status'])?></td>
      </tr>
    <?php endforeach; ?>
    <?php if(empty($bookings)): ?>
      <tr><td colspan="5" class="text-muted">No bookings found.</td></tr>
    <?php endif; ?>
    </tbody>
  </table>
</div>
</body>
</html>
