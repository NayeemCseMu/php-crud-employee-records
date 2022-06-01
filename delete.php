<?php

include 'db/config.php';
$con = dbConnect();
$response = array();

if(isset($_GET['id'])){
	$id = $_GET['id'];

// if($_POST['REQUEST_METHOD'] == 'GET'){

	$query = "select * from employee where id ='$id'";
	$result = mysqli_query($con,$query);
	$num_of_result = mysqli_num_rows($result);

	if($num_of_result>0){
		$delete_query = "DELETE FROM `employee` WHERE id = '$id'";
		$delete_query_result = mysqli_query($con,$delete_query);
		if($delete_query_result){
			$response['status'] = '200';
			$response['value'] = 'success';
			$response['message'] = 'Deleted Successfully';
		} 
	}else{

			$response['status'] = '201';
			$response['value'] = 'failed';
			$response['message'] = 'Something wrong!';
	}
// }
}
echo json_encode($response);
header('location:index.php');
mysqli_close($con);

  ?>