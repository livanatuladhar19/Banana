<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>

<!-- Floating Orbs -->
<div class="orb orb1"></div>
<div class="orb orb2"></div>
<div class="orb orb3"></div>
<div class="orb orb4"></div>
<div class="orb orb5"></div>
<div class="orb orb6"></div>

<!-- Center Box -->
<div class="center-box">

  <!-- CHOICE -->
  <div id="choice">
    <h2>Welcome</h2>

    <div class="choice-buttons">
      <div class="choice-btn" onclick="showLogin()">Login</div>
      <div class="choice-btn" onclick="showRegister()">Register</div>
    </div>

    <a href="index.php" class="guest-link">View as a guest</a>
  </div>

  <!-- LOGIN FORM -->
  <form id="loginForm" class="hidden" method="POST">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username / Email">
    <input type="password" name="password" placeholder="Password">
    <button class="main-btn">Login</button>
    <span class="back-link" onclick="goBack()">← Back</span>
  </form>

  <!-- REGISTER FORM -->
  <form id="registerForm" class="hidden" method="POST">
    <h2>Register</h2>
    <input type="text" name="name" placeholder="Full Name">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="phone" placeholder="Phone Number">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirm" placeholder="Confirm Password">
    <button class="main-btn">Create Account</button>
    <span class="back-link" onclick="goBack()">← Back</span>
  </form>

</div>

<script>
function showLogin(){
  document.getElementById('choice').classList.add('hidden');
  document.getElementById('loginForm').classList.remove('hidden');
}

function showRegister(){
  document.getElementById('choice').classList.add('hidden');
  document.getElementById('registerForm').classList.remove('hidden');
}

function goBack(){
  document.getElementById('loginForm').classList.add('hidden');
  document.getElementById('registerForm').classList.add('hidden');
  document.getElementById('choice').classList.remove('hidden');
}
</script>

</body>
</html>

