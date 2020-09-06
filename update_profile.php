<?php
include 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$response = array();

if(isset($_POST['id'])){
         $sql=mysqli_query($conn, "SELECT * FROM gf_users WHERE gf_id='".$_POST['id']."' ");
         
        $nmr = mysqli_num_rows($sql);
        
            if($nmr==1){
                
            	$data=mysqli_fetch_array($sql);
            	
            
                if(isset($_FILES['image'])){
                    
                   // $img = $_FILES['image'];
                
                    // if(strlen($img) > 0){
                         
                        $target_dir = "images/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        $imgname = basename($_FILES["image"]["name"]);
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            
                             $query=mysqli_query ($conn, "update gf_users set gf_image='".$imgname."' where gf_id = '".$_POST['id']."' ");
                             
                         }
                         
                        
                    /*}else{
                        
                        $query=mysqli_query ($conn, "update gf_users set gf_image='".$data['gf_image']."' where gf_id = '".$_POST['id']."' ");
                        
                    }*/
                }else{
                    $imgname = "";
                }
                
                
                
                
                
                
                
                
            	if(strlen($_POST['firstname']) > 0){
            	    $query=mysqli_query ($conn, "update gf_users set gf_fname='".$_POST['firstname']."' where gf_id = '".$_POST['id']."' ");
                }else{
                    $query=mysqli_query ($conn, "update gf_users set gf_fname='".$data['gf_fname']."' where gf_id = '".$_POST['id']."' ");
                }
                 
                 
                 if(strlen($_POST['lastname']) > 0){
            	    $query=mysqli_query ($conn, "update gf_users set gf_lname='".$_POST['lastname']."' where gf_id = '".$_POST['id']."' ");
                }else{
                    $query=mysqli_query ($conn, "update gf_users set gf_lname='".$data['gf_lname']."' where gf_id = '".$_POST['id']."' ");
                }
                
                if(strlen($_POST['rank']) > 0){
            	    $query=mysqli_query ($conn, "update gf_users set gf_rank='".$_POST['rank']."' where gf_id = '".$_POST['id']."' ");
                }else{
                    $query=mysqli_query ($conn, "update gf_users set gf_rank='".$data['gf_rank']."' where gf_id = '".$_POST['id']."' ");
                }
                
                if(strlen($_POST['agency']) > 0){
            	    $query=mysqli_query ($conn, "update gf_users set gf_agency='".$_POST['agency']."' where gf_id = '".$_POST['id']."' ");
                }else{
                    $query=mysqli_query ($conn, "update gf_users set gf_agency='".$data['gf_agency']."' where gf_id = '".$_POST['id']."' ");
                }
                
                if(strlen($_POST['current_port']) > 0){
            	    $query=mysqli_query ($conn, "update gf_users set gf_current_port='".$_POST['current_port']."' where gf_id = '".$_POST['id']."' ");
                }else{
                    $query=mysqli_query ($conn, "update gf_users set gf_current_port='".$data['gf_current_port']."' where gf_id = '".$_POST['id']."' ");
                }
                
                if(strlen($_POST['desire_port']) > 0){
            	    $query=mysqli_query ($conn, "update gf_users set gf_desire_port='".$_POST['desire_port']."' where gf_id = '".$_POST['id']."' ");
                }else{
                    $query=mysqli_query ($conn, "update gf_users set gf_desire_port='".$data['gf_desire_port']."' where gf_id = '".$_POST['id']."' ");
                }

                if(strlen($_POST['office']) > 0){
            	    $query=mysqli_query ($conn, "update gf_users set gf_office='".$_POST['office']."' where gf_id = '".$_POST['id']."' ");
                }else{
                    $query=mysqli_query ($conn, "update gf_users set gf_office='".$data['gf_office']."' where gf_id = '".$_POST['id']."' ");
                }
                
            if($query){
                
                $query = mysqli_query($conn, "SELECT * FROM gf_users where  gf_id='".$_POST['id']."' ");
                //$num_users=mysqli_num_rows($query);
	            $data=mysqli_fetch_array($query);
	
                $response[]=array(
                    'id'=>$data['gf_id'],
                    'username'=>$data['gf_username'],
    			    'fname'=>$data['gf_fname'],
    			    'lname'=>$data['gf_lname'],
    			    'rank'=>$data['gf_rank'],
                    'agency'=>$data['gf_agency'],
                    'office'=>$data['gf_office'],
    			    'current_port'=>$data['gf_current_port'],
    			    'desire_port'=>$data['gf_desire_port'],
    			    'image' => 'https://novos.in/munish/gofeeds/images/'.$imgname
    			    );
    			    echo json_encode(array("success"=>true, "message"=>"User Profile Updated Successfully!", "userdata"=>$response)); 
            }else{
                $response["success"]= false;
                $response["message"]= "Error to Update User Profile.";
                echo json_encode($response);
            }
                
        }else{
                $response["success"]= false;
                $response["message"]= "No User Found.";
                echo json_encode($response);
        }    
    }else{
        $response["success"]= false;
        $response["message"]="Require perameters are missing (id)";
        echo json_encode($response);
    }
   
?>    