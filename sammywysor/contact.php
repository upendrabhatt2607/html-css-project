<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SammyWysor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
      html, body{
        background-color: #eef3f9;
      }
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
      background-color: #303036;
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

    /*-------------------------------- contact form start ---------------------------------     */

     .contact-form{
      margin: 10%;
     }
     .contact-form-name, .contact-form-phone-email,
     .contact-form-subject-enquiry,
     .contact-form-message-address{
      display: flex;
     }
     .row1 , .row2{
      width: 50%;
      margin-bottom: 30px;
     }
     .row1 label{
      font-size: 20px;
      font-weight: 500;
     }
     .row1 input{
      width: 500px; 
      height: 30px;
      border-radius: 4px;
     }
     .row1 select{
      width: 500px;
      height: 30px;
      border-radius: 4px;
     }
     .row2 input{
      width: 500px;
      height: 100px;
      border-radius: 4px;
     }
     .contact-form-button button {
      width: 250px;
      height: 40px;
      background: white;
      font-size: 20px;
      border-radius: 4px;
      margin-left: 35%;
      margin-top: 30px;
    }
    .contact-form-button button:hover {
      background-color: black;
      color: white;
      transition: 0.8 s all;
    }
    .row2 label{
      font-size: 20px;
      font-weight: 500;
     }

      

/*-------------------------------- contact form end ---------------------------------     */

    /*-----------find us------------------------*/
      .find_us_main{
        width: 100%;
      }
      .find_us_part1{
        margin-bottom: 50px;
      }
     .find_us-contact span{
          display: block;
          font-size: 1.1em;
          margin-bottom: 8px;
      }
      .find_us_heading{
        text-align: center;
        color: #42adf4;
        background-color: white;
        font-weight: 700;
        border-bottom: 2px solid lightgray;
      }
      .find_us_heading1{
        padding-left: 50px;
      }
      .find_us_heading2{
        padding-left: 100px;
        text-decoration: none;
        line-height: 45px;
        font-size: 20px;
      }
      .find_us_map{
        margin-bottom: 20px;
      }

    /*-----------find us end------------------------*/

      
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

<div class="contact-form">
<form>
   <div class="contact-form-name">
    <div class="row1">
     <label for="first_name">First Name</label><br>
     <input type="text" name="first_name" id="first-name" value="Rahul">
   </div>
   <div class="row1">
     <label for="last_name">Last Name</label><br>
     <input type="text" name="last_name" id="last_name-name" value="Bhatt">
   </div>
   </div>
 
   <div class="contact-form-phone-email">  
    <div class="row1">
     <label for="phone">Phone</label><br>
     <input type="number" name="number" placeholder="Enter your number">
   </div>
  
    <div class="row1">
     <label for="email">Email</label><br>
     <input type="email" name="email">
    </div>
  </div>
 
   <div class="contact-form-subject-enquiry">
    <div class="row1">
     <label for="subject">Subject</label><br>
     <input type="text" name="subject">
    </div>
     
    <div class="row1">
     <label for="enquiry-type">Enquiry Type</label><br>
     <select>
       <option>Company Introduction</option>
       <option>Product/Solution Enquiry</option>
       <option>Dealership/Distributorship Enquiry</option>
       <option>Product/Service Complaint</option>
     </select>
    </div>
   </div>

   <div class="contact-form-message-address">
     <div class="row2">
      <label for="message">Message</label><br>
      <input type="text" name="message">
     </div>
     
     <div class="row2">
      <label>Address</label><br>
      <input type="text" name="address">
     </div>
   </div>
   <div class="contact-form-button">
     <button>Submite</button>
   </div>
</form>
</div>

<div class="find_us_main">
   <div class="find_us_part1">     
       <div class="find_us_heading">
         <h1>FIND US</h1>
       </div>
   
       <div class="find_us_heading1">
         <h2><b>CORPORATE OFFICE – MUMBAI </b></h2>
       </div>
    
       <div class="find_us_heading2">
       <li>
         PV MEDIA VISION PVT. LTD. <br>
         UNIT NO. 19, SHAH & NAHAR INDUSTRIAL ESTATE, LOWER PAREL (W), MUMBAI 400013, MAHARASHTRA, INDIA <br>
         CORPORATE IDENTIFICATION NUMBER (CIN) : U22300MH2008PTC181925<br>
       </li>
       <div class="find_us-contact">
        <span><i class="fa fa-phone"></i>&nbsp; 123-456-7890</span>
        <span><i class="fa fa-envelope  "></i>&nbsp; info@sammywysor.com</span>
      </div> 
      </div>
   </div>

   <div class="find_us_map">
     <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15091.867316712724!2d72.8337291780186!3d18.977072294314453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce5ab292b941%3A0x19ab115c5e7876ac!2sByculla%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1620827631154!5m2!1sen!2sin" width="1661" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
   </div>
  </div> 


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