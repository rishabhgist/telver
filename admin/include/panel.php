<?php 



  $query = "SELECT * FROM post";
  $result = mysqli_query($con,$query);
  $val = mysqli_num_rows($result);

  if ($result) {
    
  }else{

    echo $con->error;
  }


 ?>




<!-- Admin Panel -->

<div class="admin-page">
                        

    <p class="post-title">All Data</p>
    <div></div>
    <div class="table-post">
        <div class="post-count">
            <div class="row" style="margin: auto;">
                <div class="col-3">
                    <div class="count-box-one">
                        <p class="title-12">Total Post</p>
                        <div class="row" style="margin: auto;">
                        <img src="../img/core-img/im1.png" class="img-count">
                        <p class="title-12"><?php echo $val ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="count-box-one">
                        <p class="title-12">Total Active</p>
                        <div class="row" style="margin: auto;">
                        <img src="../img/core-img/im2.png" class="img-count">
                        <p class="title-12">60</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="count-box-one">
                        <p class="title-12">Total Draft</p>
                        <div class="row" style="margin: auto;">
                        <img src="../img/core-img/im3.png" class="img-count">
                        <p class="title-12">14</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="count-box-one">
                        <p class="title-12">Total Replies</p>
                        <div class="row" style="margin: auto;">
                        <img src="../img/core-img/im4.png" class="img-count">
                        <p class="title-12">20</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

  <!-- Admin Panel End -->
<div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- Single -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-parent="#accordion" data-toggle="collapse" href="#collapseOne">All Active Posts
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseOne" class="accordion-content collapse">
                                <p>
                            <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col">Id</th>
                                      <th scope="col">Title</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Modify</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) {
                                            
                                            $id = $row['id'];
                                            $post_title = $row['post_title'];
                                            $post_date = $row['post_date'];
                      

                                    ?>
                                    <tr>
                                      <th scope="row"><?php echo $id ?></th>
                                      <td><?php echo $post_title ?></td>
                                      <td><?php echo $post_date ?></td>
                                      <td><a href="update.php?id=<?php echo $id?>">Update</a></td>
                                    </tr>
                                  <?php } ?>
                                  </tbody>
                                </table>
                                </p>
                            </div>
                        </div>
          

            </div>