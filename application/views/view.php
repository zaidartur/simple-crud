
    <div class="container-fluid">
        <div>
        <button class="btn btn-success" type="submit" onclick="tambah()"><i class="glyphicon glyphicon-plus"></i> Tambah </button></div><br>
        
        <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php }
        if ($this->session->flashdata('updated')) { ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('updated'); ?></div>
        <?php }
        if ($this->session->flashdata('del')) { ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('del'); ?></div>
        <?php } ?>

        <table class="table table-striped" id="tab">    
            <thead>
                <tr>
                    <th width="100">Kode</th>
                    <th>Judul</th>
                    <th>Pengisi</th>
                    <th>Tanggal</th>
                    <th width="100">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notepad as $key) { ?>
                <tr>
                    <td><?php echo $key->kode; ?></td>
                    <td><?php echo $key->judul; ?></td>
                    <td><?php echo $key->pengisi; ?></td>
                    <td><?php echo date('d F Y', strtotime($key->tanggal)); ?></td>
                    <td>
                        <button class="btn btn-xs btn-info" onclick="lihat('<?php echo $key->kode; ?>')"><i class="glyphicon glyphicon-eye-open"></i></button>
                        <button class="btn btn-xs btn-warning" onclick="edit('<?php echo $key->kode; ?>')"><i class="glyphicon glyphicon-pencil"></i></button>
                        <button class="btn btn-xs btn-danger" onclick="hapus('<?php echo $key->kode; ?>')"><i class="glyphicon glyphicon-trash"></i></button>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <script>
            function tambah() {
                window.location="<?php echo base_url();?>home/add";
            }

            function lihat(id) {
                window.location = "<?php echo base_url()?>lihat/id-"+id;
            }

            function edit(id) {
                window.location = "<?php echo base_url()?>perbaiki/id-"+id;
            }

            function hapus(id) {
                window.location = "<?php echo base_url()?>home/delete/"+id;
            }
        </script>

    </div>
