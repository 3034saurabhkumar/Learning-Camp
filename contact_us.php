<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title>Learning Camp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo_xCs_icon.ico">
<body>
<?php 
    require 'include/header_logged_out.php'; 
    require 'login_model.php';
?><br><br><br><br>


	<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
	<div class="row-style-login-page-pannel" >
		<div class="col-sm-6 col-xs-12" >
			<h3>CONTACT US</h3>
			<form action="mail_handler.php" method="post" enctype="text/plain">
				<div class="form-group">
					Name:<input type="text" class="form-control" name="name" required>
				</div>

				<div class="form-group">
					Email Id:<input type="email" class="form-control" name="email" required>
				</div>
				
				<div class="form-group">
					Phone:<input type="tel" name="phone" class="form-control" required>
				</div>

				<div class="form-group">
					Message:<textarea rows="4"  class="form-control" name="msg" required></textarea>
				</div>

					<button class="btn btn-primary" type="submit" value="Send"  name="submit">Submit</button>

			</form>
			
			</div>
			<div class="col-sm-offset-1 col-sm-4 col-xs-12" style="border-left: 2px solid #ccc">
			<h3>Information:</h3>
			<p>Mishrauliya, Dumra, sitamarhi,<br>Bihar,847845,<br>India<br>Phone:+91-111-777-888<br>Email: test18@test.com
			    <br>Follow on:<a href="#" target="_blank" style="text-decoration:none;">Facebook</a>, <a href="#" target="_blank" style="text-decoration:none;">Twitter</a>, <a href="#" target="_blank" style="text-decoration:none;">Youtube</a>, <a href="#" target="_blank" style="text-decoration:none;">Telegram</a>, <a href="#" target="_blank" style="text-decoration:none;">whatsapp</a><br></p>
			</div>

		</div>
	</div>


<!--The div element for the map -->
    
    <nav class="footer-copyright">
        <div class="container-fluid" style="margin-top: 20px; margin-bottom: 50px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.162858944418!2d85.50233831511495!3d26.594864183265543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ecf124a15e372d%3A0x8381122081936a47!2sSitamarhi%20Junction!5e1!3m2!1sen!2sin!4v1594382923705!5m2!1sen!2sin" class="col-xs-12" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe>
        </div>
    </nav>
    
<div style="background-color: #333; color:white ;">
    <?php require 'include/foot.php'; ?>
</div>
</body>
</html>