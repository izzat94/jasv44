<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 -->  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <meta charset="utf-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="css/justified-nav.css" rel="stylesheet" type="text/css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Website Font (SIGN UP) style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">


    {!!Html::style('css/bootstraps.min.css')!!}
  {!!Html::style('css/justified-nav.css')!!}
<!--   {!!Html::style('css/templatemo_style.css')!!}
 -->  {!!Html::style('css/parsley.css')!!}
  {!!Html::style('css/button.css')!!}
  <style>
    f1 {
      font-size: 10px;
    }

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
    }
    p {
      text-align: justify;
    }
    .table th, .table td {
      border-top: none !important;
      border-left: none !important;
    }
    h4 {
      font-size: 20;
    }
   li {
        float: left;
        background-color: #ccd1d9;
    }

    li a, .dropbtn {
        display: inline-block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        background-color: #ccd1d9;
    }

    li a:hover, .dropdown:hover .dropbtn {
        background-color: #ccd1d9;
        color: black;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ccd1d9;
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
        background-color: #ccd1d9
    }

    .dropdown-content a:hover {background-color: #ccd1d9}

    .dropdown:hover .dropdown-content {
        display: block;
        background-color: #ccd1d9
    }
    .credit {
  padding: 10px 0px;
  background-color: #006e00;
  }
  footer a {
    color: #FFFFFF;
  }
  footer {
    color: #FFFFFF;
  }
  .col-xs-12 {
    width: 0%;
  }
  .col-sm-10 {
    background-color: white;
  }
  .col-xs-3 {
    background-color: white;
  }

  </style>
  </head>

  <body>
  <!-- HEADER -->
    <div class="container">
    <div>
      <img src="{{URL::asset('/image/banner1.png')}}" alt="profile Pic" height="100" width="2048", class="img-responsive cleaner">
    </div>
    </div>
  <!-- HEADER -->

    <!-- SLIDER -->
    <div class="container">
    <table class="table">
              <form>
                <tbody>
                  <tr>
                    <td style="width: 80%">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
        <img src="{{URL::asset('/image/11.jpg')}}" alt="profile Pic" height="100" width="2048", class="img-responsive cleaner">
        <!--img src="image/11.jpg" alt="1" width="400px" height="200px"-->
        </div>

        <div class="item">
        <img src="{{URL::asset('/image/12.jpg')}}" alt="profile Pic" height="100" width="2048", class="img-responsive cleaner">
          <!--img src="image/12.jpg" alt="2" width="400px" height="200px"-->
        </div>

        <div class="item">
        <img src="{{URL::asset('/image/13.png')}}" alt="profile Pic" height="100" width="2048", class="img-responsive cleaner">
          <!--img src="image/13.png" alt="3" width="400px" height="200px"-->
        </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </td>
    </tr>
    </tbody>
    </form>
    </table>






    <!-- TABS -->
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#intro">INFO</a></li>
        <li class="dropdown">

    <li class="dropdown"><a class="dropbtn">GUIDELINE<b class="caret"></b></a>
              <div class="dropdown-content">
                <a data-toggle="tab" href="#eia">EIA</a>
                <a data-toggle="tab" href="#iets">IETS</a>
                <a data-toggle="tab" href="#apcs">APCS</a>
              </div>
            </li>
      </li>
      <li><a data-toggle="tab" href="#payment">PAYMENT</a></li>
      <li class="dropdown">

    <li class="dropdown"><a class="dropbtn">ANNOUNCEMENT<b class="caret"></b></a>
              <div class="dropdown-content">
                <a data-toggle="tab" href="#announceEia">EIA</a>
                <a data-toggle="tab" href="#announceIets">IETS</a>
                <a data-toggle="tab" href="#announceApcs">APCS</a>
              </div>
            </li>
      </li>
    </ul>
    </div>
    <!-- TABS -->






        <div class="tab-content">

        <!-- TABS INFO -->
          <div id="intro" class="tab-pane fade in active">
            <table class="table">
                <tbody>
                  <tr>
                    <td style="width: 70%">
                    <div class="well well-lg">
            <h3>INTRODUCTION</h3>

            <p> &nbsp &nbsp &nbsp Department of Environment (DOE) has developed EIA Consultant Registration Scheme in 2007 to regulate the list of eligible persons in Malaysia for the purposes of Section 34A (2A). Section 34A (2A), EQA 1974 (revised 2012) requires the Director General to maintain a list of persons entitled to carry out environmental impact assessments. The scheme has also been developed to improve the standard of professionalism among EIA practitioners in ensuring quality service, ethics and integrity.
            </p>
            <p>
            &nbsp &nbsp &nbsp Registration Consulting IETS and APCS is a new scheme that will be developed to accredit providers notifications to control the quality of notifications submitted to the DOE to improve the service delivery system to regulate the methods that are more creative, effective, holistic and efficient. Therefore, an integrated support system is required for the registration process for the online consultants to ensure that consultants are eligible to be certified in accordance with the direction of the DOE to mainstream the environment. This system allows consultants to register and undergo a course and meet the requirements established on-line consultant at the appropriate time during the year.</p>
              </div>
                    </td>
                    <td  style="width: 30%">

                 <div class="well">

      <h3>Login</h3>
             <div class="well" style="border-color: transparent;">
      <div class="row main">
        <div class="panel-heading">
                 <div class="panel-title text-center">
                  </div>
              </div>
        <div class="main-login main-center">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nric') ? ' has-error' : '' }}">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input  type="nric" class="form-control" userid="userid" id="userid"  placeholder="Enter user id" name="nric" value="{{ old('nric') }}" required autofocus/>
                  @if ($errors->has('nric'))
                      <span class="help-block">
                          <strong>{{ $errors->first('nric') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
            </div>



            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input  type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
            </div>


             <div class="form-group row">
                            <div class="form-check">
                              &nbsp &nbsp &nbsp<input class="form-check-input" type="checkbox"> Remember password
                              </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            &nbsp &nbsp &nbsp<button type="submit" class="btn btn-primary">Sign in</button>
                            </br>
                             &nbsp &nbsp &nbsp<label>Don't have an account?</label>
                            <button type="button" class="btn btn-link" onclick="window.location.href='/register'"><strong>Sign up</strong></button>
                            <label>here</label>
      </div>
      </form>
      </div>

                    </td>
                  </tr>
                </tbody>

            </table>
        </div>
        </div>





        <!-- TABS PAYMENT-->
        <div id="payment" class="tab-pane fade">

          <center>
          <div class="well well-lg" style="width: 80%">
          <h3>PAYMENT</h3>
          </br></br>
      <label style="color: #337ab7">Enter your :</label></br>
       <label style="color: #337ab7">I/C Number for Malaysian OR Passport Number for Foreigner</label></br>
      <input class="form-control" type="text" id="example-text-input" style="width: 20%" placeholder=" Eg : 870524105687">
      </br>
    <button type="button" class="btn btn-default" onclick="window.location.href='/paymentCategory/create'">Next</button>
    </br></br></br>
      </div>
        </center>
        </div>
        <!-- TABS PAYMENT-->






        <!-- TABS EIA-->
       <div id="eia" class="tab-pane fade">
            <!-- Tab panes -->
            <div class="tab-content">
            <center>
          <div class="well well-lg" style="width: 90%">
              <h3>EIA PROCESS FLOW GUIDELINE</h3>
              </br></br>
              <label>Click on the image below to download the guideline :</label>
              </br></br>

<!--                 <a href="/document/reg_scheme_eia.pdf" download class="btn btn-link">REGISTRATION SCHEME FOR CERTIFIED EIA CONSULTANT IN MALAYSIA ver 2016</a>
                 <input type="image" src="{{URL::asset('/image/abc.jpg')}}" width="20%" height="40%"> -->
                 <input type="image" src="{{URL::asset('/image/abc.jpg')}}" alt="Submit" height="30%" width="60%", onclick="window.location.href='/document/reg_scheme_eia.pdf'" style="box-shadow: 10px 10px 5px grey">


            </div></div></center>

        <div class="clearfix"></div>

        </div>
         <!-- TABS EIA-->










         <!-- TABS IETS-->
        <div id="iets" class="tab-pane fade">
            <!-- Tab panes -->
            <div class="tab-content">
                <center>
          <div class="well well-lg" style="width: 90%">
              <h3>IETS PROCESS FLOW GUIDELINE</h3>
              </br></br>
              &nbsp &nbsp &nbsp <label>Click on the image below to download the guideline :</label>
              </br></br>

               <!--  <a href="/document/reg_scheme_iets.pdf" download class="btn btn-link">PROCESS FLOW IETS</a>
                </br>
                <a href="/document/reg_scheme2_iets.pdf" download class="btn btn-link">DRAFT GUIDANCE ON IETS DESIGN CONSULTANT</a> -->
              <input type="image" src="{{URL::asset('/image/e.jpg')}}" alt="Submit" height="30%" width="60%", onclick="window.location.href='/document/reg_scheme_iets.pdf'" style="box-shadow: 10px 10px 5px grey">
              </br></br>
              <input type="image" src="{{URL::asset('/image/d.jpg')}}" alt="Submit" height="30%" width="60%", onclick="window.location.href='/document/reg_scheme2_iets.pdf'" style="box-shadow: 10px 10px 5px grey">
              </br></br>
              </div>

            </div></center>

        <div class="clearfix"></div>

        </div>

         <!-- TABS IETS-->







         <!-- TABS APCS-->
        <div id="apcs" class="tab-pane fade">
            <!-- Tab panes -->
            <div class="tab-content">
                 <center>
          <div class="well well-lg" style="width: 90%">
              <h3>APCS PROCESS FLOW GUIDELINE</h3>
              </br></br>
               <label>Click on the image below to download the guideline :</label>
              </br></br>

                <!-- <a href="/document/reg_scheme_apcs.pdf" download class="btn btn-link">PROCESS FLOW APCS</a>
                </br>
                <a href="/document/reg_scheme2_apcs.pdf" download class="btn btn-link">DRAFT GUIDANCE ON APCS DESIGN CONSULTANT</a>
              </br></br> -->

            <input type="image" src="{{URL::asset('/image/f.jpg')}}" alt="Submit" height="30%" width="60%", onclick="window.location.href='/document/reg_scheme_apcs.pdf'" style="box-shadow: 10px 10px 5px grey">
              </br></br>
              <input type="image" src="{{URL::asset('/image/g.jpg')}}" alt="Submit" height="30%" width="60%", onclick="window.location.href='/document/reg_scheme2_apcs.pdf'" style="box-shadow: 10px 10px 5px grey">
              </br></br>
              </div>

            </div></center>

        <div class="clearfix"></div>

        </div>


         <!-- TABS APCS-->









 <!-- TABS ANNOUNCE EIA-->
       <div id="announceEia" class="tab-pane fade">
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="well well-lg" style="width: 90%; margin-left: 5%">
              <h2>EIA Announcement</h2>
      <div class="col-xs-12" style="height:20px;"></div>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#announcement">Notis Kepada Penyelia Latihan Swasta Penganjuran Kursus, Seminar, Bengkel dan Latihan berkaitan Akta Kualiti Alam Sekeliling 1974</button></br>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#">Panduan Indeks Pencemaran Udara</button></br>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#">PENARIKAN BALIK PENGISYTIHARAN PERINTAH LARANGAN PEMBAKARAN TERBUKA</button>
      </br></br></br>
      </div></div>

        <div class="clearfix"></div>

        </div>
         <!-- TABS ANNOUNCE EIA-->
      <!-- announcement -->
  <div class="modal fade" id="announcement" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <u><h4 class="modal-title">Notis Kepada Penyelia Latihan Swasta Penganjuran Kursus, Seminar, Bengkel dan Latihan berkaitan Akta Kualiti Alam Sekeliling 1974 dan Peraturan-peraturan di bawahnya</h4></u>
        </div>
        <div class="modal-body">
          <p>Ingin dimaklumkan bahawa <strong><u>pemberian CPD hour</u></strong> oleh Institut Alam Sekitar Malaysia (EiMAS) kepada Penyedia Latihan Swasta bagi penganjuran kursus, seminar, bengkel ataupun latihan berkaitan dengan Akta Kualiti Alam Sekeliling 1974 dan Peraturan-peraturan Di Bawahnya <strong><u>tidak akan dipertimbangkan</u></strong> lagi berdasarkan ketetapan Ketua Pengarah Kualiti Alam Sekeliling.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div></div></div>





 <!-- TABS ANNOUNCE IETS-->
       <div id="announceIets" class="tab-pane fade">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="well well-lg" style="width: 90%; margin-left: 5%">
              <h2>IETS Announcement</h2>
      <div class="col-xs-12" style="height:20px;"></div>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#announcement">Notis Kepada Penyelia Latihan Swasta Penganjuran Kursus, Seminar, Bengkel dan Latihan berkaitan Akta Kualiti Alam Sekeliling 1974</button></br>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#">Panduan Indeks Pencemaran Udara</button></br>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#">PENARIKAN BALIK PENGISYTIHARAN PERINTAH LARANGAN PEMBAKARAN TERBUKA</button>
      </br></br></br>
      </div></div>

        <div class="clearfix"></div>

        </div>

      <!-- announcement -->
  <div class="modal fade" id="announcement" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <u><h4 class="modal-title">Notis Kepada Penyelia Latihan Swasta Penganjuran Kursus, Seminar, Bengkel dan Latihan berkaitan Akta Kualiti Alam Sekeliling 1974 dan Peraturan-peraturan di bawahnya</h4></u>
        </div>
        <div class="modal-body">
          <p>Ingin dimaklumkan bahawa <strong><u>pemberian CPD hour</u></strong> oleh Institut Alam Sekitar Malaysia (EiMAS) kepada Penyedia Latihan Swasta bagi penganjuran kursus, seminar, bengkel ataupun latihan berkaitan dengan Akta Kualiti Alam Sekeliling 1974 dan Peraturan-peraturan Di Bawahnya <strong><u>tidak akan dipertimbangkan</u></strong> lagi berdasarkan ketetapan Ketua Pengarah Kualiti Alam Sekeliling.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div></div></div>
         <!-- TABS ANNOUNCE IETS-->




 <!-- TABS ANNOUNCE APCS-->
       <div id="announceApcs" class="tab-pane fade">
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="well well-lg" style="width: 90%; margin-left: 5%">
              <h2>APCS Announcement</h2>
      <div class="col-xs-12" style="height:20px;"></div>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#announcement">Notis Kepada Penyelia Latihan Swasta Penganjuran Kursus, Seminar, Bengkel dan Latihan berkaitan Akta Kualiti Alam Sekeliling 1974</button></br>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#">Panduan Indeks Pencemaran Udara</button></br>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#">PENARIKAN BALIK PENGISYTIHARAN PERINTAH LARANGAN PEMBAKARAN TERBUKA</button>
      </br></br></br>
      </div></div>

        <div class="clearfix"></div>

        </div>

      <!-- announcement -->
  <div class="modal fade" id="announcement" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <u><h4 class="modal-title">Notis Kepada Penyelia Latihan Swasta Penganjuran Kursus, Seminar, Bengkel dan Latihan berkaitan Akta Kualiti Alam Sekeliling 1974 dan Peraturan-peraturan di bawahnya</h4></u>
        </div>
        <div class="modal-body">
          <p>Ingin dimaklumkan bahawa <strong><u>pemberian CPD hour</u></strong> oleh Institut Alam Sekitar Malaysia (EiMAS) kepada Penyedia Latihan Swasta bagi penganjuran kursus, seminar, bengkel ataupun latihan berkaitan dengan Akta Kualiti Alam Sekeliling 1974 dan Peraturan-peraturan Di Bawahnya <strong><u>tidak akan dipertimbangkan</u></strong> lagi berdasarkan ketetapan Ketua Pengarah Kualiti Alam Sekeliling.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div></div></div>
         <!-- TABS ANNOUNCE APCS-->






<!-- FOOTER -->
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
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/templatemo_script.js"></script>
<!-- FOOTER -->



  </body>
</html>
