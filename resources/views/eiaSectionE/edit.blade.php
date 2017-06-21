<!DOCTYPE html>
<html lang="en">
<head>
  <title>EIA Section E</title>
<!--   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/justified-nav.css" rel="stylesheet" type="text/css">
  <link href="css/templatemo_style.css" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  {!!Html::style('css/bootstrap.min.css')!!}
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
       <img src="{{URL::asset('/image/banner1.png')}}" alt="profile Pic" height="100" width="2048", class="img-responsive cleaner">
    </div>
    <div class="col-xs-10" style="height:20px;"></div>
    </div>
  <!-- HEADER -->






<!-- DISPLAY PERSONAL INFO -->
<div class="col-xs-10" style="height:20px;"></div>   

 <div class="well well-sm"  style="margin-left: 5%; margin-right: 15%; background-color: white">
 <table style="width: 60%">
    <tbody>   
      <tr>
        <td>
          <label>&nbsp &nbsp &nbsp NEW APPLICANT </label>
        </td>
        <td>
          <label>: &nbsp &nbsp &nbsp EIA CONSULTANT</label>
        </td>
      </tr>
      <tr>
        <td>
          <label> &nbsp &nbsp &nbsp NRIC / PASSPORT NUMBER</label>
        </td>
        <td>
          <label>: &nbsp &nbsp &nbsp <!-- 931405105499 --></label>
          <strong>{{ Auth::user()->nric }}</strong>
        </td>
      </tr>
      <tr>
        <button class="button" a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
      </tr>  
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
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
          <li class="active"><a href="/eiaSectionA/create">SECTION A</a></li>
                    <li class="active"><a href="/eiaSectionB/create">SECTION B</a></li>
                    <li class="active"><a href="/eiaSectionC/create">SECTION C</a></li>

                    <li class="active"><a href="/eiaSectionD/create">SECTION D</a></li>
              
                    <li class="active"><a href="/eiaSectionE/create">SECTION E</a></li>
              
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
   SECTION E - SPECIALIZED AREA
 </strong></h3>





    
<!-- INSTRUCTION -->
  <div style="width: 60%; margin-left: 5%" class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">EIA Section E Instruction :</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">   •  Applicant only can only select <strong>maximum of TWO</strong> specialized area from THREE<br />
   •  Click on button <strong>Cancel Registration</strong> to cancel your application<br />
   •  Click on button <strong>Save Draft</strong> to save your application as draft<br />
   •  Click on button <strong>Next</strong> to save your application and continue to next step<br />
   •  You are <strong style="color: red">NOT ALLOWED</strong> to go to next page before completing this section
        </div>
      </div>
    </div>
  </div>
  <script>
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
  });
  </script>
  
  
      
<!-- FORM -->

<div class="col-xs-12" style="height:50px;"></div>   
<!-- FORM -->
<div class="table-responsive">
   <div class="well well-lg"  style="margin-left: 10%; margin-right: 10%; border-color: blue; background-color: #e6f2ff">      <table class="table table-bordered">
    <tbody>
    {!! Form::model($eiaSectionE, ['route' =>['eiaSectionE.update', $eiaSectionE->id], 'method' => 'PUT', 'files' => true]) !!}
    <tr>
      <td  style="width: 50%; background-color: #428bca; color: white"><center>
        First Specialized Area
      </center></td>
      <td  style="width: 50%; background-color: #428bca; color: white"><center>
        Second Specialized Area
      </center></td>
    </tr>
     <tr>
        <td><center>
        </br>
        {{ Form::select('first_specialize', [
    'Air Pollution Control' =>
    ['Air Pollution Control - Pollution Control Technology' => 'Pollution Control Technology',
    'Air Pollution Control - Impact Assessment' => 'Impact Assessment',
    'Air Pollution Control - Environmental Management' => 'Environmental Management',
    'Air Pollution Control - Performance Monitoring' => 'Performance Monitoring',
    'Air Pollution Control - Environmental Planning' => 'Environmental Planning',
    'Air Pollution Control - Risk Assessment' => 'Risk Assessment'],

    'Water Pollution Control' =>
    ['Water Pollution Control - Pollution Control Technology' => 'Pollution Control Technology',
    'Water Pollution Control - Impact Assessment' => 'Impact Assessment',
    'Water Pollution Control - Environmental Management' => 'Environmental Management',
    'Water Pollution Control - Performance Monitoring' => 'Performance Monitoring',
    'Water Pollution Control - Environmental Planning' => 'Environmental Planning',
    'Water Pollution Control - LDP2M2' => 'LDP2M2'],

    'Waste Management' =>
    ['Waste Management - Pollution Control Technology' => 'Pollution Control Technology',
    'Waste Management - Impact Assessment' => 'Impact Assessment',
    'Waste Management - Environmental Management' => 'Environmental Management',
    'Waste Management - Performance Monitoring' => 'Performance Monitoring',
    'Waste Management - Environmental Planning' => 'Environmental Planning',
    'Waste Management - Risk Assessment' => 'Risk Assessment'],    
], null, array('class' => 'form-control', 'style' => 'width: 90%', 'required' => ''))}}
        </br></br>
        </center></td>
        <td><center>
        </br>
        {{ Form::select('second_specialize', [
    'Air Pollution Control' =>
    ['Air Pollution Control - Pollution Control Technology' => 'Pollution Control Technology',
    'Air Pollution Control - Impact Assessment' => 'Impact Assessment',
    'Air Pollution Control - Environmental Management' => 'Environmental Management',
    'Air Pollution Control - Performance Monitoring' => 'Performance Monitoring',
    'Air Pollution Control - Environmental Planning' => 'Environmental Planning',
    'Air Pollution Control - Risk Assessment' => 'Risk Assessment'],

    'Water Pollution Control' =>
    ['Water Pollution Control - Pollution Control Technology' => 'Pollution Control Technology',
    'Water Pollution Control - Impact Assessment' => 'Impact Assessment',
    'Water Pollution Control - Environmental Management' => 'Environmental Management',
    'Water Pollution Control - Performance Monitoring' => 'Performance Monitoring',
    'Water Pollution Control - Environmental Planning' => 'Environmental Planning',
    'Water Pollution Control - LDP2M2' => 'LDP2M2'],

    'Waste Management' =>
    ['Waste Management - Pollution Control Technology' => 'Pollution Control Technology',
    'Waste Management - Impact Assessment' => 'Impact Assessment',
    'Waste Management - Environmental Management' => 'Environmental Management',
    'Waste Management - Performance Monitoring' => 'Performance Monitoring',
    'Waste Management - Environmental Planning' => 'Environmental Planning',
    'Waste Management - Risk Assessment' => 'Risk Assessment'],    
], null, array('class' => 'form-control', 'style' => 'width: 90%', 'required' => ''))}}
        </br></br>
        </center></td>
        </tr>
    </tbody>

    
    
  </table>

</div></div>
<button style="margin-right: 10%" type="submit" class="button save">Update</button>
</br>
  {!! Form::close() !!}
    

</br></br>

</div></div></div>

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
      

      
    <!-- templatemo 393 fantasy -->
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
  <script>
  $("#datepicker").datepicker({dateFormat: "yy/mm/dd"});
  $("#datepicker2").datepicker({dateFormat: "yy/mm/dd"});
  </script>
    </div>
<!-- FOOTER -->


</body>
</html>
