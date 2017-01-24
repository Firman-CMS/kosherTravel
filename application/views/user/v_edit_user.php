    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Edit User</h3>
            </div>
              <form role="form" action="<?php echo base_url();?>user/add_new_user" method="POST">
                <div class="box-body">
                  <div class="form-group">
                  <label for="username" >Username</label>
                  <input id="username" name="username" class="form-control" value="<?php echo $data[0]->username ?>" type="text">
                  </div>

                  <div class="form-group">
                  <label for="email">Email address</label>
                  <input id="email" name="email" class="form-control" value="<?php echo $data[0]->email ?>" type="email">
                  </div>

                  <div class="form-group">
                  <label for="password">Set New Password</label>
                  <input id="password" name="password" class="form-control" placeholder="Password" type="password">
                  </div>

                  <div class="form-group">
                  <label>Role</label>
                  <select class="form-control" name="role" id="role">
                  <option value="1" <?php $role = $data[0]->is_admin == 1 ? 'selected=' : ''; echo $role; ?>>Administrator</option>
                  <option value="0" <?php $role = $data[0]->is_admin == 0 ? 'selected=' : ''; echo $role; ?>>User</option>
                  </select>
                  </div>

                  <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input id="exampleInputFile" type="file">
                  <p class="help-block">Example block-level help text here.</p>
                  </div> -->

                  <!-- <div class="checkbox">
                  <label>
                  <input type="checkbox">
                  Check me out
                  </label>
                  </div> -->
                </div>
              <div class="box-footer">
              <button class="btn btn-primary" type="submit">Submit</button>
              </div>
              </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->