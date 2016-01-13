<?php
if(empty($formProduct)){
    $formProduct->nama = '';
    $formProduct->deskripsi = '';
    $formProduct->harga = '';
    $formProduct->gambar = '';
    $formProduct->stok = '1';
    $formProduct->id_kategori = '';
    $formProduct->type = 'tambah';
}
else{ $formPost->type = 'update'; }
?>
     		<form action="" method="post" enctype="multipart/form-data">
		<div class="row">
            <div class="col-md-8">
                <input type="text" class="form-control input-lg" name="nm_produk" placeholder="Nama Produk" value="<?php echo $formProduct->nama; ?>">
                <br>
                <textarea class="form-control ckeditor"  name="desc_produk" id="post_content"><?php echo $formProduct->deskripsi;?></textarea>
            </div>
            
				<div class="col-sm-4">
					<!-- Metabox :: Product Settings -->
					<div class="panel panel-info" data-collapsed="0">
				
						<div class="panel-heading">
							<div class="panel-title">
								Product Settings
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
                         <p>Stok</p>
                          <div class="form-group">
									    <div class="input-spinner">
                                            <button type="button" class="btn btn-info btn-sm">-</button>
                                            <input type="text" name="jml_produk" class="form-control input-sm size-3" value="<?php echo $formProduct->stok;?>" />
                                            <button type="button" class="btn btn-info btn-sm">+</button>
                                        </div>
							</div>
                         <p>Harga</p>
                          <div class="form-group">
									    <div class="input-group" >
                                           <span class="input-group-addon" style="color:#919191">Rp.</span>
                                           <input type="text" name="hrg_produk" class="form-control input-sm size-4" value="<?php echo $formProduct->harga;?>">
                                           <span class="input-group-addon" style="color:#919191">.00</span>
                                        </div>
							</div>
                          <p>Kategori</p>
							<select name="cat_produk" class="selectboxit">
								<optgroup label="Post Status">
									<option value="1">Publish</option>
									<option value="2">Private</option>
									<option value="3">Protected</option>
									<option value="4">Scheduled</option>
								</optgroup>
							</select>
                           <br>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-7 post-save-changes">
                                    <button type="button" class="btn btn-blue btn-lg btn-block btn-icon">
                                        Publish
                                        <i class="entypo-check"></i>
                                    </button>
                                </div>
                            </div>
							
						</div>
					
					</div>
					
					<br>
					
					<!-- Metabox :: Product Image -->
					<div class="panel panel-info" data-collapsed="0">
				
						<div class="panel-heading">
							<div class="panel-title">
								Product Image
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="max-width: 310px; height: 160px;" data-trigger="fileinput">
									<img src="http://placehold.it/320x160" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px"></div>
								<div>
									<span class="btn btn-blue btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="img_produk" accept="image/*" >
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							
						</div>
					
					</div>
					<br>
					
				</div>
       
        </div>
        </form>
		
        
		
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>
