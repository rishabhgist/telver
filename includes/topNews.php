<?php 
    
    $fetch_all = "SELECT * FROM post ORDER BY id DESC LIMIT 6";
    $res = mysqli_query($con,$fetch_all);


 ?>
<!-- ##### Top News Area Start ##### -->
    <div class="top-news-area section-padding-100">
        <div class="container">
            <div class="row">

                    <?php 
                    $post_date = '';
                    $post_title = '';
                    $post_image = '';
                    $post_url  ='';
                    $post_tag  ='';

                    while ($row = mysqli_fetch_assoc($res)) {
                        
                        $post_title = $row['post_title'];
                        $post_date = $row['post_date'];
                        $post_image = $row['post_image_2'];
                        $post_url = $row['post_url'];
                        $post_tag = $row['post_tag'];


                     ?>
                <!-- Single News Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-blog-post style-2 mb-5">
                        <!-- Blog Thumbnail -->
                        <div class="blog-thumbnail">
                            <a href="#"><img src="post/<?php echo $post_tag?>/uploads/<?php echo $post_image?>" alt=""></a>
                        </div>

                        <!-- Blog Content -->
                        <div class="blog-content">
                            <span class="post-date"><?php echo $post_date; ?></span>
                            <a href="post/<?php echo $post_tag?>/<?php echo $post_url?>" class="post-title"><?php echo $post_title; ?></a>
                            <a href="#" class="post-author">By Rishabh Gist</a>
                        </div>
                    </div>
                </div>

            <?php } ?>

                <div class="col-12">
                    <div class="load-more-button text-center">
                        <a href="#" class="btn newsbox-btn">Load More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Top News Area End ##### -->