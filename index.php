<?php require 'config/app.php'; ?>
<?php include 'config/redirect.php'; ?>
<?php include 'config/bd.php'; ?>
<?php include 'includes/header.inc'; ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<?php include 'pages/home.php'; ?>
		</div>
	</div>
</div>
<?php $con = null; ?>
<?php include 'includes/footer.inc'; ?>
