<!DOCTYPE html>
<!--
Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.md or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>CKEditor Sample</title>
	<!-- <script src="../ckeditor.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url('assets/js/ckeditor.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sample.js'); ?>"></script>
	<!-- <script src="js/sample.js"></script> -->
	<!-- <link rel="stylesheet" href="css/samples.css"> -->
	<!-- <link href="<?php #echo base_url('assets/css/samples.css'); ?>" rel="stylesheet" type="text/css" /> -->
	<link href="<?php echo base_url('assets/css/neo.css'); ?>" rel="stylesheet" type="text/css" />
	<!-- <link rel="stylesheet" href="toolbarconfigurator/lib/codemirror/neo.css"> -->
	<!-- <script type="text/javascript" src="<?php #echo base_url('assets/js/config.js?t=G14E'); ?>"></script> -->
	<!-- <link href="<?php #echo base_url('assets/css/editor_gecko.css?t=G14E'); ?>" rel="stylesheet" type="text/css" /> -->
</head>
<body id="main">

<main>
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<!-- <div id="editor">
					<h1>Hello world!</h1>
					<p>I'm an instance of <a href="http://ckeditor.com">CKEditor</a>.</p>
				</div> -->
				<textarea id="editor" name="editor" rows="10" cols="80" > 
				<h1>Hello world!</h1>
				<p>Put your contents here!.</p>
                    </textarea>
			</div>
		</div>
	</div>

</main>

<script>
	initSample();
</script>

</body>
</html>
