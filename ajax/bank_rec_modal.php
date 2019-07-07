<?php

require_once '../db.php';

$receipt_id = $_POST["receipt_id"];

$sql= "SELECT * FROM deligates where id='$receipt_id'";
$result=mysqli_query($conn,$sql);

while ($row=$result->fetch_assoc()) {
?>
<script type="text/javascript">

  function bankReceiptApprove(){
    var receipt_approve_id = <?php echo $receipt_id; ?>;
    var approve = "Approved";

    $.ajax({
      type : "POST",
      url : "ajax/bank_rec_approve.php",
      data : {receipt_approve_id:receipt_approve_id,approve:approve},
      success : function(result2){
        $("#bank_rec_modal_body").html(result2);
      }
    });
  }

  function bankReceiptDecline(){
  	var receipt_decline_id = <?php echo $receipt_id; ?>;
    var decline = "Declined";

    $.ajax({
      type : "POST",
      url : "ajax/bank_rec_decline.php",
      data : {receipt_decline_id:receipt_decline_id,decline:decline},
      success : function(result4){
        $("#bank_rec_modal_body").html(result4);
      }
    });
  }

</script>
<style>
  #modal_body{
    text-align: center;
  }
  #modal_body img{
    width: all;
  }
  #modal_body .bank{
  	font-family: font_7;
  }
<?php
if ($row["bank_rec_appr"] == "Approved") {
?>
  #modal_body .bank b{
  	color: #00C851;
  }
<?php
}elseif ($row["bank_rec_appr"] == "Declined") {
?>
  #modal_body .bank b{
    color: #ff4444;
  }
<?php
}elseif ($row["bank_rec_appr"] == "No Action Taken"){
?>
  #modal_body .bank b{
    color: #2BBBAD;
  }
<?php
}
?>
</style>
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalCenterTitle"><b>Bank Payment Receipt</b></h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true"><i class="fas fa-times"></i></span>
  </button>
</div>
<div class="modal-body" id="modal_body">
  <div>
  	<img src="<?php echo "images/uploads/".$row['badge_name']."/".$row['bank_rec'] ;?>">
  </div>
  <br>
  <div>
  	<p class="bank"><?php echo "Bank receipt status : <b>".$row["bank_rec_appr"]."</b>" ;?></p>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-success btn-sm" onclick="bankReceiptApprove();"><b>Approve</b></button>
  <button type="button" class="btn btn-danger btn-sm" onclick="bankReceiptDecline();"><b>Decline</b></button>
</div>
<?php
}
?>