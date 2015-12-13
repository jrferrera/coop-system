<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/session/login.css'); ?>" />

<div id="login-form-container" class="row">
	<div class="col-md-4 col-md-offset-5">
		<div class="row">
			<div class="col-md-12">
				<?php $this->load->view('includes/_notification'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form class="form-horizontal" action="<?php echo base_url('sessions/create'); ?>" method="post">
					<div class="form-group">
						<div id="email-container" class="input-group">
							<span class="input-group-addon">Email</span>
							<input class="form-control" type="email" name="email" required />
						</div>
					</div>

					<div class="form-group">
						<div id="password-container" class="input-group">
							<span class="input-group-addon">Password</span>
							<input class="form-control" type="password" name="password" required />
						</div>
					</div>

					<div class="form-group">
						<div id="submit-container" class="input-group col-md-offset-5">
							<input class="form-control btn btn-primary" type="submit" name="submit" value="Login" />
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>