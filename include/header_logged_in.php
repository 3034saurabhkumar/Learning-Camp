<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<style type="text/css">
  .nav-brand {
    float: left;
    margin-top: -15px;
    height: 50px;
    color: grey;
    padding: 15px 5px;
    font-size: 20px;
    line-height: 20px;
  }
</style>
<body>

  <!--NAVBAR WITH LOGINOUT -->
  <div class="container-fluid" id="content">
    <div class="navbar navbar-default navbar-fixed-top"  style="background: white;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a href="index.php"><span class="nav-brand"><img src="logo.svg" style="height: 50px; width: 50px; padding: 5px; border-radius: 50%;"><b>Learning Camp</b></span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href = "settings.php"><span class = "glyphicon glyphicon-setting"></span> Settings </a></li>
            <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</body>
</html>