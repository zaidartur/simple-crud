
	<div class="container-fluid">
		<?php if ($this->session->flashdata('error')) { ?>
			<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
		<?php } ?>

		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
	            	<h3 class="panel-title">Edit Data</h3>
	            </div>
		    <form action="<?php echo base_url()?>home/update" method="post" class="form">
		        <table class="table table-striped table-bordered" id="tab">    
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Nomor </label></td>
		        		<td><div class="col-sm-8"><input type="text" name="kode" class="form-control" placeholder="Kode" value="<?php echo $note->kode; ?>" readonly></div></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Judul </label></td>
		        		<td><div class="col-sm-11"><input type="text" name="judul" class="form-control" placeholder="Judul" value="<?php echo $note->judul; ?>"></div></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Pengisi </label></td>
		        		<td><div class="col-sm-11"><input type="text" name="pengisi" class="form-control" placeholder="Pengisi" value="<?php echo $note->pengisi; ?>"></div></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Catatan </label></td>
		        		<td><div class="col-sm-12"><textarea class="form-control" name="catatan"><?php echo $note->catatan; ?></textarea></div></td>
		        	</tr>
		        	<tr>
		        		<td><label class="col-sm-1 control-label">Tanggal </label></td>
		        		<td><div class="col-sm-8"><input type="text" name="tanggal" class="form-control" placeholder="dd-mm-yyyy" maxlength="10" value="<?php echo date('d-m-Y', strtotime($note->tanggal)); ?>"></div></td>
		        	</tr>
		        	<tr>
		        		<td><label class="control-label"></label></td>
		        		<td><div class="col-sm-8">
		        			<button class="btn btn-primary" type="submit">Update</button>
		        			<button class="btn btn-default" type="button" onclick="beranda()">Kembali</button></div>
		        		</td>
		        	</tr>
		    	</table>
		    </form>
		</div></div>
	</div>

