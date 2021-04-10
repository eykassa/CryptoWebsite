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
#cButton{
	Background-color : #1ea642;
	color: white;
	margin: 0 40% 0 40%;
	padding : 8px 15px 8px 15px;
	border-radius: 5px;
	border: none;
}
#cButton:hover{
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
.currentBalance{
	text-align:center;
}
.currentBalance h3{
	color: green;
}
#search {
	margin: 20px auto 20px auto;
    width: 40%;
	background-color:white;
}
#search input {
    padding: 10px;
    margin-top: 5px;
    border:solid thin #aaa;

}
#search #button{
	background-color: blue;
	border-radius: 18px;
	margin-top: 10px;
}
.inp{
	border-radius: 18px;
	display: block;
	width: 95%;
	box-sizing: border-box;
	padding: 10px;
	background: white;
	color:rgb(30, 30, 30);
	margin: 0 auto 0 auto;
}

.men{
	display: flex;
	justify-content: space-between;
	width:40%;
	margin: 10px auto 20px auto;
}
.men a{
	text-decoration: none;
	color: black;
}
.men a form #button{
	margin: 0 10px 0 10px;
	background-color:#f1f5fe;
	color: blue;
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
            <h3>Welcome to your portfolio</h3>
        </div>
		<div class="currentBalance">
			<?php 
				$email=$_SESSION['userEmail'];
				$sql="select sum(Price) as sum from usersCrypto as u, crypto as c  where u.crypto=c.Name and email ='$email'";
				$result=mysqli_query($conn,$sql);
				$result2=mysqli_fetch_assoc($result);
				$sum=$result2['sum'];
			?>
				<h3> Current balance: <?php if($sum>0){echo "$".$sum;}else{echo "$0";} ?>  <h3>
		</div>
		<div class="men">
			<a href="buyCrypto.php"> <form method="post">
			<input id="button" name="buy" type="submit" value="Buy Crypto">
		</form></a>
			<a href="assets.php"> <form method="post">
			<input id="button" name="assests" type="submit" value="My Assests">
		</form></a>
			<a href="upcoming.php"> <form method="post">
			
			<input id="button" name="upcoming" type="submit" value="Upcoming Crypto">
		</form> </a>
		</div>
		<?php if(isset($_POST['upcoming'])){ ?>
		<div class="coins">
                        <table style="width:100%">
                                <tr>
                                        <th>Name</th>
                                        <th>ExpectedPrice</th>
                                        <th>LaunchDate</th>
                                </tr>
				<tr>
					<td class="log"><img src="./pictures/Essayas.png" alt="essayasImg">
					<p> EssayasCoin</p>
					<td>$1000000</td>
					<td>01/01/2022</td>
				</tr>
                        </table>
		</div>
		<?php }
	else if(isset($_POST['assests'])){ ?>
		<div class="coins">
                        <table style="width:100%">
                                <tr>
                                        <th>Name</th>
                                        <th>OwnedCoines</th>
                                        <th>Balance</th>
                                </tr>
                                <?php
                                        $userId=$_SESSION['userEmail'];
                                        $sql="SELECT DISTINCT * FROM usersCrypto where email='$userId'";
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($result)){
						$name=$row['crypto'];
						$sql2="SELECT * FROM usersCrypto where email='$userId' and crypto='$name'";
						$result2=mysqli_query($conn,$sql2);
						$num=mysqli_num_rows($result2);
                                ?>
                                        <tr>    
                                        <td class="log"><img src="./pictures/<?php echo($name);?>.png" alt="bitcoinImg"> <p><?php echo($name);?></p></td>
					<td><?php echo($num) ?></td>
					<td><?php 
					$sql3="SELECT * FROM crypto where name='$name'";
					$result3=mysqli_query($conn,$sql3);
					$row3=mysqli_fetch_assoc($result3);
					$sum=$row3['Price']*$num;
					echo '$'.$sum;
					?>
					</td>	
                                <?php
                                        }
                                        ?>
                        </table>
                </div>
		<?php }
		  else {
			  include("./folder/body.php");
		  }
		 ?>

	</main>
 <?php include("./folder/footer.php");?> 	
 </body>

</html>
