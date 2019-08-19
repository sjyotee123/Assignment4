<html>
<head>

<title>Register Page</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">




</head>

<body>

<div class="col-lg-5 col-lg-offset-2">

<h1>Register Page:</h1>
<p>Fill in the details to register on our website!!</p>

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

<label for="email">Email:</label>
<input class="form-control" name="email" id="email" type="text">
</div>

<div class"form-group">

<label for="password">Password:</label>
<input class="form-control" name="password" id="password" type="password">
</div>

<div class"form-group">

<label for="password">Confirm Password:</label>
<input class="form-control" name="password2" id="password"  type="password">
</div>

<div class"form-group">

<label for="gender">Gender:</label>
<select class="form-control" id="gender" name="gender">

<option value="Male">Male</option>
<option value="Female">Female</option>

</select>
</div>

<div class"form-group">

<label for="phone">Mobile No.:</label>
<input class="form-control" name="phone" id="phone" type="text">
</div>


<div>

<button class="btn btn-primary" name="register">Register</button>
</div>



<a href="<?php echo base_url(); ?>index.php/auth/login">Login</a>
</form>
</div>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js></script>
</body>
</html>