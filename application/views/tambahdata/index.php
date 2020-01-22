 <div class="container mt -1">

 <div class="alert alert-primary text-center" role="alert">
  Halaman Tambah Data</div>

<form action="" method="post">
 <label for="Judul">Masukkan Judul</label>
    <input type="text" name="Judul" class="form-control" id="Judul">

   
   <label for="Penulis">Masukkan Penulis</label>
    <input type="text" name="Penulis" class="form-control" id="Penulis">

    <label for="Tahun">Masukkan Tahun</label>
    <input type="number" min="1000" max="2999" name="Tahun" class="form-control" id="Tahun"> 

  	<label for="Id_Pembimbing">Masukkan Id_Pembimbing</label>
    <input type="text" name="Id_Pembimbing" class="form-control" id="Id_Pembimbing" maxlength="5">

      <label for="Abstract">Masukkan Abstract</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Abstract" id="Abstract"></textarea>

	<label for="Nama_file">Masukkan Nama File/Keyword</label>
    <input type="text" name="Nama_file" class="form-control" id="Nama_file">
  

	
     <button type="submit" name="tambah" class="btn btn-primary float-right mt-1" onclick="return confirm ('Tambahkan Data Baru?');">Tambah Data</button>
</form>
</div>