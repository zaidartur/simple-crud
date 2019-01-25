<!DOCTYPE html>
<html>
<head>
	<title>Error 404 - Page Not Found</title>

	<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">


	<!-- script -->
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-331.js"></script>

</head>
<body>

<div class="container-fluid">	
	<h1>Error Pages</h1>
	<p>Hello, this page is nothing or not available right now, please visit other pages.<br>
	Thank you! </p>
	<br>

	<button class="btn btn-primary" type="button" onclick="home()"><< Go Home</button>
</div>

<script>
	function home() {
		window.location = "<?php echo base_url(); ?>";
	}
</script>
</body>
</html>