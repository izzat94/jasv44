@extends('layouts.eia_app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
			<h2 style="margin-left:30px">Submitted Course Assignment (Specific Assignment)</h2>
                <div class="panel-group">
    <div class="panel panel-primary"style="width:90%;margin-left:30px">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Instructions:</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">1. An Applicant must complete this assignment within one(1) months from the date of announcement of examination result. <br>
								
	  </div>
      </div>
    </div></br>
	 <div class="table-responsive">
	 <center>
	 
		<table class="table table-bordered table-striped  dt-select" id="myTable" style="width:80%;">
  <tr>
    <th >No.</th>
    <th >NRIC/Passport No.</th>
    <th >Name</th>
	<th >File Uploaded</th>
	<th >Rubrics</th>
	<th >Date Assigned to SME</th>
	<th>Mark</th>
	<th >Status</th>
	<th >Action</th>
	
  </tr>
  {{csrf_field()}}
					
	<?php
		$no=1;
	?>
  <tr>
	<td>{{$no++}}</td>
	<td></td>
    <td></td>
    <td></td>
	 <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td><button id="show-button" type="button" class="btn btn-small btn-primary">Send</button> <br>
	
  </tr>
  
</table>
	 </center>
	  <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	 </div>
	<script>
	$('#myTable').DataTable( {
    responsive: true
} );
	
	</script>

<!--	<center> 
	<label>Please click on next button to upload the report</label><br>
	<a href="ajaxImageUpload" class="btn btn-primary">Next</a></center>-->
        </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
