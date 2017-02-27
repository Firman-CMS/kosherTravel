<body>

<?php echo $error;?>

<?php echo form_open_multipart('menu/do_upload2');?>

<input type="file" name="userfile" size="20" />
<input id="title" name="title" class="form-control" placeholder="Enter Name Of Menu" type="text">
<input id="description" name="description" class="form-control" placeholder="Enter Name Of Menu" type="text">
<br /><br />

<input type="submit" value="upload" />

</form>

</body>
