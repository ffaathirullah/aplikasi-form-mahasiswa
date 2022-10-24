<?php
  include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="mt-3 mb-3">
         <h3 class="text-center">Test CRUD</h3>
      </div> 

    <div class="card">
    <div class="card-header">
        Featured
    </div>
    <div class="card-body">

         <!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
  Tambah Data
</button>

      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>No</th>
          <th>Nim</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </tr>

        <?php 
        $no = 1;
        $tampil = mysqli_query($koneksi, "SELECT * FROM tmhs ORDER BY id_mhs ASC");
        while($data = mysqli_fetch_array($tampil)) : 
        ?>
        <tr>
          <td>
            <?= $no++ ?>
          </td>
          <td>
          <?= $data["nim"] ?>
          </td>
          <td>
          <?= $data["nama"] ?>
          </td>
          <td>
          <?= $data["alamat"] ?>
          </td>
          <td>
          <?= $data["prodi"] ?>
          </td>
          <td>
            <a href="#" class="btn btn-warning"> Ubah </a>
            <a href="#" class="btn btn-danger"> Hapus </a>
          </td>
        </tr>
        <?php 
          endwhile;
        ?>
      </table>


 

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="$_POST" action="aksiCrud.php">
      <div class="modal-body">
        
             <div class="mb-3">
              <label class="form-label">Nim</label>
              <input type="text" class="form-control" placeholder="Masukan Nim">
            </div>
             <div class="mb-3">
              <label  class="form-label">Nama</label>
              <input type="text" class="form-control" placeholder="Masukan Nama">
            </div>
             <div class="mb-3">
              <label  class="form-label">Alamat</label>
              <textarea class="form-control" placeholder="Masukan Alamat" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Prodi</label>
              <select class="form-select" name="tprodi">
                <option value="S1 - Management Informatika">S1 - Management Informatika</option>
                <option value="S1 - Teknik Informatika">S1 - Teknik Informatika</option>
                <option value="S1 - Sisfo">S1 - Sisfo</option>
              </select>
            </div>
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
      </div>

      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>



    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>