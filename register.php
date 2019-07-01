<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam, Osusara Kammalawatta">

    <title>ICSUSL 2019 | Register</title>

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

        // register form ajax request
        $(function(){
            $("#contact-form").on('submit',function(e2){
                e2.preventDefault();

                var full_name = $("#full_name").val();
                var paper_id = $("#paper_id").val();
                var name_on_badge = $("#name_on_badge").val();
                var affiliation = $("#affiliation").val();
                var country = $("#country").val();
                var email = $("#email").val();
                var phone = $("#phone").val();
                var receipt_name = $("#receipt_name").val();
                var receipt_address = $("#receipt_address").val();
                var partipant_type = $("#partipant_type").val();
                var payment_receipt = $("#payment_receipt").val();
                var studentship = $("#studentship").val();
                var lunch = $("#lunch").val();
                var dinner = $("#dinner").val();
                var tour = $("#tour").val();

                $.ajax({
                    type: "POST",
                    url: "ajax/register_req.php",
                    data: {full_name:full_name,paper_id:paper_id,name_on_badge:name_on_badge,affiliation:affiliation,country:country,email:email,phone:phone,receipt_name:receipt_name,receipt_address:receipt_address,partipant_type:partipant_type,payment_receipt:payment_receipt,studentship:studentship,lunch:lunch,dinner:dinner,tour:tour},
                    success: function(data2){
                        $(".register-msg").html(data2);
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

    <div id="reg-header">
    	<div class="bg-color">
    		<div class="reg-header-title">
    			<h1>Register for ICSUSL 2019</h1>
    			<small>Be a part of this wonderful movement</small>
    		</div>
    	</div>
    </div>

    <div id="reg-form-sec">
    	<div class="reg-form-container">
    		<div class="reg-form-content">
	    		<form>
	    			<label>Bio details</label>
	    			<div class="row">
	    				<div class="col-md-12">
	    					<input type="text" name="full_name" id="full_name" placeholder="Full Name">
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-6">
	    					<input type="text" name="paper_id" id="paper_id" placeholder="Paper ID/ Title">
	    				</div>
	    				<div class="col-md-6">
	    					<input type="text" name="name_on_badge" id="name_on_badge" placeholder="Name on the Badge">
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-6">
	    					<input type="text" name="affiliation" id="affiliation" placeholder="Affiliation">
	    				</div>
	    				<div class="col-md-6">
	    					<input type="text" name="country" id="country" placeholder="Country">
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-7">
	    					<input type="email" name="email" id="email" placeholder="Email">
	    				</div>
	    				<div class="col-md-5">
	    					<input type="text" name="phone" id="phone" placeholder="Phone">
	    				</div>
	    			</div>
	    			<br>
	    			<label>Billing Informations</label>
	    			<div class="row">
	    				<div class="col-md-12">
	    					<input type="text" name="receipt_name" id="receipt_name" placeholder="Receipt Name">
	    					<input type="text" name="receipt_address" id="receipt_address" placeholder="Receipt Address">
	    				</div>
	    			</div>
	    			<br>
	    			<label>Documents <span>(in PDF, PNG or JPG format)</span></label>
	    			<div class="row">
	    				<div class="col-md-12">
	    					<select id="partipant_type" name="partipant_type">
	    						<option value="">Select Participant Type</option>
	    						<option value="pa">Participant / Author</option>
	    						<option value="std">Student</option>
	    						<option value="ca">Co-Author</option>
	    					</select>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-6">
	    					<label class="sub-label">Bank Payment Receipt</label>
	    					<input type="file" name="payment_receipt" id="payment_receipt">
	    				</div>
	    				<div class="col-md-6">
	    					<label class="sub-label">Proof of Studentship</label>
	    					<input type="file" name="studentship" id="studentship">
	    				</div>
	    			</div>
	    			<br>
	    			<label>Meal Preference</label>
	    			<div class="row">
	    				<div class="col-md-6">
	    					<select id="lunch" name="lunch">
	    						<option value="">Select Your Lunch Type</option>
	    						<option value="chicken">Chicken</option>
	    						<option value="fish">Fish</option>
	    						<option value="egg">Egg</option>
	    						<option value="veg">Vegetable</option>
	    					</select>
	    				</div>
	    				<div class="col-md-6">
	    					<select id="dinner" name="dinner">
	    						<option value="">Select Your Dinner Type</option>
	    						<option value="chicken">Chicken</option>
	    						<option value="fish">Fish</option>
	    						<option value="egg">Egg</option>
	    						<option value="veg">Vegetable</option>
	    					</select>
	    				</div>
	    			</div>
	    			<br>
	    			<label>Tour Participation</label>
	    			<div class="row">
	    				<div class="col-md-6">
	    					<select id="tour" name="tour">
	    						<option value="">Confirm Your Participation</option>
	    						<option value="yes">Yes</option>
	    						<option value="no">No</option>
	    					</select>
	    				</div>
	    			</div>
	    			<br>
	    			<div class="register-msg"></div>
	    			<br>
	    			<div class="submit-btn-div">
	    				<input type="submit" name="submit" value="Register">
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