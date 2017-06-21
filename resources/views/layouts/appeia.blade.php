<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'EIA Consultant') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <style type="text/css">

    footer {
      background-color: green;
      color: white;
      padding: 15px;
    }

    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="background-color:white">

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
			<div>
      <img src="{{URL::asset('/image/banner1.png')}}" alt="profile Pic" height="100" width="2048", class="img-responsive cleaner">
    </div>
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a style="color:blue"class="navbar-brand" href="{{ url('/') }}">
                       EIA Consultant
                    </a>
					
					
					
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
							
							<li class="dropdown">
                                <a style="color:black" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <strong>SELF LEARNING</strong>
									<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="{{ Request::is('modules.index') ? "active" : "" }}"><a href="{{ route('modules.index') }}">Module 1</a></li>
                                    <li class="{{ Request::is('modules2.index') ? "active" : "" }}"><a href="{{ route('modules2.index') }}">Module 2</a></li>
                                    <li class="{{ Request::is('modules3.index') ? "active" : "" }}"><a href="{{ route('modules3.index') }}">Module 3</a></li>
                                    <li class="{{ Request::is('modules4.index') ? "active" : "" }}"><a href="{{ route('modules4.index') }}">Module 4</a></li>
                                    <li class="{{ Request::is('modules5.index') ? "active" : "" }}"><a href="{{ route('modules5.index') }}">Module 5</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li class="{{ Request::is('modulsummary') ? "active" : "" }}"><a href="{{ route('results.index') }}">Summary</a></li>
                                </ul>
                            </li>
						
						<li class="{{ Request::is('exam') ? "active" : "" }}"><a href="/examschedules"><strong>COMPREHENSIVE EXAM</strong></a></li>
                        <li class="{{ Request::is('startassignment') ? "active" : "" }}"><a href="/startassignment"><strong>COURSE ASSIGNMENT</strong></a></li>

						<li class="{{ Request::is('interview') ? "active" : "" }}"><a href="/interview"><strong>PROFESSIONAL INTERVIEW</strong></a></li>
                        <li class="{{ Request::is('certificate') ? "active" : "" }}"><a href="/certificate"><strong>CERTIFICATE</strong></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <br>{{ Auth::user()->nric }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default"style="margin-left:8%;width:84%">
                
                <div class="panel-body">
                   <label style="margin-left:3%">Time Remaining (Validation ID): &nbsp;</label><label id="demo" style=""></label>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Sept 19, 2017 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>

<footer class="container-fluid text-center">
  <label>Copyright © 2017 Jabatan Alam Sekitar</label>
</footer>


    <!-- Scripts -->
    <script src="/js/app.js"></script>

	 
	
</body>

</html>
