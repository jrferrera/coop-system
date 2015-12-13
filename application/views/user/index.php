<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/user/index.css'); ?>" />

<div class="row">
	<div class="col-md-12">
		<button class="btn btn-primary" data-toggle="modal" data-target="#add-user-modal">Add User</button>
	</div>
</div>

<br />

<div class="row">
	<div id="users-table-container" class="col-md-12"></div>
</div>

<?php $this->load->view('user/modals/_add', array('roles' => $role_options)); ?>
<?php $this->load->view('user/modals/_edit', array('roles' => $role_options)); ?>
<?php $this->load->view('user/modals/_delete'); ?>

<script type="text/javascript" src="<?php echo base_url('assets/js/user/index.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/user/_add.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/user/_edit.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/user/_delete.js'); ?>"></script>