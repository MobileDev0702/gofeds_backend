<?php 
session_start();
include("include/header.php");
include("include/sidebar.php");
include("include/connection.php");
?>


<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
p.right {
    float: right;
}
</style>



<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12 col-12">
                <h4 class="page-title">Problem Comments</h4>
            </div>
        </div>
    </div>



<?php
$query_comm=mysqli_query($conn, "SELECT * FROM bn_problem_comments WHERE problem_id='".$_REQUEST['problem_id']."' order by comment_id asc");                               
while($datacom = mysqli_fetch_array($query_comm)){
    
    $query_user=mysqli_query($conn, "SELECT * FROM bn_users WHERE id='".$datacom["user_id"]."' ");                               
    $datau = mysqli_fetch_array($query_user);
    
    if($datau['user_type']=='Complainant'){
?>

<div class="container">
  <img src="../assets/front/images/user.png" alt="Avatar" style="width:100%;">
  <p><?php echo $datau["name"]; ?> (<?php echo $datau["user_type"]; ?>)</p>
  <p><?php echo $datacom["comment"]; ?></p>
  <span class="time-right"><?php echo $datau["datetime"]; ?></span>
</div>


<?php }else if($datau['user_type']=='Social Activist'){ ?>


<div class="container darker">
  <img src="../assets/front/images/user2.png" alt="Avatar" class="right" style="width:100%;">
  <p class="right"><?php echo $datau["name"]; ?> (<?php echo $datau["user_type"]; ?>)</p><br>
  <p><?php echo $datacom["comment"]; ?></p>
  <span class="time-left"><?php echo $datau["datetime"]; ?></span>
</div>

<?php }else{} } ?>


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