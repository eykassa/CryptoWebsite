<?php include('folder/dbconnect.php');?>
<!DOCTYPE html>
<?php 
	foreach($_POST as $key => $val){
		if(!isset($_SESSION['user']) && !isset($_POST['search'])){
			header("location: ./signin.php");
		}
		if($key!='buy'&& $key!='search' && $key!='submit'){
		$userEmail=$_SESSION['userEmail'];
		$sql4="INSERT into usersCrypto (email,crypto) values('$userEmail','$key')";
		$res4=mysqli_query($conn,$sql4);
		$output=$_SESSION["user"]." Purchased ".$key;
		echo "<script type='text/javascript'>alert('{$output }');</script>";
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

	</style>
</head>
<html>
 <body>
	<main>
	<div class="welcome">
	 <p> Search For Avaliable Crypto Coins</P>
	</div>
	<div class="search">
                <form id ="search" method="post">
                        <input class="inp first" type="text" name="search" placeholder="Search">
                        <input id="button" name="submit" type="submit" value="Search">
                </form>
	</div>
		<div class="coins">
			<table style="width:100%">
				<tr>
					<th>Name</th>
					<th>Price</th>
					<th>Trade</th>
				</tr>
				<?php if(!isset($_POST['search'])){
					$sql="SELECT * FROM crypto";
					$result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result)){
						$name=$row['Name'];
						$price=$row['Price'];
				?>
					<tr>    
					<td class="log"><img src="./pictures/<?php echo($name);?>.png" alt="bitcoinImg"> <p><?php echo($name);?></p></td>
					<td><?php echo($price) ?> </td>
									<td><form method="post">
									<input id="button" name="<?php echo($name);?>" type="submit" value="BUY">
				</form></td>
				<?php
					}
				}else if(isset($_POST['search'])){
					$q=$_POST['search'];
				        $sql="SELECT * FROM crypto where Name like '%$q%'";
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($result)){
                                                $name=$row['Name'];
                                                $price=$row['Price'];
                                ?>
                                        <tr>
                                        <td class="log"><img src="./pictures/<?php echo($name);?>.png" alt="bitcoinImg"> <p><?php echo($name);?></p></td>
                                        <td><?php echo($price) ?> </td>
                                                                        <td><form method="post">
                                                                        <input id="button" name="<?php echo($name);?>" type="submit" value="BUY">
                                </form></td>
				<?php }}?>
			</table>
		</div>
	</main>
 	
 </body>

</html>
