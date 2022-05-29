<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>View Employee Info</title>
</head>
<body>

	<div class="col-lg-10 m-auto card-header">

		<br>

<button class="btn btn-primary text-white"><a href="employee.php" class="text-light text-decoration-none">Add Employee</a></button>
		<br><br>

	 <div class="card-header bg-dark">
	 	<br>
		 <h3 class="text-white text-center"> Employee Data Table </h3>
		 <br>
		 </div><br>

		 <table class="table" align="center">
  <thead>
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Designation</th>
      <th scope="col">Image</th>
      <th scope="col">Operation</th>


    </tr>
  </thead>

  <tbody>

  	<?php 

  	include 'db/config.php';
	$con = dbConnect();
  	$query = "select * from employee";
	$result = mysqli_query($con,$query);
	$num_of_result = mysqli_num_rows($result);

	if($num_of_result>0){
		while ($row = mysqli_fetch_assoc($result)) {

			$id = $row['id'];
			$name = $row['name'];
			$phone = $row['phone'];
			$address = $row['address'];
			$designation = $row['designation'];
			$image = $row['image'];

		echo  '<tr>
				<th>'.$id.'</th>
				<td>'.$name.'</td>
				<td>'.$phone.'</td>
				<td>'.$address.'</td>
				<td>'.$designation.'</td>

				<td><img src="images/'.$image.'" class="img-fluid " alt="Image" style="width: 50px; height:50px"></td>
				<td>
				 <button class="btn btn-primary text-white"><a href="text.php" class="text-light text-decoration-none">Update</a></button>
				 <button class="btn btn-danger text-white"><a href="delete.php? id='.$id.'"  class="text-light text-decoration-none">Delete</a></button>
				 </td>
				 
		
				 </tr>';
		
	}
}
	 ?>

  </tbody>
</table>
		 
		
	</div>

</body>
</html>
