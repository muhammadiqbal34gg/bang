<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

$produk = query("SELECT * FROM produk");

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h3>Data produk</h3>
    <a href="tambah_produk.php" class="tambah">Tambah produk</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama produk</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($produk as $data) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $data["nama_produk"] ?></td>
            <td><?= $data["harga"] ?></td>
            <td><img src="../foto/<?= $data["foto"] ?>" alt="" width="80px"></td>
            <td><?= $data["stok"] ?></td>
            <td><?= $data["deskripsi"] ?></td>
            <td>
                <a href="edit_produk.php?id=<?= $data["id_produk"]; ?>" class="edit">Edit</a>
                <a href="hapus_produk.php?id=<?= $data["id_produk"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');" class="hapus" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>   
        <?php endforeach; ?>
    </table>
</div>