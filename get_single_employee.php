<?php

include 'config.php';
$con = dbConnect();
$response = array();

$id = $_GET['id'];

// if($_POST['REQUEST_METHOD'] == 'GET'){

	$query = "select * from employee where id ='$id'";
	$result = mysqli_query($con,$query);
	$num_of_result = mysqli_num_rows($result);

	if($num_of_result>0){
		while ($row = mysqli_fetch_assoc($result)) {

		$response['data'][] = $row;
	}
	$response['status'] = "200";
	$response['value'] = "success";
	$response['total'] = $num_of_result;
	}else{
		$response['status'] = "205";
	$response['value'] = "failed";
	$response['message'] = "Employee Not Found!";
	}
// }
echo json_encode($response);
mysqli_close($con);

  ?>