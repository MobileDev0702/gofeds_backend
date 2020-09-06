<?php 
include 'connection.php';
$response=array();

    	$query = mysqli_query($conn, "SELECT * FROM gf_forum_answers");                 
    
        $num_rows=mysqli_num_rows($query);
    	
        	if($num_rows>=1){
        	    
        	    while($data=mysqli_fetch_array($query)){
        	        
        	        
        	        $q_que = mysqli_query($conn, "SELECT * FROM gf_forum_questions where gf_id='".$data['gf_question_id']."'");                 
                    $d_que=mysqli_fetch_array($q_que);
                    
                    $query_user = mysqli_query($conn, "SELECT * FROM  gf_users where gf_id = '".$data['gf_user_id']."' ");
        	        $data_user=mysqli_fetch_array($query_user);
        	        
        	    $response[] = array(
        	       "answer_id"=> $data['gf_id'],
        	        "user_id"=> $data['gf_user_id'],
        	        "username"=> $data_user['gf_username'],
        	        "user_name"=> $data_user['gf_fname'].' '.$data_user['gf_lname'],
        	        "question"=> $d_que['gf_question'],
        	        "answer"=> $data['gf_answer']
        	       );
            	}
        	
        	}else{
        		$response["success"]=false;
        		$response["message"]="No Questions Found";
        		
        	}
        
if($num_rows>=1){
echo json_encode(array("success"=>true,"data"=>$response));
}else{
    echo json_encode($response);
}
?>