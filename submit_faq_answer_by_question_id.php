<?php
include 'connection.php';
$response = array();

    if(isset($_POST['question_id']) && isset($_POST['user_id']) && isset($_POST['answer'])){
     
    	/*$query = mysqli_query($conn, "SELECT * FROM gf_forum_answers where gf_question_id='".$_POST['question_id']."' and gf_user_id='".$_POST['user_id']."' ");                 
        $num_rows=mysqli_num_rows($query);
    	if($num_rows==1){
    	    $response["success"] = true;
            $response["message"] = "Answer already submitted for this Question.";
    	}else{*/
    	    
        	$row=mysqli_query($conn, "insert into gf_forum_answers set gf_question_id='".$_POST['question_id']."', gf_user_id='".$_POST['user_id']."', gf_answer='".$_POST['answer']."', vote='".$_POST['vote']."' ");
        	
    		if($row){
    		    $id = $conn->insert_id;
    		    $response["message"] = "Answer Submitted Successfully!"; 
    			$response["success"] = true;
    			$response["id"] = $id;
    			$response["user_id"] = $_POST['user_id'];
    			$response["question_id"] = $_POST['question_id'];
				$response["answer"] = $_POST['answer'];
				$response["vote"] = $_POST['vote'];
            }else{
                $response["success"] = false;
           		$response["message"] = "Error to Submit Answer!";
            }
        //}  
    }else{
        
    	$response["success"] = false;
        $response["message"] = "Required parameters ( question_id, user_id, answer ) is missing!";
    }
    
  echo json_encode($response);
?>