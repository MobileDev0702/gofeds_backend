<?php
include 'connection.php';
$response = array();

    if(isset($_POST['user_id']) && isset($_POST['question'])){
     
		$row=mysqli_query($conn, "insert into gf_forum_questions set gf_user_id='".$_POST['user_id']."', gf_question='".$_POST['question']."' ");
	
		if($row){		
		    $id = $conn->insert_id;
		    $response["message"] = "Question Added Successfully!"; 
			$response["success"] = true;
			$response["id"] = $id;
			$response["user_id"] = $_POST['user_id'];
			$response["question"] = $_POST['question'];
        }else{
            $response["success"] = false;
       		$response["message"] = "Error to Add Question!";
        }
    }else{
        
    	$response["success"] = false;
        $response["message"] = "Required parameters ( user_id, question ) is missing!";
    }
    
  echo json_encode($response);
?>