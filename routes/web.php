<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

$router->group(['middleware' => ['web']], function () {

//------------------------------EIA------------------------------
Route::resource('eiaindex', 'EiaIndexController');            //|
Route::resource('eiaannounce', 'EiaAnnounceController');      //|
Route::resource('eiaapplicant', 'EiaApplicantController');    //|
Route::resource('eiaappinfo', 'EiaAppInfoController'); 	      //|
Route::resource('eiapayment', 'EiaPaymentController'); 	      //|
Route::resource('eiapayinfo', 'EiaPayinfoController'); 	      //|
Route::resource('eiaschedule', 'EiaScheduleController');      //|
Route::resource('eiaexam', 'EiaExamController');   		      //|
Route::resource('eiaquestion', 'EiaQuestionController');   	  //|
Route::resource('eiabank', 'EiaBankController');   	  		  //|
Route::resource('eiaassignment', 'EiaAssignmentController');  //|
Route::resource('eiarubric', 'EiaRubricController');  		  //|
Route::resource('eiaassignapp', 'EiaAssignAppController');    //|
Route::resource('eiaassignpanel', 'EiaAssignPanelController');//|
Route::resource('eiaproiv', 'EiaProIvController');			  //|
Route::resource('eiaivschedule', 'EiaIvScheduleController');  //|
Route::resource('eiacert', 'EiaCertController');  			  //|
Route::resource('eiaendorse', 'EiaEndorseController');  	  //|
Route::resource('eiacpd', 'EiaCpdController');  	  		  //|
Route::resource('qp', 'EiaQpController');  	  		  		  //|
Route::resource('selflearning', 'SelfLearningController');    //|
Route::resource('eiaquiz', 'QuizController');    			  //|
Route::resource('quizresult', 'QuizResultController');    	  //|
Route::resource('eiaapp', 'EiaAppController');		    	  //|
//______________________________________________________________|

//------------------------------IETS--------------------------------
Route::resource('ietsindex', 'IetsIndexController');    	     //|
Route::resource('ietsannounce', 'IetsAnnounceController');       //|
Route::resource('ietsapplicant', 'IetsApplicantController');     //|
Route::resource('ietsappinfo', 'IetsAppInfoController');   	     //|
Route::resource('ietspayment', 'IetsPaymentController');   	     //|
Route::resource('ietspayinfo', 'IetsPayInfoController');   	     //|
Route::resource('ietssyllabus', 'IetsSyllabusController');       //|
Route::resource('ietsrefference', 'IetsRefferenceController');   //|
Route::resource('ietsschedule', 'IetsScheduleController'); 	     //|
Route::resource('ietsexam', 'IetsExamController'); 	   		     //|
Route::resource('ietsquestion', 'IetsQuestionController'); 	     //|
Route::resource('ietsbank', 'IetsBankController'); 	   		     //|
Route::resource('ietsassignment', 'IetsAssignmentController');   //|
Route::resource('ietsrubric', 'IetsRubricController'); 		     //|
Route::resource('ietsassignapp', 'IetsAssignAppController');     //|
Route::resource('ietsassignpanel', 'IetsAssignPanelController'); //|
Route::resource('ietsproiv', 'IetsProIvController'); 			 //|
Route::resource('ietsivschedule', 'IetsIvScheduleController');   //|
Route::resource('ietscert', 'IetsCertController');   			 //|
Route::resource('ietsendorse', 'IetsEndorseController');   		 //|
Route::resource('ietscpd', 'IetsCpdController');   		 		 //|
Route::resource('ietscp', 'IetsCpController');   		 		 //|
Route::resource('ietsapp', 'IetsAppController');   		 		 //|
//_________________________________________________________________|

//----------------------------APCS----------------------------
Route::resource('announce', 'AnnounceController');         //|
Route::resource('syllabus', 'SyllabusController');         //|
Route::resource('refference', 'RefferenceController');     //|
Route::resource('schedule', 'ScheduleController');         //|
Route::resource('apcsquestion', 'QuestionController');     //|
Route::resource('ivschedule', 'IvScheduleController');     //|
Route::resource('index', 'IndexController');               //|
Route::resource('applicant', 'ApplicantController');       //|
Route::resource('appinfo', 'AppInfoController');           //|
Route::resource('payment', 'PaymentController');           //|
Route::resource('assignapp', 'AssignAppController');       //|
Route::resource('assignpanel', 'AssignPanelController');   //|
Route::resource('proiv', 'ProIvController');               //|
Route::resource('rubric', 'RubricController');             //|
Route::resource('bank', 'BankController');                 //|
Route::resource('cert', 'CertController');                 //|
Route::resource('endorse', 'EndorseController');           //|
Route::resource('cpd', 'CpdController');                   //|
Route::resource('cp', 'CpController');                     //|
Route::resource('exam', 'ExamController');                 //|
Route::resource('assignment', 'AssignmentController');     //|
Route::resource('payinfo', 'PayInfoController');     	   //|
Route::resource('apcsapp', 'ApcsAppController');     	   //|
//___________________________________________________________|

Route::post('/sendmail', function (\Illuminate\Http\Request $request,
	\Illuminate\Mail\Mailer $mailer ) {
	$mailer->to($request->input('email'))->send(new \App\Mail\AppApprove($request));
	return redirect()->back();
})->name('sendmail');

Route::get('email', 'AppInfoController@email')->name('sendEmail');

//----------------------------------------Upload------------------------------------------
																				       //|
//-----------------------------------------EIA-------------------------------------------|
Route::post('eiaannounce/uploadFiles', 'EiaAnnounceController@multiple_upload'); 	   //|
																					   //|
Route::post('selflearning/uploadFiles', 'SelfLearningController@multiple_upload');     //|
																					   //|
Route::post('eiaquiz/uploadFiles', 'QuizController@multiple_upload');    			   //|
																					   //|
Route::post('eiaquestion/uploadFiles', 'EiaQuestionController@multiple_upload');       //|
//----------------------------------------IETS-------------------------------------------|
Route::post('ietsannounce/uploadFiles', 'IetsAnnounceController@multiple_upload');	   //|
																					   //|
Route::post('ietssyllabus/uploadFiles', 'IetsSyllabusController@multiple_upload');	   //| 																					  						   //|
Route::post('ietsrefference/uploadFiles', 'IetsRefferenceController@multiple_upload'); //|
																					   //|
Route::post('ietsquestion/uploadFiles', 'IetsQuestionController@multiple_upload');     //|
																					   //|
Route::post('ietsassignment/uploadFiles', 'IetsAssignmentController@multiple_upload'); //|
//----------------------------------------APCS-------------------------------------------|
Route::post('announce/uploadFiles', 'AnnounceController@multiple_upload');		       //|
																				       //|
Route::post('syllabus/uploadFiles', 'SyllabusController@multiple_upload');		       //|
																				       //|
Route::post('refference/uploadFiles', 'RefferenceController@multiple_upload');         //|
																				       //|
Route::post('assignment/uploadFiles', 'AssignmentController@multiple_upload');         //|
																				       //|
Route::post('apcsquestion/uploadFiles', 'QuestionController@multiple_upload');         //|
//_______________________________________________________________________________________|

Route::resource('examtitle', 'ExamTitleController', ['except' => ['create']]);

Route::resource('venue', 'VenueController', ['except' => ['create']]);

Route::resource('specialized', 'SpecializedController', ['except' => ['create']]);

Route::resource('related', 'RelatedController', ['except' => ['create']]);

Route::resource('eiarelated', 'EiaRelatedController', ['except' => ['create']]);

Route::resource('eiaexamtitle', 'EiaExamTitleController', ['except' => ['create']]);

Route::resource('eiavenue', 'EiaVenueController', ['except' => ['create']]);

Route::resource('ietsexamtitle', 'IetsExamTitleController', ['except' => ['create']]);

Route::resource('ietsvenue', 'IetsVenueController', ['except' => ['create']]);

Route::resource('ietsrelated', 'IetsRelatedController', ['except' => ['create']]);

Route::get('/approve', 'IetsPayInfoController@approve')->name('approve');

});



Route::get('selflearning', ['uses' => 'PagesController@getSelflearning', 'as' => 'selflearning']);
Route::get('selflearning(module1)', 'PagesController@getSelflearningModule1');
Route::get('exam', ['uses' => 'PagesController@getExam', 'as' => 'exam']);
Route::get('assignment', 'PagesController@getAssignment');
Route::get('interview', 'PagesController@getInterview');
Route::get('quizmodul1', 'PagesController@getQuizModul1');
Route::get('modul2', 'PagesController@getModul2');
Route::get('modul3', 'PagesController@getModul3');
Route::get('modul4', 'PagesController@getModul4');
Route::get('modul5', 'PagesController@getModul5');
Route::get('modulsummary', 'PagesController@getModulSummary');
Route::get('quizscore', 'PagesController@getQuizScore');
Route::get('beforeexam', 'PagesController@getBeforeExam');
Route::get('examquestion', 'ExamController@examquestion');
//Route::get('questions.show', 'QuestionController@examquestion');
//Route::get('examcreate', 'ExamController@create');
Route::get('lastquestion', 'PagesController@getLastQuestion');
Route::get('examresult', 'PagesController@getExamResult');
Route::get('specificquestion', 'PagesController@getSpecificQuestion');
Route::get('assignmentsubmission', 'PagesController@getAssignmentSubmission');
Route::get('confirmationinterview', 'PagesController@getConfirmationInterview');
Route::get('interviewstatus', 'PagesController@getInterviewStatus');
Route::get('interviewstatus2', 'PagesController@getInterviewStatus2');
Route::get('certificate', 'PagesController@getCertificate');
Route::get('certificatestatus', 'PagesController@getCertificateStatus');
Route::get('profile', 'PagesController@getProfile');
Route::get('updateprofile', 'PagesController@getUpdateProfile');
Route::get('cpd', 'PagesController@getCPD');
Route::get('certificaterenewal', 'PagesController@getCertificateRenewal');
Route::get('template', 'PagesController@getTemplate');
Route::get('assignmentstatus', 'PagesController@getAssignmentStatus');
Route::get('assignmentresult', 'PagesController@getAssignmentResult');
Route::get('confirmationexam', 'PagesController@getConfirmationExam');
Route::get('examresultfail', 'PagesController@getExamResultFail');
Route::get('beforeinterview', 'PagesController@getBeforeInterview');
Route::get('certificaterenewalstatus', 'PagesController@getCertificateRenewalStatus');
Route::get('certificaterenewalapproved', 'PagesController@getCertificateRenewalApproved');
Route::get('newcertificate', 'PagesController@getNewCertificate');
Route::get('uploadfile', 'PagesController@getUploadFile');
Route::get('modul5quiz1', 'PagesController@getModul5Quiz1');
Route::get('modul5quiz2', 'PagesController@getModul5Quiz2');
Route::get('modul5quizscore', 'PagesController@getModul5QuizScore');
Route::get('certificaterenewal2', 'PagesController@getCertificateRenewal2');
Route::get('uploadfile2', 'PagesController@getUploadFile2');
Route::get('assignmentsubmission2', 'PagesController@getAssignmentSubmission2');
Route::get('startassignment', 'PagesController@getStartAssignment');

//utk upload assignment
Route::get('eiaupload', 'EIAUploadController@index');
Route::get('/eiaupload/{name}',function($name){
	$user=User::where('name',$name)->firstOrFail();
	return view::make('eiaupload')->with('user',$user);
});
Route::post('eiaupload/uploadFiles', 'EIAUploadController@multiple_upload');
Route::get('delete/{original_filename}','EIAUploadController@delete');
//Route::delete('delete/{original_filename}',array('uses' => 'EIAUploadController@delete','as' => 'My.route'));

//utk upload assignment2
/*Route::get('eiaupload2', 'EIAUpload2Controller@index');
Route::get('/eiaupload2/{name}',function($name){
	$user=User::where('name',$name)->firstOrFail();
	return view::make('eiaupload2')->with('user',$user);
});
Route::post('eiaupload2/uploadFiles', 'EIAUpload2Controller@multiple_upload');*/

Route::get('app', 'PagesController@getApp');

Route::get('nav', 'PagesController@getNav');

/*Route::get('uploads', 'UploadController@index');
Route::post('uploads/uploadFiles', 'UploadController@multiple_upload');
Route::get('show', 'UploadController@show');*/

Route::group(['middleware' => ['web']], function () {
	
	Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
	Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);
	Route::get('contact','PagesController@getContact');
	Route::get('about', 'PagesController@getAbout');
	//Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');
	Route::resource('exams', 'ExamController');
	Route::resource('questions', 'QuestionController');
	Route::resource('quizzes', 'QuizController');

	Route::resource('profiles', 'ProfileController');

	Route::resource('modules', 'ModuleController');
	
	Route::resource('modules2', 'Module2Controller');
	Route::resource('modules3', 'Module3Controller');
	Route::resource('modules4', 'Module4Controller');
	Route::resource('modules5', 'Module5Controller');
	Route::resource('topics', 'TopicsController');

	Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    Route::resource('questions_quiz', 'QuestionQuizController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionQuizController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::resource('results2', 'Results2Controller');
    Route::resource('results3', 'Results3Controller');
    Route::resource('results4', 'Results4Controller');
    Route::resource('results5', 'Results5Controller');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);

    //TestsController
    Route::resource('tests', 'TestsController');

    //Tests2Controller
    Route::resource('tests2', 'Tests2Controller');

    //Tests3Controller
    Route::resource('tests3', 'Tests3Controller');

    //Tests4Controller
    Route::resource('tests4', 'Tests4Controller');

    //Tests5Controller
    Route::resource('tests5', 'Tests5Controller');

    Route::resource('examschedules', 'ExamsScheduleController');

	
	//Categories
	Route::resource('categories', 'CategoryController', ['except' => ['create']]);

	
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
//utk upload pcer
Route::get('upload', 'UploadsController@index');
Route::post('upload/uploadFiles', 'UploadsController@multiple_upload');
Route::get('show', 'UploadsController@show');

Auth::routes();

Route::get('register/verify/{token}', 'Auth\RegisterController@verify');
//utk iets
Route::get('/home', 'HomeController@index');
Route::get('iets_syllabus', 'HomeController@iets_syllabus');
Route::get('iets_exam', 'IETS_ExamScheduleController@iets_exam');
Route::get('iets_pcer', 'HomeController@iets_pcer');
Route::get('iets_iv', 'IETS_InterviewController@iets_iv');
Route::get('iets_certificate', 'HomeController@iets_certificate');
Route::get('iets_renewcert', 'HomeController@iets_renewcert');
Route::get('iets_applyrenew', 'HomeController@iets_applyrenew');
Route::get('iets_preapproved', 'HomeController@iets_preapproved');
Route::get('iets_reference', 'HomeController@iets_reference');
Route::get('iets_cert', 'HomeController@iets_cert');
Route::get('templatecert', 'HomeController@templatecert');
Route::get('iets_profile', 'HomeController@iets_profile');
Route::get('iets_examquestion', 'IETSQuestController@iets_examquestion');
Route::get('iets_cpd', 'HomeController@iets_cpd');
Route::get('iets_examresult', 'HomeController@iets_examresult');
Route::get('iets_examfail', 'HomeController@iets_examfail');
Route::get('iets_ivstatus2', 'HomeController@iets_ivstatus2');
Route::get('iets_ivstatus', 'HomeController@iets_ivstatus');
Route::post('store','IETS_ExamScheduleController@store');

//utk apcs
Route::get('apcs_examquestion', 'APCS_ExamQuestController@apcs_examquestion');
Route::get('apcs_cpd', 'HomeController@apcs_cpd');
Route::get('apcs_cert', 'HomeController@apcs_cert');
Route::get('apcs_home', 'HomeController@apcs_home');
Route::get('apcs_iv', 'APCS_InterviewController@apcs_iv');
Route::get('apcs_renewcert', 'HomeController@apcs_renewcert');
Route::get('apcs_certificate', 'HomeController@apcs_certificate');
Route::get('apcs_syllabus', 'HomeController@apcs_syllabus');
Route::get('apcs_reference', 'HomeController@apcs_reference');
Route::get('apcs_exam', 'APCS_ExamScheduleController@apcs_exam');
Route::get('apcs_profile', 'HomeController@apcs_profile');
Route::get('apcs_pcer', 'HomeController@apcs_pcer');
Route::get('apcsupload', 'APCSUploadController@apcsindex');
Route::post('apcsupload/uploadFiles', 'APCSUploadController@multiple_upload');
Route::get('delete/{id}','APCSUploadController@delete');
//Route::get('update','RegisterController@update');
Route::get('store','IETSQuestController@store');
//Route::get('update','RegisterController@update');
Route::get('confirm','APCS_ExamScheduleController@confirm');
Route::get('confirm','IETS_ExamScheduleController@confirm');
Route::get('apcs_examconfirm','APCS_ExamScheduleController@apcs_exam');
Route::get('iv_confirm','IETS_InterviewController@iv_confirm');
Route::get('iets_examconfirm','IETS_InterviewController@iets_exam');
//sme
Route::get('sme', 'SMEController@index');
Route::get('pcersme', 'HomeController@pcersme');
Route::get('general', 'HomeController@general');
Route::get('specific', 'HomeController@specific');
Route::get('apcsme', 'HomeController@apcsme');
Route::get('apcspcersme', 'HomeController@apcspcersme');
Route::get('eia_sme', 'HomeController@eia_sme');
Route::get('eia_assign_sme', 'HomeController@eia_assign_sme');
Route::resource('reqaddinfo', 'SMEaddinfoController');
Route::resource('apcs_reqaddinfo', 'APCSSME_addinfoController'); 
Route::resource('homepage', 'homepageController');



Route::resource('eiaSectionA', 'eiaSectionAController');
Route::resource('eiaSectionB', 'eiaSectionBController');
Route::resource('eiaSectionC', 'eiaSectionCController');
Route::resource('eiaSectionD', 'eiaSectionDController');
Route::resource('eiaSectionE', 'eiaSectionEController');
Route::resource('eiaSectionF', 'eiaSectionFController');

Route::resource('apcsSectionA', 'apcsSectionAController');
Route::resource('apcsSectionB', 'apcsSectionBController');
Route::resource('apcsSectionC', 'apcsSectionCController');
Route::resource('apcsSectionD', 'apcsSectionDController');
Route::resource('apcsSectionE', 'apcsSectionEController');
Route::resource('apcsSectionF', 'apcsSectionFController');

Route::resource('regCategory', 'regCategoryController');
Route::resource('signup', 'signupController');


Route::resource('countries', 'CountryController', ['except'=>['create']]);
Route::resource('ietsSectionE', 'ietsSectionEController');
Route::resource('ietsSectionD', 'ietsSectionDController');
Route::resource('ietsSectionC', 'ietsSectionCController');
Route::resource('ietsSectionB', 'ietsSectionBController');
Route::resource('ietsSectionA', 'ietsSectionAController');


Route::resource('paymentCategory', 'paymentCategoryController');

//additional info iets pcer
Route::get('addupload', 'AddUploadsController@addinfo');
Route::post('addupload/uploadFiles', 'AddUploadsController@multiple_upload');
Route::get('delete/{id}','AddUploadsController@delete');

//additional info apcs pcer
Route::get('apcsaddupload', 'ApcsAddUploadController@apcsaddinfo');
Route::post('apcsaddupload/uploadFiles', 'ApcsAddUploadController@multiple_upload');
Route::delete('delete/{original_filename}',array('uses' => 'ApcsAddUploadController@delete','as' => 'deleteapcsfile'));

Route::post('reqaddinfo/up', 'SMEaddinfoController@sendEmailReminder');
Route::resource('user_actions', 'UserActionsController');
