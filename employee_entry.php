<?php include 'db/config.php';$con = dbConnect();$response = array();$target_dir = "images/";$name = $_POST['name'];$phone = $_POST['phone'];$address = $_POST['address'];$designation = $_POST['designation'];$fileName = basename($_FILES["image"]["name"]);$target_file = $target_dir . $fileName;$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));$query_existing_user = "select * from employee where phone = '$phone'";$result_user = mysqli_query($con, $query_existing_user);$num_rows_user = mysqli_num_rows($result_user);    if ($num_rows_user > 0) {        $response["status_code"] = 201;        $response["value"] = "exists";        $response["message"] = "User already Exists!";    }else{    	if(isset($_FILES['image'])){	$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');	if(in_array($imageFileType, $allowTypes)){		if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){			$query_user = " INSERT INTO `employee`(`name`, `phone`,`address`, `designation`, `image`) VALUES ( '$name', '$phone','$address','$designation', '$fileName' )"; 		if(mysqli_query($con,$query_user)){ 			 $response["status_code"] = 200;                $response["value"] = "success";                $response["message"] = "Employee Inserted Successfully"; 		}		}else {            $response["status_code"] = 201;            $response["value"] = "failed";            $response["message"] = "Image error";        }	}else {        $response["status_code"] = 205;        $response["value"] = "failed";        $response["message"] = "Image not supported";    }}else {    $response["status_code"] = 404;    $response["value"] = "failed";    $response["message"] = "Image Not Found!";}    }echo json_encode($response);header('location:index.php');mysqli_close($con);?>