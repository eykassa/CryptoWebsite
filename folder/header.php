<?php include('folder/dbconnect.php');?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
	<style>
* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
	.upper{
		display:flex;
		justify-content: center;
		align-items: flex-end;
		height:10vh;
		-webkit-box-shadow: 7px 2px 5px 0px rgba(92,87,92,0.67);
		-moz-box-shadow: 7px 2px 5px 0px rgba(92,87,92,0.67);
		box-shadow: 7px 2px 5px 0px rgba(92,87,92,0.67);
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
	color:black;
	font-size:20px;
	letter-spacing:2px;
	padding:20px;
	transition: all ease 0.5s;
}
.header ul li a:hover{
	color:#15b3e8;
}
.coins{
	border-radius: 5px;
	background-color: white;
    -webkit-box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
	-moz-box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
	box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
	width:50%;
	margin: 50px auto 10px auto;
}

table tr{
	
}
table tr th {
	color: #e6ecf2;
	background-color: #1752f0;
	padding:10px;
	font-weight:lighter;
	text-align : left;
}
table img{
	height: 40px;
	width : 40px;
	margin-right: 20px;
}
table td{
	padding:10px;
}
 table .log{
	display: flex;
}
#button{
	Background-color : #1ea642;
	color: white;
	margin: 0 40% 0 40%;
	padding : 8px 15px 8px 15px;
	border-radius: 5px;
	border: none;
}
#button:hover{
	cursor: pointer;
}
.createPort{
	margin-top:50px;
	text-align:center;

}
.createPort p{
	color : rgb(140, 140, 140);
	margin-top: 20px;
}

.con{
	margin: 40px auto 40px auto;
	width: 90%;
	display: flex;
	justify-content: space-between;
}
.left{
	margin-left: 20px;
	display: flex;
	flex-direction:column;
	justify-content: space-around;
	align-items: center;
}
.box{
	display: flex;
	justify-content: space-between;
}
.box .description p{
	color : rgb(140, 140, 140);

}
.box .description h3{
	color: #1752f0;
}
.right{
	display: flex;
	justify-content: center;
	align-items: center;
}
.right img{
	height: 100%;
	width: 100%;
}
.buttonempty{
	height:2em;
	width:6em;
	border: var(--textColor) 1px solid;
  	border-radius: 1.5em;
  	font-weight: bold;
  	transition: all 0.3s ease;
}
.buttonfilled{
	height: 2.5em;
  width: 6em;
  background-color: var(--textColor);
  border: none;
  color: var(--bgColor);
  border-radius: 1.5em;
  font-weight: bold; 
  transition: all 0.3s ease;
}
.buttonempty:hover{
 color: var(--specColor);
  border: var(--specColor) 1px solid;
  opacity: .7;
}
.buttonfilled:hover{
 background-color: var(--specColor);
  opacity: .7;
}
.outButton {
  margin-left: 80em; 
  height: 2.5em;
  width: 6em;
  background-color: BLUE;
  border: none;
  color: var(--bgColor);
  border-radius: 1.5em;
  font-weight: bold;
  transition: all 0.3s ease;
}

.outButton:hover {
  opacity: .6;
}
	</style>
</head>
<?php
	if(isset($_POST['logout'])){
		unset($_SESSION['user']);
		header('location: index.php');
	}
?>
<html>
 <body>
 <div class="upper">
		<div class="header">
			<div class="logo">
				<a href="./index.php"><img class="logo_pic" src="./pictures/Logo.png" alt-"logo"></a>
			</div>
			<div class="menu">
				<ul>
				<li> <a href="./index.php">HOME</a></li>
				<li> 
					<?php
					if(isset($_SESSION['user'])){
						$userName=$_SESSION['user'];
					?>
					<h3>Hello, <?php echo $userName;?></h3>
				        <li> <a href="./portfolio.php">MyProfile</a></li>
					<form method="POST">
              				<button type="submit" name="logout" class="outButton">Log out</button>
            				</form>				
					<?php }?>
					<?php
                                        if(!isset($_SESSION['user'])){
                                        ?>
				<li> <a href="./signin.php">Sign in</a></li>
				<li> <a href="./signup.php">Sign up</a></li>
				<li> <a href="#">Get Started</a></li>
                                        <?php }?>
				</ul>
			</div>
		</div>
	</div>

 </body>

</html>
