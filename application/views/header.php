<!DOCTYPE html>
<html>
<head>
    <title> <?php echo $content; ?> </title>

<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet">


<!-- script -->
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-331.js"></script>

<body>

<div class="container-fluid">
    <h1 class="info" onclick="beranda()"> My Notes</h1>
    <nav class="navbar navbar-default">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">The Journal of Diary</a>     
        </div>
    </nav>


<script>
	function beranda() {
		window.location = "<?php echo base_url()?>";
	}
</script>
