<html>
<body>
	<h1>New Databased Account for <?php echo $email;?></h1>
	<p>
		You can access your account through: <a href="<?php echo site_url('backoffice/login');?>"><?php echo site_url('backoffice/login');?>login</a>
	</p>
	<p>
		username: <?php echo $email;?><br>
		password: <?php echo $password;?>
	</p>
</body>
</html>