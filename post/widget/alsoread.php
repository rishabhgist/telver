<?php  include 'db.php';
    

    $trend = "SELECT * FROM post ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($con,$trend);

 ?>


<!-- Also read Section Start -->

                        <h5 class="mb-30">Also Read</h5>

                        <?php 

                             while ($row = mysqli_fetch_assoc($result)) {
                        
                                $post_title = $row['post_title'];
                                $post_date = $row['post_date'];
                                $post_image = $row['post_image_2'];
                                $post_url = $row['post_url'];
                                $post_tag = $row['post_tag'];


                           ?>

                        <p><a href="../../<?php echo $post_tag?>/<?php echo $post_url?>" target="_blank"><?php echo substr($post_title,0,40)."...." ?></a></p>

                    <?php } ?>
                        

<!-- Also read Section Ends -->