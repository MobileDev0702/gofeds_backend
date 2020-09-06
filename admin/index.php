<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php 
session_start();
include("include/connection.php"); 
if(isset($_POST['submit'])){
    
    $query = mysqli_query($conn, "select * from admin where username='".$_POST['username']."' and password='".$_POST['password']."' ");
    $rows = mysqli_num_rows($query);

    if($rows==1){
        $data = mysqli_fetch_array($query);
        $_SESSION['admin_id'] = $data['id'];
        $_SESSION['admin_username'] = $data['username'];
        echo '<script>alert("Login Successfull!");
        window.location.href="dashboard.php"
        </script>';
    }else{
        echo '<script>alert("Error to Login");
        window.location.href="index.php"
        </script>';
    }
}    
?>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Being Natural</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
			     <h2><center>Login as Admin</center></h2>
			    <div style="text-align: center;"><img src="https://beingnatural.org/assets/front/images/web_logo.png" style="margin-bottom: 8px;" height="100" width="180"> <span style="font-size: 30px;color: goldenrod; padding:10px;"></span></div>
				<div class="account-box">
                    <form action="" method="post" class="form-signin">
						
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" required autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name=
                            "password" required class="form-control">
                        </div>
                        <!--<div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>-->
                        <div class="form-group text-center">
                            <button type="submit" name="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <!--<div class="text-center register-link">
                            Don’t have an account? <a href="register.html">Register Now</a>+
                        </div>-->
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>