<?php include 'db.php';

    $trend = "SELECT * FROM post ORDER BY id DESC LIMIT 5";
    $result = mysqli_query($con,$trend);

 ?>
 <!-- ##### Breaking News Area Start ##### -->
        <section class="breaking-news-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Breaking News Widget -->
                        <div class="breaking-news-ticker d-flex flex-wrap align-items-center">
                            <div class="title">
                                <h6>Trending</h6>
                            </div>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                <?php 
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        
                                        $post_title = $row['post_title'];
                                        $post_tag  = $row['post_tag'];
                                        $post_url = $row['post_url'];
                                 ?>
                                <li><a href="../../<?php echo $post_tag?>/<?php echo $post_url?>" tagret="_blank"><?php echo $post_title; ?></a></li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ##### Breaking News Area End ##### -->
