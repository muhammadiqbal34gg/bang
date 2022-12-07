<?php

require '../koneksi.php';


function query($query){
    global $conn;

    $row = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
        
    return $rows;
}

function  tambahuser($data){
    global $conn;
    
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);
    
    $query = "INSERT INTO user Values(null, '$nama_lengkap', '$username', '$password', '$roles')";

    mysqli_query($conn, $query);

    return mysqli_query($conn);

}

function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");

    return mysqli_affected_rows($conn);
}

function editUser($data){
    global $conn;

    $id = $data["id_user"];
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET nama_lengkap= '$nama_lengkap', username= '$username', password= '$password', roles= '$roles' WHERE id_user = '$id'";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahProduk($data){

    global $conn;

    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO produk VALUES(NULL, '$nama_produk', '$harga', '$foto', '$stok', '$deskripsi')";
    move_uploaded_file($files, "../foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusProduk($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id'");

    return mysqli_affected_rows($conn);
}

function editProduk($data){
    global $conn;

    $id = htmlspecialchars($data["id_produk"]);
    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    if(empty($foto)){
        $query = "UPDATE produk SET nama_produk = '$nama_produk', harga = '$harga', stok = '$stok', deskripsi = '$deskripsi' WHERE id_produk = '$id'";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }else{
        $query = "UPDATE produk SET nama_produk = '$nama_produk', harga = '$harga', foto = '$foto', stok = '$stok', deskripsi = '$deskripsi' WHERE id_produk = '$id'";
        move_uploaded_file($files, "../foto/".$foto);

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
}
?>    

