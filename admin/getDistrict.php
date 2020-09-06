<?php 
include("include/connection.php"); 

if (!empty($_POST["state_id"])) {
    
    $query = mysqli_query($conn,"SELECT * FROM districts WHERE state_id = '" . $_POST["state_id"] . "'");
?>
	
<option value disabled selected>Select District*</option>
<?php
    while($district = mysqli_fetch_array($query)){
?>
<option value="<?php echo $district["id"]; ?>"><?php echo $district["name"]; ?></option>
<?php
    }
}
?>