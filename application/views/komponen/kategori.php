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
                           Daftar Postingan</h4>              
                        </div>
                        <div class="widget-body">
                       
                         <div class="row-fluid">
                         <a class="btn btn-info" href='<?php echo base_url();?>index.php/kategori/add/'><i class="icon-pencil icon-white"> Tambah Data</i></a>
                          <button class="btn btn-info" onclick="$('.form').submit()"><i class="icon-trash icon-white"></i> Delete</button>
                         </div>
                           <form class="form" action="<?php echo base_url();?>index.php/kategori/delete" method="post" name="form">
                           <br>
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                   <th style="width:8px;"><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /></th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                foreach($listkategori as $r){
                                    $url = base_url().'index.php/kategori/edit/'.$r->id_kategori;
                                ?>
                                <tr class="odd gradeX">
                                   <td><input type="checkbox" name="checkbox[]" class="checkboxes" value="<?php echo $r->id_kategori; ?>" /></td>
                                    <td><?php echo $r->id_kategori; ?></td>
                                    <td><a href="<?php echo $url ;?>"><?php echo $r->nama_kategori; ?></a></td>
                                    <td><?php echo $r->aktif == 'Y' ? 
                                        "<span class='label label-success'>Aktif</span> " :
                                        "<span class='label label-important'>Tidak Aktif</span> "
                                    ;?></td>
                                </tr>
                                <?php 
                                } ?>
                                </tbody>
                        </table>
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
   