@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
			<h2 style="margin-left:30px">Comprehensive Examination</h2>
                <div class="panel-group">
    <div class="panel panel-primary"style="width:90%;margin-left:30px">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Instructions:</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">1. An Applicant must complete this assignment within one(1) months from the date of announcement of examination result. <br>
								2. An Applicant who passes the Examination is eligible to submit a Pollution Control Engineering Report (PCER). <br>
								3. The PCER shall demostrate that the applicant has attained the engineering knowledge, understanding, and application in
								 the area of industrial effluent engineering at the level necessary to underpin the technical competencies required for a CIETSC.<br>
								4. An Applicant must prepared the PCER report based on format given below.<br>
								5. Once Applicant have finish up the report, applicant must submit the report for the hardcopy and softcopy.<br>
								6. For the softcopy applicant must upload it in pdf format through this system.<br>
								7. For the hardcopy applicant must submit the report to EiMAS.
	  </div>
      </div>
    </div></br>
	  
					
					@foreach ($apcs_question as $index =>$exam_question)
					
			
					<form action=""  id="quiz" style="margin-left:15%;height:auto">
						
					
						
							<!--@if(isset($exam_question->que_pic))
								<img src="{{asset('images/'.$exam_question->que_pic)}}" height="" width=""/>
							@endif-->
							<h5>{{$index+1}} - {{$exam_question['question']}}</h5>
							
							   {{ isset($exam_question->sub_ans1) ? $exam_question->sub_ans1 : '' }}</p>
							   {{ isset($exam_question->sub_ans2) ? $exam_question->sub_ans2 : '' }}</p>
							   {{ isset($exam_question->sub_ans3) ? $exam_question->sub_ans3 : '' }}</p>
							   {{ isset($exam_question->sub_ans4) ? $exam_question->sub_ans4 : '' }}</p>
								
												
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
									<label for="question-1-answers-A">&nbsp <?php echo $exam_question->ans1?></label>
								</div>
								
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
									<label for="question-1-answers-B">&nbsp <?php echo $exam_question->ans2?></label>
								</div>
								
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
									<label for="question-1-answers-C">&nbsp <?php echo $exam_question->ans3?></label>
								</div>
								
								<div>
									<input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
									<label for="question-1-answers-D">&nbsp <?php echo $exam_question->ans4?></label>
								</div>
             
				
						
					
					
					
					

					</form>
					
					 @endforeach
					
					<div style="margin-left:15%">
					 
					{{$apcs_question->links()}}
					
					
					</div>
		

	
        </div>
				
            </div>
        </div>
    </div>
</div>
@endsection
