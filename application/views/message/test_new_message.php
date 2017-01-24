<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User
        <small>Add New User</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New User</h3>
            </div>
              <form role="form" action="<?php echo base_url();?>message/testNew_process" method="POST">
                <div class="box-body">
                  <div class="form-group">
                  <label for="name">Name</label>
                  <input id="name" name="name" class="form-control" placeholder="Enter name" type="text">
                  </div>

                  <div class="form-group">
                  <label for="email">Email address</label>
                  <input id="email" name="email" class="form-control" placeholder="Enter email" type="email">
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
                  <label for="subject">Message</label>
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