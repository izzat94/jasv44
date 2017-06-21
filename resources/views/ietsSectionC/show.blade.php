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
        if(document.getElementById("datepicker2"))
          {
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



  <div class="table-responsive">
  <div class="container" style="width: 90%">
  <table class="table table-hover">
    <thead>
      <tr style="background-color: #d9d9d9">
        <th style="text-align: center;" valign="center">Date of Project Start</th>
        <th style="text-align: center;" valign="center">Date of Project Completion</th>
        <th style="text-align: center;" valign="center">Number of Days</th>
        <th style="text-align: center;" valign="center">Number of Months</th>
        <th style="text-align: center;" valign="center">Title of Proposal</th>
        <th style="text-align: center;" valign="center">Name of Client</th>
        <th style="text-align: center;" valign="center">Address of Client</th>
        <th colspan="2" style="text-align: center;" valign="center">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ietsSectionC as $ietsSectionCs)
      <tr style="background-color: #f2f2f2">
        <td>{{ date('d/m/Y', strtotime($ietsSectionCs->projectStart)) }}</td>
        <td>{{ date('d/m/Y', strtotime($ietsSectionCs->projectComplete)) }}</td>
        <td style="text-align: center;">{{ $ietsSectionCs->numdays }}</td>
        <td style="text-align: center;">{{ $ietsSectionCs->numMonths }}</td>
        <td>{{ $ietsSectionCs->proposaltitle }}</td>
        <td>{{ $ietsSectionCs->clientname }}</td>
        <td>{{ $ietsSectionCs->clientaddress }}</td>
        <td><center>
        <a href="{{ route('ietsSectionC.edit', $ietsSectionCs->id) }}" >
          {{ HTML::image('/image/edit.png', 'a Edit', array('width' => '30', 'height' => '30')) }}</a>
          </td>
          <td>
          {!! Form::open(['route' => ['ietsSectionC.destroy', $ietsSectionCs->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()']) !!}
          <center>{!! Form::image('/image/delete.png', 'a Delete', ['type' => 'submit', 'width' => '30', 'height' => '30'] ) !!}</center>
          {!! Form::close() !!}
        </center></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div></div>
            <button style="margin-right: 5%" type="button" class="button next" onclick="window.location.href='/ietsSectionD/create'">Next</button>


            <button type="button" class="button add" data-toggle="modal" data-target="#ietsSecC">Add New</button>

           </br></br>
           </div>

            <!-- add content -->
  <div class="modal fade" id="ietsSecC" role="dialog">
    <div class="modal-dialog" style="width: 70%">
    
      <!-- Reg content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">ADD NEW PRACTICAL EXPERIENCE</h4></center>
        </div>
        <div class="modal-body">
<!-- FORM -->
<div class="table-responsive">
   <div class="well well-lg"  style="margin-left: 10%; margin-right: 10%; border-color: blue; background-color: #e6f2ff">    
  <table class="table">
    <tbody>
    {!! Form::open(['route' => 'ietsSectionC.store', 'data-parsley-validate'=> '']) !!}
      <tr>
        <td style="width: 20%">
          <label>Date</label>
          
        </td>
        <td style="width: 5%;">
          <label>:</label>
        </td>
        <td>
<!--         <div class="col-lg-11">
            <div class="input-group">
              <span class="input-group-addon">Date of Project Start</span>
              {!! Form::date('projectStart', '', array('id' => 'datepicker', 'class' => 'form-control', 'style' => 'width: 40%', 'required' => '' )) !!}
                  

 
            </div>
          </div> -->
          <div id="projectStart"><p><label class="form">Date of Project Start : </label><input type="date" class="textbox" id="datepicker" name="projectStart" onchange="cal();calculate()" required="" /></p></div>
<!--           <div class="col-lg-12">
            <div class="input-group">
              <span class="input-group-addon">Date of Project Completion</span>
              {!! Form::date('projectComplete', '', array('id' => 'datepicker2', 'class' => 'form-control', 'style' => 'width: 40%', 'required' => '' )) !!}
                 
            </div>
          </div> -->
          <div id="projectComplete"><p><label class="form">Date of Project Completion : </label><input type="date" class="textbox" id="datepicker2" name="projectComplete" onchange="cal();calculate()" required=""/></p></div>
          
          <div id="numdays" style="margin-left: 2%" class="left"><label class="form">Number of days:</label><input type="textbox" class="form-control" id="numdays2" name="numdays" readonly="readonly" style="width: 30%" /></div>

          <div id="numMonths" class="left"><label class="form">Number of months:</label><input type="textbox" class="form-control" id="numMonths2" name="numMonths" readonly="readonly" style="width: 30%" /></div>
            <!-- <div style="margin:1%;" id="Result">
            <input type="text" class="textbox" name="Result"/>
             </div>
            <button type="button" onClick="CalculateDiff();" style="padding:1px; color:#0C6;margin-left:15%;margin-top:5%" >Calculate </button> -->
        </td>
      </tr>
      <tr>
        <td>
          <label>Title of Proposal</label>
          
        </td>
        <td style="width: 5%;">
          <label>:</label>
        </td>
        <td>
          {{ Form::textarea('proposaltitle', null, array('style'=>'width: 95%', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Eg: ', 'required' => ''))}}
          <!--<textarea style="width: 70%" class="form-control" rows="5" id="comment"></textarea>-->
        </td>
      </tr>
      <tr>
        <td>
          <label>Name of Client</label>
          
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          {{ Form::text('clientname', null, array('class' => 'form-control', 'style' => 'width: 95%', 'placeholder'=>'Eg: Jabatan Alam Sekitar', 'required' => ''))}}
          <!--<input style="width: 70%;" class="form-control" type="text" id="example-text-input">-->
        </td>
      </tr>
      <tr>
        <td>
          <label>Address of Client</label>
          
        </td>
        <td>
          <label>:</label>
        </td>
        <td>
          {{ Form::textarea('clientaddress', null, array('style'=>'width: 95%', 'class'=>'form-control', 'rows' => 5, 'placeholder'=>'Eg: ', 'required' => ''))}}
          <!--<textarea style="width: 70%" class="form-control" rows="5" id="comment"></textarea>-->
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
