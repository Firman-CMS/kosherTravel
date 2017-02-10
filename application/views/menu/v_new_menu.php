    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New User</h3>
            </div>
              <form role="form" action="<?php echo base_url();?>menu/add_new_menu" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" name="name" class="form-control" placeholder="Enter Name Of Menu" type="text">
                  </div>

                  <div class="form-group">
                  <label for="description">Description</label>
                  <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter Description Of Menu" type="text"></textarea>
                  <!-- <input  class="form-control" > -->
                  </div>

                  <div class="form-group">
                  <label for="image">Image Menu</label>
                  <input type="file" name="userfile" size="20" placeholder="Image Menu">
                  <!-- <input id="email" name="email" class="form-control" placeholder="Enter email" type="email"> -->
                  </div>

                  <div class="form-group">
                  <label>Parent Menu</label>
                    <?php echo $menu ?>
                  </div>

                </div>
              <div class="box-footer">
              <button class="btn btn-primary" value="upload" type="submit">Submit</button>
              </div>
              </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
