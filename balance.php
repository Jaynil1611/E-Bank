<html>
	<head>
	<title>Money in the Bank</title>
	<style>
	 .container{
	width: 620px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
}


h3{
	color:#1f00a8;
	font-family: helvetica;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

button{
	width:380px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #ff474a;
	text-align: center;
	color:white;
}


button:hover {
  background: #a30003;
}

body{
	background-color: PaleTurquoise;
}
    </style>
	</head>
	<?php
		session_start();
		if($_SESSION['user'])
		{}
		else
		{
			header("location:NewBank.php");
		}
		$user=$_SESSION['user'];
		$user="Harry Kane";
		?>
	<body>

	<div class="container">
		<h2 >The Balance Page</h2>
		<h3> Hello <?php Print "$user" ?></h3>
		<a href="home.php" >Click Here to Go Back.</a><br/>
		<br/><br/>
		<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$db1="user_account";		
		// Create connection
		$conn1 = mysqli_connect($servername, $username, $password,$db1);
		// Check connection
		if (!$conn1) {
		   die("Connection failed: " . mysqli_connect_error());
		}
			$balance=0.00;
			$q1="SELECT Balance FROM saving_account where User_name='$user'";
			$result1=$conn1->query($q1);
			if($result1->num_rows > 0){
				while($row = $result1->fetch_assoc())
				{ 
					$balance= $row['Balance'];
				}
				Print "Your Balance is :   " . $balance;
			}
			else
			{
				$q2="SELECT Balance FROM current_account where User_name='$user'";
				$result2 = $conn1->query($q2);
				while($row = $result2->fetch_assoc())
				{ 
					$balance= $row['Balance'];
				}
				Print "Your Balance is :   " . $balance;
			}
		 ?>



	</div>
	</body>
	
</html>
