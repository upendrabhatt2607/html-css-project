 <!DOCTYPE html>
<html>
<head>
<title>Samad's Website</title>
<style type="text/css">
	*{
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		
	}
	li, a, button{
		font-family: "Montserrat", sans-serif;
		font-weight: 500;
		font-size: 16px;
		color: #edf0f1;
		text-decoration: none;
	}
	.navbar{
		text-align: center;
		display: flex;
		justify-content: space-between;
		padding: 30px 10%;
		background: blue;
	}
	.navbar ul{
		display: flex;
		list-style: none;
	}
	.navbar li{
		display: inline-block;
		padding: 0px 20px;
	}
	.navbar li a{
		transition: all 0.3s ease 0s;
	}
	.navbar li a:hover{
		color: #0088a9;
	}
	.logo{
		cursor: pointer;
	}
	.navbar b{
        font-size: 25px;
		font-weight: 800;
		letter-spacing: 5px;
		text-align: center;
	}
/* banner  css start */
    .banner{
    	height: 100vh;
    	width: 100%;
    	position: absolute;
    	left: 0;
    	top: 0;
    }
    .img1{
    	width: 120%;
    	position: absolute;
    	left: 50%;
    	top: 50%;
    	transform: translate(-50%,-50%);
    }




/* banner  css start */


</style>
</head>
<body>
 <header class="header">
 	<nav class="navbar">
 		<b>SammyWysor</b>
 		<ul>
 			<li><a href="#">Home</a></li>
 			<li><a href="#">Services</a></li>
 			<li><a href="#">Contact Us</a></li>
 			<li><a href="#">About Us</a></li>
      	</ul>
 	</nav>
 </header>
 <div class="banner">
 	<img  class="img1" src="images/bg1.jpeg">
 </div>


</body>
</html> 