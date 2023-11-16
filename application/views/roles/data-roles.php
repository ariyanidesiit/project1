<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama roles</th>
            <th colspan='2'>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($hasil as $item) {
        ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nama_roles; ?></td>
               
                <td><button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $item->id_roles; ?>">Edit</button></button></td>
                <td><button type="button" class="btn btn-danger hapus" data-toggle="modal" data-target="#konfirmasiModal" data-id="<?php echo $item->id_roles; ?>">Hapus</button> </td>
                <td><button type="button" class="btn btn-success akses" data-toggle="modal" data-target="#myModal1" data-id="<?php echo $item->id_roles; ?>">Akses</button> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>

<?php $this->load->view('roles/hapus');?>
<?php $this->load->view('roles/edit');?>
<?php $this->load->view('roles/akses');?>