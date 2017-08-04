<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>The church name | <?php echo $title ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/custom.css') ?>">
</head>
<body>
<div class="container-fluid">
	<div class="page-header">
	<div class="site-logo">
		<img src="<?=base_url('img/logo-2.png') ?>"  / alt="site logo" /> 
	</div>
	<div class="page-title">The church Name</div>
	<?php if ($this->session->userdata('logged')): ?>
		<div class=' logout-text fr'>
			<a href="<?php echo base_url('st/logout')?>" >logout</a>
		</div>
	<?php endif ?>

		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
		
