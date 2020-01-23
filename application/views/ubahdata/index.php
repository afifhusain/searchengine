<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data tugasakhir
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="Id_ta" value="<?= $tugasakhir['Id_ta']; ?>">
                       
                        <div class="form-group">
                            <label for="Judul">Judul</label>
                            <input type="text" name="Judul" class="form-control" id="Judul" value="<?= $tugasakhir['Judul']; ?>">
                            <small class="form-text text-danger"><?= form_error('Judul'); ?></small>
                        </div>


                        <div class="form-group">
                            <label for="Penulis">Penulis</label>
                            <input type="text" name="Penulis" class="form-control" id="Penulis" value="<?= $tugasakhir['Penulis']; ?>">
                            <small class="form-text text-danger"></small>
                        </div>


                        <div class="form-group">
                            <label for="Tahun">Tahun</label>
                            <input type="text" name="Tahun" class="form-control" id="Tahun" value="<?= $tugasakhir['Tahun']; ?>">
                            <small class="form-text text-danger"></small>
                        </div>


                        <div class="form-group">
                            <label for="Id_Pembimbing">Id_Pembimbing</label>
                            <input type="text" name="Id_Pembimbing" class="form-control" id="Id_Pembimbing" value="<?= $tugasakhir['Id_Pembimbing']; ?>">
                            <small class="form-text text-danger"></small>
                        </div>


                        
                        <div class="form-group">
                            <label for="Abstract">Abstract</label>

                           
                            <textarea name="Abstract" class="form-control" id="Abstract" values="" rows="3"><?= $tugasakhir['Abstract']; ?></textarea>
                            <small class="form-text text-danger"></small>
                        </div>


                        
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>