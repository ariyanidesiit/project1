<form method="post" id="form">
    <div class="form-group">
        <label for="email">id:</label>
        <input type="text" class="form-control"  name="id" placeholder="Masukkan ID">
    </div>
    <div class="form-group">
         <label for="email">Nama:</label>
        <input type="text" class="form-control"  name="nama" placeholder="Masukan nama" >
    </div>
    <div class="form-group">
         <label for="email">Keterangan:</label>
        <input type="text" class="form-control"  name="ket" placeholder="Masukan keterangan" >
    </div>
    <button id="tombol_tambah" type="button" class="btn btn-primary" data-dismiss="modal" >Tambah</button>
</form>
<!-- <script type="text/javascript">
        $(document).ready(function(){
            $("#tombol_tambah").click(function(){
                var data = $('#form').serialize();
                $.ajax({
                    type	: 'POST',
                    url	: "<?php echo base_url(); ?>/mahasiswa/simpanMahasiswa",
                    data: data,
                    cache	: false,
                    success	: function(data){
                        $('#tampil').load("<?php echo base_url(); ?>/mahasiswa/tampilMahasiswa");
                    }
                });
            });
        });
</script>  -->