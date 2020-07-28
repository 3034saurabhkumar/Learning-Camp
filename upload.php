<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  	<link rel="icon" type="image/png" sizes="32x32" href="img/logo_xCs_icon.ico">
  	
  	<script>
		function validate(){
			n=document.myform.title.value;
			f=document.myform.file.value;
			if(n.length==0)
			{
				alert("Title is not filled");
				document.myform.title.focus();
			}
			else if(f.length==0)
			{
				alert("File is not uploaded");
				document.myform.file.focus();
			}
		}
	</script>
</head>
<body>
	<?php
	if(isset($_SESSION['id'])){ 
		require 'include/header_logged_in.php'; 
	?><br><br><br>
	<a href="index.php">back</a>
	<?php echo $_GET['r']; ?>
	<div class="container" style="margin-top: 80px; margin-bottom: 100px">
        <div class="row row-style-login-page-pannel">
            <div class=" col-md-4 col-sm-6 col-xs-12 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Upload Files</div>
                    <div class="panel-body">
                          <form name="myform" method="post" action="load.php" enctype="multipart/form-data">
                    		<label>Title</label>
                    		<input type="text" name="title" style="margin-left:20px;"><br>
                    		<label>File Upload</label>
                    		<input type="File" name="file">
                    		<Button class="btn btn-primary form-control" type="submit" name="submit" onclick="validate();">Submit</button>
                	    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php } ?>
</body>
</html>