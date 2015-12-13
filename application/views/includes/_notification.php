<?php if($this->session->info) : ?>
	<div class="alert alert-info alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong><span class="glyphicon glyphicon-info-sign"></span></strong> <?php echo $this->session->info; ?>
	</div>
<?php endif; ?>

<?php if($this->session->success) : ?>
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong><span class="glyphicon glyphicon-ok-sign"></span></strong> <?php echo $this->session->success; ?>
	</div>
<?php endif; ?>

<?php if($this->session->warning) : ?>
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong><span class="glyphicon glyphicon-warning-sign"></span></strong> <?php echo $this->session->warning; ?>
	</div>
<?php endif; ?>

<?php if($this->session->error) : ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong><span class="glyphicon glyphicon-exclamation-sign"></span></strong> <?php echo $this->session->error; ?>
	</div>
<?php endif; ?>