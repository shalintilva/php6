<?php

$con = mysqli_connect("localhost","root","","school");

$id =$_GET['id'];

$del=mysqli_query($con,"DELETE FROM `student` WHERE id='$id'");


if($del){
	echo "<script>window.location.href='home.php'</script>";

}else{
	echo "fail";
}

?>