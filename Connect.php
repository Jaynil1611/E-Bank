<?php session_start(); 

$servername = "localhost";
$username = "root";
$password = "";
$db1="user_info";

// Create connection
$conn1 = mysqli_connect($servername, $username, $password,$db1);
// Check connection
if (!$conn1) {
   die("Connection failed: " . mysqli_connect_error());
}

echo "<br>";
$loginid=$_POST['username1'];
$pass=$_POST['password1'];

$pattern1="/gmail/";
$pattern2="/hotmail/";
$pattern3="/yahoo/";

$comp1=preg_match($pattern1,$loginid);
$comp2=preg_match($pattern2,$loginid);
$comp3=preg_match($pattern3,$loginid);

if($comp1==1)			//Gmail
{
	$q1="SELECT * FROM gmail_credentials WHERE Login_Id='$loginid' and User_password='$pass'";
	$result1=$conn1->query($q1);
	$check_id="";
	$check_pass="";
	$check_name="";

	if($result1->num_rows > 0){
		while($row = $result1->fetch_assoc())
		{
			$check_id=$row['Login_Id'];
			$check_pass=$row['User_password'];
			$check_name="Current_user";
		}
		if($check_id==$loginid)
		{
			if($check_pass==$pass)
			{
				$_SESSION['user']=$check_name;
				header("Location:home.php");
			}
			else
			{
				print('<script>alert("Incorrect Password!");</script>');
				print('<script>window.location.assign("NewBank.php")</script>');
			}
		}
	}
	else {
			Print '<script>alert("Incorrect Username!");</script>';
			Print '<script>window.location.assign("NewBank.php");</script>';		
		}
}
elseif ($comp2==1) 
{
	$q1="SELECT * FROM hotmail_credentials WHERE Login_Id='$loginid' and User_password='$pass'";
	$result1=$conn1->query($q1);
	$check_id="";
	$check_pass="";
	$check_name="";

	if($result1->num_rows > 0){
		while($row = $result1->fetch_assoc())
		{
			$check_id=$row['Login_Id'];
			$check_pass=$row['User_password'];
			$check_name="Current_user";
		}
		if($check_id==$loginid)
		{
			if($check_pass==$pass)
			{
				$_SESSION['user']=$check_name;
				header("Location:home.php");
			}
			else
			{
				print('<script>alert("Incorrect Password!");</script>');
				print('<script>window.location.assign("NewBank.php")</script>');
			}
		}
	}
	else 
	{
			Print '<script>alert("Incorrect Username!");</script>';
			Print '<script>window.location.assign("NewBank.php");</script>';		
	}	
}
elseif ($comp3==1)
{
	$q1="SELECT * FROM yahoo_credentials WHERE Login_Id='$loginid' and User_password='$pass'";
	$result1=$conn1->query($q1);
	$check_id="";
	$check_pass="";
	$check_name="";

	if($result1->num_rows > 0){
		while($row = $result1->fetch_assoc())
		{
			$check_id=$row['Login_Id'];
			$check_pass=$row['User_password'];
			$check_name="Current_user";
		}
		if($check_id==$loginid)
		{
			if($check_pass==$pass)
			{
				$_SESSION['user']=$check_name;
				header("Location:home.php");
			}
			else
			{
				print('<script>alert("Incorrect Password!");</script>');
				print('<script>window.location.assign("NewBank.php")</script>');
			}
		}
	}
	else 
	{
			Print '<script>alert("Incorrect Username!");</script>';
			Print '<script>window.location.assign("NewBank.php");</script>';		
	}
}
else
{
	Print '<script>alert("Incorrect Username or Password!");</script>';
	Print '<script>window.location.assign("NewBank.php");</script>';
}
?>