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
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <!-- ColorBox CSS-->
    <link rel="stylesheet" href="css/colorbox.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- table2csv -->
    <script src="js/table2csv.js"></script>
    <!-- jquery.tabletoCSV -->
    <script src="js/jquery.tabletoCSV.js"></script>
    <!-- Validate.js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
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
    <!-- Download plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.2/jspdf.plugin.autotable.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.0.15/jspdf.plugin.autotable.src.js"></script>
    <script src="js/html2canvas.js"></script>
    <script src="js/tableHTMLExport.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>

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
        $(function(){
            $("#filter-form1").submit(function(e1){
                e1.preventDefault();

                var filters1 = $("#filters1").val();

                $.ajax({
                    type: "POST",
                    url: "ajax/filter1.php",
                    data: {filters1:filters1},
                    success: function(data6){
                        $(".admin-container").html(data6);
                        $(".admin-container").load();
                    }
                });
            });
        });

        $(function(){
            $("#filter-form2").submit(function(e2){
                e2.preventDefault();

                var filters2 = $("#filters2").val();

                $.ajax({
                    type: "POST",
                    url: "ajax/filter2.php",
                    data: {filters2:filters2},
                    success: function(data7){
                        $(".admin-container").html(data7);
                        $(".admin-container").load();
                    }
                });
            });
        });
        //delogates table download function----------------------------
        $(function(){       
            $("#download-pdf-btn").click(function () {

                var d = new Date();
                var doc = new jsPDF('l', 'pt', 'a4');

                var elem = $(".admin-container table").clone();
                elem.find('tr th:nth-child(14), tr td:nth-child(14),  th:nth-child(15), tr td:nth-child(15)').remove();
                var res = doc.autoTableHtmlToJson(elem.get(0));
                doc.setFontSize(19);
                doc.text('National IT Conference 2019 - SUSL', 300, 40);
                doc.setFontSize(14);
                doc.text('Conference Deligates List', 345, 60);

                doc.setFontSize(10);
                doc.setFontSize(10);
                doc.text('Date : '+d, 518, 110);
                
                doc.autoTable(res.columns, res.data,{
                    theme: 'grid',
                    margin: {top: 130, right: 25, bottom: 30, left: 25},
                    bodyStyles: {rowHeight: 20, halign: 'left'},
                    styles:{
                        tableWidth: 'auto',
                        cellWidth: 'wrap',
                        font: 'helvetica',
                        fontSize: 9.5,
                        overflow: 'linebreak',
                        halign: 'center',
                        valign: 'middle'
                    }
                });
                doc.save('ICSUSL-deligates.pdf');
                
            });
        });

        $(function(){
            $("#download-excel-btn").click(function(){
                $("#deligates-table").table2csv({
                    filename:'ICSUSL-delegates.csv'
                });
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

    <div class="admin-top">
        <div class="admin-title-div">
            <p id="admin-title">Admin Panel</p>
        </div>
        <div class="admin-logout-div">
            <a id="admin-logout-btn" href="logout.php">Logout</a>
        </div>
    </div>
    <div class="filter-div">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <form id="filter-form1">
                    <label>Participant type</label>
                    <div class="admin_form_opt">
                        <div class="row">
                            <div class="col-md-6 col-sm-10">
                                <select name="filters1" id="filters1" class="form-control form-control-sm">
                                    <option value="all" selected>All</option>
                                    <option value="author">Author</option>
                                    <option value="participant/co-author">Co-Author / Participant</option>
                                    <option value="student">Student</option>
                                    <option value="ars-author">ARS Author</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-sm-10">
                                <input type="submit" name="filter-btn1" id="filter-btn1" value="Filter" class="btn btn-success btn-sm">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-sm-12">
                <form id="filter-form2">
                    <label>Paper Title</label>
                    <div class="admin_form_opt">
                        <div class="row">
                            <div class="col-md-6 col-sm-10">
                                <input type="text" name="filters2" id="filters2" class="form-control form-control-sm" placeholder="Paper Title here...">
                            </div>
                            <div class="col-md-1 col-sm-10">
                                <input type="submit" name="filter-btn2" id="filter-btn2" value="Filter" class="btn btn-success btn-sm">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="admin-section">
    	<div class="admin-container table-responsive">
    		<?php
    		$sql_user = "SELECT * FROM deligates";
            $rt = $conn->query($sql_user);
            if ($rt->num_rows>0) {
                $sql_user_rslt = mysqli_query($conn,$sql_user);
            ?>
            <table class="table table-hover table-bordered" id="deligates-table">
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
                        <?php
                        if (($row["bank_rec"] == 'N/A')||($row["bank_rec"] == '')) {
                        ?>
                            <td class="button-td">N/A</td>
                        <?php
                        }elseif (($row["bank_rec"] !== 'N/A')||($row["bank_rec"] !== '')) {
                        ?>
                        <td class="button-td">
                            <form id="bank_rec_form">
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#bank_rec_modal" id="<?php echo $row['id']; ?>" onclick="viewBankReceipt(<?php echo $row["id"]; ?>)">View</button>
                            </form>
                        </td>
                        <?php
                        }

                        if (($row["std_ship"] == 'N/A')||($row["std_ship"] == '')) {
                        ?>
                            <td class="button-td">N/A</td>
                        <?php
                        }elseif (($row["std_ship"] !== 'N/A')||($row["std_ship"] !== '')) {
                        ?>
                        <td class="button-td">
                            <form id="std_ship_form">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#std_ship_modal" id="<?php echo $row['id']; ?>" onclick="viewStdship(<?php echo $row["id"]; ?>)">View</button>
                            </form>
                        </td>
                        <?php
                        }
                        ?>    
                    </tr>
            <?php
                }
            }else{
                echo '<i class="fas fa-exclamation-circle"></i> &nbsp<b>No deligates found.</b>';
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
        <div class="download-btns-div">
            <button class="btn btn-secondary btn-sm" id="download-pdf-btn"><i class="fas fa-download"></i>&nbsp<b>PDF</b></button>&nbsp&nbsp
            <button class="btn btn-secondary btn-sm" id="download-excel-btn" data-export="export"><i class="fas fa-download"></i>&nbsp<b>CSV</b></button>
        </div>
    </div>
    <br><br>
</body>
<div class="se-pre-con"></div>
</html>