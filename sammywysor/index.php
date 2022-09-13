<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SammyWysor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
    	.carousel-item{
    		height: 100vh;
    		min-height: 300px;
    		background: no-repeat center center scroll;
    		-webkit-background-size: cover;
    		background-size: cover;
    	}
    	.carousel-caption{
    		bottom: 220px;
    	}
    	.carousel-caption h5{
    		font-size: 45px;
    		text-transform: uppercase;
    		letter-spacing: 2px;
    		margin-top: 25px;
    		font-family: merienda;
    	}
    	.carousel-caption p{
    		width: 60%;
    		margin: auto;
    		font-size: 18px;
    		line-height: 1.9;
    		font-family: poppins;
    	}
    	.carousel-caption a{
    		text-transform: uppercase;
    		background: #262626;
    		padding: 10px 30px;
    		display: inline-block;
    		color: #fff;
    		margin-top: 15px;
    	}
    	.navbar-nav a{
    		font-family: poppins;
    		font-size: 18px;
    		text-transform: uppercase;
    		font-weight: bold;
    	}
    	.navbar-light .navbar-brand{
    		color: #fff;
    		font-size: 25px;
    		text-transform: uppercase;
    		font-weight: bold;
    		letter-spacing: 2px;
    	}
    	.navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show > .nav-link {
					    color: #fff;
		}
		.navbar-light .navbar-nav .nav-link{
			color: #fff;
		}
		.navbar-nav{
			text-align: center;
		}
		.nav-link{
			padding: .2rem 1rem;
		}
		.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
			color: #fff !important;
		}
		.navbar{
			background-color: rgba(255,255,255,0.5);
		}
		.w-100{
			height: 100vh;
		}
		@media only screen and (max-width: 767px){
			.navbar-nav.ml-auto{
				background: rgba(0,0,0,0.5);
			}
			.navbar-toggler{
				padding: 1px 5px;
				font-size: 18px;
				line-height: 0.3;
				background: #fff;	
			}
		}
/* ------------------------------------- image section start --------------------------------------*/

       .section1 section{
       	position: relative;
       	top: 20%;
       	left: 50%;
       	transform: translate(-50%,-50%);
       	height: 400px;
       	width: 1200px;
       	background: #000;
       	box-shadow: 0 25px 30px rgba(0,0,0,.5);
       	display: flex; 	
       }
       .content{
       	width: calc(50% - 50px);
       	height: 100%;
       	background: #000;
       	box-sizing: border-box;
       	padding: 30px 50px;
       	font-family: sans-serif;
       	color: #fff; 
       }
       .imageBox{
       	width: calc(50% + 50px);
       	height: 100%;
       	background: #f00;
       	box-sizing: border-box;
       	border-left: 100px solid #000;
       	border-bottom: 400px solid transparent;
       	background-position: -100px -150px;
       }

/* ------------------------------------- image section end --------------------------------------*/

/* -------------------------------------  section2 start --------------------------------------*/

      .section2{
      	background-color: white;
      	width: 100%;
      	background: url(images/bg3.jpg);	
      	height: 350px;
      	background-size: cover;
      	position: relative;
      }
      .section2 section{
      	margin: 5%;
      	display: flex;
      	margin-top: 0;
      }
 
      .parts {
			width: 16%;
			height: 200px;
			background-color: #fff;
			margin: 5px;
			margin-top: 45px;
			border-radius: 10px;
		}
		.section2 h1{
			text-align: center;
			font-weight: 700;
			color: #fff;
		}
		.parts img{
			    width: 80px;
                margin-left: 30%;
	            margin-top: 10%;
       	}
       	.parts p{
       		text-align: center;
       		font-size: 17px;
			color: #0f1214;
			font-weight: 600;
			line-height: normal;
			-webkit-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.6s;
			margin-top: 30px;
       	}
       	.parts:hover{
       		background-color: #000;
       		color: white;
       	}
       	.parts p:hover{
       		color: white;
       	}
/* -------------------------------------  section2 end --------------------------------------*/

/* -------------------------------------  footer section start --------------------------------------*/
        footer{
        	width: 100%;
        }
        .footer_div1{
 	    		margin-left: 42%;
        }
        .footer_logo{
        	text-decoration: none;
        	font-size: 30px;
        	color: #fff;
        	letter-spacing: 5px;
        	text-align: center;
        	font-weight: bold;
        	margin-top:20px;
        	margin-bottom: 20px;
        	border-bottom: 3px solid skyblue;
        }
        .footer_logo:hover {
			color: skyblue;
			text-decoration: none;
		}
		.footer_div2{
			margin: 10%;
			margin-top: 40px;
			margin-bottom: 0;
			letter-spacing: 2px;
		}
		.footer_div2 b{
			font-size: 20px;
		}
		.social_icons {
  	    margin-left: 35%;
  	    margin-bottom: 35px;
        }
		
  .fa {
    padding: 10px;
    font-size: 30px;
    width: 55px;
    text-align: center;
    text-decoration: none;
    margin: 5px 2px;
    border-radius: 20px;
    text-decoration: none;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.fa:hover {
    opacity: 0.7;
    text-decoration: none;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
 
}

.fa-skype {
  background: #00aff0;
  color: white;
}


.footer_div3{
	margin: 5%;
	display: flex;
}
.footer_div3_inside{
	
	text-align: left; 
	width: 30%;
}
.quick_links ul {
    list-style: square outside url("check.png");
}
.quick_links ul li a:hover{
           text-decoration: none;
           color: #337ab7;
	}
.quick_links ul li a{
	color: #212529;
}

/*-----------FOOTER------------------------*/
   
      .footer{
        background: #303036;
        color: #d3d3d3;
        height: 420px;
        position: relative;
      }
      .footer .footer-content{
        height: 350px;
        display: flex;
      }
      .footer .footer-content .footer-section{
        flex: 1;
        padding: 25px;
      }
      .footer .footer-content h1,
      .footer .footer-content h2{
        color: white;
      }
      .footer .footer-content .footer-about h1 span{
        color: #05f7ff;
      }
      .footer .footer-content .footer-about .footer-contact span{
          display: block;
          font-size: 1.1em;
          margin-bottom: 8px;
      }
      .footer .footer-content .footer-about .socials a {
        border: 1px solid gray;
        width: 45px;
        height: 41px;
        padding-top: 5px;
        margin-right: 5px;
        text-align: center;
        display: inline-block;
        font-size: 1.3em;
        border-radius: 5px;
      }
      .footer .footer-content .footer-about .socials a:hover{
        border: 1px solid white;
        color: white;
        transition: all .3s;
      }

      .footer .footer-content .footer-links ul a {
        display: block;
        margin-bottom: 10px;
        font-size: 1.2em;
        text-decoration: none;
        color: #b1b6b9;
      }
      .footer .footer-content .footer-links ul a:hover{
        color: white;
        margin-left: 15px;
        transition: all .3s;
      }
      .footer .footer-content .footer-contact-form .contact-input {
        background: #343a40;
        color: #686868;
        margin-bottom: 10px;
        line-height: 1.5rem;
        padding: .9rem 1.4rem;
        border-radius: none;  
        width: 400px;
        border: none;
      }
      .footer .footer-content .footer-contact-form .footer-contact-button{
          width: 200px;
          height: 50px;
          font-size: 18px;
          border: none;
          border-radius: 5px;
      }
      .footer-contact-button:hover {
          color: white;
          background: black;
      }

      .footer .footer-bottom{
        background: #343a40;
        color: #686868;
        height: 50px;
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 0px;
        top: 100%;
        left: 0px;
        padding-top: 20px;
      }

    /*-----------FOOTER------------------------*/


	    

/* -------------------------------------  footer section end --------------------------------------*/

    	
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">SAMMYWYSOR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction()">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5 class="animated bounceInRight" style="animation-delay: 1s;">Samad's first heading</h5>
          <p class="animated bounceInLeft" style="animation-delay: 2s;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a href="#">More Info</a></p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/bg2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5 class="animated slideInDown" style="animation-delay: 1s;">Samad's Second heading</h5>
          <p class="animated fadeInUp" style="animation-delay: 2s;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a href="#">More Info</a></p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/bg3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
          <h5 class="animated zoomIn" style="animation-delay: 1s;">Samad's third heading</h5>
          <p class="animated fadeInLeft" style="animation-delay: 2s;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <p class="animated zoomIn" style="animation-delay: 3s;"><a href="#">More Info</a></p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="section1" style="width: 100%; height: 1500px; background: #eef3f9">
	<section>
		<div class="content">
			<h1>DIGITAL PRINTING MEDIA</h1>
			<p>Biggest and Exclusive range of digital printing media for Solvent, Eco-Solvent, UV, Latex, Inkjet Dye & Pigment Machines. </p>
		</div>
		<div class="imageBox" style="background: url(images/img1.jpg);"></div>
	</section><br><br>
	<section>
		<div class="content">
			<h1>SIGNAGE PRODUCT</h1>
			<p>Exhaustive range of Display Products & PVC Sheets, ACP Sheets, Acrylic Sheets in various density & thickness. </p>
		</div>
		<div class="imageBox" style="background: url(images/img2.png);"></div>
	</section><br><br>
	<section>
		<div class="content">
			<h1>MACHINES</h1>
			<p> Latest machinery, tools & accessories to meet every requirement of Advertising & Signage Industry.</p>
		</div>
		<div class="imageBox" style="background: url(images/img3.jpg);"></div>
	</section>
</div>

<div class="section2">
	<h1>OUR STRENGTHS</h1>
	<section>
           <div class="parts">
           	<img src="images/icon1.png">
           	<p>DIVERSIFIED PRODUCTS</p>
           </div>
           <div class="parts">
           	<img src="images/icon1.png">
           	<p>DIVERSIFIED PRODUCTS</p>
           </div>
           <div class="parts">
           	<img src="images/icon3.png">
           	<p>DIVERSIFIED PRODUCTS</p>
           </div>
           <div class="parts">
           	<img src="images/icon4.png">
           	<p>DIVERSIFIED PRODUCTS</p>
           </div>
           <div class="parts">
           	<img src="images/icon5.png">
           	<p>DIVERSIFIED PRODUCTS</p>
           </div>
           <div class="parts">
           	<img src="images/icon6.png">
           	<p>DIVERSIFIED PRODUCTS</p>
           </div>
    </section>
</div>

<div class="section3" style="height: 700px; background-color: black;">
	<footer>
		<div class="footer_div1"><a class="footer_logo" href="#">SAMMYWYSOR</a></div>
		<div class="footer_div2">
			<b>Somthing Heading</b>
			<p>Write somthing Write somthing Write somthing Write somthingWrite somthing Write somthingWrite Somthing Write somthing Write somthing Write somthing Write somthing Write somthing Write somthingWrite somthing Write somthingWrite Somthing Write somthing Write somthing Write somthing Write somthing Write somthing Write somthingWrite somthing Write somthingWrite Somthing Write somthing Write somthing...<button><a href="#">Read more</a> </button> </p>
		</div>
		<div class="social_icons">
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-google"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-youtube"></a>
			<a href="#" class="fa fa-instagram"></a>
			<a href="#" class="fa fa-pinterest"></a>
			<a href="#" class="fa fa-snapchat-ghost"></a>
			<a href="#" class="fa fa-skype"></a>
		</div>

		
			<div class="footer">
  <div class="footer-content">

    <div class="footer-section footer-about">
      <h1 class="logo-text"><span>Sammy</span>Wysor</h1>
      <p>Write somthing Write somthing Write somthing Write somthingWrite somthing Write somthingWrite Somthing Write somthing Write somthing Write somthing Write somthing Write somthing Write somthingWrite somthing Write somthingWrite Somthing Write somthing Write so</p>
      <div class="footer-contact">
        <span><i class="fa fa-phone"></i>&nbsp; 123-456-7890</span>
        <span><i class="fa fa-envelope  "></i>&nbsp; info@sammywysor.com</span>
      </div>    
      <div class="socials">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-google"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
    </div>

    <div class="footer-section footer-links">
      <h2>Quick Links</h2>
      <br>
      <ul>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="#">About</a>
        </li>
        <li>
          <a href="#">Contct us</a>
        </li>
        <li>
          <a href="#">Products</a>
        </li>
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        <li>
          <a href="#">Trems & Policy</a>
        </li> 
       </ul>
    </div>

    <div class="footer-section footer-contact-form">
      <h2>Contact Us</h2>
      <br>
      <form>
        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address..."><br>
        <textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea><br>
        <button class="footer-contact-button"><i class="fa fa-envelope"></i>Send</button>
      </form>
    </div>
  </div>

  <div class="footer-bottom">
    &copy; sammywysor.com | Designed by Rahul bhatt
  </div>
</div>
		
	</footer>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("navbarSupportedContent");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
</body>
</html>