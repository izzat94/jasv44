<!DOCTYPE html>
<html lang="en">
<head>
  <title>EIA Section C</title>
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
      <img src="{{URL::asset('/image/banner1.png')}}" alt="header image" width="2048" height="100" class="img-responsive cleaner">
      <!-- img src="image/banner1.png" alt="header image" width="2048" height="100" class="img-responsive cleaner" -->
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
   SECTION C - COMPETENCY COURSE FROM INSTITUT ALAM SEKITAR MALAYSIA (EiMAS)
 </strong></h3>



<!-- FORM -->
  <div class="table-responsive">
  <div class="container" style="width: 90%">
  <table class="table table-hover">
    <thead>
      <tr style="background-color: #d9d9d9">
        <th style="width: 70%;text-align: center;">Name / Course Title</th>
        <th style="width: 10%;text-align: center;">Date Completed</th>
        <th style="width: 10%;text-align: center;">Certificate No</th>
        <th colspan="2" style="width: 10%;text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($eiaSectionC as $eiaSectionCs)
      <tr style="background-color: #f2f2f2">
        <td>{{ $eiaSectionCs->course }}</td>
        <td>{{ date('d/m/Y', strtotime($eiaSectionCs->date_complete)) }}</td>
        <td>{{ $eiaSectionCs->cert_no }}</td>
        <td><center>
        <a href="{{ route('eiaSectionC.edit', $eiaSectionCs->id) }}" >
          {{ HTML::image('/image/edit.png', 'a Edit', array('width' => '30', 'height' => '30')) }}</a>
          </td>
          <td>
          {!! Form::open(['route' => ['eiaSectionC.destroy', $eiaSectionCs->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()']) !!}
          <center>{!! Form::image('/image/delete.png', 'a Delete', ['type' => 'submit', 'width' => '30', 'height' => '30'] ) !!}</center>
          {!! Form::close() !!}
        </center></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div></div>
            <button style="margin-right: 5%" type="button" class="button next" onclick="window.location.href='/eiaSectionD/create'">Next</button>


            <button type="button" class="button add" data-toggle="modal" data-target="#eiaSecC">Add New</button>

           </br></br>
           </div>
            <!-- add content -->
  <div class="modal fade" id="eiaSecC" role="dialog">
    <div class="modal-dialog" style="width: 90%">
    
      <!-- Reg content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">ADD NEW COMPETENCY COURSE FROM INSTITUT ALAM SEKITAR MALAYSIA (EiMAS)</h4></center>
        </div>
        <div class="modal-body">
    <!-- FORM -->
<div class="table-responsive">
   <div class="well well-lg"  style="margin-left: 10%; margin-right: 10%; border-color: blue; background-color: #e6f2ff">    
  <table class="table">
    <tbody>
    {!! Form::open(['route' => 'eiaSectionC.store', 'data-parsley-validate'=> '']) !!}
      <tr>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">Name / Course Title</label>
          <label for="example-text-input" style="color: red" class="col-2 col-form-label">*</label>
        </td>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">:</label>
        </td>
        <td>
        <!-- {{ Form::select('course', 
        ['select' => '- Please select your competency course -', 
        'Certified Environmental Professional in Industrial Effluent Treatment System (Biological Process)(CePIETSO-BP)' => 
        'Certified Environmental Professional in Industrial Effluent Treatment System (Biological Process)(CePIETSO-BP)', 
        'Certified Environmental Professional in the Treatment of Palm Oil Mill Effluent (Pond Processes)(CePPOME)' => 'Certified Environmental Professional in the Treatment of Palm Oil Mill Effluent (Pond Processes)(CePPOME)', 
        'Certified Environmental Professional in Sewage Treatment Plant Operation (CePSTPO)' => 
        'Certified Environmental Professional in Sewage Treatment Plant Operation (CePSTPO)', 
        'Certified Environmental Professional in Industrial Effluent (CePIETSO-PCP)' => 
        'Certified Environmental Professional in Industrial Effluent (CePIETSO-PCP)', 
        'Certified Environmental Professional in Scrubber Operation (CePSO)' => 
        'Certified Environmental Professional in Scrubber Operation (CePSO)', 
        'Certified Environmental Professional in Bag Filter Operation (CeBFO)' => 
        'Certified Environmental Professional in Bag Filter Operation (CeBFO)', 
        'Certified Environmental Professional in Scheduled Waste Management (CePSWaM)' => 
        'Certified Environmental Professional in Scheduled Waste Management (CePSWaM)',  ], null, array('class' => 'form-control', 'required' => ''))}} -->
        <select name="course" class="form-control" style="width: 99%" required="">
<option data-foo="" value="" disabled="true" selected="true">--Please select your competency course--</option>
    <option value="Certified Environmental Professional in Industrial Effluent Treatment System (Biological Process)(CePIETSO-BP)">Certified Environmental Professional in Industrial Effluent Treatment System (Biological Process)(CePIETSO-BP)</option>
    <option value="Certified Environmental Professional in the Treatment of Palm Oil Mill Effluent (Pond Processes)(CePPOME)">Certified Environmental Professional in the Treatment of Palm Oil Mill Effluent (Pond Processes)(CePPOME)</option>
    <option value="Certified Environmental Professional in Sewage Treatment Plant Operation (CePSTPO)">Certified Environmental Professional in Sewage Treatment Plant Operation (CePSTPO)</option>
    <option value="Certified Environmental Professional in Industrial Effluent (CePIETSO-PCP)">Certified Environmental Professional in Industrial Effluent (CePIETSO-PCP)</option>
    <option value="Certified Environmental Professional in Scrubber Operation (CePSO)">Certified Environmental Professional in Scrubber Operation (CePSO)</option>
    <option value="Certified Environmental Professional in Bag Filter Operation (CeBFO)">Certified Environmental Professional in Bag Filter Operation (CeBFO)</option>
    <option value="Certified Environmental Professional in Scheduled Waste Management (CePSWaM)">Certified Environmental Professional in Scheduled Waste Management (CePSWaM)</option>
</select>
        </td>
      </tr>
      <tr>
        <td style="width: 20%;">
          <label for="example-text-input" class="col-2 col-form-label">Date Completed</label>
          <label for="example-text-input" style="color: red" class="col-2 col-form-label">*</label>
        </td>
        <td style="width: 5%;">
          <label for="example-text-input" class="col-2 col-form-label">:</label>
        </td>
        <td>
          {!! Form::date('date_complete', '', array('id' => 'datepicker', 'class' => 'form-control', 'style' => 'width: 30%', 'required' => '' )) !!}
        </td>
      </tr>
      <tr>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">Certificate No.</label>
          <label for="example-text-input" style="color: red" class="col-2 col-form-label">*</label>
        </td>
        <td>
          <label for="example-text-input" class="col-2 col-form-label">:</label>
        </td>
        <td>
          {{ Form::text('cert_no', null, array('class' => 'form-control', 'style' => 'width: 30%', 'placeholder'=>'Eg: AF 32457', 'required' => ''))}}
        </td>
      </tr>
    </tbody>
  </table>
</div></div></div>
<button type="submit" class="button next" style="margin-right: 15%">Next</button>
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
  <!-- <script>
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
