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

        $(document).ready(function(){
        	$("#bank_rec_div").hide();
        	$("#std_proof_div").hide();
        });

        $(function(){
        	$("#partipant_type").on('change', function(){
        		var selVal = $("#partipant_type").val();
        		if ((selVal == 'author')||(selVal == 'participant/co-author')) {
        			$("#bank_rec_div").show().fadeIn('slow');
        			$("#std_proof_div").hide().fadeOut('slow');
        		}else if(selVal == 'student'){
        			$("#std_proof_div").show().fadeIn('slow');
        			$("#bank_rec_div").show().fadeIn('slow');
        		}else if((selVal == 'ars-author')||(selVal == '')){
        			$("#bank_rec_div").hide().fadeOut('slow');
        			$("#std_proof_div").hide().fadeOut('slow');
        		}
        	});
        });

        // register form ajax request
        $(function(){
            $("#register-form").submit(function(e2){
                e2.preventDefault();

                var formData = new FormData(this);

                $.ajax({
                    type: "POST",
                    url: "ajax/register_req.php",
                    data: formData,
                    success: function(data2){
                        $("#register-form")[0].reset();
                        $(".register-msg").html(data2);
                    },
			        cache: false,
			        contentType: false,
			        processData: false
                });
            });
        });
    </script>

    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="images/icsusl_logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-responsive" aria-controls="navbar-responsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars fa-lg"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar-responsive">
                <ul class="navbar-nav ml-auto">
                	<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="register.php">Registration</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
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
	    		<form id="register-form">
	    			<div class="require-mark-topic-div"><div class="require-mark-title"></div> Required Fields</div>
	    			<br>
	    			<label>Bio details</label>
	    			<div class="row">
	    				<div class="col-md-12">
	    					<input type="text" name="full_name" id="full_name" placeholder="Full Name"><div class="require-mark"></div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-6">
	    					<input type="text" name="paper_id" id="paper_id" placeholder="Paper ID/ Title">
	    				</div>
	    				<div class="col-md-6">
	    					<input type="text" name="name_on_badge" id="name_on_badge" placeholder="Name on the Badge"><div class="require-mark"></div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-6">
	    					<input type="text" name="affiliation" id="affiliation" placeholder="Affiliation"><div class="require-mark"></div>
	    				</div>
	    				<div class="col-md-6">
	    					<input type="text" name="country" id="country" placeholder="Country"><div class="require-mark"></div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-7">
	    					<input type="email" name="email" id="email" placeholder="Email"><div class="require-mark"></div>
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
	    				<div class="col-md-6">
	    					<select id="partipant_type" name="partipant_type">
	    						<option value="">Select Participant Type</option>
	    						<option value="author">Author</option>
	    						<option value="participant/co-author">Co-Author / Participant</option>
	    						<option value="student">Student</option>
	    						<option value="ars-author">ARS Author</option>
	    					</select><div class="require-mark-1"></div>
	    				</div>
	    			</div>
	    			<div class="row">
	    				<div class="col-md-6" id="bank_rec_div">
	    					<label class="sub-label">Upload Bank Payment Receipt</label>
	    					<input type="file" name="payment_receipt" id="payment_receipt"><div class="require-mark-2"></div>
	    				</div>
	    				<div class="col-md-6" id="std_proof_div">
	    					<label class="sub-label">Upload Proof of Studentship</label>
	    					<input type="file" name="studentship" id="studentship"><div class="require-mark-2"></div>
	    				</div>
	    			</div>
	    			<br>
	    			<div class="row">
	    				<div class="col-md-7">
	    					<label>Meal Preference</label>
	    					<div class="row">
	    						<div class="col-md-6">
			    					<select id="lunch" name="lunch">
			    						<option value="">Lunch Type</option>
			    						<option value="chicken">Chicken</option>
			    						<option value="fish">Fish</option>
			    						<option value="egg">Egg</option>
			    						<option value="veg">Vegetable</option>
			    					</select>
			    				</div>
			    				<div class="col-md-6">
			    					<select id="dinner" name="dinner">
			    						<option value="">Dinner Type</option>
			    						<option value="chicken">Chicken</option>
			    						<option value="fish">Fish</option>
			    						<option value="egg">Egg</option>
			    						<option value="veg">Vegetable</option>
			    					</select>
			    				</div>
	    					</div>
	    				</div>
	    				<div class="col-md-5">
	    					<label>Tour Participation</label>
	    					<div class="row">
	    						<div class="col-md-12">
			    					<select id="tour" name="tour">
			    						<option value="">Confirm Your Participation</option>
			    						<option value="option1">Option 1</option>
			    						<option value="option2">Option 2</option>
			    					</select>
			    				</div>
	    					</div>
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