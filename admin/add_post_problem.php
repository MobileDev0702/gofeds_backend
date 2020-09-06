<?php
session_start();
include("include/header.php");
include("include/sidebar.php");
include("include/connection.php"); 

if(isset($_POST['post_submitp'])){
    
    $target_dir = "../prob_images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imgname = basename( $_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     } else {}
    
	$query = mysqli_query($conn, "insert into bn_post_problems set 
	image= '".$imgname."',
	soc_actv_id= '".$_POST['social_activist_id']."',
	title= '".$_POST['post_description']."',
	admin= 'admin',
	date= '".date('d M Y')."',
	time= '".date('h:M')."'
	");

	
	if($query){
		echo "<script>alert('Post Added Succussfull!');
		window.location.href='view_problems.php';
		</script>";
	}else{
		echo "<script>alert('Error to Add Post!');
		window.location.href='add_problem.php';
		</script>";
	}
}
?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Post Problem</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="" enctype="multipart/form-data">
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Social Activist<span class="text-danger">*</span></label>
                                         
                                        <select name="social_activist_id" class="form-control" required>
                                            <option value="">Select Social Activist</option>
									    <?php 
											$query_us = mysqli_query($conn, "select * from  bn_users where user_type='Social Activist' ");
											$nmrus = mysqli_num_rows($query_us);
											if($nmrus>0){
											while($users = mysqli_fetch_array($query_us)){
										?>
									    <option value="<?php echo $users['id']; ?>"><?php echo $users['name']; ?></option>
									    <?php }} ?>
									</select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Problem Description <span class="text-danger"></span></label>
                                        <input name="post_description" class="form-control" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Upload Image<span class="text-danger"></span></label>
                                        <input name="image" class="form-control" type="file">
                                    </div>
                                </div>
                                
                             </div>   
                        <div class="m-t-20 text-center">
                            <button name="post_submitp" class="btn btn-primary submit-btn">Post</button>
                        </div>
                    </form>
                    
                </div>
            </div>
			
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
  

    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>