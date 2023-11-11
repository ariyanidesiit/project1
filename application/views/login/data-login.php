<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
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
                <td><?php echo $item->username; ?></td>
                <td><?php echo $item->password; ?></td>
                <td><button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#editModal" data-id="<?php echo $item->id_user; ?>">Edit</button></button></td>
                <td><button type="button" class="btn btn-danger hapus" data-toggle="modal" data-target="#konfirmasiModal" data-id="<?php echo $item->id_user; ?>">Hapus</button> </td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </tbody>
</table>

<?php $this->load->view('login/hapus');?>
<?php $this->load->view('login/edit');?>