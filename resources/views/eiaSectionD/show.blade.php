<!DOCTYPE html>
<html lang="en">
<head>
  <title>EIA Section D</title>
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
              
                    <li class="disabled"><a>SECTION E</a></li>
              
                    <li class="disabled"><a>SECTION F</a></li>
            </ul>
            </div> <!-- nav -->
          </div>
          </div>
  <!-- NAVIGATION BAR -->




<!-- PAGE TITLE -->
<div class="well well-lg"   style="margin-left: 5%; margin-right: 5%">
  <h2 style="margin-left: 5%">PRE-QUALIFICATION REGISTRATION FORM</h2>
  
 <h3 style="margin-left: 5%"><strong>
   SECTION D - ENVIRONMENT MANAGEMENT EXPERIENCE
 </strong></h3>



<!-- FORM -->
  <div class="table-responsive">
  <div class="container" style="width: 99%">
  <table class="table table-hover" style="width: 99%">
    <thead>
      <tr style="background-color: #d9d9d9">
        <th style="text-align: center;">Participation in</th>
        <th style="text-align: center;">Name of Project</th>
        <th style="text-align: center;">Position</th>
        <th style="text-align: center;">Responsibilities</th>
        <th style="text-align: center;">Date Start</th>
        <th style="text-align: center;">Date End</th>
        <th style="text-align: center;">Number of Days</th>
        <th style="text-align: center;">Number of Months</th>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Address</th>
        <th style="text-align: center;">Email</th>
        <th colspan="2" style="text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($eiaSectionD as $eiaSectionDs)
      <tr style="background-color: #f2f2f2">
        <td>{{ $eiaSectionDs->participate }}</td>
        <td>{{ $eiaSectionDs->project_name }}</td>
        <td>{{ $eiaSectionDs->position }}</td>
        <td>{{ $eiaSectionDs->responsibilities }}</td>
        <td style="text-align: center;">{{ date('d/m/Y', strtotime($eiaSectionDs->dateStart)) }}</td>
        <td style="text-align: center;">{{ date('d/m/Y', strtotime($eiaSectionDs->dateEnd)) }}</td>
        <td style="text-align: center;">{{ $eiaSectionDs->numdays }}</td>
        <td style="text-align: center;">{{ $eiaSectionDs->numMonths }}</td>
        <td>{{ $eiaSectionDs->ref_name }}</td>
        <td>{{ $eiaSectionDs->ref_address }}</td>
        <td>{{ $eiaSectionDs->ref_email }}</td>
        <td>
        <a href="{{ route('eiaSectionD.edit', $eiaSectionDs->id) }}" >
          {{ HTML::image('/image/edit.png', 'a Edit', array('width' => '30', 'height' => '30')) }}</a>
          </td>
          <td>
          {!! Form::open(['route' => ['eiaSectionD.destroy', $eiaSectionDs->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()']) !!}
          {!! Form::image('/image/delete.png', 'a Delete', ['type' => 'submit', 'width' => '30', 'height' => '30'] ) !!}
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div></div>
            <button style="margin-right: 5%" type="button" class="button next" onclick="window.location.href='/eiaSectionE/create'">Next</button>


            <button type="button" class="button add" data-toggle="modal" data-target="#eiaSecD">Add New</button>

           </br></br>
           </div>

            <!-- add content -->
  <div class="modal fade" id="eiaSecD" role="dialog">
    <div class="modal-dialog" style="width: 90%">
    
      <!-- Reg content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">ADD NEW ENVIRONMENT MANAGEMENT EXPERIENCE</h4></center>
        </div>
        <div class="modal-body">

<!-- FORM -->
<div class="table-responsive">
   <div class="well well-lg"  style="margin-left: 5%; margin-right: 15%; border-color: blue; background-color: #e6f2ff">    
  <table class="table">
    <tbody>
    {!! Form::open(['route' => 'eiaSectionD.store', 'data-parsley-validate'=> '']) !!}
      <tr>
        <td style="width: 15%">
          <label>Participation in</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
        <!-- {{ Form::select('participate', 
        ['select' => '- Please select your participation -', 
        'Participation in Term of Reference (TOR) preparation for Environmental Impact Assessment (EIA) Study' => 
        'Participation in Term of Reference (TOR) preparation for Environmental Impact Assessment (EIA) Study', 
        'Participation in Environmental Impact Assessment (EIA) Study' => 
        'Participation in Environmental Impact Assessment (EIA) Study', 
        'Participation in Environmental Assessment or Site Assessment' => 
        'Participation in Environmental Assessment or Site Assessment', 
        'Participation in preparation of Environmental Management Plan (EMP)' => 'Participation in preparation of Environmental Management Plan (EMP)', 
        'Involvement in preparation of any EIA guidance documents or any other environmental and technical guidelines' => 
        'Involvement in preparation of any EIA guidance documents or any other environmental and technical guidelines', 
        'Study or research related to the consultant’s expertise' => 
        'Study or research related to the consultant’s expertise',
        'Participation in preparation of Land Disturbance Prevention Pollution Mitigating Measures (LDP2M2)' => 
        'Participation in preparation of Land Disturbance Prevention Pollution Mitigating Measures (LDP2M2)',
        'Participation in environmental modeling' => 
        'Participation in environmental modeling',
        'Participation in environmental statistic' => 
        'Participation in environmental statistic',
        'Participation in environmental monitoring' => 
        'Participation in environmental monitoring',
        'Participation in any environmental discipline' => 
        'Participation in any environmental discipline'  ], 'select', array('class' => 'form-control', 'required' => ''))}} -->


        <select name="participate" class="form-control" style="width: 95%" required="">
            <option data-foo="" value="" disabled="true" selected="true">--Please select your participation--</option>
            <option value="Participation in Term of Reference (TOR) preparation for Environmental Impact Assessment (EIA) Study">Participation in Term of Reference (TOR) preparation for Environmental Impact Assessment (EIA) Study</option>
            <option value="Participation in Environmental Impact Assessment (EIA) Study">Participation in Environmental Impact Assessment (EIA) Study</option>
            <option value="Participation in Environmental Assessment or Site Assessment">Participation in Environmental Assessment or Site Assessment</option>
            <option value="Participation in preparation of Environmental Management Plan (EMP)">Participation in preparation of Environmental Management Plan (EMP)</option>
            <option value="Involvement in preparation of any EIA guidance documents or any other environmental and technical guidelines">Involvement in preparation of any EIA guidance documents or any other environmental and technical guidelines</option>
            <option value="Study or research related to the consultant’s expertise">Study or research related to the consultant’s expertise</option>
            <option value="Participation in preparation of Land Disturbance Prevention Pollution Mitigating Measures (LDP2M2)">Participation in preparation of Land Disturbance Prevention Pollution Mitigating Measures (LDP2M2)</option>
            <option value="Participation in environmental modeling">Participation in environmental modeling</option>
            <option value="Participation in environmental statistic">Participation in environmental statistic</option>
            <option value="Participation in environmental monitoring">Participation in environmental monitoring</option>
            <option value="Participation in any environmental discipline">Participation in any environmental discipline</option>
        </select>

       
        </td>
      </tr>
      <tr>
        <td>
          <label>Name of Project</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          {{ Form::textarea('project_name', null, array('style'=>'width: 90%', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Eg: Integrated Research on the Development of Global Climate Risk Management Strategies', 'required' => ''))}}
        </td>
      </tr>
      <tr>
        <td>
          <label>Position</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
                  <!-- {{ Form::select('position', 
        ['select' => '- Please select your position -', 
        'Project Manager' => 'Project Manager', 
        'Developer' => 'Developer', 
        'Quality Assurance' => 'Quality Assurance', 
        'Tester' => 'Tester', 
        'System Analyse' => 'System Analyse' ], 'select', array('class' => 'form-control', 'style' => 'width: 30%', 'required' => ''))}} -->

        <select name="position" class="form-control" style="width: 30%" required="">
            <option data-foo="" value="" disabled="true" selected="true">--Please select your position--</option>
            <option value="Project Manager">Project Manager</option>
            <option value="Developer">Developer</option>
            <option value="Quality Assurance">Quality Assurance</option>
            <option value="Tester">Tester</option>
            <option value="System Analyse">System Analyse</option>
        </select>
        </td>
      </tr>
      <tr>
        <td>
          <label>Responsibilities</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          {{ Form::textarea('responsibilities', null, array('style'=>'width: 90%', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Eg: Prevent and remedy pollution incidents', 'required' => ''))}}
        </td>
      </tr>
      <tr>
        <td>
          <label>Date</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-addon">Date Start</span>
              {{ Form::date('dateStart', '', array('id' => 'datepicker', 'class' => 'form-control', 'style' => 'width: 55%','onchange' => 'cal();calculate()', 'required' => '' )) }}
            </div>
          </div>
          <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-addon">Date End</span>
              {{ Form::date('dateEnd', '', array('id' => 'datepicker2', 'class' => 'form-control', 'style' => 'width: 60%','onchange' => 'cal();calculate()', 'required' => '' )) }}
            </div>
          </div>
          <br><br><br>
          <div id="numdays" style="margin-left: 2%" class="left"><label class="form">Number of days:</label><input type="textbox" class="form-control" id="numdays2" name="numdays" readonly="readonly" style="width: 30%" /></div>

          <div id="numMonths" class="left"><label class="form">Number of months:</label><input type="textbox" class="form-control" id="numMonths2" name="numMonths" readonly="readonly" style="width: 30%" /></div>
        </td>
      </tr>
      <tr>
        <td colspan="3"><u><center>
        <div class="col-xs-12" style="height:50px;"></div>

          <label style="color: blue;">PROJECT REFERENCE</label></center></u>
        
        </td>
      </tr>
       <tr>
        <td>
          <label>Name</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          {{ Form::text('ref_name', null, array('style'=>'width: 90%', 'class' => 'form-control', 'placeholder'=>'Eg: Hussin Bin Muhammad', 'required' => ''))}}
        </td>
      </tr>
      <tr>
        <td>
          <label>Address</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          {{ Form::textarea('ref_address', null, array('style'=>'width: 90%', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Eg: No. 64, Jln Pahlawan 21, Taman Pahlawan', 'required' => ''))}}
        </td>
      </tr>
      <tr>
        <td>
          <label>Email</label>
          <label style="color: red">*</label>
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          {{ Form::email('ref_email', null, array('class' => 'form-control', 'style' => 'width: 30%', 'placeholder'=>'Eg: izzat@gmail.com', 'required' => ''))}}
          </td>
      </tr>
    </tbody>
  </table>
</div></div></div>
<button type="submit" class="button next" style="margin-right: 10%">Next</button>
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
      </div>
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
    <script>
function ConfirmDelete() {
    var txt;
    var r = confirm("Click OK to delete the data!\nClick Cancel to cancel!");
    if (r) {
        return true;
        txt = "You pressed OK!";
    } else {
        return false;
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
}
</script>
    </div>
<!-- FOOTER -->

</body>
</html>
