<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Nama URL</th>
            <th>Nama Icon</th>
          
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
                <td><?php echo $item->nama_menu; ?></td>
                <td><?php echo $item->nama_url; ?></td>
                <td><?php echo $item->nama_icon; ?></td>
               
                <td> <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $item->id_menu; ?>">Edit</button></button></td>
                <td> <button type="button" class="btn btn-danger hapus" data-toggle="modal" data-target="#konfirmasiModal" data-id="<?php echo $item->id_menu; ?>">Hapus</button> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>
<?php $this->load->view('menu/hapus');?>
<?php $this->load->view('menu/edit');?>