<div class="container">
  <table class="table mt-5">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Judul</th>
        <th scope="col">Penulis</th>
        <th scope="col">Tahun</th>
        <th scope="col">ID Pembimbing</th>
        <th scope="col">Abstract</th>
          <th scope="col">Nama File</th>
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
        <?= $ta['Abstract']; ?>
        <!-- <?php
$kalimat = "Belajar PHP di Duniailkom";
$sub_kalimat = substr($kalimat,8,3);
echo $sub_kalimat;
// PHP
?> --></td>
        <td><?= $ta['Nama_file']; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</div>