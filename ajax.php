<?php
include('database.php');
if($_POST['id']){
$id=$_POST['id'];
if($id==1){
}else{
	$sql = mysqli_query($con,"SELECT name FROM `faculty` WHERE blockname='$id'");
	while($row = mysqli_fetch_array($sql)){
		echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
	}
	}
}
?>