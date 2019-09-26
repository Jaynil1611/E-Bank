<?php session_start();  

$servername = "localhost";
$username = "root";
$password = "";
$db="user";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
$uname = $_POST['username2'];
$ulogin = $_POST['email'];
$acc  = $_POST['account_type'];
$pass = $_POST['password2'];
$conpass = $_POST['confirm-password'];
if($pass==$conpass)
{

$query = "INSERT INTO users (User_name,Login_Id,User_password,Account_type)
 VALUES ('$uname', '$ulogin','$pass','$acc')";
$result = $conn->query($query);
if($result==TRUE){
	echo "Successfully";
}
else{
	echo "Incorrect";
}
Print '<script>alert("'.$uname.' Successfully Registered !");</script>';
Print '<script>window.location.assign("NewBank.php");</script>';
}
else
{
	Print '<script>alert("Incorrect Username or Password!");</script>';
	Print '<script>window.location.assign("NewBank.php");</script>';
}

?>