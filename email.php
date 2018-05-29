<?php
	if(isset($_POST['submit'])){
		if(!empty($_POST['banner'])){
			
			$requesterFullName = $_POST['fullName'];
			$requesterEmail = $_POST['email'];
			$requesterDepartment = $_POST['department'];
			$dateNeeded = $_POST['requiredDate'];
			$returnDate = $_POST['returnDate'];			
			$specialNote = trim($_POST['specialNote']);
			$specialNote = nl2br($specialNote);
			$bannerList = $_POST['banner'];
			
			$myemail = "araj@g.clemson.edu";
			$receiverName = "Tina";
			
			$to = 'lemayd@clemson.edu';
			$subject = "New banner request from: $requesterFullName";
			$body = "Hi ".$receiverName.",<br><br>A new banner request has been made by <b>".$requesterFullName."</b>.<br><br>Please find the summary of the request mentioned below:<br><br><b>Requester’s Full Name:</b>". $requesterFullName."<br><b>Requester’s Email Address:</b> ".$requesterEmail."<br><b>Requester's Department:</b> ".$requesterDepartment."<br><b>Banners Requested:</b> ".implode(', ',$bannerList)."<br><b>Date Needed:</b> ".$dateNeeded."<br><b>Return Date:</b> ".$returnDate."<br><br><b>Special Note:</b> <br>".$specialNote;
			$from = "From: $myemail<br>";
			
			mail($to, $subject, $body, $from);
			
			echo $body;
		}
		else{
			echo "Please select atleast one banner";
		}
	}
?>