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

if(isset($_POST["kirim"])){
    if(tambahProduk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data produk berhasil ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data produk gagal ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Tambah Produk</h3>

   <form action="" method="POST" enctype="multipart/form-data">
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control"> <br />

        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control"> 

        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control">

        <label for="stok">stok</label>
        <input type="text" name="stok" id="stok" class="form-control">
        
        <label for="deskripsi">Deskripsi</label><br>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea><br>
        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>