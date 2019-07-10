<?php

require_once 'db.php';

session_start();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        if (($email!=='')&&($password!=='')) {
            $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
            $r=$conn->query($query);
            if($r->num_rows>0){
                while($row=$r->fetch_assoc()){
                    $_SESSION['id']=$row['id'];
                    $_SESSION['email']=$row['email'];
                    header("location: admin.php");
                }
            }else{
                $login_message = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Admin not found. Please enter valid details.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            }
        }else{
            $login_message = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>All the fields are required.</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        } 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam, Osusara Kammalawatta">

    <title>ICSUSL 2019 | Admin Login</title>

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
                </ul>
            </div>
        </div>
    </nav>

    <div id="login-header">
    	<div class="bg-color">
    		<div class="login-header-title">
    			<h1>Get in touch</h1>
    			<small>Feel free to contact us</small>
    		</div>
    	</div>
    </div>

    <div id="login-form-sec">
    	<div class="form-container">
    		<div class="form-content">
                <div class="login-msg">
                <?php
                    if (isset($login_message)) {
                        echo $login_message;
                    }
                ?>
                </div>
	    		<form id="login-form" action="login.php" method="POST">
	    			<input type="text" name="email" id="email" placeholder="Email"><br>
	    			<input type="password" name="password" id="password" placeholder="Password"><br>
	    			<div class="submit-btn-div">
	    				<input type="submit" name="login" value="login">
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