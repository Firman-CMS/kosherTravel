	<section class="content">
      <div class="row">
        <div class="col-md-3">
           <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="<?php echo base_url();?>message"><i class="fa fa-inbox"></i> Inbox
                  <!-- <span class="label label-primary pull-right">12</span> -->
					</a></li>
                <li><a href="<?php echo base_url();?>message/trash"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->

        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>

              <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.box-header -->
				<div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?php echo $data[0]->subject;?></h3>
                <h5><?php echo $data[0]->email;?>
                  <span class="mailbox-read-time pull-right"><?php echo $data[0]->created_at;?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                    <i class="fa fa-reply"></i></button>
					  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                   <i class="fa fa-print"></i></button>
               </div>
                <!-- /.btn-group -->

              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <?php echo $data[0]->body;?>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer -->
            <div class="box-footer">
              <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
            	</div>
              <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
              <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
