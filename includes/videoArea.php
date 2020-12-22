 <!-- ##### Video Area Start ##### -->
    <section class="video-area bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/10.jpg);">
        <!-- Video Slideshow -->
        <div class="video-slideshow py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Video Slides -->
                        <div class="video-slides owl-carousel">

                            <?php 

                                $post_video = "SELECT * FROM post ORDER BY id DESC LIMIT 6";
                                $res_vid = mysqli_query($con,$post_video);

                            ?>
                            <?php 

                                while ($row = mysqli_fetch_assoc($res_vid)) {
                                    
                                    $post_title = $row['post_title'];
                                    $post_date = $row['post_date'];
                                    $post_image = $row['post_image_1'];
                                    $post_url = $row['post_url'];
                                    $post_tag = $row['post_tag'];

                             ?>
                            <!-- Single News Area -->
                            <div class="single-blog-post style-3">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="#"><img src="post/<?php echo $post_tag ?>/uploads/<?php echo $post_image?>" alt=""></a>
                                    <a href="post/<?php echo $post_tag?>/<?php echo $post_url?>/index.php" class="video-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $post_date ?></span>
                                    <p class="post-title"><?php echo $post_title ?></p>
                                    <a href="#" class="post-author">By Rishabh Gist</a>
                                </div>
                            </div>

                        <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Video Area End ##### -->
