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
       Abstract
        <!-- <?php
$kalimat = "Belajar PHP";
$sub_kalimat = substr($kalimat,8,3);
echo $sub_kalimat;
// PHP
?> --></td>
        <td><?= $ta['Nama_file']; ?></td>
        <td><a href="<?= base_url(); ?>tugasakhir/hapus/<?= $ta['Id_ta']; ?>"
                        class="badge badge-danger float-right tombol-hapus" onclick="return confirm ('Yakin Hapus Data ?');">hapus</a></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>