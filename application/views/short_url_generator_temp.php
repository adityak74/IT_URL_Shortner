<html>
<head>
<title>ITNSP SHORT LINK GENERATOR</title>
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
          <h1 class="text-center">Short URL Generator</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="http://localhost/itnsp/short_url" method="POST">
            <div class="form-group">
              <input class="form-control input-lg" placeholder="Enter Link" name="full_link" type="text">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Generate Short URL</button>
              <center>
                
              <?php 
                if(isset($short_code)){
                  echo '<h4 style="color:red;">Shortened URL is<br><br><a target="_blank" href="http://localhost/itnsp/l/'.$short_code.'"><h1 style="background-color:#e3e3e3;width:50%;padding:10px;border-radius:10px;">';
                  echo 'http://localhost/itnsp/l/'.$short_code;
                }
              ?>

              </h1></a></h4></center>
              <!--<span><a href="#">Need help?</a></span>-->
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <!--<a href="token_search.php"><button class="btn" data-dismiss="modal" aria-hidden="true">Search Token</button></a>-->
          </div>	
      </div>
  </div>
  </div>
</div>

</body>
</html>