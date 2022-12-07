<?php 

require '../koneksi.php';

$nama_lengkap = $_POST["nama_lengkap"];
$username = $_POST["username"];
$password = $_POST["password"];
$roles = $_POST["roles"];

$query = mysqli_query($conn, "INSERT INTO user VALUES(NULL, '$nama_lengkap', '$username', '$password', '$roles')");

if($query){
    echo "
        <script type='text/javascript'>
            alert('Register berhasil, silahkan login');
            window.location = '../login/index.php';
        </script>
    ";
}else{
    echo "
    <script type='text/javascript'>
        alert('Register gagal, silahkan cek data kamu kembali!');
        window.location = 'index.php';
    </script>
";
}

?>