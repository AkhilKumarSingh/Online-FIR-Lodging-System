<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bpolice";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$complaint_no = rand(1000, 100000000);
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$mobile = $_POST['mobile'];
$address = $_POST['address'].','.' '. $_POST['region'];
$complain = $_POST['complain'];

$sql = "INSERT INTO complaints (complaint_no, name, email, mobile_no, subject, address, complaint, status)
VALUES ('$complaint_no', '$name', '$email', '$mobile', '$subject', '$address', '$complain', 'Pending')";

if ($conn->query($sql) === TRUE) {
	    echo "<script>alert('Complaint Registered With Complaint No. '".$complaint_no.")</script>";
} 
    else {
	    echo "<script>alert('Something Went Wrong')</script>";
	}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Bihar Police Online Complaint</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="icon" href="img/logo.jpg" type="image/jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.mySlides {display:none;}
	</style>
</head>
<body class="w3-light-grey">
	<div class="w3-container w3-card" style="background: #efae36; height: 5px;"></div>
	<div class="w3-white w3-container w3-card" style="padding-bottom: 18px;">
		<div style="margin: 15px 70px;">
			<img src="img/logo4.jpg" align="left">
			<img src="img/logo.jpg" height="100" width="90" align="right">
			<div>
				<span style="font-size: 22px; color: #454640; margin-right: 15px;" class="w3-right">Control Room</span>
				<span style="font-size: 35px; color: #183883; position: absolute; right: 190px; top: 50px;">Call Us: 100</span>
				<span style="font-size: 20px; color: #183883; position: absolute; right: 190px; top: 95px;">dgp-bih@nic.in</span>
			</div>
		</div>
	</div>
	<div class="w3-bar w3-card w3-text-white w3-center" style="background: #183883; font-size: 20px; padding: 0px 55px">
  		<a href="http://localhost/OnlineFirSystem/" class="w3-bar-item w3-button w3-hover-blue-grey  w3-hover-shadow"><i class="fa fa-home"></i> Home</a>
  		<a href="rep_complain.html" class="w3-bar-item w3-button w3-hover-blue-grey  w3-hover-shadow"><i class="fa fa-wpforms" aria-hidden="true"></i> Register a Complaint</a>
  		<a href="https://www.icds-wcd.nic.in/nnm/home.htm" class="w3-bar-item w3-button w3-hover-blue-grey  w3-hover-shadow"><i class="fa fa-child"></i> Women and Child Safety</a>
  		<a href="http://biharpolice.bih.nic.in" class="w3-bar-item w3-button w3-hover-blue-grey  
  		w3-hover-shadow"><i class="fa fa-legal"></i>Bihar Police</a>
  		<a href="view_fir.html" class="w3-bar-item w3-button w3-hover-blue-grey  w3-hover-shadow"><i class="fa fa-legal"></i> View Complaint</a>
  		<a href="dos_dont.html" class="w3-bar-item w3-button w3-hover-blue-grey  w3-hover-shadow"><i class="fa fa-support"></i> Safety Tips</a>
  		<a href="Contact.html" class="w3-bar-item w3-button w3-hover-blue-grey w3-hover-shadow"><i class="fa fa-phone"></i> Contact Us</a>
	</div>
	<div style="margin:0px 70px; width: 90%;height: 100vh; background: white; padding: 20px;" class="w3-card w3-center">
		<div style="margin: 50px 50px 0px 50px">
			<h1 class="w3-text-blue">Your Complaint Registered Sucessfully.</h1>
			<h3>Check Your Email For Complaint Number.</h3>
			<h3><a href="view_fir.html" class="w3-text-indigo">Click Here</a> to check your Complaint Details.</h3>
		</div>
	</div>
	<div class="w3-bar w3-bottom" style="background: #183883;">
		<p class="w3-center w3-text-white">This Site is Designed, Developed, Hosted and Maintained by Akhil and Pratyush.
		This Site is the Prototype of the Actual Site. 
		</p>
	</div>
</body>
</html>