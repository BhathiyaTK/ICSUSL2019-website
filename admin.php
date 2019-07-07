<?php require_once 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML5, CSS3, Bootstrap, JQuery, PHP, MySQL">
    <meta name="author" content="Bhathiya Kariyawasam, Osusara Kammalawatta">

    <title>ICSUSL 2019 | Admin Panel</title>

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

    <script type="text/javascript">
        function viewBankReceipt(receipt_id){
            $.ajax({
                type : "POST",
                url : "ajax/bank_rec_modal.php",
                data : {receipt_id:receipt_id},
                success : function(result1){
                    $("#bank_rec_modal_body").html(result1);
                }
            });
        }
        function viewStdship(stdship_id){
            $.ajax({
                type : "POST",
                url : "ajax/std_ship_modal.php",
                data : {stdship_id:stdship_id},
                success : function(result2){
                    $("#std_ship_modal_body").html(result2);
                    //$("#table-content").load();
                }
            });
        }
    </script>
</head>
<body>
    <!-- Preloader -->
    <script type="text/javascript">
        $(window).on("load", function() {
            $(".se-pre-con").fadeOut("slow");
        });
    </script>

    <nav class="navbar navbar-expand-md" id="admin-navbar">
        <div class="container-fluid">
            <p id="admin-title">Admin Panel</p>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-responsive" aria-controls="navbar-responsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="collapse navbar-collapse" id="navbar-responsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" id="admin-logout-btn" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="admin-section">
        <div class="admin-container table-responsive">
            <?php
            $sql_user = "SELECT * FROM deligates";
            $rt = $conn->query($sql_user);
            if ($rt->num_rows>0) {
                $sql_user_rslt = mysqli_query($conn,$sql_user);
            ?>
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Paper ID/ Title</th>
                        <th scope="col">Badge Name</th>
                        <th scope="col">Affiliation</th>
                        <th scope="col">Country</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Receipt Name</th>
                        <th scope="col">Receipt Address</th>
                        <th scope="col">Partcipant Type</th>
                        <th scope="col">Lunch</th>
                        <th scope="col">Dinner</th>
                        <th scope="col">Tour</th>
                        <th scope="col">Bank Receipt</th>
                        <th scope="col">Studentship</th>
                    </tr>
                </thead>
                <tbody>
            <?php  
                while ($row = mysqli_fetch_array($sql_user_rslt)) {
            ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["id_or_title"]; ?></td>
                        <td><?php echo $row["badge_name"]; ?></td>
                        <td><?php echo $row["affiliation"]; ?></td>
                        <td><?php echo $row["country"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["rec_name"]; ?></td>
                        <td><?php echo $row["rec_address"]; ?></td>
                        <td><?php echo $row["part_type"]; ?></td>
                        <td><?php echo $row["lunch"]; ?></td>
                        <td><?php echo $row["dinner"]; ?></td>
                        <td><?php echo $row["tour"]; ?></td>
                        <td class="button-td">
                            <form id="bank_rec_form">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bank_rec_modal" id="<?php echo $row['id']; ?>" onclick="viewBankReceipt(<?php echo $row["id"]; ?>)">View</button>
                            </form>
                        </td>
                        <td class="button-td">
                            <form id="std_ship_form">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#std_ship_modal" id="<?php echo $row['id']; ?>" onclick="viewStdship(<?php echo $row["id"]; ?>)">View</button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
            }else{
                echo "<b>No deligates found.</b>";
            }
            ?>  
                </tbody>
            </table>

            <!-- Modals -->
            <div class="modal fade" id="bank_rec_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" id="bank_rec_modal_body">

                </div>
              </div>
            </div>

            <div class="modal fade" id="std_ship_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" id="std_ship_modal_body">

                </div>
              </div>
            </div>

        </div>
    </div>
</body>
<div class="se-pre-con"></div>
</html>