<?php 
include 'include/header.php'; 
include 'include/db.php'; 
?>

<?php 

    $err = '';
    if (isset($_POST['submit'])) {

        $con = mysqli_connect('fdb24.awardspace.net','3412790_blog','telver123','3412790_blog');
        $post_title = $_POST['post_title'];
        $post_url = $_POST['post_url'];
        $post_image_1 = $_POST['post_image1'];
        $post_image_2 = $_POST['post_image2'];
        $post_tag = $_POST['post_tag'];
        $post_date = $_POST['post_date'];

        $add_query = "INSERT INTO post (post_title,post_url,post_image_1,post_image_2,post_tag,post_date) VALUES ('$post_title','$post_url','$post_image_1','$post_image_2','$post_tag','$post_date')";
        $add_res = mysqli_query($con,$add_query);

        if ($add_res) {

            $err = "Saved Successfully".$con->error;        
        }else{

            $err = "Post not Saved";
        }
    }

?>

    
    <div class="admin-page">
                        

    <p class="post-title">Add a post</p>

                    <?php echo $err; ?>
                    <div class="contact-form-area">
                            <form method="post" action="add.php">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="post_title" placeholder="Post Title">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_url" placeholder="Post Url">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_image1" placeholder="Post Image">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="post_image2" placeholder="Post Image">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_date" placeholder="Post Date">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_tag" placeholder="Post Tag">
                                    </div>
                                
                                    <div class="col-12">
                                    <button class="btn newsbox-btn mt-30" name="submit">Save Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>   
    </div>


<?php include 'include/footer.php'; ?>