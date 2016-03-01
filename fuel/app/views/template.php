<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<?php echo Asset::css('bootstrap.css'); ?>

	<style>
		body { margin: 40px; }
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					<?php echo Asset::img('suxess-display-logo-1.png', array('style' => 'height:18px;')); ?>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $auth_username; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Account settings</a></li>
							<li><a href="#">Upgrade</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="/site-monitoring/public/auth/logout">Sign out</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav pull-right">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dashboard<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Dashboard 1</a></li>
							<li><a href="#">Dashboard 2</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Add new dashboard </a></li>
						</ul>
					</li>
				</ul>


			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="col-md-12 col-xs-12">
			<hr>
<?php if (Session::get_flash('success')): ?>
			<div class="alert alert-success">
				<strong>Success</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('success'))); ?>
				</p>
			</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
			<div class="alert alert-danger">
				<strong>Error</strong>
				<p>
				<?php echo implode('</p><p>', e((array) Session::get_flash('error'))); ?>
				</p>
			</div>
<?php endif; ?>
		</div>
		<div class="col-md-12">
<?php echo $content; ?>
		</div>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
		</footer>
	</div>
	<?php echo Asset::js('jquery-1.12.1.min.js'); ?>
	<?php echo Asset::js('bootstrap.js'); ?>

</body>
</html>
