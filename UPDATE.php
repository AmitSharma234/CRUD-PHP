<?php include 'connection.php';
echo $id=$_GET['id'];
$select="SELECT * FROM student WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
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
<div>
	<form action="" method="POST">
		Firstname:<input value="<?php echo $row['firstname'] ?>" 
		 type="text" name="firstname" placeholder="firstname"><br><br>
	
	Lastname:<input type="text" name="lastname" placeholder="lastname"  
	      value="<?php echo $row['lastname'] ?>"><br><br>
		
	Age:<input type="num" name="age" placeholder="age"
		  value="<?php echo $row['age'] ?>" ><br><br>
	
		<input type="submit" name="update_btn" value="update">
	
		<button><a href="view.php">Back</a></button>
	</form>
</div>
</html>
<?php
if (isset($_POST['update_btn'])) {
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$age=$_POST['age'];

$update="UPDATE student SET  firstname='$fname',lastname='$lname',age='$age'
      WHERE id='$id' ";

 $data=mysqli_query($con,$update);
 if ($data) {
 	?>
  <script type="text/javascript">
  	alert("Data Updated Successfully");
  	window.open("http://localhost/demo/view.php","_self");
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