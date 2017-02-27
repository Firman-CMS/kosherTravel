<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <!-- /.box -->

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">List All Menu</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
          <div class="row">
            <div class="col-sm-6">
            <div class="dataTables_length" id="example1_length">
              <a href="<?php echo base_url() . "menu/newMenu"?>" class="btn btn-sm btn-success">Add New Menu</a>
            </div>
            </div>
          </div><br>

          <div class="row">
          <div class="col-sm-12">
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
            <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 172px;" >Image</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 172px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Menu</th>
            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 172px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Parent Menu</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 220px;" aria-label="Browser: activate to sort column ascending">Create at</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 106px;" aria-label="CSS grade: activate to sort column ascending">Action</th></tr>
            </thead>
            <tbody>
            <?php
            foreach ($data as $item) { ?>
            <tr role="row" class="<?php $b = ($item['id'] % 2) == 0 ? 'even' : 'odd'; echo $b;?>">
              <td><img src="<?php echo base_url().menu_img().$item['image']?>" alt="<?php echo $item['name'] ?>" class="img-rounded" height="50" width="140"></td>
              <td class="sorting_1"><?php echo $item['name'] ?></td>
              <td class="sorting_1"><?php echo $item['parent_menu'] ?></td>
              <td><?php echo $item['created_at'] ?></td>
              <td>
              <a href="<?php echo base_url() . "menu/editMenu/" . $item['id']; ?>" class="btn btn-sm btn-success">Edit</a>
              <a href="<?php echo base_url() . "menu/del_menu/" . $item['id']; ?>" class="btn btn-sm btn-danger" onClick="return confirm('Are you sure you want to delete?')">Del</a>
              </td>
            </tr>
            <?php } ?>
            </tbody>
            <tfoot>
            <!-- <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr> -->
            </tfoot>
          </table>
          </div>
          </div>
          <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div></div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
