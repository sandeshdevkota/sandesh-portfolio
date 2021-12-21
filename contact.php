<!DOCTYPE html>
<html>
<head>
	<title>Form record</title>
</head>
<style>
</style>
<body>


<iframe src="sound/sound12.mp3" allow="autoplay" style="display:none" id="iframeAudio">
</iframe> 
	<!---//start menu bar----->
	<div class="container">
	     
      <a href="index.html">Click Here to go back to portfolio</a>
      
    </div>
</body>
</html>
<?php
$name =filter_input(INPUT_POST, 'name');
$email =filter_input(INPUT_POST, 'email');
$phone =filter_input(INPUT_POST, 'phone');
$message =filter_input(INPUT_POST, 'message');

if (!empty($email)) {
	$host = "localhost";
	$dbusername ="root";
	$dbpassword ="";
	$dbname ="contact";

	//create connection
	$conn =new mysqli($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_error().')'. mysqli_connect_error());
}
else{
	$sql = "INSERT INTO contact (name, email, phone,  message) values ('$name', '$email', '$phone', '$message')";
	if ($conn->query($sql)){
		echo "New record is inserted successfully";
	}
	else{
		echo "Error". $sql ."<br>". $conn->error;
	}
	$conn->close();
}
}
else{
	echo "Your Data Is Not Recorded";
	die();
}
?>