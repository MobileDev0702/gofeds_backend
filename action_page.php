<?php 
include 'connection.php';

if (isset($_POST['email']) && isset($_POST['oldpwd']) && isset($_POST['newpwd']) && isset($_POST['confirmpwd']))
{
    $oldpwd = md5($_POST['oldpwd']);
	$query = mysqli_query($conn, "SELECT * FROM gf_users where gf_email='".$_POST['email']."' ");                 
	
    $num_users=mysqli_num_rows($query);
	$data=mysqli_fetch_array($query);
    
	$response=array();
	if($num_users==1)
	{
		$pass = $data['gf_password'];
		if ($oldpwd == $pass) {
			if ($_POST['newpwd'] == $_POST['confirmpwd']) {
				$newpwd = md5($_POST['newpwd']);
				$id = $data['gf_id'];
				$query_update = mysqli_query($conn, "UPDATE gf_users set gf_password='".$newpwd."' where gf_id='".$id."' ");
				echo '<script language="javascript">';
		        echo 'alert("Updated Successfully!")';
		        echo '</script>';
			} else {
				echo '<script language="javascript">';
				echo 'alert("New Password and Confirm Password is different!")';
				echo '</script>';
			}
		} else {
			echo '<script language="javascript">';
			echo 'alert("Current Password is wrong!")';
			echo '</script>';
		}
	}else
	{
		echo '<script language="javascript">';
		echo 'alert("Your Id is not valid!")';
		echo '</script>';
	}
} else
{
	echo '<script language="javascript">';
	echo 'alert("Required parameters (Old Password, New Password, Confirm Password) is missing!")';
	echo '</script>';
}
?>