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

form{
	
	align-content: right;
}
input{
	align-content: right;
	margin:5px;
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

.button{
	margin :10px;
	padding:5px;
	font-weight: bold;
	background-color: #008cff;
	text-align: center;
	color:white;
}



.button:hover {
  background: #6600f5;;
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
			header("location:index.php");
		}
		$user=$_SESSION['user'];
		$user="Harry Kane";
		?>
	<body>

	<div class="container">
		<h2 >The Deposit Page</h2>
		<h3> Welcome to E-Banking <?php Print "$user" ?></h3>
		<a href="home.php" >Click Here to Go Back.</a><br/>
		<br/><br/>
		<form action="" method="POST">
			How much would you like to deposit: <input type="number" name="amount" required="required"/><br/>
		</form>

<?php 
	if(isset($_POST['amount'])){
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
			$q1="SELECT * FROM saving_account where User_name='$user'";
			$result1=$conn1->query($q1);
			if($result1->num_rows > 0)
			{
				while($row = $result1->fetch_assoc())
				{ 
					$balance= $row['Balance']+$_POST['amount'];

				}
				$u1="UPDATE saving_account set Balance=$balance";
				$conn1->query($u1);
				Print "Deposited Rs.".$_POST['amount'];
			}
			else
			{
				$q2="SELECT Balance FROM current_account where User_name='$user'";
				$result2 = $conn1->query($q2);
				if($result2->num_rows > 0 )
				{
					while($row = $result2->fetch_assoc())
					{ 
						$balance= $row['Balance']+$_POST['amount'];
					}
					$u2="UPDATE current_account set Balance=$balance";
					$conn1->query($u2);
					Print "Deposited Rs.".$_POST['amount'];					
				}
			}
	} ?>
	</div>
	</body>
	
</html>