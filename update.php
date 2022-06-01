<?php 
include 'db/config.php';
$con = dbConnect();
$response = array();


if(isset($_POST['updateid'])){

$id = $_POST['updateid'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$designation = $_POST['designation'];
// $image = $_POST['image'];

echo "name: '$name' | id: '$id'";

	$query = "UPDATE employee SET `id`='$id',`name`='$name',`phone`='$phone',`address`='$address',`designation`='$designation' WHERE id='$id'";

	$result = mysqli_query($con,$query);

	if($result){
		$response['status']="201";
		$response['value']="failed";
		$response['message']="success";
	}else{
		$response['status']="205";
		$response['value']="failed";
		$response['message']="Update failed!";
	}

}else{
	$response['status']="305";
		$response['value']="failed";
		$response['message']="No field data found!";
}

echo json_encode($response);
header('location:index.php');
mysqli_close($con);
?>