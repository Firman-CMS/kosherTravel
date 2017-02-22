    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Menu Parent</h3>
            </div>
              <form role="form" action="<?php echo base_url();?>menu/edit_new_parent" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="box-body">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" name="name" class="form-control" placeholder="Enter name of Menu" value="<?php echo $data[0]->name ?>" type="text">
                  <input id="id" name="id" class="form-control" value="<?php echo $data[0]->id ?>" type="hidden">
                  <input id="background" name="background" class="form-control" value="<?php echo $data[0]->background ?>" type="hidden">
                  </div>
                  <div class="form-group">
                     <label for="image">Image Menu</label><br>
                     <td><img src="<?php echo base_url().menu_img_thumb().$data[0]->background ?>" alt="<?php echo $data[0]->name ?>" class="img-rounded" height="50" width="140"></td></br>
                     <input type="file" name="userfile" size="20" placeholder="Image Menu" required>
                     <p><small class="label pull-left bg-yellow">max size 4 MB (w: 1920px, h: 1080px)</small></p>
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
