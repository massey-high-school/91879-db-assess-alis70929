<?php 
include "topbit.php";

$showall_sql = "SELECT *
FROM `2020_L1_Assesment_ShaAli`
ORDER BY `2020_L1_Assesment_ShaAli`.`Food Name` ASC
LIMIT 0 , 30";
$showall_query = mysqli_query($dbconnect, $showall_sql);
$showall_rs = mysqli_fetch_assoc($showall_query);
$count = mysqli_num_rows($showall_query);
?>
        
        <div class="box main">
            <h2>Show all</h2>
            
            <?php 
            // Check if there are any results,
            
            // No results then display error
            if ($count < 1)
            {
                ?>
                <div class = "error"> Sorry!, No results match your searh, please try again</div>
                <?php
                  
            }// end count if
            
            // If there are results display them
            else
            {
                do
                {
                    ?>
                    <div class = "results">
                        <p >Name:<span class = "sub_heading"><?php echo $showall_rs['Food Name']; ?></span></p>
                        <p >Where:<span class = "sub_heading"><?php echo $showall_rs['Restaurant']; ?></span></p>
                        <p >Meal:<span class = "sub_heading"><?php echo $showall_rs['Meal']; ?></span></p>
                        <p >Vegetarian:<span class = "sub_heading"><?php echo $showall_rs['Vegetarian']; ?></span></p>
                        <p >Rating:<span class = "sub_heading">
                            
                            <?php 
                            for($x = 0; $x < $showall_rs['Rating']; $x++)
                            {
                                echo "&#9733;";
                            }
                            ?>
                            
                            </span></p>
                        <p ><span class = "sub_heading">Review / Response</span></p>

                        <p>

                            <?php echo $showall_rs['Review']; ?>

                        </p>

                    </div><!-- end results -->
                    <br /> <!-- To make a gap between each result box -->
                    <?php
                   
                    
                }// end do
                while($showall_rs = mysqli_fetch_assoc($showall_query));
                
                
            }// end else
            
            ?>
        </div>    <!-- / main -->
        
<?php
include("bottombit.php");
?>