<html>
<head>
	</head>
<title>signin Form </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<head>
		<body>
		</body>
<div class = "container">
<br> </br> <br>
<h3 align="center">Insert Data using codeIgniter</h3></br>
<form method = "post" action = "<?php echo base_url();?>Main/form_validation"> 
	<?php if($this->uri->segment(2)== "inserted") {
		echo '<p class ="text-success">DATA Inserted</p>';
	} ?>
<div class="form-group">
	<label>Enter the Name</label>
<input type="text" name="name" class="form-control">
<span class="text-danger"><?php echo form_error("name");?></span>
</div>
<div class="form-group">
	<label>Enter the passwssord</label>
<input type="password" name="password" class="form-control">
<span class="text-danger"><?php echo form_error("password");?></span>
<div class="form-group">
<input type="submit" name="signin" value="SignIn" class="btn-btn-info"/>
</div>
</form>
</div></head>
		<body>
</html>