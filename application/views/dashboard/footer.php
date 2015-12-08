<!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Admin Lab Dashboard.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-arrow-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
   <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo base_url();?>assets/js/excanvas.js"></script>
   <script src="<?php echo base_url();?>assets/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/data-tables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/ckeditor/ckeditor.js"></script>
   <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
   <script>var BASE_URL = '<?php echo base_url();?>';</script>
   <script src="<?php echo base_url();?>assets/js/custom.js"></script>
   <!---<script>$('#myModal').modal('show')</script>--->
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>

   <!-- END JAVASCRIPTS --> 
</body>
<!-- END BODY -->
</html>