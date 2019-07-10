<?php

require_once '../db.php';

session_start();

$filters1 = $_POST["filters1"];

if ($filters1 == 'all') {
	$sql = "SELECT * FROM deligates";

	$r = $conn->query($sql);
    if ($r->num_rows>0) {
        $sql_rslt = mysqli_query($conn,$sql);
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
        while ($row = mysqli_fetch_array($sql_rslt)) {
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
}else{
	$sql = "SELECT * FROM deligates WHERE part_type='$filters1'";

	$r = $conn->query($sql);
    if ($r->num_rows>0) {
        $sql_rslt = mysqli_query($conn,$sql);
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
        while ($row = mysqli_fetch_array($sql_rslt)) {
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
<?php
}


?>