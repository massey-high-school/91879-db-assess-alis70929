<!DOCTYPE HTML>

<html lang="en">
<?php 
    session_start();   
    include("config.php");
    include("functions.php");
    
    // Connect to database
    $dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
    if(mysqli_connect_errno())
    {
        echo "Connection failed:".mysqli_connect_errno();
        exit;
    }

?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Shazeels Food Review Database">
    <meta name="keywords" content="Food, Review ">
    <meta name="author" content="Shazeel Ali 11HCV">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Shazeels's Food Reviews</title>
    
    <!-- Edit the link below / replace with your chosen google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato%7cUbuntu" rel="stylesheet"> 
    
    <!-- Edit the name of your style sheet - 'foo' is not a valid name!! -->
    <link rel="stylesheet" href="css/FoodReviewStyle.css"> 
    
</head>
    
<body>
    
    <div class="wrapper">
    

        
        <div class="box banner">
            
        <!-- logo image linking to home page goes here -->
        <a href="index.php">
            <div class="box logo"  title="Logo - Click here to go to the Home Page">
            <img class="img-circle" src="Images/FoodLogo.png" width="100" height="100" alt="generic logo" />
            
            </div>    <!-- / logo -->
        </a>
            
            <h1>Shazeel's Food Review Database</h1>
        </div>    <!-- / banner -->

        
        
        <div class="box side">
           
           <h2> <a href="index.php" class="side">Home</a>|<a href="showall.php" class="side">Show All</a></h2><br/>
            Food Name<br/>
            restauraunt<br/>
            Meal<br/>
            vege/nonvege<br/>
            Rating<br/>
        </div>
        
     
