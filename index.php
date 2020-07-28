<?php
    session_start();
    $con=mysqli_connect("localhost","root","root","project") or die(mysqli_error($con));
	$select_query = "SELECT * FROM fileup";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$select_query1 = "SELECT * FROM driveup";
	$select_query_result1 = mysqli_query($con, $select_query1) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=""> 
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo_xCs_icon.ico">
	<title>Learning Camp</title>
	
	<style>
	    .button:hover {background-color: #CFCFCF}
	</style>
</head>
<body>
    
	<?php
		if(!isset($_SESSION['id'])){ 
			require 'include/header_logged_out.php';
            require 'login_model.php';
	?>
    
    <div class="container" style="margin-top: 80px; margin-bottom: 100px;color: grey; font-family: sans-serif;">
        <div class="row">
            <a id="about_us" style="text-decoration: none; color: grey;">
            <div class="col-md-6 col-sm-12">
                <h1>Learning Camp</h1>
                
                <p>Hello Guys...
<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
Contact me for any business enquires:- test18@test.com, For more interesting updates Join WhatsApp & Telegram and Also like Facebook Page. DON'T FORGET TO SUBSCRIBE..!👍 Thanks a lot...!!</p>
                <div class="col-md-6 col-xs-12" >
                    <a href="" target="_blank">
                    <button class="btn btn-light btn-lg button" style="height:55px;outline: none;border: none;">
                    <svg fill="currentColor" style="color: #4A5568;margin-left: -5px;margin-top:-4px;border-radius: 20%" xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    <span class="" style="float:right; margin-left:20px; margin-top:-8px;">
                        <span style="font-size: 13px; color:#808080;">Follow me ON</span><br>
                        <span style="font-weight: bold; color:#4A5568;">Youtube</span>
                    </span>
                    </button>
                    </a>
                </div>
            </div>
            </a>
            <div class="col-md-6 col-xs-12">
                <img class="img-responsive" alt="hero" src="https://source.unsplash.com/500x300/?technology">
                
            </div>
        </div>
    </div>
    
    <div class="container" style="margin-top: 80px; margin-bottom: 100px">
        <div class="row row-style-login-page-pannel">
            <?php while ($row = mysqli_fetch_array($select_query_result)) { ?>
            <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo $row['title']; ?></div>
                    <div class="panel-body">
                        
                        <center>
                        <b><?php echo $row['file']; ?><br></b>Price:Free/-</center>
                        <a href="upload/<?php echo $row['file']; ?>"><button class="btn btn-primary form-control" type="button">Download</button></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php while ($row1 = mysqli_fetch_array($select_query_result1)) { ?>
            <div class=" col-md-4 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo $row1['title']; ?></div>
                    <div class="panel-body">
                        
                        <center>
                        <b><?php echo $row1['file']; ?><br></b>Price:Free/-</center>
                        <a href="<?php echo $row1['url']; ?>" target="_blank"><button class="btn btn-primary form-control" type="button">Download</button></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    

    <div style="background-color: #333; color:white ;">
        <?php require 'include/foot.php'; ?>
    </div>
<?php } else {
        require 'include/header_logged_in.php'; 
?><br><br><br><br><br>
    <div class="container">
        <div class="row" >
            <div class=" col-md-4 col-xs-12" >
                <li><a href="upload.php" style="text-decoration: none; color: grey;">Upload Files</a></li>   
            </div>

            <div class=" col-md-4  col-xs-12">
                <li><a href="drive_upload.php" style="text-decoration: none; color: grey;">Upload Files in Drive</a></li>
            </div>

            <div class=" col-md-4  col-xs-12">
                <li><a href="show_database.php" style="text-decoration: none; color: grey;">Show Database</li>
            </div>
        </div>
    </div>
<?php
    }
?>
            
    
</body>
</html>