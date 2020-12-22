<?php 
        

$post_1 = "SELECT * FROM post WHERE id = '9'";
$r_post_1 = mysqli_query($con,$post_1);
    $p_1 = mysqli_fetch_assoc($r_post_1);

        $p_1_title = $p_1['post_title'];
        $p_1_url = $p_1['post_url'];
        $p_1_tag = $p_1['post_tag'];
        $p_1_date = $p_1['post_date'];
        $p_1_image = $p_1['post_image_1'];


 ?>
 <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->
                
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="post/<?php echo $p_1_tag?>/uploads/<?php echo $p_1_image ?>" alt="" class="blog-post-square"></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $p_1_date; ?></span>
                                    <a href="post/<?php echo $p_1_tag?>/<?php echo $p_1_url?>" class="post-title"><?php echo $p_1_title ?></a>
                                </div>
                            </div>
                        </div>
<!-- Post 2 -->
                        <?php 

                        $post_2 = "SELECT * FROM post WHERE id = '8'";
                        $r_post_2 = mysqli_query($con,$post_2);
                            $p_2 = mysqli_fetch_assoc($r_post_2);

                                $p_2_title = $p_2['post_title'];
                                $p_2_url = $p_2['post_url'];
                                $p_2_tag = $p_2['post_tag'];
                                $p_2_date = $p_2['post_date'];
                                $p_2_image = $p_2['post_image_1'];

                         ?>
                        
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="post/<?php echo $p_2_tag?>/uploads/<?php echo $p_2_image ?>" alt="" class="blog-post-flat"></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $p_2_date; ?></span>
                                    <a href="post/<?php echo $p_2_tag?>/<?php echo $p_2_url?>" class="post-title"><?php echo $p_2_title ?></a>
                                </div>
                            </div>
                            <!-- Single Blog Post Area -->
                            <!-- post 3 -->
                            <?php 

                            $post_3 = "SELECT * FROM post WHERE id = '7'";
                            $r_post_3 = mysqli_query($con,$post_3);
                                $p_3 = mysqli_fetch_assoc($r_post_3);

                                    $p_3_title = $p_3['post_title'];
                                    $p_3_url = $p_3['post_url'];
                                    $p_3_tag = $p_3['post_tag'];
                                    $p_3_date = $p_3['post_date'];
                                    $p_3_image = $p_3['post_image_1'];

                             ?>

                            <!-- php end -->
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="post/<?php echo $p_3_tag?>/uploads/<?php echo $p_3_image ?>" alt="" class="blog-post-flat"></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $p_3_date; ?></span>
                                    <a href="post/<?php echo $p_3_tag?>/<?php echo $p_3_url?>" class="post-title"><?php echo $p_3_title ?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                   
                </div>
            </div>

            <!-- Single Slide 2-->
            <!-- php 4-->
                <?php 
                    $post_4 = "SELECT * FROM post WHERE id = '6'";
                    $r_post_4 = mysqli_query($con,$post_4);
                        $p_4 = mysqli_fetch_assoc($r_post_4);

                            $p_4_title = $p_4['post_title'];
                            $p_4_url = $p_4['post_url'];
                            $p_4_tag = $p_4['post_tag'];
                            $p_4_date = $p_4['post_date'];
                            $p_4_image = $p_4['post_image_1'];
                     ?>

            <!-- end  -->
             <div class="single-slide">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Single Blog Post Area -->
                
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="100ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="post/<?php echo $p_4_tag?>/uploads/<?php echo $p_4_image ?>" alt="" class="blog-post-square"></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $p_4_date; ?></span>
                                    <a href="post/<?php echo $p_4_tag?>/<?php echo $p_4_url?>" class="post-title"><?php echo $p_4_title ?></a>
                                </div>
                            </div>
                        </div>
<!-- Post 2 -->
                        <?php 

                        $post_5 = "SELECT * FROM post WHERE id = '5'";
                        $r_post_5 = mysqli_query($con,$post_5);
                            $p_5 = mysqli_fetch_assoc($r_post_5);

                                $p_5_title = $p_5['post_title'];
                                $p_5_url = $p_5['post_url'];
                                $p_5_tag = $p_5['post_tag'];
                                $p_5_date = $p_5['post_date'];
                                $p_5_image = $p_5['post_image_1'];

                         ?>
                        
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post Area -->
                            <div class="single-blog-post style-1 mb-30" data-animation="fadeInUpBig" data-delay="300ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="post/<?php echo $p_5_tag?>/uploads/<?php echo $p_5_image ?>" alt="" class="blog-post-flat"></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $p_5_date; ?></span>
                                    <a href="post/<?php echo $p_5_tag?>/<?php echo $p_5_url?>" class="post-title"><?php echo $p_5_title ?></a>
                                </div>
                            </div>
                            <!-- Single Blog Post Area -->
                            <!-- post 3 -->
                            <?php 

                            $post_3 = "SELECT * FROM post WHERE id = '2'";
                            $r_post_3 = mysqli_query($con,$post_3);
                                $p_3 = mysqli_fetch_assoc($r_post_3);

                                    $p_3_title = $p_3['post_title'];
                                    $p_3_url = $p_3['post_url'];
                                    $p_3_tag = $p_3['post_tag'];
                                    $p_3_date = $p_3['post_date'];
                                    $p_3_image = $p_3['post_image_1'];

                             ?>

                            <!-- php end -->
                            <div class="single-blog-post style-1" data-animation="fadeInUpBig" data-delay="500ms" data-duration="1000ms">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail bg-overlay">
                                    <a href="#"><img src="post/<?php echo $p_3_tag?>/uploads/<?php echo $p_3_image ?>" alt="" class="blog-post-flat"></a>
                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo $p_3_date; ?></span>
                                    <a href="post/<?php echo $p_3_tag?>/<?php echo $p_3_url?>" class="post-title"><?php echo $p_3_title ?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                   
                </div>
            </div>


        </div>
    </div>
    <!-- ##### Hero Area End ##### -->