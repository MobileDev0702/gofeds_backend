<?php 
include 'connection.php';
$response=array();

if(isset($_POST['question_id'])){
    
    $q_que = mysqli_query($conn, "SELECT * FROM gf_forum_questions where gf_id='".$_POST['question_id']."'");                 
    $d_que=mysqli_fetch_array($q_que);
    $question= $d_que['gf_question'];
    
$q_user_id = $d_que['gf_user_id'];
$q_query_user = mysqli_query($conn, "SELECT * FROM  gf_users where gf_id = '".$q_user_id."' ");
$q_data_user=mysqli_fetch_array($q_query_user);
$user_name_que = $q_data_user['gf_fname'].' '.$q_data_user['gf_lname'];
        	    

	$query = mysqli_query($conn, "SELECT * FROM gf_forum_answers where gf_question_id='".$_POST['question_id']."' order by vote desc ");                 

    $num_rows=mysqli_num_rows($query); 
	
	if($num_rows>=1){
	    
	    while($data=mysqli_fetch_array($query)){
	        
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
		$response["message"]="No Questions Found";
	}
        
        
}else{
    		$response["success"]=false;
    		$response["message"]="Required parameters ( question_id ) missing";
    	}   
    	
if($num_rows>=1){
        echo json_encode(array("success"=>true,"question"=>$question,"user_name_que"=>$user_name_que,"answers"=>$response));
        }else{
            echo json_encode($response);
        }    	
?>