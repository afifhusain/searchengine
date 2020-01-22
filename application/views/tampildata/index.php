<div class="container mt-1">
  <a href="<?= base_url(); ?>tugasakhir/tambah/"><button class="btn btn-outline-primary">Tambah Data TA</button></a>
  <table class="table mt-1">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Tahun</th>
        <th scope="col">ID Pembimbing</th>
        <th scope="col">Abstract</th>
        <th scope="col">Nama File</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tugasakhir as $ta) : ?>
      <tr>
        <th scope="row"><?= $ta['Id_ta']; ?></th>
        <td><?= $ta['Judul']; ?></td>
        <td><?= $ta['Penulis']; ?></td>
        <td><?= $ta['Tahun']; ?></td>
        <td><?= $ta['Id_Pembimbing']; ?></td>
        <td>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary modal-sm" data-toggle="modal" data-target="#exampleModalScrollable">
              Tampilkan
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Abstract Dari Judul <?= $ta['Judul']; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                     <?php foreach ($tugasakhir as $ta) : ?>
                    <p><?= $ta['Abstract']; ?></p>
                    <?php endforeach; ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>



     
</td>
        <td><?= $ta['Nama_file']; ?></td>
        <td><a href="<?= base_url(); ?>tugasakhir/hapus/<?= $ta['Id_ta']; ?>"
                        class="badge badge-danger float-right tombol-hapus" onclick="return confirm ('Yakin Hapus Data ?');">hapus</a></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>