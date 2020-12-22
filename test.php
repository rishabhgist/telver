<?php 
include 'includes/db.php';

	$q = "SELECT * FROM post ORDER BY id DESC LIMIT 6";
	$r = mysqli_query($con,$q);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
 </head>
 <body>
 	<div class="container">
 	
	<?php 

	$max = 0;
 	while (($row = mysqli_fetch_assoc($r)) && ($max < 5)) {

 		
 		$post_title= $row['post_title'];


 	 ?>		
 	<div class="row">
 	 		<div class="col-6">
 			<br><p><?php echo $post_title?></p><br>
 			</div>
 			<div class="col-6">
 				<br><p><?php echo $post_title; ?></p><br>
 			</div>
 	</div>	
 	<?php }?>
 	</div>
 </body>
 </html>