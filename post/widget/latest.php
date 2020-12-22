<?php include 'db.php';
    
    $trend = "SELECT * FROM post ORDER BY id DESC LIMIT 5";
    $result = mysqli_query($con,$trend);

?>
<div class="single-widget-area news-widget mb-30">
                            <h4>Latest News</h4>

                            <!-- Loop Starts Here -->

                            <?php 

                             while ($row = mysqli_fetch_assoc($result)) {
                        
                                $post_title = $row['post_title'];
                                $post_date = $row['post_date'];
                                $post_image = $row['post_image_2'];
                                $post_url = $row['post_url'];
                                $post_tag = $row['post_tag'];


                             ?>

                            <!-- Single News Area -->
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="../../<?php echo $post_tag ?>/uploads/<?php echo $post_image?>" alt=""></a>
                                </div>
                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $post_date; ?></span>
                                    <a href="../../<?php echo $post_tag?>/<?php echo $post_url?>" target="_blank" class="post-title"><?php echo $post_title; ?></a>
                                </div>
                            </div>

                        <?php } ?>

                        </div>