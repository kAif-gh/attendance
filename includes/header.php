<?php 
//This includes the session file. This file contains code that starts/resumes a session. 
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'?>

<!doctype html>
<html lang="en">
  <head>


    <link rel="stylesheet" href="css/site.css" />

    <title>Attendace - <?php echo $title ?></title>
    <title>Attendance - <?php echo $title ?></title>
  </head>
  <body>
    <div class="container">

        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <div class="navbar-nav mr-auto">
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="viewrecords.php">View Attendees</a>

        </div>
        <div class="navbar-nav ml-auto">
          <?php 
              if(!isset($_SESSION['userid'])){
          ?>
            <a class="nav-item nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
          <?php } else { ?>
            <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="manageusers.php">Manage Users</a>
            <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
          <?php } ?>
        </div>
      </div>
    </nav>