<?php 
include 'connection.php';

if (isset($_POST['user_id'])){
    
	$query = mysqli_query($conn, "SELECT * FROM gf_users where gf_id='".$_POST['user_id']."' ");                 
	
    $num_users=mysqli_num_rows($query);
	$data=mysqli_fetch_array($query);
    
	$response=array();
	if($num_users==1)
	{
		$response["success"]=true;
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
		
	}else
	{
		$response["success"]=false;
		$response["message"]="User not Found.";
	}
}else
{
	$response["success"] = false;
    $response["message"] = "Required parameters ( user_id ) is missing!";
}
echo json_encode($response);
?>