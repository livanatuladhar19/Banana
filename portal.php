<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Portal Selection</title>

<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #002a70, #003f9e);
    }

    .container {
        width: 90%;
        max-width: 800px;
        text-align: center;
    }

    .portal-box {
        background: white;
        padding: 30px;
        border-radius: 12px;
        margin-bottom: 26px;
        box-shadow: 0 8px 22px rgba(0,0,0,0.25);
    }

    h2 {
        margin: 0 0 12px 0;
        font-size: 26px;
        color: #000;
        font-weight: 700;
    }

    p {
        color: #333;
    }

    .btn {
        display: inline-block;
        padding: 14px 24px;
        margin-top: 12px;
        border-radius: 8px;
        font-size: 16px;
        text-decoration: none;
        font-weight: 700;
        background: #ffd700;
        color: #000;
        transition: 0.3s;
    }

    .btn:hover {
        filter: brightness(0.92);
    }

    .guest {
        margin-top: 22px;
        font-size: 15px;
        color: white;
    }

    .guest a {
        color: #ffd700;
        font-weight: bold;
        text-decoration: none;
    }

</style>
</head>

<body>
<div class="container">

    <div class="portal-box">
        <h2>Customer Portal</h2>
        <p>Browse hotels, book rooms, and manage your bookings.</p>
        <a class="btn" href="login.php">Enter Customer Portal</a>
    </div>

    <div class="portal-box">
        <h2>Admin Dashboard</h2>
        <p>Manage hotels, rooms, bookings, and customers.</p>
        <a class="btn" href="admin/admin_login.php">Enter Admin Dashboard</a>
    </div>

    <div class="guest">
        OR <br>
        <a href="index.php?page=home&guest=1">VISIT AS GUEST</a>
    </div>

</div>
</body>
</html>
