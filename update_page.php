<?php 
include 'db/config.php';
$con = dbConnect();
$response = array();
$id = $_GET['id'];

if(isset($_GET['id'])){
$id = $_GET['id'];
$q = "select * from employee where id='$id'";
$result = mysqli_query($con, $q);
$num_of_result = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$phone = $row['phone'];
$address = $row['address'];
$designation = $row['designation'];
$image = $row['image'];

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Update Info</title>
</head>
<body>
  

<div class="col-lg-6 m-auto card-header">

	<br>

	 <div class="card-header bg-dark">
	 	<br>
 <h3 class="text-white text-center">  Update Employee Info </h3>
 <br>
 </div><br>

	<form action="update.php"  method="post" enctype="multipart/form-data">
		<label for="exampleFormControlInput1" class="form-label">Employee Name</label>
  <input type="text" class="form-control" name="name", value= <?php echo $name;?>>
  <br>

		<label for="exampleFormControlInput1" class="form-label">Phone Number</label>
  <input type="text" class="form-control" name="phone" value=<?php echo $phone;?>>
  <br>


		<label for="exampleFormControlInput1" class="form-label">Address</label>
  <input type="text" class="form-control" name="address" value=<?php echo $address;?>>
  <br>


		<label for="exampleFormControlInput1" class="form-label">Employee Designation</label>
		  <input type="text" class="form-control" name="designation" value=<?php echo $designation;?>>

		  <input type="hidden" class="form-control" name="updateid" value=<?php echo $id; ?>>

  <br>

  <label for="exampleFormControlInput1" class="form-label">Employee Photo</label>
  <input type="file" class="form-control" name="image" value=<?php echo $image;?>>
  <br><br>

  <button class="btn btn-primary text-center action='update.php'" type="submit" name="update">Update</button>

    


  </div>


  
	</form>
<br>
  
</div>

</body>
</html>


