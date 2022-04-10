<?php
if ($_GET['hapus']) {
  $id = $_GET['hapus'];
  $q = mysqli_query($koneksi, "delete from project where id_p=$id");
}
?>

<div class="row">
  <div class="col-md-12">
    <h1>
      Project
      <a href="?menu=tambah-project" class="btn btn-primary">Tambah</a>
    </h1>
    <table class="table table-striped" id="">
      <thead>
        <tr class="text-center">
          <th width="5%">#</th>
          <th width="15%">FOTO</th>
          <th>NAMA</th>
          <th>KETERANGAN</th>
          <th width="20%">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $q = mysqli_query($koneksi, "select * from project");
        while ($data = mysqli_fetch_array($q)) { ?>
          <tr>
            <td><?= $data['id_p'] ?></td>
            <td><img src="<?= admurl ?>/assets/img/<?= $data['foto'] ?>" width="130px"></td>
            <td><?= $data['nama_p'] ?></td>
            <td>
              <p><?= $data['ket'] ?></p>
            </td>
            <td>
              <a href="?menu=ubah-project&id=<?= $data['id_p'] ?>" class="btn btn-info">Ubah</a>
              <a href="#" data-toggle="modal" data-target="#modal-<?= $data['id_p'] ?>" class="btn btn-danger">Hapus</a>
            </td>
          </tr>
          <div class="modal fade" id="modal-<?= $data['id_p'] ?>">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                  YAKIN HAPUS?
                </div>
                <div class="modal-body">
                  apakah yakin ingin menghapus ini?
                </div>
                <div class="modal-footer">
                  <a href="?menu=project&hapus=<?= $data['id_p'] ?>" class="btn btn-danger">ya</a>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>