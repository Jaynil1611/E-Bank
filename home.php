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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script language='JavaScript' type='text/JavaScript'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">

body {
   /* padding-top: 05px;   */
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-color: PaleTurquoise;
}
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
            #leftbox { 
                float:left;  
                background:grey; 
                width:33%; 
                height:280px; 
            } 
            #middlebox{ 
                float:left;  
                background:grey; 
                width:33%; 
                height:280px; 
            } 
            #rightbox{ 
                float:right; 
                background:grey; 
                width:34%; 
                height:280px; 
            } 
.panel-login {
  border-color: #ccc;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
  color: #00415d;
  background-color: #fff;
  border-color: #fff;
  text-align:center;
}
.panel-login>.panel-heading a{
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
  color: #029f5b;
  font-size: 18px;
}
.panel-login>.panel-heading hr{
  margin-top: 10px;
  margin-bottom: 0px;
  clear: both;
  border: 0;
  height: 1px;
  background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
  background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
  height: 45px;
  border: 1px solid #ddd;
  font-size: 16px;
/*  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;*/
}
.panel-login input:hover,
.panel-login input:focus {
  outline:none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: #ccc;
}
.btn-login {
  background-color: #59B2E0;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
  color: #fff;
  background-color: #53A3CD;
  border-color: #53A3CD;
}
.forgot-password {
  text-decoration: underline;
  color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
  text-decoration: underline;
  color: #666;
}

.btn-register {
  background-color: #1CB94E;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
  color: #fff;
  background-color: #1CA347;
  border-color: #1CA347;
}


  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }


</style>
</head>

<body>


<nav class="navbar navbar-dark bg-dark" style="opacity: 0.8">
  <!-- Navbar content -->
    <img src="https://img3.stockfresh.com/files/t/tashatuvango/m/64/8721019_stock-photo-online-banking-concept-multicolor-on-dark-brickwall.jpg" height="150px" width="250px">
    <h1 style="color:white;">Online Bank</h1>
    <br>
    <br>

    <a class="navbar-brand" href="#">Home</a>
    <a class="navbar-brand" href="NewBank.php">Login</a>
    <a class="navbar-brand" href="#">News</a>
    <a class="navbar-brand" href="#">Contact</a>
    <a class="navbar-brand" href="#">About Us</a>
</nav>


<script src="./a.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  
  <div class="container">
    <h2 >The Home Page</h2>
    <h3> Welcome to E-Banking <?php Print "$user" ?></h3>
    <a href="logout.php" >Click Here to Logout.</a><br/>
    <br/><br/>
    <button type = "button" onclick="location.href='deposit.php'" >Deposit Money.</button>
    
    
    <button type = "button" onclick="location.href='withdraw.php'" >Withdraw Money.</button>
  
  
    <button type = "button" onclick="location.href='balance.php'" >Check Balance.</button>

  </div><br/><br/><br/><br/><br/><br/><br/><br/>

<div>
            <div id="leftbox">
              <h2>Group Members</h2>
              <ul>
                <li>Sudhanshu Chavan  (2017140004)</li>
                <li>Rahul Dalvi       (2017140007)</li>
                <li>Jaynil Gaglani    (2017140014)</li>
              </ul>
            </div>
            
            <div id="middlebox">
              <h2>Bank Address, Contact Details</h2>
              <ul>
                <li>Opposite Bhavans Campus, Andheri</li>
                <li>Phne:-  213131323</li>
                <li>Email:- onlinebanking@obank.com</li>
              </ul>
            </div>
            <div id="rightbox">
              <h2>Other Bank branches</h2>
              <ul>
                <li>Borivali(E):- Opposite Borivali Railway Station, Raichura Circle</li>
                <li>Gatkopar(E):- Opposite Ghatkopar Railway Station, Manu Market</li>
              </ul>
            </div>
</div>

<!-- <link href="C:\Users\Rohit\Desktop\footer.css" rel="stylesheet" id="bootstrap-css"> -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
<?php 
?>

