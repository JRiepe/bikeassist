<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title of Page -->
    <title>Bike Assist</title>
    <!-- Logo in Tab -->
    <link rel="icon" sizes="16x16" href="/images/bikeassist.png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    
    <!-- My Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">    
</head>

<body id="app-layout"  class="theBack">
   
   <!-- Top Navigation Bar -->

    <nav class="navbar navbar-inverse navbar-static-top theBanner">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a class="" href="{{ url('/') }}">
                        <img src="{{ URL::asset('/images/bikeassist.png')}}" alt="Logo" height="75" width="75">    
                    </a>                   
                </div>
                <div class="col-md-11 text-left theBanner">
                    <h2>Find Bike Paths and Track your ride data.</h2>
                </div>
            </div>
            
            <div class="navbar-header theBanner">

                
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed theBanner" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand theBanner" href="{{ url('/') }}">
                    
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/trail') }}">Bike Trails</a></li>
                    <li><a href="{{ url('/ride') }}">Your Ride</a></li>
                    <li><a href="{{ url('/chart') }}">Chart your Ride</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right theBanner">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown theBanner">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav> <!-- End Navbar      -->
    
    <!-- Flash Message -->

    <div class='text-center'>@include('flash::message')
    </div>
    
    <!-- Content from other blades goes here -->

    @yield('content')
    
    <!-- Footer -->

    <div class="footer navbar-fixed-bottom">
        <div class="container text-center">
            <p>&copy; 2016 John Riepe</p>
            
                <tr>
                    <td><a href="https://www.facebook.com/jriepe" target="_blank" alt='Facebook' data-toggle="tooltip" data-placement="top" title="Facebook"><button type='button' class='fa fa-facebook fa-2x theBanner'></button></a></td>
                    <td><a href="https://github.com/JRiepe" target="_blank" alt='Github' data-toggle="tooltip" data-placement="top" title="Github"><button type='button' class='fa fa-github fa-2x theBanner'></button></a></td>
                    <td><a href="https://www.linkedin.com/in/jriepe" target="_blank" alt='LinkedIn' data-toggle="tooltip" data-placement="top" title="LinkedIn"><button type='button' class='fa fa-linkedin fa-2x theBanner'></button></a></td>
                </tr>
           
        </div>
    </div>
    
    <!-- JavaScripts -->
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>
