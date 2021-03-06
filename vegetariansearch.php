<?php 
include "topbit.php";
if (isset($_POST['find_vegetarian']))
{
    
$vegetarian = test_input(mysqli_real_escape_string($dbconnect, $_POST['vegetarian']));
    
$find_sql = "SELECT *
FROM `2020_L1_Assesment_ShaAli`
WHERE `Vegetarian` LIKE '$vegetarian'
ORDER BY `2020_L1_Assesment_ShaAli`.`Food Name` ASC
LIMIT 0 , 30";
$find_query = mysqli_query($dbconnect, $find_sql);
$find_rs = mysqli_fetch_assoc($find_query);
$count = mysqli_num_rows($find_query);
}
?>
        
        <div class="box main">
            <h2>Search by Vegetarian/Non Vegetarian</h2>
            
            <?php 
            // Check if there are any results,
            
            // No results then display error
            if ($count < 1)
            {
                ?>
                <div class = "error"> Sorry!, No results match your search, please try again</div>
                <?php
                  
            }// end count if
            
            // If there are results display them
            else
            {
                do
                {
                    ?>
                    <div class = "results">
                        <p >Name:<span class = "sub_heading"><?php echo $find_rs['Food Name']; ?></span></p>
                        <p >Where:<span class = "sub_heading"><?php echo $find_rs['Restaurant']; ?></span></p>
                        <p >Meal:<span class = "sub_heading"><?php echo $find_rs['Meal']; ?></span></p>
                        <p >Vegetarian:<span class = "sub_heading"><?php echo $find_rs['Vegetarian']; ?></span></p>
                        <p >Rating:<span class = "sub_heading">
                            
                            <?php 
                            for($x = 0; $x < $find_rs['Rating']; $x++)
                            {
                                echo "&#9733;";
                            }
                            ?>
                            
                            </span></p>
                        <p ><span class = "sub_heading">Review / Response</span></p>

                        <p>

                            <?php echo $find_rs['Review']; ?>

                        </p>

                    </div><!-- end results -->
                    <br /> <!-- To make a gap between each result box -->
                    <?php
                   
                    
                }// end do
                while($find_rs = mysqli_fetch_assoc($find_query));
                
                
            }// end else
            
            ?>
        </div>    <!-- / main -->
        
<?php
include("bottombit.php");
?>
