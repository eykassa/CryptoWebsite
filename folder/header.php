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
	background-color: rgba(45, 190, 120, 0.5);
	padding:10px;
	font-weight: bold;
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
	</style>
</head>
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
				<li> <a href="./signin.php">Sign in</a></li>
				<li> <a href="./signup.php">Sign up</a></li>
				<li> <a href="#">Get Started</a></li>
				</ul>
			</div>
		</div>
	</div>

	<main>
	<div class="welcome">
	 <p> WELCOME </P>
	</div>
		<div class="coins">
		<table style="width:100%">
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Trade</th>
			</tr>
			<tr>
				<td class="log"><img src="./bitcoin.png" alt="bitcoinImg"> <p>Bitcoin</p></td>
				<td> </td>
				<td><form method="post">
                        <input id="button" type="submit" value="BUY">
                    </form></td>
			</tr>
			<tr>
				<td class="log"><img src="./ethereum.png" alt="ethereumImg"> <p>Ethereum</p></td>
				<td></td>
				<td><form method="post">
                        <input id="button" type="submit" value="BUY">
                    </form></td>
			</tr>
			<tr>
				<td class="log"><img src="./litecoin.png" alt="litecoinImg"> <p>LiteCoin</p></td>
				<td></td>
				<td><form method="post">
                        <input id="button" type="submit" value="BUY">
                    </form></td>
			</tr>
		</table>
		</div>
	</main>
 	
 </body>

</html>
