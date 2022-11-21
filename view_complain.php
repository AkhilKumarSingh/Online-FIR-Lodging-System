<html>
<head>
	<title> Bihar Police Online Complaint</title>
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="icon" href="img/logo.jpg" type="image/jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	<div style="margin:0px 70px; width: 90%;height: 100%; background: white; padding: 40px;" class="w3-card">
		<?php
			$db = mysqli_connect('localhost', 'root', '', 'bpolice');

			$complain_no = $_POST['complain_no'];
			$mobile = $_POST['mobile'];

			$query = "SELECT * FROM complaints WHERE complaint_no = '$complain_no' AND mobile_no = '$mobile'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				while($row = mysqli_fetch_assoc($results)) {
			        echo "
			        <div style='max-width:600px;' class='w3-xlarge w3-text-indigo'>
			        <p><span class='w3-xlarge'>Complaint Number : </span><span style='position:absolute; left:450;'>$row[complaint_no]</span></p>
					<p><span class='w3-xlarge'>Name : </span><span style='position:absolute; left:450; max-width:750px'>$row[name]</span></p>
					<p><span class='w3-xlarge'>Email : </span><span style='position:absolute; left:450; max-width:750px'>$row[email]</span></p>
					<p><span class='w3-xlarge'>Mobile Number : </span><span style='position:absolute; left:450; max-width:750px'>$row[mobile_no]</span></p>
					<p><span class='w3-xlarge'>Adresss : </span><span style='position:absolute; left:450; max-width:750px'>$row[address]</span></p>
					<p><span class='w3-xlarge'>Status : </span><span style='position:absolute; left:450; max-width:750px' class='w3-text-indigo'>$row[status]</span></p>
					<p><span class='w3-xlarge'>Complaint Type : </span><span style='position:absolute; left:450; max-width:750px'>$row[subject]</span></p>
					<p><span class='w3-xlarge'>Complaint : </span><span style='position:absolute; left:450; max-width:750px'>$row[complaint]</span></p>
					</div>
		 			";
			    }
			} else {
					echo "<p class='w3-text-red w3-xlarge'>Something Went Wrong!</p>";
			}
			mysqli_close($db);
		?>
	</div>
	<div class="w3-bar" style="background: #183883;">
		<p class="w3-center w3-text-white">This Site is Designed, Developed, Hosted and Maintained by Akhil and Pratyush.
		This Site is the Prototype of the Actual Site. 
		</p>
	</div>
</body>
</html>