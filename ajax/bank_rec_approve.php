<?php

require_once '../db.php';

session_start();

$receipt_approve_id = $_POST["receipt_approve_id"];
$approve = $_POST["approve"];

$sql = "UPDATE deligates SET bank_rec_appr='$approve' WHERE id='$receipt_approve_id'";

if ($conn->query($sql)) {
?>
	<div class="modal-header">
	  <h5 class="modal-title" id="exampleModalCenterTitle"><i class="far fa-smile fa-lg"></i> Bank Receipt Approved!</h5>
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