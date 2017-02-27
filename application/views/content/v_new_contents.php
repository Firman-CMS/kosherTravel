<section class="content">
   <div class="row">
      <div class="col-md-12">
         <div class="box">
         <!-- <div class="container"> -->
         <div class="box box-primary">
         <!-- <a href="index.php">&larr; Back TO Home</a><br>
         <h1>Dropzonejs Best Examples</h1>
         <h3 style="color:#00F1E6;"></h3>
         <div class="alert alert-warning">
         	This demo accepts three images per product. After maxFiles = 3 is reached, you can't upload another, unless you delete one of the already uploaded images.
         </div> -->
         <form id="my-awesome-dropzone" class="dropzone" action="<?php echo base_url();?>content/upload_content">
            <div class="col-md-9">
               <div class="dropzone-previews"></div>
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

           <button type="submit" class="btn btn-primary pull-right">Upload Product Images</button>
           
         </form>
         </div>
	<!-- Mainly scripts -->
    <!-- <script src="js/jquery-2.1.1.js"></script> -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.1.js'); ?>"></script>

	<!-- DROPZONE -->
    <!-- <script src="js/dropzone.js"></script> -->
    <script src="<?php echo base_url('assets/js/dropzone2.js'); ?>"></script>
    <script>
        $(document).ready(function(){

            Dropzone.options.myAwesomeDropzone = {

                autoProcessQueue: false,
                uploadMultiple: false,
                parallelUploads: 100,
				acceptedFiles: 'image/jpeg, image/png',
                maxFiles: 5,

                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                    this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                    this.on("sendingmultiple", function() {
                    });
                    this.on("successmultiple", function(files, response) {
						   alert(response);
                    });
                    this.on("errormultiple", function(files, response) {
						alert(response);
                    });
					this.on('complete', function () {
						if (this.getUploadingFiles().length === 0 && this.getQueuedFiles().length === 0) {
							//window.setTimeout(function() { window.location.href = "index.php"; }, 1000);
						}
					});
					// Delete files
					 this.on('removedfile', function(file) {
					console.log(file);
					///var conf = confirm("Press OK to confirm deletion of this photo");
					//if(conf != true){
					//	return false;
					//}
                    var file_name = file.name;
                    $.ajax({
                        type: 'POST',
                        url: 'delete.php',
                        data: { 'filename': file_name },
                        success: function(report) {
                            console.log(report);
                        },
                        error: function(report) {
                            console.log(report);
                        }
                    });
                });
		
		//END DELETE FILES
					//Added Code
				$.getJSON('upload', function(data) { // get the json response

            $.each(data, function(key,value){ //loop through it

                var mockFile = { name: value.name, size: value.size }; // here we get the file name and size as response 

                myDropzone.options.addedfile.call(myDropzone, mockFile);

                myDropzone.options.thumbnail.call(myDropzone, mockFile, "uploads/"+value.name);//uploadsfolder is the folder where you have all those uploaded files

            });

        });
		//End added code
		
                }

            }

       });
    </script>
         </div>
      </div>
   </div>
</section>