 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $title ?></title>
 </head>
 <body>
 	<nav>
	 	<?php echo anchor('/', 'Home') ?>
 		<?php echo anchor('pages/view/about', 'About') ?>
 		<?php echo anchor('pages/view/service', 'Service') ?>
 		<?php echo anchor('pages/view/contact', 'Contact') ?>
		 <?php echo anchor('users/signup', 'Sign Up') ?>
 	</nav>
 
 