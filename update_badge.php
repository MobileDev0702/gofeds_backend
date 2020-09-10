<?php 
include 'connection.php';

if (isset($_POST['id']))
{
    
	$query = mysqli_query($conn, "SELECT * FROM gf_users where gf_id = '".$_POST['id']."' ");                 
	
    $num_users=mysqli_num_rows($query);
	$data=mysqli_fetch_array($query);
    
	$response=array();
	if($num_users==1)
	{
	    if ($_POST['reset'] == false || $_POST['reset'] == 'false') {
	        $query_update = mysqli_query($conn, "UPDATE gf_users set gf_badge='".($data['gf_badge'] + 1)."' where gf_id='".$data['gf_id']."' ");
	        
    		$response["success"]=true;
    		$response["badgeCount"]=$data['gf_badge'] + 1;
	    } else {
	        $query_badge = mysqli_query($conn, "SELECT * FROM gf_users where gf_id = '".$_POST['id']."'");
	        $badge_data = mysqli_fetch_array($query_badge);
	        $response["badgeCount"]=$badge_data["gf_badge"];
	        $query_update = mysqli_query($conn, "UPDATE gf_users set gf_badge=0 where gf_id='".$data['gf_id']."' ");
	    
    		$response["success"]=true;
	    }
		
	}else
	{
		$response["success"]=false;
		$response["message"]='No User Found';
	}
} else
{
	$response["success"] = false;
    $response["message"] = "Required parameters (Id, Badge) is missing!";
}
echo json_encode($response);
?>