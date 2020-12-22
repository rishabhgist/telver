<?php include 'include/header.php'; ?>

<?php 
    $err = '';
    if (isset($_GET['id'])) {

        $id = $_GET['id'];

        $query = "SELECT * FROM post WHERE id= '$id'";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($result);

            /*Values*/

            $post_title = $row['post_title'];
            $post_url = $row['post_url'];
            $post_image_1 = $row['post_image_1'];
            $post_image_2 = $row['post_image_2'];
            $post_date = $row['post_date'];
            $post_tag = $row['post_tag'];


    }else{

        header('Location:index.php');
    }
/*Updating Post*/
if(isset($_POST['submit'])) {

        $id = $_GET['id'];
        $post_title = $_POST['post_title'];
        $post_url = $_POST['post_url'];
        $post_image_1 = $_POST['post_image1'];
        $post_image_2 = $_POST['post_image2'];
        $post_tag = $_POST['post_tag'];
        $post_date = $_POST['post_date'];

        $update_query = "UPDATE post SET post_title ='$post_title',post_url='$post_url',post_image_1='$post_image_1',post_image_2 ='$post_image_2',post_tag='$post_tag',post_date='$post_date' WHERE id = '$id'";
        $update_res = mysqli_query($con,$update_query);

        if ($update_res) {

            $err = "Saved Successfully".$con->error;        
        }else{

            $err = "Post not Saved";
        }
    }

 ?>

<div class="admin-page">
                        

    <p class="post-title"> Update post</p>
                    <?php echo $err ?>
                    <div class="contact-form-area">
                            <form method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="post_title" value="<?php echo $post_title ?>">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_url" value="<?php echo $post_url ?>">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_image1" value="<?php echo $post_image_1 ?>">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" name="post_image2" value="<?php echo $post_image_2 ?>">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_date" value="<?php echo $post_date ?>">
                                    </div>
                                      <div class="col-12">
                                        <input type="text" class="form-control" name="post_tag" value="<?php echo $post_tag ?>">
                                    </div>
                                
                                    <div class="col-12">
                                    <button class="btn newsbox-btn mt-30" name="submit">Update Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

        
    </div>


<?php include 'include/footer.php'; ?>