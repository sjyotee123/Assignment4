<html>
<head>

<title>Login Page</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">




</head>

<body>

<div class="col-lg-5 col-lg-offset-2">

<h1>Login Page:</h1>
<p>Fill in the details to login on our website!!</p>

<?php if(isset($_SESSION['success'])) { ?>
<div class="alert alert-success"> <?php echo $_SESSION['success']; ?>

<?php
}
?>




<?php echo validation_errors('<div class="alert alert-danger">', '</div>');?>
<form action="" method="POST">
<div class"form-group">

<label for="username">Username:</label>
<input class="form-control" name="username" id="username" type="text">
</div>


<div class"form-group">

<label for="password">Password:</label>
<input class="form-control" name="password" id="password" type="password">
</div>







<div>

<button class="btn btn-primary" name="login">Login</button>
</div>



<a href="<?php echo base_url(); ?>index.php/auth/register">Register</a>

</form>
</div>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js></script>
</body>
</html>