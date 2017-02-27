<script type="text/javascript" src="<?php echo base_url('assets/js/ckeditor.js'); ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/sample.js'); ?>"></script>
  <!-- <link href="<?php #echo base_url('assets/css/samples.css'); ?>" rel="stylesheet" type="text/css" /> -->
  <link href="<?php echo base_url('assets/css/neo.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New User</h3>
            </div>
              <form role="form" action="<?php echo base_url();?>contents/actionSaveEdit" method="POST">
                <div class="box-body">
                  <div class="form-group">
                  <label for="name">Title : </label>
                  <input id="title" name="title" class="form-control" type="text" value="<?php echo $data[0]['title'] ?>">
                  <input id="id" name="id" class="form-control" type="hidden" value="<?php echo $data[0]['id'] ?>">
                  </div>

                  <div class="form-group">
                  <label for="message">Summary : </label>
                  <textarea id="summary" name="summary" class="form-control" type="text" ><?php echo $data[0]['summary'] ?></textarea>
                  </div>

                  <div class="form-group">
                  <label for="message">Description : </label>
                  <textarea id="description" name="description" class="form-control" type="text"><?php echo $data[0]['description'] ?></textarea>
                  </div>

                  <div class="form-group">
                  <label for="message">Menu : </label>
                  <select class="form-control" name="id_parent" id="id_parent" required>
                     <?php foreach ($menu as $value ) { ?>
                         <option value="<?php echo $value->id ?>" <?php $role = $value->id == $data[0]['id_parent'] ? 'selected=' : ''; echo $role; ?>><?php echo $value->name ?></option>;
                     <?php } ?>
                  </select>
                  </div>

                  <div class="form-group">
                  <label for="message">Sub Menu : </label><div id="loadingimg"></div>
                  <div id="submenu"> </div>
                  </div>

                  <div class="form-group">
                  <label for="name">Main Content : </label>
                    <textarea id="editor" name="editor" rows="10" cols="80" ><?php echo $data[0]['content'] ?></textarea>
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
<script>
var BASE_URL = "<?php echo base_url();?>";
var idSubmenu = "<?php echo $data[0]['submenu_id']; ?>"
 $(document).ready(function() {
    $.ajax({
      type: 'GET',
      url: BASE_URL+'menu/getSubMenu_',
      data:  { "id" : $('#id_parent').val(), "id_sub" : idSubmenu},
      success: function (response){
        document.getElementById("submenu").innerHTML=response;
        $("#loadingimg").hide();
      }
    });

    $("#id_parent").change(function(){
        $('#loadingimg').html('loading...');
        $("#loadingimg").show();
        $.ajax({
          type: 'GET',
          url: BASE_URL+'menu/getSubMenu',
          data:  { "id" : $('#id_parent').val()},
          success: function (response){
            document.getElementById("submenu").innerHTML=response;
            $("#loadingimg").hide();
          }
        });
    });
 });
</script>
<script>
  initSample();
</script>


    <!-- /.content -->
