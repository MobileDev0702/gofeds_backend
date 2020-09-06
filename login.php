<?php 
include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['device_id']) )
{
    
	$query = mysqli_query($conn, "SELECT * FROM gf_users where gf_username='".$_POST['username']."' and gf_password='".md5($_POST['password'])."' ");                 
	$pass = md5($_POST['password']);
	
    $num_users=mysqli_num_rows($query);
	$data=mysqli_fetch_array($query);
    
	$response=array();
	if($num_users==1)
	{
	    $query_update = mysqli_query($conn, "UPDATE gf_users set gf_device_id='".$_POST['device_id']."' where gf_id='".$data['gf_id']."' ");
	    
		$response["success"]=true;
		$response["message"]='Logged In Successfully';
		$response["id"] = $data['gf_id'];
		$response["username"] = $data['gf_username'];
		$response["firstname"] = $data['gf_fname'];
		$response["lastname"] = $data['gf_lname'];
		$response["email"] = $data['gf_email'];
		$response["rank"] = $data['gf_rank'];
		$response["agency"] = $data['gf_agency'];
		$response["current_port"] = $data['gf_current_port'];
		$response["desire_port"] = $data['gf_desire_port'];
		$response["token"] = $data['gf_token'];
		$response["ftoken"] = $data['gf_ftoken'];
		$response["device_id"] = $_POST['device_id'];
		
	}else
	{
		$response["success"]=false;
		$response["message"]="Email or Password does not Match.";
	}
}else
{
	$response["success"] = false;
    $response["message"] = "Required parameters (username, password or device_id) is missing!";
}
echo json_encode($response);
?>