<?php

    include ("dbconnection/db.php");
    $sql = "SELECT * FROM slides WHERE visible ='1';";
    $result = mysqli_query($con, $sql);
    


?>
 
 
 <!-- Categories Section Begin -->

    <section class="categories my-5">
    <div class="section-title">
    <h2>ប្រភេទទំនិញ</h2>
</div>
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel" >
                
                <?php
                    
                    while($row = mysqli_fetch_array($result)){
                
                ?>
                    
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/slide/<?=$row['slide_image'];?>" style="width:100%;height:300px;">
                            <h5><a href="#"><?=$row['slide_title'];?></a></h5>
                        </div>
                    </div>

                <?php
       
                    };

                ?>
                </div>
            </div>
       
        </div>
    </section>
    <!-- Categories Section End -->
