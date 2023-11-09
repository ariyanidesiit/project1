<form method="post" id="form">
    <p>Yakin ingin menghapus id <?php echo $hasil->id;?> - <?php echo $hasil->nama;?> </p>
    <input type="hidden" name="id" value="<?php echo $hasil->id;?>">
    <button id="tombol_hapus" type="button" class="btn btn-danger" data-dismiss="modal" >Hapus</button>
</form>