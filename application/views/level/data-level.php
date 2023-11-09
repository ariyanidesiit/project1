<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>id</th>
            <th>Nama</th>
            <th>keterangan</th>
            <th colspan='2'>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no=1;
            foreach ($hasil as $item)
            {
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $item->id;?></td>
            <td><?php echo $item->nama;?></td>
            <td><?php echo $item->keterangan;?></td>
            <td> <button type="button" id="<?php echo $item->id; ?>" class="edit btn btn-warning">Edit</button></td>
            <td> <button type="button" id="<?php echo $item->id; ?>" class="hapus btn btn-danger">Hapus</button></td>
        </tr>
        <?php
                $no++;
                }
                 ?>
    </tbody>
</table>
   <!-- Button to Open the Modal -->
   <button type="button" class="tambah btn btn-primary" data-toggle="modal" data-target="#myModal">
       Tambah
        </button>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title" id="judul"></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div id="tampil_modal">
                        <!-- Data akan di tampilkan disini-->
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                </div>

                </div>
            </div>
        </div>

        <script>
            $(document).ready(function(){

                $('.tambah').click(function(){
                var aksi = 'Tambah Data';
                $.ajax({
                    url: '<?php echo base_url(); ?>/level/tambah',
                    method: 'post',
                    data: {aksi:aksi},
                    success:function(data){
                        $('#myModal').modal("show");
                        $('#tampil_modal').html(data);
                        document.getElementById("judul").innerHTML='Tambah Data';

                    }
                });
                });

                $('.edit').click(function(){

                    var id = $(this).attr("id");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/level/edit',
                        method: 'post',
                        data: {id:id},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Edit Data';  
                        }
                    });
                });

                $('.hapus').click(function(){

                    var id = $(this).attr("id");
                    $.ajax({
                        url: '<?php echo base_url(); ?>/level/hapus',
                        method: 'post',
                        data: {id:id},
                        success:function(data){
                            $('#myModal').modal("show");
                            $('#tampil_modal').html(data);
                            document.getElementById("judul").innerHTML='Hapus Data';
                        }
                    });
                    });
            });
        </script>