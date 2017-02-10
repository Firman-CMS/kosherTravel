    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New User</h3>
            </div>
              <form role="form" action="<?php echo base_url();?>message/testNew_process" method="POST">
                <div class="box-body">
                  <div class="form-group">
                  <label for="name">Title</label>
                  <input id="title" name="title" class="form-control" placeholder="Enter title" type="text">
                  </div>

                  <div class="form-group">
                  <label for="name">Description</label>
                  <input id="description" name="description" class="form-control" placeholder="Enter description" type="text">
                  </div>

                  <div class="form-group">
                  <label for="name">Description</label>
                  <input id="description" name="description" class="form-control" placeholder="Enter description" type="text">
                  </div>

                  <div class="form-group">
                  <label for="summary">Summary</label>
                  <input id="summary" name="summary" class="form-control" placeholder="Enter summary" type="text">
                  </div>

                  <div class="form-group">
                  <label for="phone">Phone</label>
                  <input id="phone" name="phone" class="form-control" placeholder="Enter phone number" type="text">
                  </div>

                  <div class="form-group">
                  <label for="subject">Subject</label>
                  <input id="subject" name="subject" class="form-control" placeholder="Enter subject" type="text">
                  </div>

                  <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="body" name="body" class="form-control" placeholder="Enter your message" type="text"></textarea>
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