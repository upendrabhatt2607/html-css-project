<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    /*-----------ABOUT US------------------------*/
     html{
      scroll-behavior: smooth;
     }

    .about_us_content section{
       height: 100vh;
       justify-content: center;
       align-items: center;
    }
    .about_us_content section:nth-child(odd){
      background: #ccc;
    }
    .about_us_content section:before{
      content: attr(data-text);
      color: #262626;
      font-size: 8em;
      font-weight: bold;
    }
    .about_us_main{
      width: 100%;
    }
    .nav_bar_about_us{
      width: 20%;
      background-color: lightgray;;
       height: 50vh;
       position: fixed;
       justify-content: center;
       align-items: center;
    }
    .about_us_content{
      width: 80%;
      float: right;
    }

   
    .nav_bar_about_us ul li a{
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
    }
    .nav_bar_about_us ul{
      list-style-type: none;
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      border: 1px solid #555;
    }
    .nav_bar_about_us ul li{
      text-align: center;
      border-bottom: 1px solid #555;
    }
    .nav_bar_about_us li:last-child {
      border-bottom: none;
    }

    .nav_bar_about_us li a.active {
      background-color: #4CAF50;
      color: white;
    }

    .nav_bar_about_us li a:hover:not(.active) {
      background-color: #555;
      color: white;
    }

    .about_section1 h1{
      text-align: center;
    }

    /*-----------ABOUT US------------------------*/
  </style>
</head>
<body>
<div class="about_us_main">
  <div class="nav_bar_about_us">
    <ul>
      <li><a href="#sec1">WHO WE ARE ?</a></li>
      <li><a href="#sec2">Why us ?</a></li>
      <li><a href="#sec3">OUR STRATEGY</a></li>
      <li><a href="#sec4">OUR PARTNERS </a></li>
      <li><a href="#sec5">Section 5</a></li>
    </ul>
  </div>
  
   <div class="about_us_content">
    <section id="sec1">
      <div class="about_section1">
      <h1>WHO WE ARE</h1>
      <p>PV Media Vision Pvt. Ltd. - Incorporated on May 6, 2008 and is engaged in the business of providing integrated solution and marketing of digital printing media, signage products and machines.<br>
      With the brand name of “PV MEDIA” & now “PVM”, company has created a compelling brand message that works consistently for its clients across every point of communication from manufacturing, sourcing, distribution and customer service. In order to meet the requirements of our valued business partners and to be a one-stop-shop; PV Media has stretched from a distributor to an importer and now a manufacturer.</p>
      </div>
    </section>

    <section id="sec2">
      <div class="about_section2">
        <h1>WORKING WITH US MEANS…</h1>
        <h4>
          <i class="fa fa-star"></i>
          <b>Access to array of Quality Products adding value to your business</b>
        </h4>
        <h4>
          <i class="fa fa-star"></i>
          <b>Working with Qualified Team of domain experts and Dedicated Relationship Manager</b>
        </h4>
        <h4>
          <i class="fa fa-star"></i>
          <b>Demanding excellent Customer Service you deserve</b>
        </h4>
        <h4>
          <i class="fa fa-star"></i>
          <b>End-to-End solutions</b>
        </h4>
        <h4>
          <i class="fa fa-star"></i>
          <b> Moving to the next-level of fast paced Growth!!!</b>
        </h4>
      </div>
    </section>
    <section id="sec3">
      <div class="about_section3">
        <h1>OUR STRATEGY</h1>
        <div class="section3_inside" style="display: flex;">
          <b>OUR STRATEGY :</b>
          <p>“We want to set a benchmark in the digital printing industry by offering a complete range of effective solutions and services. With the help of our unmatched experience, diligent teamwork and outstanding skills, PV Media aims to be a fundamentally strong company which is highly service oriented and caters to every client in the digital printing industry.” </p>
        </div>
        <div class="section3_inside" style="display: flex;">
          <b>Mission :</b>
          <p>“To offer the customer with the best possible service, selection, quality and value.” </p>
        </div>
        <div class="section3_inside" style="display: flex;">
          <b>OUR STRATEGY :</b>
          <p>“We want to set a benchmark in the digital printing industry by offering a complete range of effective solutions and services. With the help of our unmatched experience, diligent teamwork and outstanding skills, PV Media aims to be a fundamentally strong company which is highly service oriented and caters to every client in the digital printing industry.” </p>
        </div>
      </div>

    </section>
    <section id="sec4">
      <div class="about_section3">
        <h1>OUR PARTNERS </h1>
        <div class="section4_inside" style="display: flex;">
          <b>OUR STRATEGY :</b>
          <p>“We want to set a benchmark in the digital printing industry by offering a complete range of effective solutions and services. With the help of our unmatched experience, diligent teamwork and outstanding skills, PV Media aims to be a fundamentally strong company which is highly service oriented and caters to every client in the digital printing industry.” </p>
        </div>
        <div class="section4_inside" style="display: flex;">
          <b>Mission :</b>
          <p>“To offer the customer with the best possible service, selection, quality and value.” </p>
        </div>
        <div class="section4_inside" style="display: flex;">
          <b>OUR STRATEGY :</b>
          <p>“We want to set a benchmark in the digital printing industry by offering a complete range of effective solutions and services. With the help of our unmatched experience, diligent teamwork and outstanding skills, PV Media aims to be a fundamentally strong company which is highly service oriented and caters to every client in the digital printing industry.” </p>
        </div>
      </div>
    </section>
    <section id="sec5" data-text="Section 5"></section>
   </div>
</div>

</body>
</html>