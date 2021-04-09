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
.welcome{
    margin:30px auto 10px auto;
    text-align: center;
}
	</style>
</head>
<?php include('folder/header.php');
	if(!isset($_SESSION['user'])){
	?>
		<div class="welcome">
            <h3>Please sign in</h3>
        	</div>	
	<?php
		header('location: ./signin.php');
		exit();
	}?>
<html>
 <body>
	<main>
	
	<div class="welcome">
            <h3>Welcome Essayas</h3>
        </div>
		<div class="coins">
			<table style="width:100%">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Trade</th>
				</tr>
				<?php
					$userId=$_SESSION['userEmail'];
					$sql="SELECT * FROM usersCrypto where email='$userId'";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result)){
						$name=$row['crypto'];
				?>
					<tr>    
					<td class="log"><img src="./pictures/<?php echo($name);?>.png" alt="bitcoinImg"> <p><?php echo($name);?></p></td>
					<td><?php echo($price) ?> </td>
									<td><form method="post">
							<input id="button" type="submit" value="BUY">
				</form></td>
				<?php
					}
					?>
			</table>
		</div>

	</main>
 	
 </body>

</html>
