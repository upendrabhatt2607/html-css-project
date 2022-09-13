<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
     .contact-form{
      margin: 10%;
     }
     .contact-form-name, .contact-form-phone-email,
     .contact-form-subject-enquiry,
     .contact-form-message-address{
      display: flex;
     }
     .row , .row2{
      width: 50%;
      margin-bottom: 30px;
     }
     .row label{
      font-size: 20px;
      font-weight: 500;
     }
     .row input{
      width: 500px; 
      height: 30px;
      border-radius: 4px;
     }
     .row select{
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
      transition: 0.8s all;
    }
    

  </style>
</head>
<body>
  
<div class="contact-form">
<form>
   <div class="contact-form-name">
    <div class="row">
     <label for="first_name">First Name</label><br>
     <input type="text" name="first_name" id="first-name" value="Rahul">
   </div>
   <div class="row">
     <label for="last_name">Last Name</label><br>
     <input type="text" name="last_name" id="last_name-name" value="Bhatt">
   </div>
   </div>
 
   <div class="contact-form-phone-email">  
    <div class="row">
     <label for="phone">Phone</label><br>
     <input type="number" name="number" placeholder="Enter your number">
   </div>
  
    <div class="row">
     <label for="email">Email</label><br>
     <input type="email" name="email">
    </div>
  </div>
 
   <div class="contact-form-subject-enquiry">
    <div class="row">
     <label for="subject">Subject</label><br>
     <input type="text" name="subject">
    </div>
     
    <div class="row">
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

</body>
</html>