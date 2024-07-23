<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>crud demo</title>
	<style>
	input[type=text] {
  border: 2px solid red;
  border-radius: 4px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=num] {
  border: 2px solid red;
  border-radius: 4px;
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=submit]:hover {
  background-color: #45a049;
}
button:hover{
   background-color: #45a049;
}
	</style>

</head>
<body>
	<div>
		<form action="" method="POST">
			Firstname:<input type="text" name="firstname" placeholder="firstname"><br><br>
			Lastname:<input type="text" name="lastname" placeholder="lastname"><br><br>
			Age:<input type="num" name="age" placeholder="age"><br><br>
			<input type="submit" name="save_btn" value="save ">
			<button><a href="view.php">view</a></button>
		</form>
	</div>
<?php
if (isset($_POST['save_btn'])) {
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$age=$_POST['age'];

$query="INSERT INTO student(firstname,lastname,age) VALUES('$fname','$lname',$age)";

 $data=mysqli_query($con,$query);
 if ($data) {
 	?>
  <script type="text/javascript">
  	alert("Data Saved Successfully");
  </script>
 	<?php
 }
 else
 {
 	?>
 	 <script type="text/javascript">
  	alert("Please try again");
  </script>
 	<?php
 }
}
?>
</body>
</html>