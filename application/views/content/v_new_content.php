
<section class="content">
	<div class="row">
      <div class="col-md-12">
      	<div class="box">
				<div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Add New User</h3>
            </div>
              <form role="form" action="http://localhost/koshertravel/message/testNew_process" method="POST">
					<div class="dropzone">

					  <div class="dz-message">
					   <h3> upload Content Images</h3>
					  </div>

					</div>
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

                </div>
              <div class="box-footer">
              <button class="btn btn-primary" type="submit">Submit</button>
              </div>
              </form>
          </div>



			<script type="text/javascript">

			Dropzone.autoDiscover = false;

			var foto_upload= new Dropzone(".dropzone",{
			url: " ",
			maxFilesize: 2,
			method:"post",
			acceptedFiles:"image/*",
			paramName:"userfile",
			dictInvalidFileType:"Type file ini tidak dizinkan",
			addRemoveLinks:true,
			});


			//Event ketika Memulai mengupload
			foto_upload.on("sending",function(a,b,c){
				a.token=Math.random();
				c.append("token_foto",a.token); //Menmpersiapkan token untuk masing masing foto
			});


			//Event ketika foto dihapus
			foto_upload.on("removedfile",function(a){
				var token=a.token;
				$.ajax({
					type:"post",
					data:{token:token},
					url:"<?php echo base_url('index.php/upload/remove_foto') ?>",
					cache:false,
					dataType: 'json',
					success: function(){
						console.log("Foto terhapus");
					},
					error: function(){
						console.log("Error");

					}
				});
			});


			</script>
			</div>
		</div>
	</div>
</section>