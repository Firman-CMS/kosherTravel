<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
        <h3 class="box-title">Add New User</h3>
        </div>
          <form role="form" action="<?php echo base_url();?>contents/SaveContact" method="POST">
            <div class="box-body">
              <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" class="form-control" type="email" value="<?php echo $data[0]->email ?>" required>
              </div>

              <div class="form-group">
              <label for="phone">Phone</label>
              <input id="phone" name="phone" class="form-control" type="text" value="<?php echo $data[0]->phone ?>" required>
              </div>

              <div class="form-group">
              <label for="mobile">Mobile</label>
              <input id="mobile" name="mobile" class="form-control" type="text" value="<?php echo $data[0]->mobile ?>" required>
              </div>

              <div class="form-group">
              <label for="facebook">Facebook</label>
              <input id="facebook" name="facebook" class="form-control" type="text" value="<?php echo $data[0]->facebook ?>">
              </div>

              <div class="form-group">
              <label for="instagram">Instagram</label>
              <input id="instagram" name="instagram" class="form-control" type="text" value="<?php echo $data[0]->instagram ?>">
              </div>

              <div class="form-group">
              <label for="twitter">twitter</label>
              <input id="twitter" name="twitter" class="form-control" type="text" value="<?php echo $data[0]->twitter ?>">
              </div>

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
