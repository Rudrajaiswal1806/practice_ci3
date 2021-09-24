 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="author" content="">
 	<title><?php echo $title ?></title>
	 <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	 
 </head>
 <body>
 	<nav>
	 	<?php echo anchor('users/signup', 'Home') ?>
 		<?php echo anchor('pages/view/about', 'About') ?>
 		<?php echo anchor('pages/view/service', 'Service') ?>
 		<?php echo anchor('pages/view/contact', 'Contact') ?>

		  <?php if($this->session->userdata('authenticated')) { ?>
		<?php echo anchor('dashboard', 'Dashboard') ?>
		<?php echo anchor('users/logout', 'Logout') ?>
		<?php } 
			else { ?>
		<?php echo anchor('users/signup', 'Sign Up') ?>
		<?php echo anchor('users/login', 'Login') ?>
		<?php } ?> 

		
 	</nav>
 
 