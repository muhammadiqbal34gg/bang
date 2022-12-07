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

$user = query("SELECT * FROM user");

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <h3>Data User</h3>
    <a href="tambah_user.php" class="tambah">Tambah user</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama lengkap</th>
            <th>Username</th>
            <th>Roles</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($user as $data) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $data["nama_lengkap"] ?></td>
            <td><?= $data["username"] ?></td>
            <td><?= $data["roles"] ?></td>
            <td>
                <a href="edit_user.php?id=<?= $data["id_user"]; ?>" class="edit">Edit</a>
                <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?');" class="hapus">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</div>