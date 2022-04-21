<?php
session_start();
require "includes/database_connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
</head>

<body>
     <?php include "includes/header.php"; ?>
  
   <div class="banner-container happines-bg-img" >
        <h2 class="black text-center pb-3 pt-5">Happiness per Square Foot</h2>
    
        <form id="search-form" method="post" action="property_list.php">
            <div class="input-group searchbox city-search">
                <div style="width: 40%;">
                <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your city to search for PGs" /> 
                </div>
                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                
            </div>
        </form>
    </div>
       
    <div class="page-container">
        <h1 class="city-heading text-center">
            Major Cities
        </h1>
        <div class="row">
            <div class="city-card-container col-md-3">
                <a href="property_list.php?city=Delhi">
                    <div class="city-card rounded-circle border p-3 shadow mb-3 bg-gray"> 
                        <img src="img/delhi.png" class="city-img" />
                    </div>
                </a>
            </div>
                        
            <div class="city-card-container col-md-3"> 
                <a href="property_list.php?city=Mumbai"> 
                    <div class="city-card rounded-circle border p-3 shadow mb-3 bg-gray"> 
                        <img src="img/mumbai.png" class="city-img" />
                    </div>
                </a>
            </div>
                        
            <div class="city-card-container col-md-3"> 
                <a href="property_list.php?city=Bangalore"> 
                    <div class="city-card rounded-circle border p-3 shadow mb-3 bg-gray">
                        <img src="img/bangalore.png" class="city-img" />
                    </div>
                </a>
            </div>
                        
            <div class="city-card-container col-md-3">
                <a href="property_list.php?city=Hyderabad">
                    <div class="city-card rounded-circle border p-3 shadow mb-3 bg-gray">
                        <img src="img/hyderabad.png" class="city-img" />
                    </div>
                </a>
            </div>
        </div>
    </div>

    <?php
    include "includes/footer.php";
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    ?>
    <script type="text/javascript" src="js/common.js"></script>
</body>

</html>