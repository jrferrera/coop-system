<strong>Users</strong>
<table id="users-table" class="table table-striped table-bordered">
	<tr>
		<th>#</th>
		<th>Position</th>
		<th>Last Name</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Sex</th>
		<th>Email</th>
		<th>Date Added</th>
		<th>Actions</th>
	</tr>
	<?php if(!empty($users)) { ?>
		<?php $count = 1; ?>
		<?php foreach($users as $user): ?>
			<tr>
				<td><?php echo $count; ?></td>
				<td><?php echo ucfirst($user->position); ?></td>
				<td><?php echo $user->last_name; ?></td>
				<td><?php echo $user->first_name; ?></td>
				<td><?php echo $user->middle_name; ?></td>
				<td><?php echo ucfirst($user->sex); ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->created_at; ?></td>

				<td>
					<a href="#edit-user-modal" class="btn btn-success btn-sm edit-user-button" data-toggle="modal" data-id="<?php echo $user->id; ?>"><i class="icon-pencil"></i> Edit</a>
					<a href="#delete-user-modal" class="btn btn-danger btn-sm delete-user-button" data-toggle="modal" data-id="<?php echo $user->id; ?>"><i class="icon-remove"></i> Delete</a>
				</td>
			</tr>
			<?php $count++; ?>
		<?php endforeach; ?>
	<?php }else { ?>
		<tr>
			<td colspan="9">No user record.</td>
		</tr>
	<?php } ?>
</table>