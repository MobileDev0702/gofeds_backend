<?php 
session_start();
include("include/header.php");
include("include/sidebar.php");

include("include/connection.php"); 

if(isset($_POST['submit'])){
    
    $query = mysqli_query($conn, "update sub_admin set name='".$_POST['name']."', state='".$_POST['state']."', username='".$_POST['username']."', password='".$_POST['password']."' where id='".$_REQUEST['edit_id']."' ");
    
    if($query){
        echo '<script>alert("Subadmin Updated Successfully!");
        window.location.href="view_subadmins.php"
        </script>';
    }else{
        echo '<script>alert("Error to Update Subadmin!");
        window.location.href="edit_view_subadmin.php?edit_id="'.$_REQUEST['edit_id'].'"
        </script>';
    }
} 

 $query_edit = mysqli_query($conn, "select * from sub_admin where id='".$_REQUEST['edit_id']."' ");
    $edit_data = mysqli_fetch_array($query_edit); 
   
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Subadmin</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Name <span class="text-danger">*</span></label>
                                        <input name="name" value="<?php echo $edit_data['name']; ?>" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>State<span class="text-danger">*</span></label>
                                         
                                        <select name="state" class="form-control" required>
                                            
                                            <option value="">Select State</option>
									    <?php 
											$query = mysqli_query($conn, "select * from states");
											$nmr = mysqli_num_rows($query);
											if($nmr>0){
											while($states = mysqli_fetch_array($query)){
										?>
										<?php if($edit_data['state']==$states['id']){ ?>
									    <option selected value="<?php echo $states['id']; ?>"><?php echo $states['name']; ?></option>
									    <?php }else{ ?>
									    <option value="<?php echo $states['id']; ?>"><?php echo $states['name']; ?></option>
									    <?php } } } ?>
									</select>
                                        
                                        
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input name="username" value="<?php echo $edit_data['username']; ?>" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input name="password" value="<?php echo $edit_data['password']; ?>" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button name="submit" class="btn btn-primary submit-btn">Update Subadmin</button>
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
