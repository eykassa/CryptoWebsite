<!DOCTYPE html>
<?php
	include('./folder/header.php');
	if(isset($_SESSION['user'])){
		header('Location: portfolio.php');
	}
	$generatedError='';
	if(isset($_POST['submit'])){
		$userName=$_POST['email'];
		$userPassword=$_POST['password'];
		$sql="SELECT * FROM users where email='$userName'";
		$sql2="SELECT * FROM users where email='$userName' and password='$userPassword'";

		$res= mysqli_query($conn,$sql);
		$res2= mysqli_query($conn,$sql2);

		$count= mysqli_num_rows($res);
		$count2=mysqli_num_rows($res2);

		if($count==0){
			$generatedError="User Name not Found";
		}
		else if($count2==0){
			$generatedError="Incorrect Password";
		}
		else{
			$row=mysqli_fetch_assoc($res2);
			$first=$row['firstName'];
			$second=$row['secondName'];
			$userEmail=$row['email'];
			$userName=$first.' '.$second;
			$_SESSION['user']=$userName;
			$_SESSION['userEmail']=$userEmail;
			header('location: portfolio.php');

		}
		
	}
	
?>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
	<style>
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
			
		background-color: #1752f0;
        }
		main{
			color: white;
		}
	.upper{
		display:flex;
		justify-content: center;
		align-items: flex-end;
		height:10vh;
		background-color: #1752f0;
	}
.header{
	height:10vh;
	display:flex;
}
.menu{
	height:100%;
	display:flex;
	justify-content:center;
	align-items:center;
}
.logo{
	height:100%;
}
.logo_pic{
	height:100%;
}
.header ul{
 	text-align:center;
}
.header ul li{
	list-style:none;
	display: inline-block;
}
.header ul li a{
	display:block;
	text-decoration: none;
	text-transform: uppercase;
	color:white;
	font-size:20px;
	letter-spacing:2px;
	padding:20px;
	transition: all ease 0.5s;
}
.header ul li a:hover{
	color:#15b3e8;
}

.container {
    background-color: white;
    -webkit-box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
	-moz-box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
	box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
    height: 35vh;
    width: 35%;
    display: flex;
    justify-content: center;
    align-items: center;
	margin: 10px auto 10px auto;
	border-radius:5px;
}
form {
    width: 90%;
    height: 90%;
	background-color:white;
}
form input {
    border-radius: 7px;
    padding: 11px;
    margin-top: 10px;
    border:solid thin #aaa;

}
.inp{
	border-radius: 0;
	display: block;
	width: 95%;
	box-sizing: border-box;
	padding: 10px;
	background: white;
	color:rgb(30, 30, 30);
	margin: 0 auto 0 auto;
}
.first{
	margin: 10px auto;
}
#button{
	color: white;
	margin: 0 40% 0 40%;
}
#button:hover{
	cursor: pointer;
}
.sign{
	
	margin: 6% auto 20px auto;
	text-align: center;
	font-size:2.5vw;
}
#signup{
	text-align:center;
}
#signup a{
	color: white;
}
.form_error span{
	width: 80%;
	height: 35px;
	margin: 3px 10%;
	font-size: 1.1em;
	color: #D83D5A;
}
.form_error input{
	border: 1px solid #D83D5A;
}
	</style>
</head>
<html>
 <body>
	<main>
		<div class="sign"> Sign in to Lox Crypto</div>
		<div class="container">
                    <form method="post">
                        <input class="inp first" type="email" name="email" placeholder="Email"><br>
                        <input class="inp" name="password" type="password" name="password" placeholder="Password"><br>
			<p><?php echo $generatedError ?></p>
                        <input id="button" name="submit" type="submit" value="Login">
		    </form>
        </div>
		<div id="signup"> New here ? <a href="signup.php"> Sign up </a> </div>
	</main>
 	
 </body>

</html>
