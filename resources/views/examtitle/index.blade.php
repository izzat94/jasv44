<?php session_start(); ?>

<!DOCTYPE html>

<html>
<head>

	{!!Html::style('css/bootstrap.min.css')!!}
  	{!!Html::style('css/justified-nav.css')!!}
  	{!!Html::style('css/templatemo_style.css')!!}
  	{!!Html::style('css/parsley.css')!!}

<table style="width:100%">
<tr>
<!-- <td style="width:50%">
<div class="row">
	<div class="col-md-8">
		<h3>Exam Title</h3>
		<table class="table" style="width:100%">
			<thead>
				<tr>
					<th style="width:20%">No</th>
					<th style="width:80%">Exam Title</th>
				</tr>
			</thead>

			<tbody>
				@foreach($examtitles as $category)
				<tr>
					<th>{{ $category->id }}</th>
					<td>{{ $category->examtitle }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	</td> -->

	<th style="width:50%">
	<div class="col-md-3">
		<div class="well">

			{!! Form::open(['route' => 'examtitle.store', 'method' => 'POST']) !!}

			{{ Form::label('examtitle', 'Exam Title:') }}
			{{ Form::text('examtitle', null, ['class' => 'form-control']) }}<br>

			{{ Form::submit('Add Exam Title', ['class' => 'btn btn-success btn-block']) }}

			{!! Form::close() !!}
			
		</div>
	</div>

</div>
</th></tr></table>

{!! Html::script('js/parsley.min.js')!!}
	{!! Html::script('js/jquery.js')!!}
	{!! Html::script('js/bootstrap.min.js')!!}
	{!! Html::script('js/templatemo_script.js')!!}
    <!-- templatemo 393 fantasy -->
    <!--<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/templatemo_script.js"></script>-->
</body>
</html>