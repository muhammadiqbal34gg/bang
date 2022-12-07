<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSPro - Halaman Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="kotak">
        <h2>GSPRO SMK JP 1</h2>
        <h3>Register your account</h3>

        <form action="process.php" method="POST">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
            
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">

            <input type="hidden" name="roles" value="Customer">

            <button type="submit" class="btn-register">Register</button>
        </form>
    </div>
</body>
</html>