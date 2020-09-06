<?php
session_start();
include("include/header.php");
include("include/sidebar.php");
include("include/connection.php"); 

if(isset($_POST['submit'])){
	$query = mysqli_query($conn, "insert into bn_problems set 
	name= '".$_POST['name']."',
	mobile= '".$_POST['mobile']."',
	state= '".$_POST['state']."',
	district= '".$_POST['district']."',
	block= '".$_POST['block']."',
	pincode= '".$_POST['pincode']."',
	address= '".$_POST['address']."',
	problem_category= '".$_POST['problem_category']."',
	problem_description= '".$_POST['problem_description']."',
	status= 'Active',
	datetime= '".date('d-m-Y h:i A')."'
	");
	if($query){
		echo "<script>alert('Problem Added Succussfull!');
		window.location.href='view_problems.php';
		</script>";
	}else{
		echo "<script>alert('Error to Add Problem!');
		window.location.href='add_problem.php';
		</script>";
	}
}
?>

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Problem</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post" action="" enctype="multipart/form-data">
                            
                            <div class="row">
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Name <span class="text-danger">*</span></label>
                                        <input name="name" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> mobile <span class="text-danger">*</span></label>
                                        <input name="mobile" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>State<span class="text-danger">*</span></label>
                                         
                                        <select name="state" class="form-control" onChange="getDistrict(this.value);" required>
                                            <option value="">Select State</option>
									    <?php 
											$query = mysqli_query($conn, "select * from states");
											$nmr = mysqli_num_rows($query);
											if($nmr>0){
											while($states = mysqli_fetch_array($query)){
										?>
									    <option value="<?php echo $states['id']; ?>"><?php echo $states['name']; ?></option>
									    <?php }} ?>
									</select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> District <span class="text-danger">*</span></label>
                                        <select name="district" class="form-control" required id="district-list">
											<option value="">Select District*</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Block <span class="text-danger"></span></label>
                                        <input name="block" class="form-control" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Pincode <span class="text-danger"></span></label>
                                        <input name="pincode" class="form-control" type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Address <span class="text-danger"></span></label>
                                        <input name="address" class="form-control" type="text">
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> email <span class="text-danger">*</span></label>
                                        <input name="email" class="form-control" required type="text">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> country <span class="text-danger">*</span></label>
                                        <select name="country" class="form-control" required> 
											<option value="1">INDIA</option>
										</select>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Problem Category <span class="text-danger"></span></label>
                                        <select name="problem_category" class="form-control" required>
                                            <option value="">Select Problem Category</option>
									    <?php 
											$queryc = mysqli_query($conn, "select * from bn_category");
											$nmrc = mysqli_num_rows($queryc);
											if($nmrc>0){
											while($cat = mysqli_fetch_array($queryc)){
										?>
									    <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
									    <?php }} ?>
									</select>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Problem Description <span class="text-danger"></span></label>
                                        <input name="problem_description" class="form-control" type="text">
                                    </div>
                                </div>
                             </div>   
                        <div class="m-t-20 text-center">
                            <button name="submit" class="btn btn-primary submit-btn">Add Problem</button>
                        </div>
                    </form>
                    
                </div>
            </div>
			
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    
<script>                            
function getDistrict(val){
	$.ajax({
		type: "POST",
		url: "getDistrict.php",
		data:'state_id='+val,
		beforeSend: function() {
			$("#district-list").addClass("loader");
		},
		success: function(data){
			$("#district-list").html(data);
			$("#district-list").removeClass("loader");
		}
	});
}
</script>

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