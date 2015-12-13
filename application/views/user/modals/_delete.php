<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/user/_add.css'); ?>" />

<div class="modal fade" id="delete-user-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="delete-user-form" class="form-horizontal" action="<?php echo base_url('user/delete'); ?>" method="post">
        <input type="hidden" id="user-id" name="id" />

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
          <h4 class="modal-title">Delete User</h4>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-8">
              Are you sure you want to delete this user?
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col-md-8">
              <div> 
                <strong>Name:</strong> <span class="name"></span>
                <br />
                <strong>Email:</strong> <span class="email"></span>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" name="submit" value="Yes" />
          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="delete-user-message-modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        <h4 class="modal-title">Delete User Message</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8">
            <div id="delete-user-modal-message"></div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>