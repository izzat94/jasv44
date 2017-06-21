<?php session_start(); ?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<title>Jabatan Alam Sekitar</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/justified-nav.css" rel="stylesheet" type="text/css">
	<link href="css/templatemo_style.css" rel="stylesheet" type="text/css">
	<link href="css/parsley.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.js"></script>-->
	{!!Html::style('css/bootstrap.min.css')!!}
  	{!!Html::style('css/justified-nav.css')!!}
  	{!!Html::style('css/templatemo_style1.css')!!}
  	{!!Html::style('css/parsley.css')!!}
	<style>

		nav {
		    float: left;
		    max-width: 100%;
		    min-width: 50%;
		    /*margin-right: 50%;*/
		    /*margin: -13px;*/
		    /*padding: 1em;*/
		}

		article {
		    margin-left: 53%;
		    /*border-left: 1px solid gray;*/
		    /*padding: 1em;*/
		    overflow: hidden;
		}

		p {
		    text-indent: 30px;
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
		    z-index: 2;
		}

		.dropdown-content2 {
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

		.dropdown-content2 a {
		    color: black;
		    font-weight: bold;
		    padding: 5px 84.5px;
		    text-decoration: none;
		    display: block;
		    text-align: left;
		}

		.dropdown-content a:hover {background-color: #00ad00}

		.dropdown-content2 a:hover {background-color: #00ad00}

		.dropdown:hover .dropdown-content {
		    display: block;
		}

		.dropdown:hover .dropdown-content2 {
		    display: block;
		}

		.dropbtn1 {
			    background-color: #4CAF50;
			    color: white;
			    padding: 3px;
			    font-size: 16px;
			    border: none;
			    cursor: pointer;
			    width: 900px;
			    
			}

			.dropdown1 {
			    position: relative;
			    display: inline-block;
			}

			.dropdown-content1 {
			    display: none;
			    position: absolute;
			    background-color: #d9ffb3;
			    min-width: 160px;
			    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			    z-index: 1;
			    width: 900px;
			}

			.dropdown-content1 a {
			    color: black;
			    padding: 12px 16px;
			    text-decoration: none;
			    display: block;
			}

			.dropdown-content1 a:hover {background-color: #f1f1f1}

			.dropdown1:hover .dropdown-content1 {
			    display: block;
			}

			.dropdown1:hover .dropbtn1 {
			    background-color: #3e8e41;
			}

			.parent {display: block;position: relative;float: left;line-height: 15px;background-color: #006e00;border-right:#006e00 1px solid;}
			.parent a{margin: 0px;color: #000000;text-decoration: none;}
			.parent:hover > ul {display:block;position:absolute;}
			.child {display: none;}
			.child li {background-color: #E4EFF7;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
			.child li a{color: #000000;}
			ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
			ul ul ul{left: 100%;top: 31px;margin-left:1px;background-color: #008000;}
			li:hover {background-color: #95B4CA;}
			.parent li:hover {background-color: #F0F0F0;}

			.parent1 {display: block;position: relative;float: left;line-height: 15px;background-color: #006e00;border-right:#006e00 1px solid;}
			.parent1 a{margin: 0px;color: #000000;text-decoration: none;}
			.parent1:hover > ul {display:block;position:absolute;}
			.child1 {display: none;}
			.child1 li {background-color: #E4EFF7;line-height: 30px;border-bottom:#CCC 1px solid;border-right:#CCC 1px solid; width:100%;}
			.child1 li a{color: #000000;}
			ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
			ul ul ul{left: 100%;top: 0px;margin-left:1px;background-color: #008000;}
			li:hover {background-color: #95B4CA;}
			.parent1 li:hover {background-color: #F0F0F0;}
	

			.breadcrumb {
				/*centering*/
				/*display: inline-block;*/
				/*box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.35);
				overflow: hidden;*/
				border-radius: 5px;
				/*Lets add the numbers for each link using CSS counters. flag is the name of the counter. to be defined using counter-reset in the parent element of the links*/
				counter-reset: flag; 
			}

			.breadcrumb a {
				text-decoration: none;
				outline: none;
				display: block;
				float: left;
				font-size: 12px;
				line-height: 36px;
				color: white;
				/*need more margin on the left of links to accomodate the numbers*/
				padding: 0 10px 0 30px;
				background: #666;
				background: linear-gradient(#666, #333);
				position: relative;
			}
			/*since the first link does not have a triangle before it we can reduce the left padding to make it look consistent with other links*/
			.breadcrumb a:first-child {
				padding-left: 15px;
				border-radius: 5px 0 0 5px; /*to match with the parent's radius*/
			}
			.breadcrumb a:first-child:before {
				left: 14px;
			}
			.breadcrumb a:last-child {
				border-radius: 0 5px 5px 0; /*this was to prevent glitches on hover*/
				padding-right: 20px;
			}

			/*hover/active styles*/
			.breadcrumb a.active, .breadcrumb a:hover{
				background: #333;
				background: linear-gradient(#333, #000);
			}
			.breadcrumb a.active:after, .breadcrumb a:hover:after {
				background: #333;
				background: linear-gradient(135deg, #333, #000);
			}

			/*adding the arrows for the breadcrumbs using rotated pseudo elements*/
			.breadcrumb a:after {
				content: '';
				position: absolute;
				top: 0; 
				right: -18px; /*half of square's length*/
				/*same dimension as the line-height of .breadcrumb a */
				width: 36px; 
				height: 36px;
				/*as you see the rotated square takes a larger height. which makes it tough to position it properly. So we are going to scale it down so that the diagonals become equal to the line-height of the link. We scale it to 70.7% because if square's: 
				length = 1; diagonal = (1^2 + 1^2)^0.5 = 1.414 (pythagoras theorem)
				if diagonal required = 1; length = 1/1.414 = 0.707*/
				transform: scale(0.707) rotate(45deg);
				/*we need to prevent the arrows from getting buried under the next link*/
				z-index: 1;
				/*background same as links but the gradient will be rotated to compensate with the transform applied*/
				background: #666;
				background: linear-gradient(135deg, #666, #333);
				/*stylish arrow design using box shadow*/
				box-shadow: 
					2px -2px 0 2px rgba(0, 0, 0, 0.4), 
					3px -3px 0 2px rgba(255, 255, 255, 0.1);
				/*
					5px - for rounded arrows and 
					50px - to prevent hover glitches on the border created using shadows*/
				border-radius: 0 5px 0 50px;
			}
			/*we dont need an arrow after the last link*/
			.breadcrumb a:last-child:after {
				content: none;
			}
			/*we will use the :before element to show numbers*/
			/*.breadcrumb a:before {
				content: counter(flag);
				counter-increment: flag;
				/*some styles now
				border-radius: 100%;
				width: 20px;
				height: 20px;
				line-height: 20px;
				margin: 8px 0;
				position: absolute;
				top: 0;
				left: 30px;
				background: #444;
				background: linear-gradient(#444, #222);
				font-weight: bold;
			}*/


			.flat a, .flat a:after {
				background: #a5f5a8;
				color: black;
				transition: all 0.5s;
			}
			.flat a:before {
				background: white;
				box-shadow: 0 0 0 2px #006e00;
			}
			.flat a:hover, .flat a.active, 
			.flat a:hover:after, .flat a.active:after{
				background: #00cc44;
			}

	</style>

	<script>
function myFunction() {
    var x = document.getElementById("mySelect");
    var option = document.createElement("option");
    option.text = document.getElementById("add").value;
    x.add(option);
}

function myFunction1() {
    var x = document.getElementById("mySelect1");
    var option = document.createElement("option");
    option.text = document.getElementById("add1").value;
    x.add(option);
}

function AddData() {
    
        var rows = "";
        var id = "";
        var sel = document.getElementById('exam');
		var selected = sel.options[sel.selectedIndex];
		var extra = selected.getAttribute('data-foo');
		var sel1 = document.getElementById('mySelect');
		var selected1 = sel1.options[sel1.selectedIndex];
		var extra1 = selected1.getAttribute('data-foo');
		var date = document.getElementById('date').value;
		var stime = document.getElementById('stime').value;
		var etime = document.getElementById('etime').value;
		var sel2 = document.getElementById('mySelect1');
		var selected2 = sel2.options[sel2.selectedIndex];
		var extra2 = selected2.getAttribute('data-foo');
		var address = document.getElementById('address').value;
		var sel3 = document.getElementById('state');
		var selected3 = sel3.options[sel3.selectedIndex];
		var extra3 = selected3.getAttribute('data-foo');
		var al = document.getElementById('alloc').value;
		var apps = document.getElementById("app").innerHTML;
		var exam = document.getElementById("ex").innerHTML;
		var btn = document.getElementById("but").innerHTML;
		var rem = document.getElementById("rem").innerHTML;

        rows += "<tr><td>" + id + "</td><td>" + extra + "</td><td>" + extra1 + "</td><td>" + date + "</td><td>" + stime + "&nbsp-&nbsp" + etime + "</td><td>" + extra2 + "<br>" + address + "<br>" + extra3 + "</td><td>" + "<center>" + al + "</center" + "</td><td>" + apps + "</td><td>" + exam + "</td><td>" + btn + "</td><td>" + rem+ "</td><td>";
        $(rows).appendTo("#list tbody");
}

(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);


function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("list");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

</script>

</head>
<body>
	<div id="main_container">
		<div>
			{{ HTML::image('images/banner1.png', 'a header image', array('class' => 'img-responsive cleaner', 'width' => '2048', 'height' => '100')) }}

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
			        <ul class="nav nav-justified" id="menu">
					<li><a href="{{ url('index/create') }}">HOME</a></li>
	                  <li><a href="{{ url('announce/show') }}">ANNOUNCEMENT</a></li>
			          <li class="dropdown"><a class="dropbtn">APPLICANT</a>
					    <div class="dropdown-content">
					      <a href="{{ url('applicant/create') }}">Applicant Registration</a>
					      <a href="{{ url('payment/create') }}">Applicant Payment</a>
					    </div>
					  </li>
			          <li class="dropdown"><a class="dropbtn">MANAGE</a>
					    <div class="dropdown-content">
					      <a href="{{ url('syllabus/show') }}">Syllabus</a>
					      <a href="{{ url('refference/show') }}">Reference</a>
					      <ul class="parent" ><a href="#">Comprehensive Examination <span class="caret"></span></a>
							<ul class="child" >
							<a href="{{ url('schedule/show') }}">Schedule</a>
							<a href="{{ url('apcsquestion/show') }}">Question Generation</a></ul></ul>
							<ul class="parent1" ><a href="#">Assignment&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span></a>
							<ul class="child1" >
							 <a href="{{ url('assignment/show') }}">PCER Format</a>
					      <a href="{{ url('assignapp/create') }}">Applicant Assignment</a></ul></ul>
					      
					      <a href="{{ url('proiv/create') }}">Professional Interview</a>
					    </div>
					  </li>
					  <li class="dropdown"><a class="dropbtn">REPORT</a>
					    <div class="dropdown-content">
					      <a href="{{ url('cert/create') }}">Certificate</a>
					      <a href="{{ url('cpd/create') }}">Continuous Professional Development</a>
					    </div>
					  </li>
					  <li class="dropdown"><a class="dropbtn">PROFILE</a>
					    <div class="dropdown-content">
					      <a>Aizat Hamdan Jailani<br>Sekretariat APCS<br>941008065453</a>
					      <a href="">LogOut</a>
					    </div>
					  </li>
					  </ul>
		      	</div> <!-- nav -->
	      	</div>

	      	<div class="breadcrumb flat">
				    <a href="#">SECRETARIAT APCS</a>
				    <a href="#">MANAGE</a>
				    <a href="#">Comprehensive Exam</a>
				    <a class="active">Schedule</a>        
				  </div>
				</div>

				@if (Session::has('success'))

				<div class="alert alert-success" role="alert">
		
				<strong>Success:</strong>  {{ Session::get('success') }}

				</div>

				@endif

				@if (count($errors) > 0)

				<div class="alert alert-danger" role="alert">

				<strong>Errors:</strong><ul>
				@foreach ($errors->all() as $error)
					<br><li>{{ $error }}</li>
				@endforeach
				</ul>
				</div>

				@endif

				<div class="row" id="thumbnails_container">      
				<div class="col-md-12 col-md-offset-0">
				
    			<h1>Comprehensive Exam<br></h1>  
    			<h2>Exam Schedule for Certified APCS Consultant<br></h2>

    			<!-- INSTRUCTION -->
				  <div style="width: 100%;" class="panel-group" >
				    <div class="panel panel-primary" style="border-color:#4CAF50;">
				      <div class="panel-heading" style="background-color:#4CAF50;" >
				        <h4 class="panel-title" style="color:white;">
				          <a data-toggle="collapse" href="#collapse1">Exam Schedule for Certified APCS Consultant Instruction :</a>
				        </h4>
				      </div>
				      <div id="collapse1" class="panel-collapse collapse">
				        <div class="panel-body">
				        •  Secretariat APCS can enter the title of exam at the text field provide.<br>
					    •  Secretariat APCS can choose the date, time and enter venue of exam at the text field provided.<br>
						•  Secretariat APCS can click "Confirm" button to confirm the date,time and venue that has been filled.<br>
						•  Secretariat APCS can view the date, time and date at the table below the "Confirm" button.
					  </div>
				        </div>
				      </div>
				    </div>
				  </div>
				  <script>
				  $(document).ready(function(){
				    $('[data-toggle="popover"]').popover();   
				  });
				  </script>
				  <br> 

    			{!! Form::model($schedule, ['route' =>['schedule.update', $schedule->id], 'method' => 'PUT']) !!}

							<div class="form-group">

							<div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 20%;" id="typeofexam">Type of Exam</span>
						    <select id="typeofexam" name="typeofexam" class="form-control" required="" style="width:36.6%">
					        <option data-foo="" value="0" disabled="true" selected="true">--Please Select--</option>
					        <option data-foo="Main Comprehensive Exam">Main Comprehensive Exam</option>
					        <option data-foo="Repeat Comprehensive Exam">Repeat Comprehensive Exam</option>
					        </select>
						    </div><br>

						    <nav>
							<div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 40%;" id="examtitle">Exam Title</span>
						    {{ Form::select('examtitle_id', $examtitles, null, ['style' => 'width:97.7%;', 'class' => 'form-control']) }}
						    </div><br></nav>
				        
							<article>   
							<div id="check">
							<input type="checkbox" class="maxtickets_enable_cb" name="opwp_wootickets[tickets][0][enable]">Add New Exam Title

					        <div class="max_tickets">
					        <iframe src="{{ url('examtitle') }}" width="200" height="225" scrolling="yes">
	  						<p>Your browser does not support iframes.</p>
							</iframe>
					      	</div></div></article>

					      	<div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 20%;" id="date">Date</span>
						    {{ Form::date('date', null, ['style' => 'width:36.6%;', 'class' => 'form-control']) }}
						    </div><br>

						    <div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 20%;" id="date">Start Time</span>
						    {{ Form::time('start', null, ['style' => 'width:36.6%;', 'class' => 'form-control']) }}
					      	</div><br>

					      	<div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 20%;" id="date">End Time</span>
						    {{ Form::time('end', null, ['style' => 'width:36.6%;', 'class' => 'form-control']) }}
						    </div><br>

						    <nav>

				        	<div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 40%;" id="venue_id">Venue</span>
						    {{ Form::select('venue_id', $venues, null, ['style' => 'width:97.7%;', 'onChange' => 'ChangeVal(this.value);' , 'class' => 'form-control']) }}

				        	</nav>

				        	<article>
						<div id="check">
						<input type="checkbox" class="maxtickets_enable_cb1" name="opwp_wootickets[tickets][0][enable]">Add New Venue

				        <div class="max_tickets1">
					      	<iframe src="{{ url('venue') }}" width="200" height="225" scrolling="yes">
  						<p>Your browser does not support iframes.</p>
						</iframe>
					      	</div>
					      	</div>
					      	</article>

					      	<br><br>
					      	<div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 20%;">Address</span>
						    {{ Form::textarea('address', null, ['style' => 'width:36.6%;', 'class' => 'form-control', 'rows' => '4', 'cols' => '30', 'id' => 'address']) }}
						    </div><br>

						    <div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 20%;">State</span>
						    <select id="state" name="state" class="form-control" required="" style="width:36.6%">
					        <option data-foo="" value="0" disabled="true" selected="true">--Please Select--</option>
					        <option data-foo="J" value="0" disabled="true">J</option>
					        <option data-foo="Johor" value="Johor">&nbsp&nbsp&nbsp Johor</option>
					        <option data-foo="K" value="0" disabled="true">K</option>
					        <option data-foo="Kedah" value="Kedah">&nbsp&nbsp&nbsp Kedah</option>
					        <option data-foo="Kelantan" value="Kelantan">&nbsp&nbsp&nbsp Kelantan</option>
					        <option data-foo="Kuala Lumpur" value="Kuala Lumpur">&nbsp&nbsp&nbsp Kuala Lumpur</option>
					        <option data-foo="M" value="0" disabled="true">M</option>
					        <option data-foo="Malacca" value="Malacca">&nbsp&nbsp&nbsp Malacca</option>
					        <option data-foo="L" value="0" disabled="true">L</option>
					        <option data-foo="Labuan" value="Labuan">&nbsp&nbsp&nbsp Labuan</option>
					        <option data-foo="N" value="0" disabled="true">N</option>
					        <option data-foo="Negeri Sembilan" value="Negeri Sembilan">&nbsp&nbsp&nbsp Negeri Sembilan</option>
					        <option data-foo="P" value="0" disabled="true">P</option>
					        <option data-foo="Pahang" value="Pahang">&nbsp&nbsp&nbsp Pahang</option>
					        <option data-foo="Perak" value="Perak">&nbsp&nbsp&nbsp Perak</option>
					        <option data-foo="Perlis" value="Perlis">&nbsp&nbsp&nbsp Perlis</option>
					        <option data-foo="Penang" value="Penang">&nbsp&nbsp&nbsp Penang</option>
					        <option data-foo="Putrajaya" value="Putrajaya">&nbsp&nbsp&nbsp Putrajaya</option>
					        <option data-foo="S" value="0" disabled="true">S</option>
					        <option data-foo="Sabah" value="Sabah">&nbsp&nbsp&nbsp Sabah</option>
					        <option data-foo="Sarawak" value="Sarawak">&nbsp&nbsp&nbsp Sarawak</option>
					        <option data-foo="Selangor" value="Selangor">&nbsp&nbsp&nbsp Selangor</option>
					        <option data-foo="T" value="0" disabled="true">T</option>
					        <option data-foo="Terengganu" value="Terengganu">&nbsp&nbsp&nbsp Terengganu</option>
					        </select>
						    </div><br>

						    <div class="input-group" style="width: 100%;">
						    <span class="input-group-addon" style="width: 20%;" id="address">Allocation of Seat</span>
						    {{ Form::number('seat', null, ['style' => 'width:36.6%;', 'class' => 'form-control']) }}
						    </div><br>

					     <center>
					     <table width="40%">
					     <tr>
					     <th width="50%">
					     <center>{{ Form::submit('Save', ['class' => 'btn btn-primary btn-block', 'style' => 'width:150px;']) }}</center></th>

					     <th>
					      <center>{!! Html::linkRoute('schedule.show', 'Cancel', array($schedule->id), array('class' => 'btn btn-danger btn-block', 'style' => 'width:150px')) !!}</center>
					      </th>
					      </tr>
					      </table></center><br>
					  {!! Form::close() !!} 



				  <script src="js/parsley.min.js"></script>      
				 <script type="text/javascript">
  				$('#form').parsley();
				</script>            
				 
				</div>
				</div>
				</div>



				                
			</div> <!-- thumbnail area -->  
		
		<footer>
			<div class="credit row">
				<center><div class="col-md-6 col-md-offset-3">
					<div id="templatemo_footer">
						Copyright © 2017 <a href="#">Jabatan Alam Sekitar</a>
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
    <!--<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/templatemo_script.js"></script>-->
    <script type="text/javascript">
	jQuery(document).ready(function($) {
   // STOCK OPTIONS
	$('input.maxtickets_enable_cb').change(function(){
		if ($(this).is(':checked'))
    $(this).next('div.max_tickets').show();
else
    $(this).next('div.max_tickets').hide();
	}).change();
});
</script>

<script type="text/javascript">
function ChangeVal(val){
 var element=document.getElementById('venue');
 var element1=document.getElementById('address');
  var element2=document.getElementById('state');
 if(val=='1'){
 	element1.value='Department of Environment, Beg Berkunci No 24, Kampus Universiti Kebangsaan Malaysia, 43600, Bangi ';
	element2.value='Selangor';
}
else{
	element1.value='';
	element2.value='0';
}
}

</script> 

<script type="text/javascript">
	jQuery(document).ready(function($) {
   // STOCK OPTIONS
	$('input.maxtickets_enable_cb1').change(function(){
		if ($(this).is(':checked'))
    $(this).next('div.max_tickets1').show();
else
    $(this).next('div.max_tickets1').hide();
	}).change();
});
</script>
</body>
</html>