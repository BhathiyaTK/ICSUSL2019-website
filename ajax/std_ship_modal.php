<?php

require_once '../db.php';

$stdship_id = $_POST["stdship_id"];

$sql= "SELECT * FROM deligates where id='$stdship_id'";
$result=mysqli_query($conn,$sql);

while ($row=$result->fetch_assoc()) {
?>
<script type="text/javascript">

  function stdshipApprove(){
    var std_approve_id = <?php echo $stdship_id; ?>;
    var approved = "Approved";

    $.ajax({
      type : "POST",
      url : "ajax/stdship_approve.php",
      data : {std_approve_id:std_approve_id,approved:approved},
      success : function(result3){
        $("#std_ship_modal_body").html(result3);
      }
    });
  }

  function stdshipDecline(){
    var std_decline_id = <?php echo $stdship_id; ?>;
    var declined = "Declined";

    $.ajax({
      type : "POST",
      url : "ajax/stdship_decline.php",
      data : {std_decline_id:std_decline_id,declined:declined},
      success : function(result5){
        $("#std_ship_modal_body").html(result5);
      }
    });
  }

</script>
<style>
  #modal_body{
    text-align: center;
  }
  #modal_body img{
    width: auto;
  }
  #modal_body .std{
    font-family: font_7;
  }
<?php
if ($row["stdship_appr"] == "Approved") {
?>
  #modal_body .std b{
    color: #00C851;
  }
<?php
}elseif ($row["stdship_appr"] == "Declined") {
?>
  #modal_body .std b{
    color: #ff4444;
  }
<?php
}elseif ($row["stdship_appr"] == "No Action Taken"){
?>
  #modal_body .std b{
    color: #2BBBAD;
  }
<?php
}
?>
</style>
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalCenterTitle"><b>Proof of Studentship</b></h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true"><i class="fas fa-times"></i></span>
  </button>
</div>
<div class="modal-body" id="modal_body">
  <div>
  	<img src="<?php echo "images/uploads/".$row['badge_name']."/".$row['std_ship'] ;?>">
  </div>
  <br>
  <div>
    <p class="std"><?php echo "Bank receipt status : <b>".$row["stdship_appr"]."</b>" ;?></p>
  </div>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-success btn-sm" onclick="stdshipApprove();"><b>Approve</b></button>
  <button type="button" class="btn btn-danger btn-sm" onclick="stdshipDecline();"><b>Decline</b></button>
</div>
<?php
}
?>