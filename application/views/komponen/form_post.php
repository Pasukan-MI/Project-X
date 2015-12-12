<?php
if(empty($formPost)){
    $formPost->id_berita = '';
    $formPost->judul = '';
    $formPost->isi_berita = '';
    $formPost->type = 'tambah';
}
else{ $formPost->type = 'update'; }
?>
     <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->  
            <div class="row-fluid">
              
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Blank Page
                     <small>blank page sample</small>
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <a href="#">Sample Pages</a> <span class="divider">&nbsp;</span>
                       </li>
                       <li><a href="#">Blank Page</a><span class="divider-last">&nbsp;</span></li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div> 
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                   <div class="widget">
                        <div class="widget-title">
                           <h4>
                           <i class="icon-book"></i>
                           Add Post</h4>              
                        </div>
                        <div class="widget-body form">
                           <form action="<?php echo base_url();?>index.php/post/save" class="form-horizontal" method="post">
                           <input type="hidden" name="id" value="<?php echo $formPost->id_berita;?>">
                           <div class="control-group">
                              <label class="control-label">Judul</label>
                              <div class="controls">
                                 <input type="text" class="span6 " name="judul" value='<?php echo $formPost->judul;?>'/>
                              </div>
                           </div>
                           <div class="control-group">
                                    <label class="control-label">Isi</label>
                                    <div class="controls">
                                        <textarea class="span6 ckeditor" name="editor1" rows="8"><?php echo $formPost->isi_berita;?></textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                              <input type="submit" class="btn btn-success" name="submit" value="<?php echo $formPost->type;?>">
                           </div>
                            </form>
                        </div>
                    </div>
                  </div>
           </div>  
            </div>
           </div>  
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   