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
                           <h4 class="offset5">Control Panel</h4>              
                        </div>
                        <div class="widget-body">
                            <div class="row-fluid offset1" style="ba">
                           <a href="#" class="icon-btn btn span2">
                               <i class="icon-book"></i>
                               <div class="bold">Manajemen Post</div>
                           </a>
                           <a href="#" class="icon-btn btn span2">
                               <i class="icon-group"></i>
                               <div class="bold">Manajemen User</div>
                           </a>
                           <a href="#" class="icon-btn btn btn-primary span2">
                              <i class="icon-reorder"></i>
                               <div class="bold">Manajemen Menu</div>
                           </a>
                           <a href="#" class="icon-btn btn btn-primary span2">
                               <i class="icon-comment"></i>
                               <div class="bold">Komentar</div>
                           </a>
                           <a href="#" class="icon-btn btn btn-primary span2">
                               <i class="icon-cog"></i>
                               <div class="bold">Settings</div>
                           </a>
                       </div>
                        </div>
                  </div>
                </div>
     
           <div class="row-fluid">
               <div class="span6">
                   <div class="widget">
                        <div class="widget-title">
                           <h4>
                           <i class="icon-book"></i>
                           Postingan Terbaru</h4>              
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Author</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                $no=1;
                                foreach($latestpost as $r){
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $r->username; ?></td>
                                    <td><?php echo $r->judul; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($r->tanggal)); ?></td>
                                    <td><a href="<?php echo $no; ?>">Edit</a></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                                </tbody>
                        </table>
                        </div>
                    </div>
                  </div>
                  <div class="span6">
                      <div class="widget">
                        <div class="widget-title">
                           <h4>
                           <i class="icon-comment"></i>
                           Komentar Terbaru</h4>             
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                                <tr>
                                     <th>No</th>
                                    <th>Nama</th>
                                    <th>Komentar</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                foreach($latestcomment as $r){
                                ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $r->nama_komentar; ?></td>
                                    <td><?php echo $r->isi_komentar; ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($r->tgl)); ?></td>
                                    <td><a href="<?php echo $no; ?>">Edit</a></td>
                                </tr>
                                <?php 
                                $no++;
                                } ?>
                                </tbody>
                                
                                </tbody>
                        </table>
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