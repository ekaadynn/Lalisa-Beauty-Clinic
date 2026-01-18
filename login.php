<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($query);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['nama'] = $user['nama'];
        $_SESSION['email'] = $data['email'];
        header("Location: dashboard.php");
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login | Lalisa Beauty Clinic</title>

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

/* LOGIN CARD */
.login-container{
    background:#fff;
    width:100%;
    max-width:420px;
    padding:45px 40px;
    border-radius:30px;
    box-shadow:0 25px 50px rgba(0,0,0,0.15);
    text-align:center;
}

/* TITLE */
.login-container h1{
    color:#e75480;
    font-size:30px;
    margin-bottom:5px;
}

.login-container p{
    color:#666;
    font-size:14px;
    margin-bottom:30px;
}

/* INPUT */
.login-container input{
    width:100%;
    padding:14px 18px;
    margin-bottom:18px;
    border-radius:30px;
    border:1px solid #ddd;
    font-size:14px;
    outline:none;
}

.login-container input:focus{
    border-color:#e75480;
}

/* BUTTON */
.login-container button{
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

.login-container button:hover{
    background:#d8436e;
}

/* LINK */
.login-container .register-link{
    margin-top:20px;
    font-size:14px;
}

.login-container .register-link a{
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
    .login-container{
        padding:35px 25px;
    }
}
</style>
</head>

<body>

<div class="login-container">
    <h1>Lalisa Beauty Clinic</h1>
    <p>Masuk untuk melanjutkan perawatan kecantikan Anda</p>

    <?php if(isset($error)) : ?>
        <div class="error"><?= $error; ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>

    <div class="register-link">
        Belum punya akun? <a href="register.php">Daftar Sekarang</a>
    </div>
</div>

</body>
</html>