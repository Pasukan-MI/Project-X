		
		<div class="row">
		    <div class="col-md-12">
            
		       <div class="panel panel-gray">
		           <div class="panel-body">
		                <!-- Search search form -->
					<form method="get" class="search-bar" action="" enctype="application/x-www-form-urlencoded">
						
						<div class="input-group">
						<div class="col-lg-4">
						    <input type="text" class="form-control input-lg" name="search" placeholder="Search for something...">
						</div>
						<div class="col-lg-4">
						    <input type="text" class="form-control input-lg" name="search" placeholder="Search for something...">
						</div>
						<div class="col-lg-4">
						    <input type="text" class="form-control input-lg" name="search" placeholder="Search for something...">
						</div>				
							<div class="input-group-btn">
								<button type="submit" class="btn btn-lg btn-primary btn-icon">
									Search 
									<i class="entypo-search"></i>
								</button>
							</div>
						</div>
						
					</form>
		    </div>
		           </div>
		       </div>
		    <br>
			<div class="col-md-12">
		<table class="table table-bordered datatable" id="table-2">
			<thead>
				<tr>
					<th>
					</th>
					<th>ID</th>
					<th>Gambar</th>
					<th>Nama Produk</th>
					<th>Stok</th>
					<th>Actions</th>
				</tr>
			</thead>
			
			<tbody>

			</tbody>
		</table>
		
		<script type="text/javascript">
		jQuery(window).load(function()
		{
			var $ = jQuery;
			
			$("#table-2").dataTable({
				"sPaginationType": "bootstrap",
				"sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },
					null,
					null,
					null,
					null
				]
			});
			
			$(".dataTables_wrapper select").select2({
				minimumResultsForSearch: -1
			});
			
			// Highlighted rows
			$("#table-2 tbody input[type=checkbox]").each(function(i, el)
			{
				var $this = $(el),
					$p = $this.closest('tr');
				
				$(el).on('change', function()
				{
					var is_checked = $this.is(':checked');
					
					$p[is_checked ? 'addClass' : 'removeClass']('highlight');
				});
			});
			
			// Replace Checboxes
			$(".pagination a").click(function(ev)
			{
				replaceCheckboxes();
			});
		});
            
		</script>
		
			</div>
		</div>
		
        
		
		<!-- Footer -->
		<footer class="main">
			
			&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
	</div>
