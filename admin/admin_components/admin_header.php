<?php include '../db_connection.php'; ?>

<?php
  session_start();

  if (!isset($_SESSION['session_id'])) {
    if (isset($_COOKIE['session_id']) && isset($_COOKIE['admin_username'])) {
      $_SESSION['admin_username'] = $_COOKIE['user_id'];
      $_SESSION['session_id'] = $_COOKIE['username'];
    }
  }
?>

<?php
    if (!isset($_SESSION['session_id'])) {
        echo '<p class="login">Please <a href="../login.php">log in</a> to access this page.</p>';
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orphanage Foundation</title>
    <link rel="stylesheet" href="../semantic/semantic.min.css">
    <script src="../semantic/semantic.min.js"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body style="background-color: #bcbcbc;">