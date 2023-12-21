<?php
include("config.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validation</title>
</head>
<body>
	<form action="" method="POST">
		FirstName:<input type="text" name="f_name">
		<br>
		LastName: <input type="text" name="l_name">
		<br>
		Course:
		<select id="course" name = "course" required>
      	<option value="">Select</option>
      	<option value="MCA">MCA</option>
      	<option value="MSC">MSC</option>
      	<option value="BTECH">BTECH</option>
    	</select>
		<br>
		Gender:
		<input type="radio" name="gender" value="Male" required> Male
		<input type="radio" name="gender" value="Female" required> Female
		<input type="radio" name="gender" value="Other" required> Other
		<br>
		MobileNumber:<input type="text" name="m_no">
		<br>
		Email:<input type="text" name="email">
		<br>
		<input type="submit" name="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$FirstName = $_POST['f_name'];
		$LastName = $_POST['l_name'];
		$Course = $_POST['course'];
		$Gender = $_POST['gender'];
		$MobileNumber = $_POST['m_no'];
		$Email = $_POST['email'];

		$result = mysqli_query($mysqli, "INSERT into users values('$FirstName','$LastName','$Course','$Gender','$MobileNumber','$Email')");
		if($result){
			echo"Success";
		}
		else{
			echo "Failed";
		}
	}
	?>
</body>
</html>