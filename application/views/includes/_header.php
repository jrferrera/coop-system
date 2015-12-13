<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home">Coop System</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php if($this->session->login) : ?>
					<li class="<?php echo ($class == 'home' ? 'active' : ''); ?>"><a href="home">Home</a></li>
					<li class="<?php echo ($class == 'user' ? 'active' : ''); ?>"><a href="user">User</a></li>
					<li class="<?php echo ($class == 'member' ? 'active' : ''); ?>"><a href="member">Member</a></li>
				<?php endif; ?>
		        <!-- <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">fdgf <span class="caret"></span></a>
		        	<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li> -->
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if($this->session->login) : ?>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<?php echo $this->session->user['profile']->first_name; ?> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#">Account Settings</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="sessions/logout">Logout</a></li>
						</ul>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>