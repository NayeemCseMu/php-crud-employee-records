<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<title>Enter Employee</title>
</head>
<body>

	
  

<div class="col-lg-6 m-auto card-header">

	<br>

	 <div class="card-header bg-dark">
	 	<br>
 <h3 class="text-white text-center">  Enter Employee Info </h3>
 <br>
 </div><br>

	<form action="employee_entry.php"  method="post" enctype="multipart/form-data">
		<label for="exampleFormControlInput1" class="form-label">Employee Name</label>
  <input type="text" class="form-control" name="name" >
  <br>

		<label for="exampleFormControlInput1" class="form-label">Phone Number</label>
  <input type="text" class="form-control" name="phone" >
  <br>


		<label for="exampleFormControlInput1" class="form-label">Address</label>
  <input type="text" class="form-control" name="address" >
  <br>


		<label for="exampleFormControlInput1" class="form-label">Employee Designation</label>
		  <input type="text" class="form-control" name="designation" >

	<!-- <select class="form-select form-select-sm" aria-label=".form-select-lg example">
	  <option selected>Select Designation</option>
	  <option value="1">Flutter Developer</option>
	  <option value="2">PHP Developer</option>
	  <option value="3">MERN Stack Developer</option>
</select> -->
  <br>

  <label for="exampleFormControlInput1" class="form-label">Employee Photo</label>
  <input type="file" class="form-control" name="image" placeholder="">
  <br><br>

  <button class="btn btn-success text-center" type="submit" name="submit"> Submit</button>

  
	</form>
<br>
  
</div>

</body>
</html>

