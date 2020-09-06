<?php 
session_start();
include("include/header.php");
include("include/sidebar.php");

include("include/connection.php"); 

if(isset($_POST['submit'])){
    
    $query = mysqli_query($conn, "update bn_category set name='".$_POST['name']."' where id='".$_REQUEST['edit_id']."' ");
    
    if($query){
        echo '<script>alert("Problem Category Updated Successfully!");
        window.location.href="view_problem_categories.php"
        </script>';
    }else{
        echo '<script>alert("Error to Update Problem Category!");
        window.location.href="edit_problem_category.php?edit_id="'.$_REQUEST['edit_id'].'"
        </script>';
    }
} 

 $query_edit = mysqli_query($conn, "select * from bn_category where id='".$_REQUEST['edit_id']."' ");
    $edit_data = mysqli_fetch_array($query_edit); 
   
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Problem Category</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Category Name <span class="text-danger">*</span></label>
                                        <input name="name" value="<?php echo $edit_data['name']; ?>" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button name="submit" class="btn btn-primary submit-btn">Update Category</button>
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
