<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


<style>
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width:100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
 
    color:#ffffff;
    text-decoration:none;
    border-bottom: 3px solid #ffff00;
}

.active {
    background-color: #4CAF50;
}



</style>
<style type="text/css">
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.d{
  border-radius: 50%;
}
</style>
</head>
<body>
    
@if(Session::has('wintecuser'))

  <?php
  
  if(count($sid)>0)
  {
  ?>
@include('layouts.includes.head')

  <div style="background:url('http://www.typingvidya.com/images/slide5.jpg');width:100%;height:250px;">
<?php
$photo=$sid->photo;
 echo" <img src='uploads/students/".$photo."' alt='Avatar' class='d' style='width:200px'><h5 style='background-color:#000000;color:#ffffff;width:300px;height:40px;text-align:center;font-size:20PX;'>  ". $sid->student_fname." ".$sid->student_lname." ".$sid->student_sname."</h5>";
 
 ?>
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
              <img src="https://www.wintec.ac.nz/remote.axd?wintecprodpublicwebsite.blob.core.windows.net/sitefinity-storage/images/default-source/common/wintec-virtualhub-logo.png?sfvrsn=d875ea33_40&quality=75"/>
              
            <div class="panel panel-default">
                <div class="panel-heading">Expression of Intrest</div></div>

                <div class="panel-body">
           

  @if(Session::has('eoisuccess'))
<div class="alert alert-success">
   {{ Session::get('eoisuccess') }}
</div>
@endif
  
    <form method="POST" action="public/eoi1" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off" onpaste="return false" >
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       
       
       <h5> Name</h5>
       <div class="form-group">
           <input type="text" name="name" class="form-control title" placeholder="First Name" >
       </div>
                 
       @if($errors->has('name')) 
         <div class='alert alert-danger'>{{$errors->first('name')}}</div>

   
   @endif
    
              <h5> Student  Number </h5>
    
           <div class="form-group">
           <input type="text" name="sid" class="form-control title" placeholder="Last Name" >
       </div>
       
              
        @if($errors->has('sid')) 
         <div class='alert alert-danger'>{{$errors->first('sid')}}</div>

   
   @endif
    
       
       <h5>  Contact Address</h5>
    
       <div class="form-group">
           <textarea name="caddress" class="form-control title" placeholder="Contact Address" rows=5></textarea>
           </div>
        @if($errors->has('caddress')) 
         <div class='alert alert-danger'>{{$errors->first('caddress')}}</div>

   
   @endif
   
   
       <h5>  Phone Number</h5>
    
       <div class="form-group">
           <input type="text" name="phone" class="form-control title" placeholder="Second Name">
           </div>
        @if($errors->has('phone')) 
         <div class='alert alert-danger'>{{$errors->first('phone')}}</div>

   
   @endif
     
          <h5>  Email Address</h5>
    
       <div class="form-group">
           <input type="email" name="email" class="form-control title" placeholder="student@example.com" >
       </div>
       
        @if($errors->has('email')) 
         <div class='alert alert-danger'>{{$errors->first('email')}}</div>

   
   @endif
     
       
          <h5>Statement of intent (Choose the option that applies to you) *</h5>
    
       <div class="form-group">
      <select name="intent" class="form-control title">
        <option value="">Select</option>
        <option value="I wish wintec to assist me in finding a placement with a host organization">I wish wintec to assist me in finding a placement with a host organization</option>
        <option value="I have found a placement and would like Wintec to meet with the host organization">I have found a placement and would like Wintec to meet with the host organization</option>
        
      </select>
       </div>
   
     @if($errors->has('intent')) 
         <div class='alert alert-danger'>{{$errors->first('intent')}}</div>

   
   @endif
    <hr/><br/>
         <h5>  

Are you able to work outside of Hamilton, if a placement opportunity came up at a different location? *</h5>
    
       <div class="form-group">
           
         &nbsp;&nbsp;&nbsp;  <input type="radio" name="outside" class="flat" value="yes">Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="radio" name="outside" class="flat" value="no">No
       </div>
   @if($errors->has('outside')) 
         <div class='alert alert-danger'>{{$errors->first('outside')}}</div>

   
   @endif
     
     <hr/>
     <br/>
           <h5>Which programme of study are you enrolled in? *</h5>
    
       <div class="form-group">
      <select name="program" class="form-control title">
        <option value="">Select</option>
        <option value="Bachelor of Information of Technology">Bachelor of Information of Technology</option>
        <option value="Bachelor of Applied Information Technology">Bachelor of Applied Information Technology</option>
        <option value="Postgraduate Diploma in  Applied Information Technology">Postgraduate Diploma in  Applied Information Technology</option>
     <option value="Master in Applied Information Technology">Master of  Applied Information Technology</option>
      </select>
       </div>
   
     @if($errors->has('program')) 
         <div class='alert alert-danger'>{{$errors->first('program')}}</div>

   
   @endif
    
    <hr/>
    <br/>
         <h5>Which module are you applying for?  *</h5>
    
       <div class="form-group">
        <input type="checkbox" name="module[]" value="Applied information Technology INFO821">Applied information Technology INFO821<br/>
        <input type="checkbox" name="module[]" value="Information Technology Internshiip INFO822">Information Technology Internshiip INFO822
       </div>
   
     @if($errors->has('module')) 
         <div class='alert alert-danger'>{{$errors->first('module')}}</div>

   
   @endif
    
    <br/>
     
           <h5>When do you want to complete the project or internship? *</h5>
    
       <div class="form-group">
      <select name="semester" class="form-control title">
        <option value="">Select</option>
        <option value="semeste rA">Semester A</option></option>
        <option value="semester B">Semester B</option>
      </select>
       </div>
   
     @if($errors->has('semester')) 
         <div class='alert alert-danger'>{{$errors->first('semester')}}</div>

   
   @endif
    <br/>
    
    
     
              <h5>Have you confirmed that you meet the entry criteria for the module? *</h5>
    
       <div class="form-group">
    <input type="radio" name="eligibility" value="Yes">Yes
       </div>
   
     @if($errors->has('eligibility')) 
         <div class='alert alert-danger'>{{$errors->first('eligibility')}}</div>

   
   @endif
    
  <hr/><br/>
      <h5>What do you hope to gain and/or be involved in during your applied project/internship experience? How does this relate to your current and future personal, academic and professional direction? *</h5>
    
       <div class="form-group">
           <textarea name="do1" class="form-control title" placeholder="" rows=4></textarea>
           </div>
        @if($errors->has('do1')) 
         <div class='alert alert-danger'>{{$errors->first('do1')}}</div>

   
   @endif
  
  <br/>
      <h5>

Why have you chosen this particular business/agency/organisation? *</h5>
       <div class="form-group">
           <textarea name="do2" class="form-control title" placeholder="" rows=4></textarea>
           </div>
        @if($errors->has('do2')) 
         <div class='alert alert-danger'>{{$errors->first('do2')}}</div>
   @endif
   
   <br/>
   
      <h5>
What knowledge, skills and/or experience do you currently have in the area you have chosen that would support your proposal? *</h5>
       <div class="form-group">
           <textarea name="do3" class="form-control title" placeholder="" rows=4></textarea>
           </div>
        @if($errors->has('do3')) 
         <div class='alert alert-danger'>{{$errors->first('do3')}}</div>
   @endif
   <br/>
   
      <h5>
What are your key goals and objectives for the project or internship? *</h5>
       <div class="form-group">
           <textarea name="do4" class="form-control title" placeholder="" rows=4></textarea>
           </div>
        @if($errors->has('do4')) 
         <div class='alert alert-danger'>{{$errors->first('do4')}}</div>
   @endif
   <hr/><br/>
   
          <h5>Which of the following subject areas are you experienced or proficient in? (Select all that apply) *</h5>
    
       <div class="form-group">
        <input type="checkbox" name="core[]" value="Network Engineering">Network Engineering<br/>
        <input type="checkbox" name="core[]" value="Software Engineering">Software Engineering<br/>
        <input type="checkbox" name="core[]" value="Database Architecture">Database Architecture<br/>
        <input type="checkbox" name="core[]" value="Web Development">Web Development<br/>
        <input type="checkbox" name="core[]" value="Management of IT">Management of IT<br/>
        <input type="checkbox" name="core[]" value="Bussiness Analysis">Bussiness Analysis<br/>
        <input type="checkbox" name="core[]" value="Security and Forensics">Security and Forensics<br/>
        
       </div>
   
     @if($errors->has('core')) 
         <div class='alert alert-danger'>{{$errors->first('core')}}</div>

   
   @endif
  
  <hr/>
  <br/>
  
              <h5>Security *</h5>
    
       <div class="form-group">
    <input type="radio" name="security" value="my knowledge is limited or N/A">my knowledge is limited or N/A<br/>
    <input type="radio" name="security" value="I am developing your knowledge">I am developing your knowledge<br/>
    <input type="radio" name="security" value="I am confident/Proficient">I am confident/Proficient<br/>
    <input type="radio" name="security" value="I am an expert/very expierenced">I am an expert/very expierenced<br/>
    
       </div>
   
     @if($errors->has('security')) 
         <div class='alert alert-danger'>{{$errors->first('security')}}</div>

   
   @endif<br/>
    
  
      <h5>
If there is anything else you would like to add to support your application that you have not included in your e-portfolio, your CV or this survey, you can do so here:</h5>
       <div class="form-group">
           <textarea name="cvs" class="form-control title" placeholder="" rows=4></textarea>
           </div>
        @if($errors->has('cvs')) 
         <div class='alert alert-danger'>{{$errors->first('cvs')}}</div>
   @endif
   
  <hr/><br/>
  By submitting this expression on interest, I agree for my person information to be shared with industry partners in the process of getting a placement for me.  This includes but may not be limited to, information from the Expression of Interest, my e-portfolio, my CV, my academic results and results from the ethics evaluations.  WINTEC may use Information collected for the purpose of getting me a placement and managing applications.
  <br/><br/>
  
   <input type="radio" name="agree" value="i agree">I Agree<br/>
      @if($errors->has('core')) 
         <div class='alert alert-danger'>{{$errors->first('core')}}</div>

   
   @endif
  
  
    <div class="form-group">
             &nbsp;&nbsp;&nbsp;&nbsp;<br/>  <input type="submit" name="submit" class="btn btn-warning" value="Submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="reset" name="clear" class="btn btn-primary" value="Clear">
           </div>
       </div>
    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
@endif;
