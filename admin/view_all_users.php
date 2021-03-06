<?php //echo $_GET();
session_start();
include("include/header.php");
include("include/sidebar.php");

include("include/connection.php"); 

    $query = mysqli_query($conn, "select * from gf_users");
   
    $rows = mysqli_num_rows($query); 
    
    if(isset($_REQUEST['del_id'])){
         $query_del = mysqli_query($conn, "delete from gf_users where gf_id='".$_REQUEST['del_id']."' ");
          if($query_del){
        echo '<script>alert("Users Deleted Successfully!");
        window.location.href="view_all_users.php"
        </script>';
        }else{
            echo '<script>alert("Error to Delete User.");
            window.location.href="view_all_users.php"
            </script>';
        }
    }
   
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Users</h4>
                    </div>
                    <!--<div class="col-sm-8 col-9 text-right m-b-20">-->
                    <!--    <a href="add_problem_category.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Problem Category</a>-->
                    <!--</div>-->
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
									    <th>Sr. No.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Image</th>
										<th>Rank</th>
										<th>Agency</th>
										<th>Current Port</th>
										<th>Desire Port</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
								    <?php 
    								    if($rows>=1){
    								        $sr = 1;
                                        while($data = mysqli_fetch_array($query)){
                                    ?>
									<tr>
									    <td><?php echo $sr; ?></td>
										<td><?php echo $data['gf_fname']." ".$data['gf_lname']; ?></td>
										<td><?php echo $data['gf_email']; ?></td>
										<td><?php echo $data['gf_image'] ? '<img src="https://novos.in/munish/gofeeds/images/'.$data['gf_image'].'" width="20%" height="auto">' : ''; ?></td>
										<td><?php echo $data['gf_rank'];?></td>
										<td><?php echo $data['gf_agency'];?></td>
										<td><?php echo $data['gf_current_port'];?></td>
										<td><?php echo $data['gf_desire_port'];?></td>
										<td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<!--<a class="dropdown-item" href="view_all_users.php.php?edit_id=<?php echo $data['gf_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>-->
													<a class="dropdown-item" href="view_all_users.php?del_id=<?php echo $data['gf_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>
									<?php $sr++; } } ?>
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
						<h3>Are you sure want to delete this Category?</h3>
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