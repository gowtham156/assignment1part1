<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
   

<script>
 function isDecimal(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode >= 48 && charCode <= 57) || (charCode == 46) || (charCode == 45) || (charCode == 43))
                return true;
            else
			alert("Only Numbers,(+),(-)Are  Allowed");
                return false;
        }
		</script>
		
		<script>
 function isChar(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode >= 65 && charCode <= 90) ||(charCode >= 97 && charCode <= 122))
                return true;
            else
			alert("Only Characters are Allowed");
                return false;
        }


 function isChar1(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if ((charCode >= 65 && charCode <= 90) ||(charCode >= 97 && charCode <= 122))
                return true;
            else
			alert("Only Characters are Allowed");
                return false;
        }
		</script>


    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/home') }}">
            Admin Portal
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
              <!--  <ul class="nav navbar-nav">
                     <li><a href="{{ url('/home') }}">Home</a></li>
                  
                   </ul>
-->
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    
                    <!-- Authentication Links -->
                    @if (Session::has('wintecadmin'))
                <!--   <li><a href="{{ url('/Course') }}">Course</a></li>
                      <li><a href="{{ url('/Department') }}">Department</a></li>
                        <li><a href="{{ url('/Staff') }}">Staff</a></li>
                        <li><a href="{{ url('/Staffrole') }}">Staff Role</a></li>
                    <li><a href="{{ url('/Subject') }}">Subjects</a></li>
                    -->
                    <li><a href="{{ url('/appliedEOI') }}">Applied EOI</a></li>
                    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              @if (Session::has('wintecadmin1'))        {{ Session::get('wintecadmin1') }} @endif <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @else
                      
                         <li><a href="{{ url('/alogin') }}">Log In</a></a></li>
                 
                 
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
