<?php

require_once '../db.php';

$full_name = $_POST["full_name"];
$paper_id = $_POST["paper_id"];
$name_on_badge = $_POST["name_on_badge"];
$affiliation = $_POST["affiliation"];
$country = $_POST["country"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$receipt_name = $_POST["receipt_name"];
$receipt_address = $_POST["receipt_address"];
$partipant_type = $_POST["partipant_type"];
$payment_receipt = $_FILES["payment_receipt"]["name"];
$studentship = $_FILES["studentship"]["name"];
$lunch = $_POST["lunch"];
$dinner = $_POST["dinner"];
$tour = $_POST["tour"];

if (($full_name!=='')&&($name_on_badge!=='')&&($affiliation!=='')&&($country!=='')&&($email!=='')&&($partipant_type!=='')&&($partipant_type!=='')&&($studentship!=='')) {
	
	$sql = "INSERT INTO deligates(name,id_or_title,badge_name,affiliation,country,email,phone,rec_name,rec_address,part_type,bank_rec,std_ship,lunch,dinner,tour) VALUES('$full_name','$paper_id','$name_on_badge','$affiliation','$country','$email','$phone','$receipt_name','$receipt_address','$partipant_type','$payment_receipt','$studentship','$lunch','$dinner','$tour')";

	if ($conn->query($sql)) {

		if ((!is_dir('../images/uploads/'.$full_name))&&(!file_exists('../images/uploads/'.$full_name))) {
			mkdir('../images/uploads/'.$full_name,0777);

			move_uploaded_file($_FILES['payment_receipt']['tmp_name'], '../images/uploads/'.$full_name.'/'.$payment_receipt);
			move_uploaded_file($_FILES['studentship']['tmp_name'], '../images/uploads/'.$full_name.'/'.$studentship);

			echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Registered successfully.</b></div>';
		}else{
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Please use different names for </b></div>';
		}
	}else{
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Database connection lost.</b></div>';
	}
}else{
	echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Please fill required fields.</b></div>';
}

?>