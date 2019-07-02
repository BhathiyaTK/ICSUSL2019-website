<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam, Osusara Kammalawatta">

    <title>ICSUSL 2019</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <!-- ColorBox CSS-->
    <link rel="stylesheet" href="css/colorbox.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Countdown JQuery -->
    <script src="js/jquery.jCounter-0.1.4.js"></script>
    <!-- ColorBox js-->
    <script type="text/javascript" src="js/jquery.colorbox.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <script>
        $(document).ready(function(){
            $(".countdown").jCounter({
                date: '28 September 2019 12:00:00',
                timezone: "Asia/Colombo",
                fallback: function() { console.log("count finished!") }
            });
        });
        
    </script>
</head>
<body>
    <!-- Preloader -->
    <script type="text/javascript">
        $(window).on("load", function() {
            $(".se-pre-con").fadeOut("slow");
        });
    </script>
    <!-- Navigation Bar -->
    <header>
        <div class="bg-color">
            <nav class="navbar navbar-expand-md">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php"><img src="images/icsusl_logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-responsive" aria-controls="navbar-responsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbar-responsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="register.php">Registration</a></li>
                            <li class="nav-item"><a class="nav-link" href="#call-for-paper-sec" id="navlink-cfp">Call For Papers</a></li>
                            <li class="nav-item"><a class="nav-link" href="#program-com-sec" id="navlink-pc">Programme Committee</a></li>
                            <li class="nav-item"><a class="nav-link" href="#gallery-sec" id="navlink-g">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="header-content">
                <div class="header-title">
                   National IT conference 2019
                </div>
                <br>
                <div class="address-div">
                    <div class="place">Sabaragamuwa University of Sri Lanka</div>
                    <div class="date">28th September 2019</div>
                </div>
            </div>
        </div>
    </header>

    <!-- Countdown -->
    <div id="countdown-sec">
        <div class="countdown-title">
            Let's countdown to ICSUSL'19!<br><span>#icsusl'19</span>
        </div>
        <div class="countdown countdown-col">
            <div class="counter-day">
                <span class="days">00</span>
                <div class="smalltext">Days</div>
            </div>
            <div class="counter-hour">
                <span class="hours">00</span>
                <div class="smalltext">Hours</div>
            </div>
            <div class="counter-minute">
                <span class="minutes">00</span>
                <div class="smalltext">Minutes</div>
            </div>
            <div class="counter-second">
                <span class="seconds">00</span>
                <div class="smalltext">Seconds</div>
            </div>
        </div>
    </div>

    <!-- Registration -->
    <div class="continer-fluid padding text-center" id="reg-section">
        <div class="bg-color-dark">
            <div id="reg-section-content">
                <div class="reg-sec-title">
                    <h1>Registration</h1>
                </div>

                <div class="container padding text-center">
                    <div class="row padding">
                        <div class="col-md-4">
                            <div class="card side-cards">
                                <div class="back-div-left"></div>
                                <img src="images/team.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Topic</h4>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat atque esse eligendi reprehenderit nam, veniam ab in voluptates corrupti ad voluptatum vel deserunt distinctio enim corporis voluptas, quaerat asperiores deleniti.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card center-card">
                                <div class="back-div-center"></div>
                                <img src="images/boy.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <br>
                                    <h4 class="card-title">Topic</h4>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat atque esse eligendi reprehenderit nam, veniam ab in voluptates corrupti ad voluptatum vel deserunt distinctio enim corporis voluptas, quaerat asperiores deleniti.</p>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card side-cards">
                                <div class="back-div-right"></div>
                                <img src="images/team.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">Topic</h4>
                                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat atque esse eligendi reprehenderit nam, veniam ab in voluptates corrupti ad voluptatum vel deserunt distinctio enim corporis voluptas, quaerat asperiores deleniti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call For Papers -->
    <div class="container-fluid padding text-center" id="call-for-paper-sec">
        <div class="call-for-paper-title">
            <h1>Call For Papers</h1>
            <p>
                Final Paper Submission Guidelines for Authors
            </p>
        </div>

        <div class="container">
            <div class="row">
                <div class=" col-sm-12 col-md-4">
                    <div class="card padding call-for-paper-subdivs">
                        <h4>10<sup>th</sup> June 2019</h4>
                        <p class="card-text">Paper submission deadline</p>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-4">
                    <div class="card padding call-for-paper-subdivs">
                        <h4>10<sup>th</sup> June 2019</h4>
                        <p class="card-text">Paper submission deadline</p>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-4">
                    <div class="card padding call-for-paper-subdivs">
                        <h4>10<sup>th</sup> June 2019</h4>
                        <p class="card-text">Paper submission deadline</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="section-btn-area">
            <a id="section-btn1" href="#">Download Guideline</a>
            <a href="#">Download Flyer</a>
            <a href="#">Paper Template</a>
            <a href="#">Submit Online</a>
        </div>
        
    </div>

    <!-- Programme Committee -->
    <div id="program-com-sec">
        <div class="bg-color-dark">
            <div class="program-com-content">
                <div class="text-center program-com-title">
                    <h1>Programme Committee</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="committee-people-div">
                                <h3>Conference Chairs</h3>
                                <ul>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                </ul>
                            </div>
                            <div class="committee-people-div">
                                <h3>Advisor Board</h3>
                                <ul>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="committee-people-div">
                                <h3>Editor-in-Chief</h3>
                                <ul>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                </ul>
                            </div>
                            <div class="committee-people-div">
                                <h3>Organizing Committee: Executive Council of Computer Society of Sri Lanka</h3>
                                <ul>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                    <li><b>Genaral Chair - </b>Mr. Sample Person's Name</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery -->
    <div class="container-fluid padding text-center" id="gallery-sec">
        <div class="gallery-title">
            <h1>Gallery</h1>
        </div>

        <div class="container" id="gallry-container">
            <div class="main-box">
                <div class="img-box"><img src="images/gallery1.png"></div>
                <div class="img-icon"><a class="gallery-popup" href="images/gallery1.png"><i class="fas fa-search fa-lg"></i></a></div>
            </div><div class="main-box">
                <div class="img-box"><img src="images/gallery1.png"></div>
                <div class="img-icon"><a class="gallery-popup" href="images/gallery1.png"><i class="fas fa-search fa-lg"></i></a></div>
            </div><div class="main-box">
                <div class="img-box"><img src="images/gallery1.png"></div>
                <div class="img-icon"><a class="gallery-popup" href="images/gallery1.png"><i class="fas fa-search fa-lg"></i></a></div>
            </div><div class="main-box">
                <div class="img-box"><img src="images/gallery1.png"></div>
                <div class="img-icon"><a class="gallery-popup" href="images/gallery1.png"><i class="fas fa-search fa-lg"></i></a></div>
            </div><div class="main-box">
                <div class="img-box"><img src="images/gallery1.png"></div>
                <div class="img-icon"><a class="gallery-popup" href="images/gallery1.png"><i class="fas fa-search fa-lg"></i></a></div>
            </div><div class="main-box">
                <div class="img-box"><img src="images/gallery1.png"></div>
                <div class="img-icon"><a class="gallery-popup" href="images/gallery1.png"><i class="fas fa-search fa-lg"></i></a></div>
            </div>
        </div>
    </div>

    <!-- footer section -->
    <?php require_once 'common/footer.php'; ?>

</body>
<div class="se-pre-con"></div>
</html>