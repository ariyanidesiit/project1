
 <!-- The Modal -->
<div class="modal fade" id="myModal1">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="judul">Akses</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="tampil_modal">
                <label for="checkbox">Pilih Checkbox:</label>
                <br>
                <?php
                $no = 1;
                foreach ($menu as $item) 
                {
                ?>
                <input type="checkbox" name="akses[]" value="<?php echo $item->id_menu; ?>"> <?php echo $item->nama_menu; ?>
                <br>
                <?php
                }
                ?>
                </div>

                <input type="hidden" name="id" id="editId" value="">
                    <div class="form-group">
                        <label for="editNama_roles">Nama Roles:</label>
                        <input type="text" class="form-control" name="nama_roles" id="editNama_roles" placeholder="Masukkan nama roles" required>
                    </div>
                  
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
