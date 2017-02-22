<!-- <style>.cke{visibility:hidden;}</style>
<script type="text/javascript" src="<?php# echo base_url('assets/js/en.js?t=G14E'); ?>"></script>
<script type="text/javascript" src="<?php# echo base_url('assets/js/styles.js?t=G14E'); ?>"></script>
<script type="text/javascript" src="<?php# echo base_url('assets/js/config.js?t=G14E'); ?>"></script>
<link href="<?php# echo base_url('assets/css/editor_gecko.css?t=G14E'); ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.7/standard/config.js?t=G14E"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.ckeditor.com/4.5.7/standard/skins/moono/editor_gecko.css?t=G14E">
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.7/standard/styles.js?t=G14E"></script>
<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.7/standard/lang/en.js?t=G14E"></script> -->
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
              <form role="form" action="<?php echo base_url();?>contents/actionSave" method="POST">
                <div class="box-body">
                  <div class="form-group">
                  <label for="name">Title : </label>
                  <input id="title" name="title" class="form-control" placeholder="Enter title" type="text">
                  </div>

                  <div class="form-group">
                  <label for="message">Summary : </label>
                  <textarea id="summary" name="summary" class="form-control" placeholder="Content summary" type="text"></textarea>
                  </div>

                  <div class="form-group">
                  <label for="message">Description : </label>
                  <textarea id="description" name="description" class="form-control" placeholder="Content description" type="text"></textarea>
                  </div>

                  <div class="form-group">
                  <label for="message">Menu : </label>
                  <?php echo $menu ?>
                  </div>

                  <div class="form-group">
                  <label for="message">Sub Menu : </label><div id="loadingimg"></div>
                  <div id="submenu"> </div>
                  </div>

                  <div class="form-group">
                  <label for="name">Main Content : </label>
                    <textarea id="editor" name="editor" rows="10" cols="80" >
                    <h1>Hello world!</h1>
                    <p>Put your contents here!.</p>
                    </textarea>
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
 $(document).ready(function() {
    $("#id_parent").change(function(){
        $('#loadingimg').html('loading...');
        $("#loadingimg").show();
        $.ajax({
          type: 'GET',
          url: 'menu/getSubMenu',
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
