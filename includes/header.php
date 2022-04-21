<?php
require "includes/database_connect.php";

if (isset($_SESSION["user_id"])) {
?>
<div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <div class="nav-name">
                        Hi, <?php echo $_SESSION['user_full_name']; ?>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php" >
                            <i class="fas fa-user"></i> Dashboard
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" > 
                            <i class="fa fa-sign-in-alt"></i>Logout
                        </a>
                   </li>
                </ul>
            </div>
        </nav>
    </div> 
    <?php }else{ ?>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-v1"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal"> 
                            <i class="fa fa-sign-in-alt"></i>Login
                        </a>
                   </li>
                </ul>
            </div>
        </nav>
    </div>
  <?php  } ?>

    <div id="loading">
   </div>
