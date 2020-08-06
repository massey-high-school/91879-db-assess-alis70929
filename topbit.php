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
     <link rel="stylesheet" href="css/font-awesome.min.css"> 
    
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
           
           <h2> <a href="index.php" class="side">Home</a>|<a href="showall.php" class="side">Show All</a></h2><hr/>
            
            <!-- Search by Food Name -->
            <form method = "post" action = "foodnamesearch.php" enctype="multipart/form-data">
           
           <input class = "search" type = "text" name = "foodname" size = "40" value = "" required placeholder = "Food Name..."/>
            
            <input class = "submit" type = "submit" name = "find_foodname" value = "&#xf002;" />
           </form>
            
            <!-- End of Search by Restaurant Name -->
            
            <!-- Search by Food Name -->
            <form method = "post" action = "restaurantsearch.php" enctype="multipart/form-data">
           
           <input class = "search" type = "text" name = "restaurant" size = "40" value = "" required placeholder = "Restaurant Name..."/>
            
            <input class = "submit" type = "submit" name = "find_restaurant" value = "&#xf002;" />
           </form>
            
            <!-- End of Search by Restaurant Name -->
            
            <!-- Search By Meal -->
           
           <form method = "post" action = "mealsearch.php" enctype="multipart/form-data">
           
           <select name = "meal" required>
               <option value = "" disabled selected>Meal...</option>
               
              <?php 
               $meal_sql = "SELECT DISTINCT `Meal` FROM `2020_L1_Assesment_ShaAli` ORDER BY `2020_L1_Assesment_ShaAli`.`Meal` ASC LIMIT 0 , 30";
               $meal_query = mysqli_query($dbconnect, $meal_sql); ;
               $meal_rs = mysqli_fetch_assoc($meal_query) ;
               
               do{
                   
               ?>
               
               <option value = "<?php echo $meal_rs['Meal']; ?>"><?php echo $meal_rs['Meal']; ?></option>
               
               <?php
               }// end of meal retrival
               
               while($meal_rs =mysqli_fetch_assoc($meal_query));
               

               ?>
               
            </select>
            
            <input class = "submit" type = "submit" name = "find_meal" value = "&#xf002;" />
           </form>
           
           <!-- End of meal Search -->
            vege/nonvege<br/>
            Rating<br/>
        </div>
        
     
