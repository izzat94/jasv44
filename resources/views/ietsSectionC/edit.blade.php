<!DOCTYPE html>
<html lang="en">
<head>
  <title>IETS Section C</title>
<!--   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta charset="utf-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <meta name="keywords" content="" />
  <meta name="description" content="" /> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/justified-nav.css')!!}
  {!!Html::style('css/templatemo_style.css')!!}
  {!!Html::style('css/parsley.css')!!}
  {!!Html::style('css/button.css')!!}

    <script type="text/javascript">
        function GetDays(){
                var dropdt = new Date(document.getElementById("datepicker2").value);
                var pickdt = new Date(document.getElementById("datepicker").value);
                return parseInt((dropdt - pickdt) / (24 * 3600 * 1000));
        }

        function cal(){
        if(document.getElementById("datepicker2")){
            document.getElementById("numdays2").value=GetDays();
        }  
    }

    </script>

    <script type="text/javascript">
        function GetMonths(){
                var dropdate = new Date(document.getElementById("datepicker2").value);
                var pickdate = new Date(document.getElementById("datepicker").value);
                return parseInt((dropdate - pickdate) / (24 * 3600 * 1000) / 30);
        }

        function calculate(){
        if(document.getElementById("datepicker2")){
            document.getElementById("numMonths2").value=GetMonths();
        }  
    }

    </script>

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
      <img src="{{URL::asset('/image/banner1.png')}}" alt="header image" width="2048" height="100" class="img-responsive cleaner">
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
          <label>: &nbsp &nbsp &nbsp IETS CONSULTANT</label>
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
          <li class="active"><a href="/ietsSectionA/create">SECTION A</a></li>
                    <li class="active"><a href="/ietsSectionB/create">SECTION B</a></li>
                    <li class="active"><a href="/ietsSectionC/create">SECTION C</a></li>

                    <li class="disabled"><a>SECTION D</a></li>
              
                    <li class="disabled"><a>SECTION E</a></li>
            </ul>
            </div> <!-- nav -->
          </div>
          </div>
  <!-- NAVIGATION BAR -->






<!-- PAGE TITLE -->
<div class="well well-lg" style="margin-left: 5%; margin-right: 5%">
  <h2 style="margin-left: 5%">PRE-QUALIFICATION REGISTRATION FORM</h2>
  
 <h3 style="margin-left: 5%"><strong>
   SECTION C - PRACTICAL EXPERIENCE
 </strong></h3>





 
<!-- INSTRUCTION -->
  <div style="width: 60%; margin-left: 5%" class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">IETS Section C Instruction :</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">   •  List of IETS consultancy projects and IETS installations carried out in the last <strong>THREE</strong> years. <br />
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



<div class="col-xs-12" style="height:50px;"></div>

<!-- FORM -->
<div class="table-responsive">
   <div class="well well-lg"  style="margin-left: 10%; margin-right: 10%; border-color: blue; background-color: #e6f2ff">    
  <table class="table">
    <tbody>
    {!! Form::model($ietsSectionC, ['route' =>['ietsSectionC.update', $ietsSectionC->id], 'method' => 'PUT', 'files' => true]) !!}
    <tr>
        <td style="width: 20%">
          <label for="example-text-input" class="col-2 col-form-label">Date</label>
          <label for="example-text-input" style="color: red" class="col-2 col-form-label">*</label>
        </td>
        <td style="width: 5%;">
          <label for="example-text-input" class="col-2 col-form-label">:</label>
        </td>
        <td>
        <div class="col-lg-11">
            <div class="input-group">
              <span class="input-group-addon">Date of Project Start</span>
              {!! Form::date('projectStart', null, array('id' => 'datepicker', 'class' => 'form-control', 'style' => 'width: 55%', 'title' => 'mm/dd/yyyy', 'required' => '','onchange' => 'cal();calculate()' )) !!}
            </div>
          </div>
          </br></br>
          <div class="col-lg-12">
            <div class="input-group">
              <span class="input-group-addon">Date of Project Completion</span>
              {!! Form::date('projectComplete', null, array('id' => 'datepicker2', 'class' => 'form-control', 'style' => 'width: 50%', 'title' => 'mm/dd/yyyy', 'required' => '','onchange' => 'cal();calculate()' )) !!}
            </div>
          </div>
          <br>
          <div id="numdays" class="left"  style="margin-left: 2%"><label class="form">Number of days:</label><!-- <input type="textbox" class="form-control" id="numdays2" name="numdays" readonly="readonly" style="width: 20%" /> -->
             {{ Form::text('numdays', null, array('class' => 'form-control', 'id' => 'numdays2', 'style' => 'width: 30%', 'readonly' => ''))}}
          </div>
          <div id="numMonths" class="left"><label class="form">Number of months:</label><!-- <input type="textbox" class="form-control" id="numdays2" name="numdays" readonly="readonly" style="width: 20%" /> -->
             {{ Form::text('numMonths', null, array('class' => 'form-control', 'id' => 'numMonths2', 'style' => 'width: 30%', 'readonly' => ''))}}
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">Title of Proposal</label>
          <label for="example-text-input" style="color: red" class="col-2 col-form-label">*</label>
        </td>
        <td style="width: 5%;">
          <label for="example-text-input" class="col-2 col-form-label">:</label>
        </td>
        <td>
          {{ Form::textarea('proposaltitle', null, array('style'=>'width: 95%', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Eg: ', 'required' => ''))}}
          <!--<textarea style="width: 70%" class="form-control" rows="5" id="comment"></textarea>-->
        </td>
      </tr>
      <tr>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">Name of Client</label>
          <label for="example-text-input" style="color: red" class="col-2 col-form-label">*</label>
        </td>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">:</label>
        </td>
        <td>
          {{ Form::text('clientname', null, array('class' => 'form-control', 'style' => 'width: 95%', 'placeholder'=>'Eg: Jabatan Alam Sekitar', 'required' => ''))}}
          <!--<input style="width: 70%;" class="form-control" type="text" id="example-text-input">-->
        </td>
      </tr>
      <tr>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">Address of Client</label>
          <label for="example-text-input" style="color: red" class="col-2 col-form-label">*</label>
        </td>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">:</label>
        </td>
        <td>
          {{ Form::textarea('clientaddress', null, array('style'=>'width: 95%', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Eg: ', 'required' => ''))}}
          <!--<textarea style="width: 70%" class="form-control" rows="5" id="comment"></textarea>-->
        </td>
      </tr>
    </tbody>
  </table>
</div></div></div>
<button type="submit" class="button save" style="margin-right: 15%">Update</button>
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

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
   <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<!--   <script>
  $("#datepicker").datepicker({dateFormat: "yy/mm/dd"});
  $("#datepicker2").datepicker({dateFormat: "yy/mm/dd"});
  </script> -->
    </div>
<!-- FOOTER -->

</body>
</html>

