<!DOCTYPE html>
<html lang="en">
<head>
  <title>APCS Section B</title>
<!--   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/justified-nav.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
<!--   <link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
 -->  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/justified-nav.css')!!}
  {!!Html::style('css/templatemo_style.css')!!}
  {!!Html::style('css/parsley.css')!!}
  {!!Html::style('css/button.css')!!}

<style type="text/css">
  .well {
  background: white;
}
  .table th, .table td {
    border-top: none !important;
    border-left: none !important;
}
.fixed-table-container {
    border:0px;
}
button {
  float: right;
}
h3{
  font-size: 15px;
  font-style: bold;
}
.popover{
    max-width: 35%; /* Max Width of the popover (depending on the container!) */
}
.navbar { border: none; }
.navbar.templatemo-mobile-menu {
  position: fixed;
  top: 29px;
  right: 2px;
  z-index: 1000;
}
li {
        float: left;
    }

    li a, .dropbtn {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover, .dropdown:hover .dropbtn {
        background-color: #00ad00;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #006e00;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        font-weight: bold;
        padding: 5px 27px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content a:hover {background-color: #00ad00}

    .dropdown:hover .dropdown-content {
        display: block;
    }
    .navbar-header {
      background-color: #006e00;
    }
</style>
</head>
<body>


<div class="container">




<!-- HEADER -->
    <div class="container">
    <div>
      <img src="{{URL::asset('/image/banner1.png')}}" alt="header image" width="2048" height="100" class="img-responsive cleaner">
    </div>
    </div>
  <!-- HEADER -->


<!-- DISPLAY PERSONAL INFO -->
<div class="col-xs-12" style="height:50px;"></div>   

 <div class="well well-lg"  style="margin-left: 5%; margin-right: 15%">
 <table class="table" style="width: 60%">
    <tbody>   
      <tr>
        <td>
          <label>NEW APPLICANT </label>
        </td>
        <td>
          <label>: &nbsp &nbsp &nbsp APCS CONSULTANT</label>
        </td>
      </tr>
      <tr>
        <td>
          <label>NRIC / PASSPORT NUMBER</label>
        </td>
        <td>
          <label>: &nbsp &nbsp &nbsp <!-- 931405105499 --></label>
          <strong>{{ Auth::user()->nric }}</strong>
        </td>
      </tr>  
    </tbody>  
  </table>
  </div>
<!-- DISPLAY PERSONAL INFO -->





  <!-- NAVIGATION BAR -->
  <div class="container">
  <div class="navbar templatemo-nav" id="navbar">
        <div class="navbar-header">               
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav nav-justified">
          <li class="active"><a href="/apcsSectionA/create">SECTION A</a></li>
                    <li class="active"><a href="/apcsSectionB/create">SECTION B</a></li>
                    <li class="disabled"><a>SECTION C</a></li>

                    <li class="disabled"><a>SECTION D</a></li>
              
                    <li class="disabled"><a>SECTION E</a></li>
              
                    <li class="disabled"><a>SECTION F</a></li>
              
            </ul>
            </div> <!-- nav -->
          </div>
          </div>
  <!-- NAVIGATION BAR -->





<!-- PAGE TITLE -->
<div class="well well-lg" style="margin-left: 5%; margin-right: 5%">
  <h2 style="margin-left: 5%">PRE-QUALIFICATION REGISTRATION FORM</h2>
  
  <h3 style="margin-left: 5%"><strong>
   SECTION B - FIELD OF SPECIALIZATION IN AIR POLLUTION CONTROL
 </strong></h3>


          
 



<div class="col-xs-12" style="height:50px;"></div>
<div class="table-responsive">   
   <center><div class="well" style="background-color: #e6e9ed; width: 95%">    
  <table class="table table-bordered">
  <thead>
    <tr style="background-color: #d9d9d9">
        <th style="width: 30%; text-align: center;">Specialize</th>
        <th style="width: 70%; text-align: center;">Specialize Chosen</th>
        </tr>
  </thead>
    <tbody>
     @foreach($apcsSectionB as $apcsSectionBs)
      <tr>
      <td>
      Specialize 1
      </td>
      <td>
      {{ $apcsSectionBs->specialize_0 }}
      </td>
      </tr>
<!--  -->
       @if ($apcsSectionBs->specialize_1 != '')
      <tr>
      <td>
      Specialize 2
      </td>
      <td>
       <div class="specialize_1">
                            
                            {!! $apcsSectionBs->specialize_1 !!}</div>
      <!-- <strong>{{ $apcsSectionBs->specialize_1 }}</strong> -->
      </td>
      </tr>
       @endif
<!--  -->
       @if ($apcsSectionBs->specialize_2 != '')
      <tr>
      <td>
      Specialize 3
      </td>
      <td>
      <div class="specialize_2">
                            
                            {!! $apcsSectionBs->specialize_2 !!}</div>
     <!--  <strong>{{ $apcsSectionBs->specialize_2 }}</strong> -->
      </td>
      </tr>
      @endif
<!--  -->
       @if ($apcsSectionBs->specialize_3 != '')
      <tr>
      <td>
      Specialize 4
      </td>
      <td>
      <div class="specialize_3">
                            
                            {!! $apcsSectionBs->specialize_3 !!}</div>
      <!-- <strong>{{ $apcsSectionBs->specialize_3 }}</strong> -->
      </td>
      </tr>
      @endif
      </td>
      </tr>
       @endforeach
    </tbody>
  </table>
</div></div>
<div style="margin-right: 5%">
  <a href="/apcsSectionC/create" >
            {{ Form::button('Next', array('class'=>'button next', 'type'=>'submit')) }}</a>


      <a href="{{ route('apcsSectionB.edit', $apcsSectionBs->id) }}" >
            {{ Form::button('Edit', array('class'=>'button edit', 'type'=>'submit')) }}</a>
</div></div>

           <div class="col-xs-12" style="height:50px;"></div>             
</div></div><center>


<!-- FOOTER -->
    <div class="container">
              <footer>
      <div class="credit row">
        <center><div class="col-md-6 col-md-offset-3">
          <div id="templatemo_footer">Copyright © 2017 <a href="#">Jabatan Alam Sekitar</a>
          </div>
        </div>
            
      </div>
    </footer>

    {!! Html::script('js/parsley.min.js')!!}
{!! Html::script('js/jquery.js')!!}
{!! Html::script('js/bootstrap.min.js')!!}
{!! Html::script('js/templatemo_script.js')!!}
    <!-- templatemo 393 fantasy -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/templatemo_script.js"></script>
    <script type="text/javascript" src="js/disable_navbar.js"></script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<!--   <script>
  $("#datepicker").datepicker({dateFormat: "yy/mm/dd"});
  $("#datepicker2").datepicker({dateFormat: "yy/mm/dd"});
  </script> -->
    </div>
</body>
</html>

