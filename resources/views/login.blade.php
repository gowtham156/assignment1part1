<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body>
    

<ul>
  <li style="background-color:#ffff00;">  <img src="https://www.wintec.ac.nz/remote.axd?wintecprodpublicwebsite.blob.core.windows.net/sitefinity-storage/images/default-source/common/wintec-virtualhub-logo.png?sfvrsn=d875ea33_40&quality=75"/>
   </li> <li><a href="{{ url('/home') }}" >Home</a></li>
                      <li><a href="{{ url('/about') }}">About</a></li>
                         <li><a href="{{ url('/login') }}"> Student Login</a></li>
                                                <li><a href="{{ url('/alogin') }}">Admin Login</a></li>
                   
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
               
</ul>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 2</div>
  <img src="https://www.wintec.ac.nz/remote.axd?wintecprodpublicwebsite.blob.core.windows.net/sitefinity-storage/images/default-source/home/banners/open-day-2018.jpg?sfvrsn=b3fcdd33_0mode=crop&upscale=false&quality=90" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 2</div>
  <img src="https://www.wintec.ac.nz/remote.axd?wintecprodpublicwebsite.blob.core.windows.net/sitefinity-storage/images/default-source/home/banners/ncearesults-webbanner-0118_3.jpg?sfvrsn=cee3d133_8mode=crop&upscale=false&quality=90" style="width:100%">
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</br></br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Student Login</div>

                <div class="panel-body">
   

  @if(Session::has('studenterror'))
<div class="alert alert-danger">
   {{ Session::get('studenterror') }}
</div>
@endif


  
    <form method="POST" action="public/slogin" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off" onpaste="return false" >
       {{ csrf_field() }}		<!—To protect your application from CSRF attacks-->
       
       
         
   
       <h5> Email Address</h5>
       <div class="form-group">
           <input type="email" name="email" class="form-control title" placeholder="Email Address" >
       </div>
                 
       @if($errors->has('email')) 
         <div class='alert alert-danger'>{{$errors->first('email')}}</div>

   
   @endif
    
        
       
          <h5> Password</h5>
    
       <div class="form-group">
           <input type="password" name="password" class="form-control title" placeholder="Password..." >
       </div>
   
     @if($errors->has('password')) 
         <div class='alert alert-danger'>{{$errors->first('password')}}</div>

   
   @endif
    
    <div class="form-group">
             &nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" name="submit" class="btn btn-warning" value="Login"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="reset" name="clear" class="btn btn-primary" value="Clear">
           </div>
       </div>
    </form>
                </div>
            </div>
        </div>
    </div>
<ul>
    <li><a href="">Developed By Gowtham and Bikal. &copy; All rights Reserved</a></li>
</ul>
</body>
</html> 

