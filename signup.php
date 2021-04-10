<!DOCTYPE html>
<?php
        include('./folder/header.php');
        if(isset($_SESSION['user'])){
                header('Location: portfolio.php');
                exit();
        }
        $generatedError='';
        if(isset($_POST['submit'])){
                $firstName=$_POST['firstName'];
                $lastName=$_POST['lastName'];
                $userPassword=$_POST['password'];
                $userPasswordConfirm=$_POST['password2'];
                $userEmail=$_POST['email'];
                if($userPassword!=$userPasswordConfirm){
                        $generatedError='Password does not match';
                }
                else if($userEmail==''){
                        $generatedError='Please enter an email';
                }
                else{
                $sql="SELECT * FROM users where email='$userEmail'";

                $res= mysqli_query($conn,$sql);

                $count= mysqli_num_rows($res);

                if($count>0){
                        $generatedError="Email address is already used";
                }
                else{
                        $sql="INSERT INTO users (firstName,lastName,email,password) values('$firstName','$lastName','$userEmail','$userPassword')";
                        $res= mysqli_query($conn,$sql);
                        if($res){
                        $userName=$firstName.' '.$lastName;
                        $_SESSION['user']=$userName;
                        $_SESSION['userEmail']=$userEmail;
                        header('Location: portfolio.php');
                        exit();
                        }

                }
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
    height: 60vh;
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
	margin: 10px auto 10px auto;
}
.first{
	margin: 10px auto 0 auto;
}
#button{
	color: white;
	margin: 10px 40% 0 40%;
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
	</style>
</head>
<html>
	<main>
		<div class="sign"> Sign up for Lox Crypto</div>
		<div class="container">
                    <form method="post">
                        <input class="inp first" type="name" name="firstName" placeholder="First Name"required>
                        <input class="inp first" type="name" name="lastName" placeholder="Last Name"required>
                        <input class="inp" type="email" name="email" placeholder="Email" required>
                        <input class="inp" type="password" name="password" placeholder="Password"required>
                        <input class="inp" type="password" name="password2" placeholder="Confirm Password">
			<p><?php echo $generatedError?></p>
                        <input id="button" type="submit" name="submit" value="Signup">
                    </form>
        </div>
	<div id="signup"> Already a member ? <a href="./signin.php"> Sign in </a> </div>
	</main>
 	
 </body>

</html>
