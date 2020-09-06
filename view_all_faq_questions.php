<?php 
include 'connection.php';
$response=array();

    	$query = mysqli_query($conn, "SELECT * FROM gf_forum_questions order by gf_id desc");                 
    
        $num_rows=mysqli_num_rows($query);
    	while($data=mysqli_fetch_array($query)){
    	    
    	    $q_user_id = $data['gf_user_id'];
            $q_query_user = mysqli_query($conn, "SELECT * FROM  gf_users where gf_id = '".$q_user_id."' ");
            $q_data_user=mysqli_fetch_array($q_query_user);
            $user_name_que = $q_data_user['gf_fname'].' '.$q_data_user['gf_lname'];
    	
        	if($num_rows>=1){
        	    
        	    $query_ans = mysqli_query($conn, "SELECT * FROM gf_forum_answers where gf_question_id = '".$data['gf_id']."' order by gf_id desc limit 1");
        	    $data_ans=mysqli_fetch_array($query_ans);
        	    
        	    if($data_ans['gf_answer']==null){
        	           $answ = '';
        	       }else{
        	           $answ = $data_ans['gf_answer'];
        	       }
        	       
        	    $query_user = mysqli_query($conn, "SELECT * FROM  gf_users where gf_id = '".$data['gf_user_id']."' ");
        	    $data_user=mysqli_fetch_array($query_user);
        	       
        	   $response[] = array(
        	       "question_id"=> $data['gf_id'],
        	       "user_id"=> $data['gf_user_id'],
        	       "username"=> $data_user['gf_username'],
        	        "user_name"=> $data_user['gf_fname'].' '.$data_user['gf_lname'],
        	        "que_user_name"=> $user_name_que,
        	        "question"=> $data['gf_question'],
        	        "answer"=> $answ
        	       ); 
        	}else{
        		$response["success"]=false;
        		$response["message"]="No Questions Found";
        		
        	}
        }
   	
if($num_rows>=1){
echo json_encode(array("success"=>true,"data"=>$response));
}else{
    echo json_encode($response);
}
?>