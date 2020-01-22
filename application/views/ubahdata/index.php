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
                        
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>