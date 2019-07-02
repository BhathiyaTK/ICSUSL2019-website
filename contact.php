<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam, Osusara Kammalawatta">

    <title>ICSUSL 2019 | Contact Us</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <!-- ColorBox CSS-->
    <link rel="stylesheet" href="css/colorbox.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Countdown JQuery -->
    <script src="js/jquery.jCounter-0.1.4.js"></script>
    <!-- ColorBox js-->
    <script type="text/javascript" src="js/jquery.colorbox.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

</head>
<body>
	<!-- Preloader -->
    <script type="text/javascript">
        $(window).on("load", function() {
            $(".se-pre-con").fadeOut("slow");
        });

        // contact form ajax request
        $(function(){
            $("#contact-form").on('submit',function(e1){
                e1.preventDefault();

                var name = $("#name").val();
                var email = $("#email").val();
                var tel = $("#tel").val();
                var messege = $("#messege").val();

                $.ajax({
                    type: "POST",
                    url: "ajax/contact_req.php",
                    data: {name:name,email:email,tel:tel,messege:messege},
                    success: function(data1){
                        $(".contact-msg").html(data1);
                        $("#contact-form")[0].reset();
                    }
                });
            });
        });
    </script>

    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/icsusl_logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-responsive" aria-controls="navbar-responsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-responsive">
                <ul class="navbar-nav ml-auto">
                	<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Registration</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="contact-header">
    	<div class="bg-color">
    		<div class="contact-header-title">
    			<h1>Get in touch</h1>
    			<small>Feel free to contact us</small>
    		</div>
    	</div>
    </div>

    <div id="contact-form-sec">
    	<div class="form-container">
    		<div class="form-content">
                <div class="contact-msg"></div>
	    		<form id="contact-form">
	    			<input type="text" name="name" id="name" placeholder="Name"><br>
	    			<input type="email" name="email" id="email" placeholder="Email">
	    			<input type="tel" name="tel" id="tel" placeholder="Phone"><br>
	    			<textarea rows="5" id="messege" name="messege" placeholder="Message"></textarea>
	    			<div class="submit-btn-div">
	    				<input type="submit" name="submit" value="send message">
	    			</div>
	    		</form>
	    	</div>
    	</div>
    </div>

    <!-- footer section -->
    <?php require_once 'common/footer.php'; ?>

</body>
<div class="se-pre-con"></div>
</html>