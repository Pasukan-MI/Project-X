<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-icons/font-awesome/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/selectboxit/jquery.selectBoxIt.css">    

	<!-- Bottom scripts (common) -->
	<script src="<?php echo base_url();?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/joinable.js"></script>
	<script src="<?php echo base_url();?>assets/js/resizeable.js"></script>
	<script src="<?php echo base_url();?>assets/js/neon-api.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/datatables/TableTools.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo base_url();?>assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="<?php echo base_url();?>assets/js/datatables/lodash.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="<?php echo base_url();?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/neon-chat.js"></script>
	<script src="<?php echo base_url();?>assets/js/ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url();?>assets/js/fileinput.js"></script>

	<!-- JavaScripts initializations and stuff -->
	<script src="<?php echo base_url();?>assets/js/neon-custom.js"></script>
    <script>
        // CKeditor WYSIWYG
		if($.isFunction($.fn.ckeditor))
		{
			$(".ckeditor").ckeditor({
				contentsLangDirection: rtl() ? 'rtl' : 'ltr'
			});
		}
    </script>

	<!-- Demo Settings -->
	<script src="<?php echo base_url();?>assets/js/neon-demo.js"></script>

</body>
</html>