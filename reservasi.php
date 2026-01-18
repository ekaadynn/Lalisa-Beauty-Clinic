<?php
session_start();
include 'config.php';

/* CEK LOGIN */
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

/* PROSES FORM */
if (isset($_POST['submit'])) {
    $nama    = $_POST['nama'];
    $email   = $_POST['email'];
    $layanan = $_POST['layanan'];
    $tanggal = $_POST['tanggal'];
    $jam     = $_POST['jam'];

    $query = mysqli_query(
        $conn,
        "INSERT INTO reservasi (nama, email, layanan, tanggal, jam)
         VALUES ('$nama', '$email', '$layanan', '$tanggal', '$jam')"
    );

    if ($query) {
        $success = "Reservasi berhasil! Kami akan menghubungi Anda.";
    } else {
        $error = "Terjadi kesalahan, silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservasi | Lalisa Beauty Clinic</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:linear-gradient(135deg,#fff5f8,#fdeef4);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

/* CARD */
.reservasi-box{
    background:#fff;
    width:100%;
    max-width:500px;
    padding:40px;
    border-radius:25px;
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

/* TITLE */
.reservasi-box h2{
    text-align:center;
    color:#e75480;
    margin-bottom:8px;
}

.reservasi-box p{
    text-align:center;
    color:#666;
    margin-bottom:25px;
    font-size:14px;
}

/* INPUT */
.reservasi-box input,
.reservasi-box select{
    width:100%;
    padding:14px;
    margin-bottom:15px;
    border-radius:30px;
    border:1px solid #ddd;
    outline:none;
}

.reservasi-box input:focus,
.reservasi-box select:focus{
    border-color:#e75480;
}

/* BUTTON */
.reservasi-box button{
    width:100%;
    padding:14px;
    background:#e75480;
    color:#fff;
    border:none;
    border-radius:30px;
    cursor:pointer;
    font-size:14px;
    transition:0.3s;
}

.reservasi-box button:hover{
    background:#d8436e;
}

/* ALERT */
.success{
    background:#e8f5e9;
    color:#2e7d32;
    padding:10px;
    border-radius:10px;
    font-size:13px;
    margin-bottom:15px;
}

.error{
    background:#fdecea;
    color:#c62828;
    padding:10px;
    border-radius:10px;
    font-size:13px;
    margin-bottom:15px;
}
</style>
</head>

<body>

<div class="reservasi-box">
    <h2>Reservasi Perawatan</h2>
    <p>Silakan isi form untuk booking perawatan</p>

    <?php if(isset($success)) : ?>
        <div class="success"><?= $success; ?></div>
    <?php endif; ?>

    <?php if(isset($error)) : ?>
        <div class="error"><?= $error; ?></div>
    <?php endif; ?>

    <form method="post">
        <!-- NAMA -->
<input 
    type="text" 
    name="nama" 
    placeholder="Isi Nama Anda" 
    required
>

<!-- EMAIL -->
<input 
    type="email" 
    name="email" 
    placeholder="Isi Email Anda" 
    required
>

        <select name="layanan" required>
            <option value="">Pilih Layanan</option>
            <option value="Facial Treatment">Facial Treatment</option>
            <option value="Acne Care">Acne Care</option>
            <option value="Whitening Treatment">Whitening Treatment</option>
            <option value="Anti Aging">Anti Aging</option>
        </select>

        <input type="date" name="tanggal" required>
        <input type="time" name="jam" required>

        <button type="submit" name="submit">Kirim Reservasi</button>
    </form>
</div>

</body>
</html>