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
  <link href="css/justified-nav.css" rel="stylesheet" type="text/css">
  <link href="css/templatemo_style.css" rel="stylesheet" type="text/css"> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

  <!-- javascript multiple checkbox -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- javascript multiple checkbox -->

  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/justified-nav.css')!!}
  {!!Html::style('css/templatemo_style.css')!!}
  {!!Html::style('css/parsley.css')!!}
  {!!Html::style('css/button.css')!!}


<script type="text/javascript">
$(document).ready(function(e) {
  var counter = 0,
    $specializes = $('input[name^="specialize_"]');
  $('input[id^="item_"]').change(function() {
    var id = this;

    if (this.checked) {
      if (counter == 4) {
        this.checked = false;
        return;
      }
      $("#specialize_" + counter).val(this.value).attr('data-value', this.value);
      ++counter;
    } else {
      var $specialize = $specializes.filter('[data-value="' + this.value + '"]');
      var index = $specializes.index($specialize);
      $specializes.slice(index, counter).each(function(i) {
        var $n = $specializes.eq(index + i + 1);
        $(this).val($n.val() || '').attr('data-value', $n.attr('data-value'));
      });
      counter--;
      $("#specialize_" + counter).val('').removeAttr('data-value');
    }

  });
});
</script>
  <script type="text/javascript">
    function checkboxlimit(checkgroup, limit){
      var checkgroup=checkgroup
      var limit=limit
      for (var i=0; i<checkgroup.length; i++){
        checkgroup[i].onclick=function(){
        var checkedcount=0
        for (var i=0; i<checkgroup.length; i++)
          checkedcount+=(checkgroup[i].checked)? 1 : 0
        if (checkedcount>limit){
          alert("You can only select a maximum of "+limit+" checkboxes")
          this.checked=false
          }
        }
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
      <img src="{{URL::asset('/image/banner1.png')}}" alt="profile Pic" height="100" width="2048", class="img-responsive cleaner">
    </div>
    </div>
  <!-- HEADER -->

<!-- DISPLAY PERSONAL INFO -->
<div class="col-xs-12" style="height:50px;"></div>   

 <div class="well well-lg"  style="margin-left: 5%; margin-right: 15%">
 <table class="table" style="width: 50%">
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

 <!-- INSTRUCTION -->
  <div style="width: 60%; margin-left: 5%" class="panel-group">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">APCS Section B Instruction :</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">   •  Choose at least <strong>ONE</strong> and maximum <strong>FOUR</strong> option from <strong>Field of Specilization in Air Pollution Control</strong> above<br />
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
<!-- INSTRUCTION -->

<!-- CONTENT -->
<div class="col-xs-12" style="height:50px;"></div>
<div class="well well-lg"  style="margin-left: 10%; margin-right: 10%; border-color: blue; background-color: #e6f2ff; width: 70%">
<label style="color: blue">Please choose at least ONE specialize</label>
{!! Form::open(['route' => 'apcsSectionB.store', 'data-parsley-validate'=> '', 'name'=>"apcsSecB"]) !!}
<div class="col-xs-12" style="height:50px;"></div>
<div class="well" style="background-color: transparent;border-color: transparent;">
<div style="margin-left: 30%">
<input type="checkbox" name="item_1" id="item_1" value="Bag Filter : Pulse jet, Reverse air, Shaker" /> a. Bag Filter
<br>
<input type="checkbox" name="item_2" id="item_2" value="Mechanical Separator : Multicyclone, Rotocyclone, Single cyclone" /> b. Mechanical Separator
<br>
<input type="checkbox" name="item_3" id="item_3" value="Gas Scrubber : Orifice, Packed column, Venturi, Spray dryer / dry scrubber, Plate tower" /> c. Gas Scrubber
<br>
<input type="checkbox" name="item_4" id="item_4" value="Incineration System : After burners, Thermal oxidizer" /> d. Incineration System
<br>
<input type="checkbox" name="item_5" id="item_5" value="Dust Scrubber : Wet, Dry" /> e. Dust Scrubber
<br>
<input type="checkbox" name="item_6" id="item_6" value="Electrostatic Precipitator : Wet, Dry" /> f. Electrostatic Precipitator
<br>
<input type="checkbox" name="item_7" id="item_7" value="Biofilters" /> g. Biofilters
<br>
<input type="checkbox" name="item_8" id="item_8" value="Catalytic Converters : Oxidation, Reduction" /> h. Catalytic Converters
<br>
<input type="checkbox" name="item_9" id="item_9" value="Absorbers : Carbon absorption, Others" /> i. Absorbers<br><br>
</div>
<label>Chosen specialize and its details</label><br><br>
1. <input type="text" name="specialize_0" id="specialize_0" value="" style="width: 95%" /><br><br>
2. <input type="text" name="specialize_1" id="specialize_1" value="" style="width: 95%" /><br><br>
3. <input type="text" name="specialize_2" id="specialize_2" value="" style="width: 95%" /><br><br>
4. <input type="text" name="specialize_3" id="specialize_3" value="" style="width: 95%" />
</div>
</div>
</div>
<button style="margin-right: 25%" type="submit" class="button next">Next</button>
  {!! Form::close() !!}







</div>

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

<!-- javascript utk limitation checkbox-->
<script type="text/javascript">
  //Syntax: checkboxlimit(checkbox_reference, limit)
  checkboxlimit(document.forms.apcsSecB.specialize_, 4)
</script>

  
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
</body>
</html>