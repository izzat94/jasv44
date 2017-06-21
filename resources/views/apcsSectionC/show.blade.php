<!DOCTYPE html>
<html lang="en">
<head>
  <title>APCS Section C</title>
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
    .file {
      color: blue;
    }
    .file:hover {
      color: blue;
    }
    .file:focus {
      color: blue;
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
                    <li class="active"><a href="/apcsSectionC/create">SECTION C</a></li>

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
   SECTION C - ACADEMIC QUALIFICATIONS
 </strong></h3>


<!-- FORM -->
   
  <div class="table-responsive">
  <div class="container" style="width: 90%">
  <table class="table table-hover">
    <thead>
      <tr style="background-color: #d9d9d9">
        <th style="width: 15%"><center>Name / Course Title</th>
        <th style="width: 20%"><center>Major</th>
        <th style="width: 20%"><center>University Name</th>
        <th style="width: 10%"><center>From</th>
        <th style="width: 15%"><center>To</th>
        <th style="width: 10%"><center>Academic Certification</th>
        <th colspan="2" style="width: 10%"><center>Action</center></th>
      </tr>
    </thead>
    <tbody>
    @foreach($apcsSectionC as $apcsSectionCs)
      <tr style="background-color: #f2f2f2">
        <td>{{ $apcsSectionCs->coursetitle }}</td>
        <td>{{ $apcsSectionCs->major }}</td>
        <td>{{ $apcsSectionCs->universityname }}</td>
        <td style="text-align: center;">{{ date('d/m/Y', strtotime($apcsSectionCs->from)) }}</td>
        <td style="text-align: center;">{{ date('d/m/Y', strtotime($apcsSectionCs->to)) }}</td>
   <td>
        <a class="file" href="/uploads/{{$apcsSectionCs->cert}}">{{$apcsSectionCs->cert}}</a>
        </td>
        <td><center>
        <a href="{{ route('apcsSectionC.edit', $apcsSectionCs->id) }}" >
          {{ HTML::image('/image/edit.png', 'a Edit', array('class' => 'img-responsive cleaner', 'width' => '30', 'height' => '30')) }}</a>
          </td>
          <td>
          {!! Form::open(['route' => ['apcsSectionC.destroy', $apcsSectionCs->id], 'method' => 'DELETE', 'onsubmit' => 'return ConfirmDelete()']) !!}
          <center>{!! Form::image('/image/delete.png', 'a Delete', ['type' => 'submit', 'class' => 'img-responsive cleaner', 'width' => '30', 'height' => '30'] ) !!}</center>
          {!! Form::close() !!}
        </center></td>
      </tr>
      @endforeach
</tbody>
  </table>
</div></div>
            <button style="margin-right: 10%" type="button" class="button next" onclick="window.location.href='/apcsSectionD/create'">Next</button>


            <button type="button" class="button add" data-toggle="modal" data-target="#apcsSecC">Add New</button>
</br></br>
</div>


<!-- add content -->
<div class="modal fade" id="apcsSecC" role="dialog">
    <div class="modal-dialog" style="width: 60%">
    
      <!-- Reg content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title">ADD NEW ACADEMIC QUALIFICATIONS</h4></center>
        </div>
        <div class="modal-body">
<!-- FORM -->
<div class="table-responsive">
   <div class="well well-lg"  style="margin-left: 10%; margin-right: 10%; border-color: blue; background-color: #e6f2ff">    
    <table class="table">
      <tbody>
        {!! Form::open(['route' => 'apcsSectionC.store', 'data-parsley-validate'=> '', 'files'=> true]) !!}
        <tr>
          <td>
            <label for="example-text-input" class="col-2 col-form-label">Name / Course Title</label>
            
          </td>
          <td>
            <label for="example-text-input" class="col-2 col-form-label">:</label>
          </td>
          <td>
            <!-- {{ Form::radio('coursetitle', 'Bachelor in Science' , true) }}
          {{ Form::label('Bachelor in Science')}}
           &nbsp &nbsp &nbsp
          {{ Form::radio('coursetitle', 'Bachelor in Engineering' , false) }}
          {{ Form::label('Bachelor in Engineering')}}
           &nbsp &nbsp &nbsp
          {{ Form::radio('coursetitle', 'Master' , false) }}
          {{ Form::label('Master')}}
           &nbsp &nbsp &nbsp
          {{ Form::radio('coursetitle', 'PhD' , false) }}
          {{ Form::label('PhD')}} -->
          <input type="radio" name="coursetitle" value="Bachelor in Science" required=""/>
        Bachelor in Science
        </br>
        <input type="radio" name="coursetitle" value="Bachelor in Engineering" required=""/>
        Bachelor in Engineering
        </br>
        <input type="radio" name="coursetitle" value="Master" required=""/>
        Master
        </br>
        <input type="radio" name="coursetitle" value="PhD" required=""/>
        PhD
          </br></br>
          <em><p for="example-text-input" style="color: #aab2bd" class="col-2 col-form-label">( Enter your major here )</p></em>
          
          {{ Form::text('major', null, array('class' => 'form-control', 'style' => 'width: 95%', 'placeholder'=>'Eg: Software Engineering', 'required' => ''))}}
          </td></tr>
          <tr>
          <td>
            <label for="example-text-input" class="col-2 col-form-label">Name of University / College</label>
          
          </td>
          <td>
            <label for="example-text-input" class="col-2 col-form-label">:</label>
          </td>
          <td>
            {{ Form::text('universityname', null, array('class' => 'form-control', 'style' => 'width: 95%', 'placeholder'=>'Eg: Universiti Malaysia Pahang', 'required' => ''))}}
          </td>
          </tr>
          <tr>
          <td>
            <label for="example-text-input" class="col-2 col-form-label">Year of Study</label>
          
          </td>
          <td>
             <label for="example-text-input" class="col-2 col-form-label">:</label>
          </td>
          <td>
            <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-addon">From</span>
              <!-- {!! Form::text('from', '', array('id' => 'datepicker', 'class' => 'form-control', 'style' => 'width: 70%', 'required' => '' )) !!} -->
              <input type="date" class="textbox" id="datepicker" name="from" onchange="cal()" required="" />
            </div>
          </div>
          </br></br>
          <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-addon">To</span>
              <!-- {!! Form::text('to', '', array('id' => 'datepicker2', 'class' => 'form-control', 'style' => 'width: 70%', 'required' => '' )) !!} -->
              <input type="date" class="textbox" id="datepicker" name="to" onchange="cal()" required="" />
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <td>
            <label>Academic Certification</label>

            
            </td>

            <td>
              <label for="example-text-input" class="col-2 col-form-label">:
            </td>
            <td>
              <!--               {{ Form::file('cert_file')}}
 -->              <input type="file" name="cert_file" accept=".pdf" required="">
        </td>
      </tr>
    </tbody>
  </table>
</div></div></div>
<button type="submit" class="button next" style="margin-right: 15%">Next</button>
  </br>
  {!! Form::close() !!}
    

</br></br>
</div></div>             
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
    var r = confirm("Press a button!\nEither OK or Cancel.\nThe button you pressed will be displayed in the result window.");
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
    
<!-- FOOTER -->


</body>
</html>
