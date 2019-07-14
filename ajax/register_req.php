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
$bank_appr = "No Action Taken";
$std_appr = "No Action Taken";

if (($full_name!=='')&&($name_on_badge!=='')&&($affiliation!=='')&&($country!=='')&&($email!=='')&&($partipant_type!=='')) {

	if ((preg_match('/^\+[0-9]{1,2}-[0-9]{9}$/', $phone))||(preg_match('/^[0-9]{3}-[0-9]{9}$/', $phone))||(preg_match('/^\+[0-9]{1,2}[0-9]{9}$/', $phone))||(preg_match('/^\+[0-9]{1,2}-[0-9]{2}-[0-9]{3}-[0-9]{4}$/', $phone))||(preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone))||(preg_match('/^[0-9]{10}$/', $phone))||(preg_match('/^\+[0-9]{2,4}-[0-9]{7}$/', $phone))) {
		if (($partipant_type == 'participant/co-author')||($partipant_type == 'author')) {
			$studentship = "N/A";
			
			$sql = "INSERT INTO deligates(name,id_or_title,badge_name,affiliation,country,email,phone,rec_name,rec_address,part_type,bank_rec,std_ship,lunch,dinner,tour,bank_rec_appr,stdship_appr) VALUES('$full_name','$paper_id','$name_on_badge','$affiliation','$country','$email','$phone','$receipt_name','$receipt_address','$partipant_type','$payment_receipt','$studentship','$lunch','$dinner','$tour','$bank_appr','$std_appr')";

			if ($conn->query($sql)) {

				if ((!is_dir('../images/uploads/'.$name_on_badge))&&(!file_exists('../images/uploads/'.$name_on_badge))) {
					mkdir('../images/uploads/'.$name_on_badge,0777);

					move_uploaded_file($_FILES['payment_receipt']['tmp_name'], '../images/uploads/'.$name_on_badge.'/'.$payment_receipt);

					echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Registered successfully.</b></div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-exclamation-triangle"></i><b> Please use different names for </b></div>';
				}
			}else{
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-exclamation-triangle"></i><b> Database connection lost.</b></div>';
			}
		}elseif ($partipant_type == 'student') {
			
			$sql = "INSERT INTO deligates(name,id_or_title,badge_name,affiliation,country,email,phone,rec_name,rec_address,part_type,bank_rec,std_ship,lunch,dinner,tour,bank_rec_appr,stdship_appr) VALUES('$full_name','$paper_id','$name_on_badge','$affiliation','$country','$email','$phone','$receipt_name','$receipt_address','$partipant_type','$payment_receipt','$studentship','$lunch','$dinner','$tour','$bank_appr','$std_appr')";

			if ($conn->query($sql)) {

				if ((!is_dir('../images/uploads/'.$name_on_badge))&&(!file_exists('../images/uploads/'.$name_on_badge))) {
					mkdir('../images/uploads/'.$name_on_badge,0777);

					move_uploaded_file($_FILES['payment_receipt']['tmp_name'], '../images/uploads/'.$name_on_badge.'/'.$payment_receipt);
					move_uploaded_file($_FILES['studentship']['tmp_name'], '../images/uploads/'.$name_on_badge.'/'.$studentship);

					echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Registered successfully.</b></div>';
				}else{
					echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-exclamation-triangle"></i><b> Please use different names for </b></div>';
				}
			}else{
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-exclamation-triangle"></i><b> Database connection lost.</b></div>';
			}
		}elseif (($partipant_type == 'ars-author')||($partipant_type == '')) {
			$payment_receipt = "N/A";
			$studentship = "N/A";
			
			$sql = "INSERT INTO deligates(name,id_or_title,badge_name,affiliation,country,email,phone,rec_name,rec_address,part_type,bank_rec,std_ship,lunch,dinner,tour,bank_rec_appr,stdship_appr) VALUES('$full_name','$paper_id','$name_on_badge','$affiliation','$country','$email','$phone','$receipt_name','$receipt_address','$partipant_type','$payment_receipt','$studentship','$lunch','$dinner','$tour','$bank_appr','$std_appr')";

			if ($conn->query($sql)) {
				echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-check-circle fa-lg"></i><b> Registered successfully.</b></div>';
			}else{
				echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-exclamation-triangle"></i><b> Database connection lost.</b></div>';
			}
		}
	}else{
		echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-exclamation-triangle"></i><b> Invalid phone number pattern.</b></div>';
	}
}else{
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fas fa-exclamation-triangle"></i><b> Please fill required fields.</b></div>';
}

?>