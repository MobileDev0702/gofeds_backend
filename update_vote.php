<?php
include 'connection.php';
date_default_timezone_set('Asia/Kolkata');
$response = array();

if(isset($_POST['id'])){
         $sql=mysqli_query($conn, "SELECT * FROM gf_forum_answers WHERE gf_id='".$_POST['id']."' ");
         
        $nmr = mysqli_num_rows($sql);
           
            $data=mysqli_fetch_array($sql);
            
            $query=mysqli_query ($conn, "update gf_forum_answers set vote='".$_POST['vote']."' where gf_id = '".$_POST['id']."' ");
                
            if($query){
                
                $query_forum = mysqli_query($conn, "SELECT * FROM gf_forum_answers where  gf_question_id='".$_POST['question_id']."' order by vote desc ");
                //$num_users=mysqli_num_rows($query);
	            while($data=mysqli_fetch_array($query_forum)){
	        
                    $query_user = mysqli_query($conn, "SELECT * FROM  gf_users where gf_id = '".$data['gf_user_id']."' ");
                    $data_user=mysqli_fetch_array($query_user);
                    
                
                $response[] = array(
                   "answer_id"=> $data['gf_id'],
                    "user_id"=> $data['gf_user_id'],
                    "vote"=> $data['vote'],
                    "user_name"=> $data_user['gf_fname'].' '.$data_user['gf_lname'], 
                    "username"=> $data_user['gf_username'],
                    "answer"=> $data['gf_answer']
                   );
                }
            
            }else{
                $response["success"]=false;
                $response["message"]="No Forum Answer Found";
            }
    }else{
        $response["success"]= false;
        $response["message"]="Require perameters are missing (id)";
    }
    if($nmr>=1){
        echo json_encode(array("success"=>true, "answers"=>$response));
        }else{
            echo json_encode($response);
        }   
   
?>    