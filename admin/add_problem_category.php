<?php 
session_start();
include("include/header.php");
include("include/sidebar.php");

include("include/connection.php"); 
if(isset($_POST['submit'])){
    
    $datetime = date("d M Y h:m A");

    /*$target_dir = "include/cat_images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imgname = basename( $_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     } else {}*/
    
    
    $query = mysqli_query($conn, "insert into bn_category set name='".$_POST['category']."', datetime='".$datetime."' ");
    
    if($query){
        echo '<script>alert("Category Added Successfully!");
        window.location.href="view_problem_categories.php"
        </script>';
    }else{
        
        
        echo '<script>alert("Error to Add Category.");
        window.location.href="add_problem_category.php"
        </script>';
    }
}    

?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Problem Category</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="" enctype="multipart/form-data">
                            
                            <div class="row">
                                <!--<div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Problem Category<span class="text-danger">*</span></label>
                                        <select name="category" class="form-control" required >
                                            <option value="">Select Problem Category</option>
                                            <option value="Health Problem">Health Problem</option>
                                            <option value="Food Problem">Food Problem</option>
                                            <option value="Water Problem">Water Problem</option>
                                            <option value="Milk Problem">Milk Problem</option>
                                            <option value="Cleaning Problem">Cleaning Problem</option>
                                            <option value="Problem of Problem">Problem of Problem</option>
                                            <option value="Groceries Problems">Groceries Problems</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Problem Category <span class="text-danger">*</span></label>
                                        <input name="category" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                            </div>
                            
                           
                            
                            <!--<div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Image <span class="text-danger">*</span></label>
                                        <input name="image" class="form-control" required type="file">
                                    </div>
                                </div>
                            </div>-->
                            
                            <div class="m-t-20 text-center">
                                <button name="submit" class="btn btn-primary submit-btn">Add Category</button>
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