
	<div class="container-fluid">
		<?php if ($this->session->flashdata('error')) { ?>
			<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
		<?php } ?>

		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">
	            	<h3 class="panel-title">Detail Data</h3>
	            </div>
		    <form action="#" method="post" class="form">
		        <table class="table table-striped table-bordered" id="tab">    
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Nomor </label></td>
		        		<td><label class="col-sm-8 control-label" id="kode"><?php  echo $note->kode; ?></label></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Judul </label></td>
		        		<td><label class="col-sm-11 control-label"><?php  echo $note->judul; ?></label></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Pengisi </label></td>
		        		<td><label class="col-sm-11 control-label"><?php  echo $note->pengisi; ?></label></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Catatan </label></td>
		        		<td><label class="col-sm-11 control-label"><?php  echo $note->catatan; ?></label></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Tanggal </label></td>
		        		<td><label class="col-sm-8 control-label"><?php echo date('d F Y', strtotime($note->tanggal)); ?></label></td>
		        	</tr>
		        	<tr>
		        		<td><label class="control-label"></label></td>
		        		<td><div class="col-sm-8">
		        			<button class="btn btn-primary" type="button" onclick="edit()">Edit</button>
		        			<button class="btn btn-default" type="button" onclick="beranda()">Kembali</button></div>
		        		</td>
		        	</tr>
		    	</table>
		    </form>
		</div></div>


	<script>
		function edit() {
			var id = document.getElementById('kode').innerHTML;
			
			window.location = "<?php echo base_url()?>perbaiki/id-"+id;
		}
	</script>

	</div>