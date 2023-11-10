<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Tingkatan</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Umur</th>
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
                <td><?php echo $item->nama_siswa; ?></td>
                <td><?php echo $item->ttl; ?></td>
                <td><?php echo $item->jenkel; ?></td>
                <td><?php echo $item->tingkatan; ?></td>
                <td><?php echo $item->alamat; ?></td>
                <td><?php echo $item->agama; ?></td>
                <td><?php echo $item->umur; ?></td>
                <td> <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $item->id_siswa; ?>">Edit</button></button></td>
                <td> <button type="button" class="btn btn-danger hapus" data-toggle="modal" data-target="#konfirmasiModal" data-id="<?php echo $item->id_siswa; ?>">Hapus</button> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>
<?php $this->load->view('siswa/hapus');?>
<?php $this->load->view('siswa/edit');?>