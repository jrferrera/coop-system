<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/user/_add.css'); ?>" />

<div class="modal fade" id="add-user-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="add-user-form" class="form-horizontal" action="<?php echo base_url('user/add'); ?>" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h4 class="modal-title">Add User</h4>
        </div>
        <div class="modal-body">
          <?php $this->load->view('includes/_ajax_notification', array('id' => 'add-user-notification')); ?>
          
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="form-group">
                <div id="last-name-container" class="input-group">
                  <span class="input-group-addon">Last Name</span>
                  <input class="form-control" type="text" name="last_name" required />
                </div>
              </div>

              <div class="form-group">
                <div id="first-name-container" class="input-group">
                  <span class="input-group-addon">First Name</span>
                  <input class="form-control" type="text" name="first_name" required />
                </div>
              </div>

              <div class="form-group">
                <div id="middle-name-container" class="input-group">
                  <span class="input-group-addon">Middle Name</span>
                  <input class="form-control" type="text" name="middle_name" />
                </div>
              </div>

              <div class="form-group">
                <div id="sex-container" class="input-group">
                  <span class="input-group-addon">Sex</span>
                  <div class="sex-options">
                    <label><input type="radio" name="sex" value="male" checked="checked" /> Male</label>
                    <label><input type="radio" name="sex" value="female" /> Female</label>
                  </div>
                </div>
              </div>

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
                <div id="password-confirmation-container" class="input-group">
                  <span class="input-group-addon">Password Confirmation</span>
                  <input class="form-control" type="password" name="password_confirmation" required />
                </div>
              </div>

              <div class="form-group">
                <div id="password-confirmation-container" class="input-group">
                  <span class="input-group-addon">Role</span>
                  <select class="form-control" name="position">
                    <?php foreach($roles as $role => $index): ?>
                      <option value="<?php echo $role; ?>"><?php echo $roles[$role]['position']; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="submit" value="Add" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>