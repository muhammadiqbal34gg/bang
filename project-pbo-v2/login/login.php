<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <form action="process.php" method="POST">
        <div class="row">
            <div class="col-6">
                <a href="../index.php"><img src="../assets/arrow.png" width="80px" class="img" alt=""></a>
                <h1>Login</h1>
                <p>Login menggunakan akunmu</p>
                
                <label for="username">Username:</label><br>
                <input type="text" name="username" placeholder="Masukkan username" id="username"><br>
                
                <label for="password">Password:</label><br>
                <input type="password" name="password" placeholder="Masukkan password" id="password">
                <a class="lokor">Forgot Password?</a>

                <button id="button">Login</button><br>

                <a class="kolor">Not Have Account?</a>
                <a class="warna" href="index.php">Sign Up</a>
            </div>
            <div class="col-6">
                <img src="../assets/TUGAS 2.png" width="100%" height="100%" alt="">
            </div>
        </div>
    </form>

    
</body>
</html>