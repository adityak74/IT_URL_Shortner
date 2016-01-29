<html>
<head>
<title>EDU-INWHIZZ LOGIN</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style>
.modal-footer {   border-top: 0px; }
.modal-dialog { margin-top:120px; }
body { 
 background: url('bg_suburb.jpg') no-repeat center center fixed; 
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}
</style>
</head>
<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>-->
          <h1 class="text-center">Token Search</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="" method="POST">
            <div class="form-group">
              <input class="form-control input-lg" placeholder="Enter USN" name="usn" type="text">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Search</button>
                                          <!--<span class="pull-right"><a href="#">Register</a></span>-->
              <!--<span><a href="#">Need help?</a></span>-->
              <center>
                
              <?php 
                if(isset($_POST['usn'])){
                  echo '<h4 style="color:red;">Your Token is<br><br><a href="#"><h1 style="background-color:#e3e3e3;width:80%;padding:10px;border-radius:10px;">';

                  //connect to db
                  //get USN
                  // USN = $_POST['usn']
                  // select token from db where usn='$usn'
                  //display token
                  //of not found Click on generate token.
                  echo 'Please Generate Token';
                }
              ?>

              </h1></a></h4></center>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <a href="token_generator.php"><button class="btn" data-dismiss="modal" aria-hidden="true">Generate Token</button></a>
          </div>	
      </div>
  </div>
  </div>
</div>

</body>
</html>