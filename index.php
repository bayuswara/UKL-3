<?php
include '../aset/header.php';
include 'koneksi.php';

$sql = "SELECT * FROM buku";

$res = mysqli_query($koneksi, $sql);

$pinjam = array();

while ($data = mysqli_fetch_assoc($res)) {
  $pinjam[] = $data;
}
?>
<
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title"><i class="fas fa-edit"></i>Data Anggota</h2>
            </div>
            <div class="card-body">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul </th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
              <?php
              $no = 1;
              foreach ($pinjam as $p ) { ?>
                <tr>
                  <th scope="row"><?= $no ?></th>
                  <td><?= $p['judul'] ?></th>
                    <td><?= $p['pengarang'] ?></td>
                    <td><?= $p['stok'] ?></td>
                    <td>
                      <a href="#" class="badge badge-primary">Detail</a>
                      <a href="#" class="badge badge-success">Edit</a>
                      <a href="#" class="badge badge-danger">Hapus</a>
                    </td>
                  </tr>
                  <?php
                  $no++;
                }
                ?>
              </tbody>
            </table>
            <a href="http://localhost/siperpus/buku/tambah.php" class="btn btn-secondary">Tambah</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include '../aset/footer.php';
  ?>