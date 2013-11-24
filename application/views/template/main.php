<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Tabulation</title>
		
		<link rel="stylesheet" href="<?php echo site_url('');?>includes/js/jquery.ui/jquery.ui.css" />
		<link rel="stylesheet" href="<?php echo site_url('');?>includes/css/reset.css" />
		<link rel="stylesheet" href="<?php echo site_url('');?>includes/css/main.css" />
		
		<script src="<?php echo site_url('');?>includes/js/jquery.js"></script>
		<script src="<?php echo site_url('');?>includes/js/jquery.ui/jquery.ui.js"></script>
		<script src="<?php echo site_url('');?>includes/js/main.js"></script>
		
		<base href="<?php echo site_url('');?>" />
	</head>
	<body>
		<div id="wrapper">
			<?php $user = $this->session->userdata('user'); ?>
			<?php if($this->session->userdata('valid'))
			{ ?>
				<div id="alias">
					<h2><?php echo $user['alias'] ;?></h2>
				</div>
				<div id="logout">
					<a id="logout_btn" href="user/logout">Logout</a>
				</div>
			<?php 
			} ?>
			<div id="header">
				<?php echo $navigation; ?>
				<script>
					var activeurl = '<?php echo str_replace(site_url(), '', current_url()); ?>';
					$("#navigation a").each(function(){
						if($(this).attr('href') == activeurl)
							$(this).addClass('nav-active');
					});
				</script>
			</div>
			<div id="content">
			<?php echo $content; ?>
			</div>
		</div>
	</body>
</html>