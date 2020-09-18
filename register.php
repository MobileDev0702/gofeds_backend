<?php
include 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$response = array();

    if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['rank']) && isset($_POST['agency']) && isset($_POST['office']) && isset($_POST['current_port']) && isset($_POST['desire_port']) && isset($_POST['ftoken']) && isset($_POST['device_id']) ){
    
    $token = rand(111111111111111, 999999999999999);
    
        $a = mysqli_query($conn, "select * from gf_users where gf_username = '".$_POST['username']."' OR gf_email = '".$_POST['email']."' ");
        $b = mysqli_num_rows($a);
        if($b==1){
            $response["success"] = false;
           	$response["message"] = "username or Email Already Register!";
        }else{
            
        	$password = md5($_POST['password']);
    		//$date = date("d-m-y h:m:i");
    		
    		$row=mysqli_query($conn, "insert into gf_users set gf_username='".$_POST['username']."', gf_fname='".$_POST['firstname']."', gf_lname='".$_POST['lastname']."',  gf_email='".$_POST['email']."', gf_password='".$password."', gf_rank='".$_POST['rank']."', gf_agency='".$_POST['agency']."', gf_office='".$_POST['office']."', gf_current_port='".$_POST['current_port']."', gf_desire_port='".$_POST['desire_port']."', gf_ftoken='".$_POST['ftoken']."', gf_token='".$token."', gf_device_id='".$_POST['device_id']."', gf_image='', gf_badge=0");
    		
    		if ($row)
    		{		
    		    $id = $conn->insert_id;
    		    $response["message"] = "User Registered Successfully!";
    			$response["success"] = true;
    			$response["id"] = $id;
    			$response["username"] = $_POST['username'];
    			$response["firstname"] = $_POST['firstname'];
    			$response["lastname"] = $_POST['lastname'];
    			$response["email"] = $_POST['email'];
    			$response["rank"] = $_POST['rank'];
    			$response["agency"] = $_POST['agency'];
    			$response["office"] = $_POST['office'];
    			$response["current_port"] = $_POST['current_port'];
    			$response["desire_port"] = $_POST['desire_port'];
    			$response["ftoken"] = $_POST['ftoken'];
    			$response["token"] = $token;
    			$response["device_id"] = $_POST['device_id'];
    			$response["image"] = '';
            }
    		else
    		{
                $response["success"] = false;
           		$response["message"] = "Error to User Register!";
            }
        }    
    }
    else
    {
    	$response["success"] = false;
        $response["message"] = "Required parameters ( firstname, username, lastname, email, password, rank, agency, office, current_port, desire_port, device_id or ftoken ) is missing!";
    }
    
  echo json_encode($response);
?>