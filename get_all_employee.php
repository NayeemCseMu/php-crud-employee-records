<?php

include 'config.php';
$con = dbConnect();
$response = array();

// if($_POST['REQUEST_METHOD'] == 'GET'){

	$query = "select * from employee";
	$result = mysqli_query($con,$query);
	$num_of_result = mysqli_num_rows($result);

	if($num_of_result>0){
		while ($row = mysqli_fetch_assoc($result)) {

		$response['data'][] = $row;
	}
	$response['status'] = "200";
	$response['value'] = "success";
	$response['total'] = $num_of_result;
	}
// }
echo json_encode($response);
mysqli_close($con);

  ?>