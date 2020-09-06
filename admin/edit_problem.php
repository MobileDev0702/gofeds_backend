<?php 
session_start();
include("include/header.php");
include("include/sidebar.php");

include("include/connection.php"); 

if(isset($_POST['submit'])){
 
    $query = mysqli_query($conn, "update bn_problems set status='".$_POST['status']."' where problem_id='".$_REQUEST['edit_id']."' ");
   
    if($query){
        echo '<script>alert("Problem Status Updated Successfully!");
        window.location.href="edit_problem.php?edit_id="'.$_REQUEST['edit_id'].'"
        </script>';
    }else{
        echo '<script>alert("Error to Update Problem Status!");
        window.location.href="edit_problem.php?edit_id="'.$_REQUEST['edit_id'].'"
        </script>';
    }
} 

  $query_edit = mysqli_query($conn, "select * from bn_problems where problem_id='".$_REQUEST['edit_id']."' ");
  $edit_data = mysqli_fetch_array($query_edit);  
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Update Problem Status</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Problem Status <span class="text-danger">*</span></label>
                                        <select name="status" class="form-control" required>
                                            
                                            <?php if($edit_data['status'] == 'Active'){ ?>
                                                <option value="Active" selected>Active</option>
                                                <option value="Resolved">Resolved</option>
                                            <?php }elseif($edit_data['status'] == 'Resolved'){ ?>
                                                <option value="Resolved" selected>Resolved</option> 
                                                <option value="Active">Active</option>
                                            <?php }else{ ?>
                                                <option value="">Select Problem Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Resolved">Resolved</option>
                                            <?php } ?>
                                        </select>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button name="submit" class="btn btn-primary submit-btn">Update Status</button>
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
