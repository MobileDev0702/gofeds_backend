<?php 
session_start();
include("include/header.php");
include("include/sidebar.php");

include("include/connection.php"); 

if(isset($_POST['submit'])){
    //print_r($_POST);die;
    $target_dir = "include/images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imgname = basename( $_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     } else {}
    
    $query = mysqli_query($conn, "update vaid_courses set name='".$_POST['name']."', description='".$_POST['description']."',image='".$imgname."' where id='".$_REQUEST['edit_id']."' ");
    
    if($query){
        echo '<script>alert("Course Updated Successfully!");
        window.location.href="view_courses.php"
        </script>';
    }else{
        echo '<script>alert("Error to Update Course.");
        </script>';
    }
} 

 $query_edit = mysqli_query($conn, "select * from vaid_courses where id='".$_REQUEST['edit_id']."' ");
    $edit_data = mysqli_fetch_array($query_edit); 
   
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Course</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Course Name <span class="text-danger">*</span></label>
                                        <input name="name" value="<?php echo $edit_data['name']; ?>" class="form-control" required type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input name="description" value="<?php echo $edit_data['description']; ?>" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
									<div class="form-group">
										<label>Image</label>
										<div class="profile-upload">
											<div class="upload-img">
												<img src="include/images/<?php echo $edit_data['image']; ?>">
											</div>
											<div class="upload-input">
												<input type="file" name="image" required class="form-control">
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button name="submit" class="btn btn-primary submit-btn">Update Course</button>
                            </div>
                        </form>
                    </div>
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
