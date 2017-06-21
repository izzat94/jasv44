
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIGN UP</title>
<!--   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/justified-nav.css" rel="stylesheet" type="text/css">
  <link href="css/templatemo_style.css" rel="stylesheet" type="text/css"> -->
   <!-- Website Font (SIGN UP) style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/justified-nav.css')!!}
  {!!Html::style('css/templatemo_style.css')!!}
  {!!Html::style('css/parsley.css')!!}
  {!!Html::style('css/button.css')!!}




  <style>
  .well {
  background: white;
}
    p {
        text-indent: 30px;
    }
    .table th, .table td {
      border-top: none !important;
      border-left: none !important;
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

<div class="container" style="width: 80%">

<div class="col-xs-12" style="height:50px;"></div> 

<div class="well well-lg" style="margin-left: 5%; margin-right: 5%">
    <center>
      <h3 h2 style="margin-left: 5%">SIGN UP FOR NEW PRE-QUALIFICATION REGISTRATION</h3>
    </center>


 <div class="well well-lg"  style="margin-left: 10%; margin-right: 10%; border-color: #cc5200; background-color: #ffe6b3">
  
       <div class="well" style="border-color: transparent; background-color: transparent;">
      <div class="row main">
          <form class="form-horizontal" method="post" action="#">
            
            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input  type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                </div>
              </div>
            </div>

            
            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input  type="text" class="form-control" name="ic" id="ic"  placeholder="Enter your I/C" style="width: 50%"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input  type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email" style="width: 60%"/>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input  type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" style="width: 80%"/>
                  &nbsp
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input  type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" style="width: 80%"/>
                </div>
              </div>
            </div>

<!--             <div class="form-group">
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input  type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password" style="width: 30%"/>
                </div>
              </div>
            </div> -->
            <div class="col-xs-12" style="height:50px;"></div> 

            <center>
              <div class="form-group ">
              <button type="button" class="button" data-toggle="modal" data-target="#popup">Register</button>
            </center>
            

  <!-- Modal -->
  <div class="modal fade" id="popup" role="dialog">
    <div class="modal-dialog">

            <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="border-color: transparent">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <div class="well" style="background-color: #ccffcc">
            <h4 class="modal-title">You has sign up successfully</h4>
          </div>
          <center>
          <p>Please check your email for verification before you login.
          </br></br>
          Thank You
          </p>
          </br></br>
          <button type="button" class="button" onclick="window.location.href='/homepage/create'">Close</button></center>
        </div>
      </div>
      <!-- Modal content-->
    </div>
  </div>
  <!-- Modal -->


             <!--  <button  type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button> -->
            </div>
          </form>
      </div>
    </div>
    </div>

 </div>

</div>



        
         
<!-- FOOTER -->
    <div class="container">
              <footer>
      <div class="credit row">
        <center><div class="col-md-6 col-md-offset-3">
          <div id="templatemo_footer">Copyright © 2017 <a href="#">Jabatan Alam Sekitar</a>
          </div>
        </div>
           </center> 
      </div>
    </footer></div>
    <!-- templatemo 393 fantasy -->
    {!! Html::script('js/parsley.min.js')!!}
    {!! Html::script('js/jquery.js')!!}
    {!! Html::script('js/bootstrap.min.js')!!}
    {!! Html::script('js/templatemo_script.js')!!}
<!-- templatemo 393 fantasy -->
  
<!-- FOOTER -->
</div>
</body>
</html>

