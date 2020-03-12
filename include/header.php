<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="css/base_grid.css?v=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/nav.css?v=1.0">
    <link rel="stylesheet" href="css/landing.css?v=1.0">
    <link rel="stylesheet" href="css/footer.css?v=1.0">
    <title><?php $title?></title>
</head>


    <nav class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      <a href="index.php">Forum</a>
    </div>
  </div>

  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="sports.php" >Sports</a>
    <a href="tech.php" >Tech</a>
    <a href="music.php" >Music</a>
    <?php
    session_start();
    error_reporting(0);
    if ($_SESSION['loggedIn'] == true) {
      echo '<a href="news.php">Your News</a>
      <a href="signout.php">Sign Out</a>';
    } else {
        echo '<a href="login.php">Sign In</a>';
      }
      ?>
      </a>
  </div>
</nav>