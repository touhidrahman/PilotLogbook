<?php
$this->load->view('templates/header');
$this->load->view('templates/navbar');
$this->load->view('templates/sidebar');
?>

<div class="jumbotron">
	<h1>PILOT'S LOGBOOK</h1>
	<p class="lead">Exclusive application for pilots to maintain their flying logbook.</p>
	<p>This application is a donationware. Means you can use this without any modification and with some 
	limitation. In this case, the limitation is a fixed userID (admin) and password (54321) to login.
	If you want to get your own personal userID and a secure password (which can be changed later), you need to make a donation
	described below.</p>
	<p>
		<a class="btn btn-lg btn-success" href="#">Donate Tk 500.00 Only!</a>
	</p>
</div>

<div class="row marketing">
	<div class="col-lg-6">
		<h4>Why Can't I Use My Own UserID and Password?</h4>
		<p>As this application is a donationware, a limitation is imposed. Except a different userID and secure password
		your data won't be safe. Your donation will support continued
		development of this application. So consider donating :)</p>

		<h4>What is the Minimum Amount I need to donate to get my own UserID/Password?</h4>
		<p>You should donate minimum Tk 500.00 to get a userID and password. Any amount less than Tk 500.00 are welcome but 
		in that case userID/Password is not provided.</p>

		<h4>How to donate</h4>
		<p>Just send me email at tanimkg[at]gmail.com. You should recieve instructions in reply.</p>
		
		<h4>I want to report a problem</h4>
		<p>You are most welcome! Send me email at tanimkg[at]gmail.com stating the problem.</p>
	</div>
</div>

<?php $this->load->view('templates/footer'); ?>