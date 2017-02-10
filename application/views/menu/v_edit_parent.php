    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New Menu Parent</h3>
            </div>
              <form role="form" action="<?php echo base_url();?>menu/edit_new_parent" method="POST">
                <div class="box-body">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" name="name" class="form-control" placeholder="Enter name of Menu" value="<?php echo $data[0]->name ?>" type="text">
                  <input id="id" name="id" class="form-control" value="<?php echo $data[0]->id ?>" type="hidden">
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