<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// checking empty fields
	if(empty($name) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: login/index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<style>	
	body{
		font-size: 1.5rem;
    font-weight: 400;
    line-height: 1.5;
	margin-top: 30px;
	background-color:  #e6e6e6;
	
	}
	</style>
</head>

<body>
	<!--<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>-->

	<div class="container">
		<div class="row">

				<div class="col-sm">
						 
				 </div>
			
		 
	 
			<div class="col-sm">
			<h1>Modifer Utilisateur</h1>
				<form class="form-horizontal" action="edit.php" method="post" >
					<div class="control-group">
					  <label class="control-label">Name</label>
					  <div class="controls">
					  <input type="text" name="name" value="<?php echo $name;?>">
						   
					  </div>
					</div>
					<div class="control-group">
						<label class="control-label">Age</label>
						<div class="controls">
						<input type="text" name="age" value="<?php echo $age;?>">
							 
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label">Email</label>
						<div class="controls">
						<input type="text" name="email" value="<?php echo $email;?>">
							 
						</div>
					  </div>
					  <br>
					  <div class="form-actions">
					  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
						<input type="submit" class="btn btn-success" name="update" value="Update">
						<a class="btn btn-primary" href="login/index.php">Back</a>
					  </div>
				 
				 
					 
				  </form>
				</div>
				  <div class="col-sm">
					 
					  </div>
		</div>
	</div>
</body>
</html>
