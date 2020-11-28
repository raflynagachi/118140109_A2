<html>
	<head>
		<title>CodeIgniter</title>
	</head>
	<body>
		<h1>Simple CRUD</h1>
		<p>
			<a href="<?php echo site_url('news'); ?>">Home</a> | 
			<a href="<?php echo site_url('news/create'); ?>">Add News</a> | 
			
			<?php if ($this->session->userdata('is_logged_in')) { 
					echo '<b>Logged in as:</b> ' . $this->session->userdata('username');
					echo ' | ' . "<a href=" . site_url('user/delete/'.$this->session->userdata('user_id'));
					echo 'onClick="return confirm("Are you sure you want to delete?")">Delete Account</a> |';
					echo ' | ' . "<a href=" . site_url('user/logout') . ">Logout</a>";
				} else {
			?>    
				<a href="<?php echo site_url('user/register'); ?>">Register</a> | 
				<a href="<?php echo site_url('user/login'); ?>">Login</a>
			<?php } ?>
		</p>