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
		main{
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
.welcome{
    margin:30px auto 10px auto;
    text-align: center;
}
 .port{
    -webkit-box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
	-moz-box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
	box-shadow: -1px 2px 5px 0px rgba(36,34,36,1);
     margin : 20px auto 30px auto;
     width: 60%;
 }
 table{
     border-collapse: collapse;
 }

 table td{
     border-bottom: 1px solid black;
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
#foot{
    font-weight: bold;
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
					<li> <a href="signin.php">Sign in</a></li>
					<li> <a href="signup.php">Sign up</a></li>
					<li> <a href="#">Get Started</a></li>
					</ul>
				</div>
			</div>
	</div>
	<main>
		<div class="welcome">
            <h3>Welcome Essayas</h3>
        </div>
        <div class="port">
            <table style="width:100%">
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>Bitcoin</td>
                        <td>5</td>
                        <td>70000</td>
                    </tr>
                    <tr>
                        <td>Litecoin</td>
                        <td>100</td>
                        <td>245</td>
                    </tr>
                    <tr id="foot">
                        <td></td>
                        <td>Total</td>
                        <td>999999</td>
                    </tr>
            </table>
        </div>
	</main>
 	
 </body>

</html>
