<?php
// ACTION UNTUK MENGUBAH DATA
if (isset($_POST['simpan'])) {
  $nama = $_POST['nama'];
  $perusahaan = $_POST['perusahaan'];
  $jabatan = $_POST['jabatan'];
  $tentang1 = $_POST['tentang1'];
  $tentang2 = $_POST['tentang2'];
  $foto = $_FILES['foto'];
  $namafoto = $_FILES['foto']['name'];
  $folder = '../public/assets/img/';
  $folder = $folder . basename($namafoto);

  if (empty($namafoto)) {
    $simpan = mysqli_query(
      $koneksi,
      "update users set nama='$nama', perusahaan='$perusahaan', jabatan='$jabatan',
    kolom1='$tentang1',kolom2='$tentang2' where id=1"
    );
  } else {
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $folder)) {
      rename("../public/assets/img/$namafoto", "../public/assets/img/$namafoto");
      $simpan = mysqli_query(
        $koneksi,
        "update users set nama='$nama', perusahaan='$perusahaan', jabatan='$jabatan',
      foto='$namafoto', kolom1='$tentang1',kolom2='$tentang2' where id=1"
      );
    }
  }

  if ($simpan) {
    $pesan = "<div class='alert alert-success'>Berhasil diperbaharui</div>";
  } else {
    $pesan = "<div class='alert alert-danger'>Terjadi kesalahan</div>";
  }
}

// ACTION UNTUK NGAMBIL DATA SAAT INI
$query = mysqli_query($koneksi, "SELECT * FROM `users`");
$data = mysqli_fetch_assoc($query);
?>

<div class="row mb-5">
  <div class="col-md-12">
    <h1>about</h1>
    <div class="row">
      <div class="col-md-11">
        <?= $pesan ?>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">NAMA LENGKAP</label>
            <input name="nama" type="text" value="<?= $data['nama'] ?>" class="form-control" placeholder="Username/Nama Lengkap.....">
          </div>
          <div class="form-group">
            <label for="">JABATAN</label>
            <input name="jabatan" type="text" value="<?= $data['jabatan'] ?>" class="form-control" placeholder="ex: Pelajar">
          </div>
          <div class="form-group">
            <label for="">PERUSAHAAN</label>
            <input name="perusahaan" type="text" value="<?= $data['perusahaan'] ?>" class="form-control" placeholder="ex: SMKN 4 Tasikmalaya">
          </div>
          <div class="form-group">
            <label for="">FOTO</label>
            <br>
            <img class="img-thumbnail mx-auto d-block" src="<?= admurl ?>/assets/img/<?= $data['foto'] ?>" width="400" style="border-radius:50%">
            <br>
            <input name="foto" type="file" placeholder="paste URL foto" class="form-control">
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="">TENTANG 1</label>
                <textarea name="tentang1" class="form-control" cols="30" rows="5"><?= $data['kolom1'] ?></textarea>
              </div>
              <div class="col-md-6">
                <label for="">TENTANG 2</label>
                <textarea name="tentang2" class="form-control" cols="30" rows="5"><?= $data['kolom2'] ?></textarea>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-danger" name="simpan">SIMPAN</button>
        </form>
      </div>
    </div>
  </div>
</div>