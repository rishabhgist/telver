<?php include 'db.php';
    
    $trend = "SELECT * FROM post ORDER BY id DESC LIMIT 2";
    $result = mysqli_query($con,$trend);

 ?>


<!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <!-- loop -->
                             <?php 

                             while ($row = mysqli_fetch_assoc($result)) {
                        
                                $post_title = $row['post_title'];
                                $post_date = $row['post_date'];
                                $post_image = $row['post_image_2'];
                                $post_url = $row['post_url'];
                                $post_tag = $row['post_tag'];


                             ?>
                            <!-- Single News Area -->
                            <div class="single-blog-post style-2 mb-5">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="../../<?php echo $post_tag ?>/uploads/<?php echo $post_image?>" alt=""></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $post_date; ?></span>
                                    <a href="../../<?php echo $post_tag?>/<?php echo $post_url?>" target="_blank" class="post-title"><?php echo $post_title; ?></a>
                                    <a href="#" class="post-author">By Rishabh Gist</a>
                                </div>
                            </div>
                            
                        <?php } ?>

                        
                        </div>