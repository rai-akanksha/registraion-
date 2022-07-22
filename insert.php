<?php
$First Name = $_POST['First Name']
$Lastt Name = $_POST['Last Name']
$email = $_POST['email']
$password = $_POST['password']
$confirm password = $_POST['confirm password']
$gender = $_POST['gender']
$dob = $_POST['dob']
if (!empty($First Name) || !empty($Last Name) || !empty($email) || !empty($password) || !empty($confirm password) || !empty($gender) || !empty($dob)) {
	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "register";
	$conn = new mysqli {($host, $dbusername, $dbpassword, $dbname);
	if (mysql_connect_error()) {
		die('Connect Error('. mysqli_connect_errno().')'.mysql_connect_error());

	}else{
		$SELECT = "SELECT email From registeration form Where email = ? Limit 1";
		$SELECT = "INSERT Into registeration form (First Name, Last Name, email, password, confirm password, gender, dob) values(?, ?, ?, ?, ?, ?)"
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$atmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		if ($rnum ==0) {
			$stmt->close();
			$stmt = $conn->prepare($INSERT);$stmt->bind_param("sssssi", $First Name, $Last Name, $email, $password, $confirm password, $gender, $dob);
		$stmt->execute();
		echo "New record inserted successfully";
		}else{
			echo "Someone already register using this email";
		}
		$stmt->close();
		$conn->close();
	}

}else {
	echob "All field are required";
	die();
}
?>