<form method="post" id="form">
    <div class="form-group">
        <label for="email">id:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->id; ?>" name="id_baru" placeholder="Masukan id">
    </div>
    <div class="form-group">
         <label for="email">Nama:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->nama; ?>" name="nama" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
         <label for="email">Keterangan:</label>
        <input type="text" class="form-control" value="<?php echo $hasil->keterangan; ?>" name="keterangan" placeholder="Masukan keterangan" >
    </div>
    <input type="hidden" name="id_lama" value="<?php echo $hasil->id;?>">
    <button id="tombol_edit" type="button" class="btn btn-warning" data-dismiss="modal" >Edit</button>
</form>