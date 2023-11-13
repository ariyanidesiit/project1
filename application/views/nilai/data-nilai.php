<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Kriteria Ketuntasan Minimal</th>
            
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
                <td><?php echo $item->mapel; ?></td>
                <td><?php echo $item->mapel_nilai; ?></td>
                
                <td> <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $item->id_nilai; ?>">Edit</button></button></td>
                <td> <button type="button" class="btn btn-danger hapus" data-toggle="modal" data-target="#konfirmasiModal" data-id="<?php echo $item->id_nilai; ?>">Hapus</button> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>
<?php $this->load->view('nilai/hapus');?>
<?php $this->load->view('nilai/edit');?>