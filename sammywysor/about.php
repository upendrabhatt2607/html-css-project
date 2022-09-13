<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
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
        left: 0px;
        padding-top: 20px;
      }

    /*-----------FOOTER------------------------*/
  </style>
</head>
<body>
  

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


</body>
</html>