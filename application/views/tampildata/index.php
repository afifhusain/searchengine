
<div class="container mt-1">

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>
 
  <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Tugas Akhir" name="keyword">
                    <div class="input-group-append mr-4">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                     
                </div>
    </form>
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
      <?php if (empty($tugasakhir)) : ?>
                <div class="alert alert-danger" role="alert">
                data tugasakhir tidak ditemukan.
                </div>
            <?php endif; ?>
      <?php foreach ($tugasakhir as $ta) : ?>
      <tr>
        <th scope="row"><?= $ta['Id_ta']; ?></th>
        <td><?= $ta['Judul']; ?></td>
        <td><?= $ta['Penulis']; ?></td>
        <td><?= $ta['Tahun']; ?></td>
        <td><?= $ta['Id_Pembimbing']; ?></td>
        <td>Abstract   
</td>
        <td><?= $ta['Nama_file']; ?></td>
        <td><a href="<?= base_url(); ?>tugasakhir/hapus/<?= $ta['Id_ta']; ?>"
                        class="badge badge-danger float-right tombol-hapus" onclick="return confirm ('Yakin Hapus Data ?');">hapus</a>

          <a href="<?= base_url(); ?>tugasakhir/ubah/<?= $ta['Id_ta']; ?>"
                        class="badge badge-secondary float-right tombol-hapus">Ubah Data</a>

        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>