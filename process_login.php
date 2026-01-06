<?php
session_start();
require 'db.php';

$email    = trim($_POST['email']);
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT id, name, password, role FROM users WHERE email = ? LIMIT 1");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id']   = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_role'] = $user['role'];

        header("Location: index.php");
        exit;
    }
}

header("Location: login.php?error=1");
exit;
