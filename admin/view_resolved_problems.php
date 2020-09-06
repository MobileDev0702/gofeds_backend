<?php 
session_start();
include("include/header.php");
include("include/sidebar.php");

include("include/connection.php"); 
    $query = mysqli_query($conn, "select * from bn_problems where status='Resolved' ");
    $rows = mysqli_num_rows($query); 
    
    if($_REQUEST['del_id']){
         $query_del = mysqli_query($conn, "delete from bn_problems where problem_id='".$_REQUEST['del_id']."' ");
          if($query_del){
        echo '<script>alert("Problem Deleted Successfully!");
        window.location.href="view_resolved_problems.php"
        </script>';
        }else{
            echo '<script>alert("Error to Delete Problem.");
            window.location.href="view_resolved_problems.php"
            </script>';
        }
    }
   
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myState").on("change", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
.col-md-3.st {
    float: left;
}
.col-md-3.key {
    float: left;
}    
</style>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">All Resolved Problems List</h4>
                    </div>
                    <!--<div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="add_payment.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add User</a>
                    </div>-->
                </div>
				<div class="row">
					<div class="col-md-12">
					    
					    <div class="col-md-12">
    						    <div class="col-md-3 st">
            				        <select id="myState" class="form-control">
                				        <option Value="">Filter By State</option>
                				        <?php 
    						        	$querys = mysqli_query($conn, "select * from states");
        						        while($statess = mysqli_fetch_array($querys)){
            							?>
                				        <option value="<?php echo $statess['name']; ?>"><?php echo $statess['name']; ?></option>
                				        <?php } ?>
            			            </select>
    			                </div>
        			            <div class="col-md-3 key">
        			            <input type="text" class="form-control" id="myInput" placeholder="Search by key">
    			                </div>
			                </div>
					    
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
									    <th>Sr. No.</th>
									    <th>Complainant</th>
										<th>Problem category</th>
										<th>description</th>
										<th>Name</th>
										<th>Address</th>
										<th>State</th>
										<th>District</th>
										<th>Block</th>
										<th>Pincode</th>
										<th>Mobile</th>
										<th>Datetime</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody id="myTable">
								    <?php 
    								    if($rows>=1){
    								         $a=1;
                                        while($data = mysqli_fetch_array($query)){
                                            
                                            $query_user = mysqli_query($conn, "select name from bn_users where id='".$data['user_id']."' ");
                        					$data_user = mysqli_fetch_array($query_user);
                        					
                        					$query_state = mysqli_query($conn, "select name from states where id='".$data['state']."' ");
                        					$data_state = mysqli_fetch_array($query_state);
                        					
                        					$query_dist = mysqli_query($conn, "select name from districts where id='".$data['district']."' ");
                        					$data_dist = mysqli_fetch_array($query_dist);
                    					
                                    ?>
									<tr>
									    <td><?php echo $a; ?></td>
									    <td><?php echo $data_user['name']; ?></td>
										<td><?php echo $data['problem_category']; ?></td>
										<td><?php echo $data['problem_description']; ?></td>
										<td><?php echo $data['name']; ?></td>
										<td><?php echo $data['address']; ?></td>
										<td><?php echo $data_state['name']; ?></td>
										<td><?php echo $data_dist['name']; ?></td>
										 <td><?php echo $data['block']; ?></td>
										<td><?php echo $data['pincode']; ?></td>
										<td><?php echo $data['mobile']; ?></td>
										<td><?php echo $data['datetime']; ?></td>
										<td><?php echo $data['status']; ?></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit_problem.php?edit_id=<?php echo $data['problem_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Update Status</a>
													<a class="dropdown-item" href="view_comments_on_problem.php?problem_id=<?php echo $data['problem_id']; ?>"><i class="fa fa-eye m-r-5"></i> View Comments</a>
													<a class="dropdown-item" href="view_resolved_problems.php?del_id=<?php echo $data['problem_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<?php $a++; } } ?>
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
            
        </div>
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
					    <form method="post" action="">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this User?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button name="delete" type="submit" class="btn btn-danger">Delete</button>
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>