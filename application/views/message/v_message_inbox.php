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
        <div class="box-body no-padding" style="display: block;">
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="<?php echo base_url();?>message"><i class="fa fa-inbox"></i> Inbox
              <!-- <span class="label label-primary pull-right">12</span> -->
           </a></li>
            <li><a href="<?php echo base_url();?>message/trash"><i class="fa fa-trash-o"></i> Trash
            <!-- <span class="label label-warning pull-right">12</span> -->
            </a></li></li>
          </ul>
        </div>
        <!-- /.box-body -->
      </div>
   </div>
    <!-- /.col -->
    <div class="col-md-9">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Inbox</h3>

          <div class="box-tools pull-right">
            <div class="has-feedback">
              <input class="form-control input-sm" placeholder="Search Mail" type="text">
              <!-- <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
            </div>
          </div>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <div class="mailbox-controls">
            <!-- Check all button -->
            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
            </div>
            <!-- /.btn-group -->
            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
            <div class="pull-right">
              1-50/200
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
              </div>
              <!-- /.btn-group -->
            </div>
            <!-- /.pull-right -->
          </div>
          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>

              <?php
              foreach ($data as $item) { ?>
                <tr>
                  <td><div class="icheckbox_flat-blue checked" style="position: relative;" aria-checked="true" aria-disabled="false"><input style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div></td>
                  <td><div class="icheckbox_flat-blue" style="position: relative;" aria-checked="false" aria-disabled="false">
                  <input style="position: absolute; opacity: 1" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;">
                  </ins></div></td>
                  <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-yellow"></i></a></td>
                  <td class="mailbox-name"><a href="<?php echo base_url();?>message/readMessage?id=<?php echo $item->id ?>"><?php $b = $item->notif == 1 ? '<b>' : ''; echo $b;?><?php echo $item->from; ?><?php $b = $item->notif == 1 ? '</b>' : ''; echo $b;?></a></td>
                  <td class="mailbox-subject"><a href="<?php echo base_url();?>message/readMessage?id=<?php echo $item->id ?>"><?php $b = $item->notif == 1 ? '<b>' : ''; echo $b;?><?php echo limitcharacter($item->subject, 20); ?><?php $b = $item->notif == 1 ? '</b>' : ''; echo $b;?> - <?php echo limitcharacter($item->body, 45); ?></a>
                  </td>
                  <td class="mailbox-attachment"><i class=""></i></td>
                  <td class="mailbox-date"><?php echo timeAgo(strtotime($item->created_at)); ?></td>
                </tr>
              <?php } ?>

              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
          <div class="mailbox-controls">
            <!-- Check all button -->
            <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
              <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
            </div>
            <!-- /.btn-group -->
            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
            <div class="pull-right">
              1-50/200
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
              </div>
              <!-- /.btn-group -->
            </div>
            <!-- /.pull-right -->
          </div>
        </div>
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
