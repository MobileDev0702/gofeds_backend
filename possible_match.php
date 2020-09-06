<?php 
include 'connection.php';
$response=array();

if (isset($_POST['user_id'])){
    
    $q_user = mysqli_query($conn, "SELECT * FROM gf_users where gf_id='".$_POST['user_id']."' ");
    $nm_usr=mysqli_num_rows($q_user);
    if($nm_usr==1){
        
    $usdat=mysqli_fetch_array($q_user);
	
    	$query = mysqli_query($conn, "SELECT * FROM gf_users where gf_agency='".$usdat['gf_agency']."' and gf_office='".$usdat['gf_office']."' and  gf_id!='".$_POST['user_id']."' and
    	gf_desire_port LIKE '%".$usdat['gf_current_port']."%'
    	");                 
    
        $num_users=mysqli_num_rows($query);
    	while($data=mysqli_fetch_array($query)){
    	
        	if($num_users>=1){ 
        	    
        	    if($data['gf_image']==''){
        	        $img = "";
        	    }else{
        	        $img = 'https://novos.in/munish/gofeeds/images/'.$data['gf_image'];
        	    }
        	    
        	   $response[] = array(
        	       "user_id"=> $data['gf_id'],
        	       "username"=> $data['gf_username'],
        	       "name"=> $data['gf_fname']." ".$data['gf_lname'],
        	       "email"=> $data['gf_email'],
        	       "image"=> $img,
        	       "rank"=> $data['gf_rank'],
        	       "agency"=> $data['gf_agency'],
        	       "office"=> $data['gf_office'],
        	       "current_port"=> $data['gf_current_port'],
        	       "desire_port"=> $data['gf_desire_port'],
        	       "token"=> $data['gf_token'],
        	       "ftoken"=> $data['gf_ftoken'],
        	       "device_id"=> $data['gf_device_id']
        	       ); 
        	       
        	}else{
        		$response["success"]=false;
        		$response["message"]="User not matched with desired Port and Agency.";
        		echo json_encode($response);
        	}
        	
        }
        echo json_encode(array("success"=>true,"data"=>$response));
    }else{
    	$response["success"] = false;
        $response["message"] = "User not Found.";
        echo json_encode($response);
    }	
    	
}else{
	$response["success"] = false;
    $response["message"] = "Required parameters ( user_id ) is missing!";
    echo json_encode($response);
}

?>