<?php

require_once '../db.php';

session_start();

$std_decline_id = $_POST["std_decline_id"];
$declined = $_POST["declined"];

$sql = "UPDATE deligates SET stdship_appr='$declined' WHERE id='$std_decline_id'";

if ($conn->query($sql)) {
?>
	<div class="modal-header">
	  <h5 class="modal-title" id="exampleModalCenterTitle"><i class="far fa-smile fa-lg"></i> Studentship Proofment Declined!</h5>
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true"><i class="fas fa-times"></i></span>
	  </button>
	</div>
<?php
}else{
?>
	<div class="modal-header">
	  <h5 class="modal-title" id="exampleModalCenterTitle"><i class="far fa-surprise fa-lg"></i> Oops! Connection Lost.</h5>
	  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	    <span aria-hidden="true"><i class="fas fa-times"></i></span>
	  </button>
	</div>
	<div class="modal-body" id="edit_modal_body">
	  Database connection lost. Check your internet connection.
	</div>
<?php
}
?>