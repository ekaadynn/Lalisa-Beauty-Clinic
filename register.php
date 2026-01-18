<?php
include 'config.php';

if (isset($_POST['register'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if (mysqli_num_rows($cek) > 0) {
        $error = "Email sudah terdaftar!";
    } else {
        mysqli_query($conn, "INSERT INTO users VALUES('', '$nama', '$email', '$password')");
        echo "<script>alert('Registrasi berhasil! Silakan login'); window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register | Lalisa Beauty Clinic</title>

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    background:linear-gradient(135deg,#fff5f8,#fdeef4);
    display:flex;
    justify-content:center;
    align-items:center;
}

/* REGISTER CARD */
.register-container{
    background:#fff;
    width:100%;
    max-width:450px;
    padding:45px 40px;
    border-radius:30px;
    box-shadow:0 25px 50px rgba(0,0,0,0.15);
    text-align:center;
}

/* TITLE */
.register-container h1{
    color:#e75480;
    font-size:30px;
    margin-bottom:5px;
}

.register-container p{
    color:#666;
    font-size:14px;
    margin-bottom:30px;
}

/* INPUT */
.register-container input{
    width:100%;
    padding:14px 18px;
    margin-bottom:18px;
    border-radius:30px;
    border:1px solid #ddd;
    font-size:14px;
    outline:none;
}

.register-container input:focus{
    border-color:#e75480;
}

/* BUTTON */
.register-container button{
    width:100%;
    padding:14px;
    background:#e75480;
    color:white;
    border:none;
    border-radius:30px;
    font-size:15px;
    cursor:pointer;
    transition:0.3s;
}

.register-container button:hover{
    background:#d8436e;
}

/* LINK */
.register-container .login-link{
    margin-top:20px;
    font-size:14px;
}

.register-container .login-link a{
    color:#e75480;
    text-decoration:none;
    font-weight:500;
}

/* ERROR */
.error{
    background:#ffe0e6;
    color:#c62828;
    padding:10px;
    border-radius:10px;
    font-size:13px;
    margin-bottom:15px;
}

/* RESPONSIVE */
@media(max-width:480px){
    .register-container{
        padding:35px 25px;
    }
}
</style>
</head>

<body>

<div class="register-container">
    <h1>Lalisa Beauty Clinic</h1>
    <p>Daftar untuk memulai perawatan kecantikan Anda</p>

    <?php if(isset($error)) : ?>
        <div class="error"><?= $error; ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="register">Register</button>
    </form>

    <div class="login-link">
        Sudah punya akun? <a href="login.php">Login Sekarang</a>
    </div>
</div>

</body>
</html>