<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard | Lalisa Beauty Clinic</title>

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

/* CONTAINER */
.dashboard-container{
    background:#ffffff;
    width:90%;
    max-width:850px;
    padding:50px 45px;
    border-radius:28px;
    box-shadow:0 25px 50px rgba(0,0,0,0.15);
    text-align:center;
}

/* TITLE */
.dashboard-container h1{
    font-size:34px;
    color:#e75480;
    margin-bottom:10px;
}

.dashboard-container .welcome{
    color:#555;
    font-size:16px;
    margin-bottom:40px;
}

/* MENU GRID */
.dashboard-menu{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
    gap:22px;
    margin-bottom:45px;
}

.menu-box{
    background:#fff0f5;
    padding:30px 20px;
    border-radius:22px;
    transition:0.3s;
}

.menu-box:hover{
    transform:translateY(-10px);
    box-shadow:0 15px 30px rgba(0,0,0,0.12);
}

.menu-box h3{
    color:#e75480;
    font-size:18px;
    margin-bottom:8px;
}

.menu-box p{
    font-size:14px;
    color:#666;
}

/* LOGOUT */
.logout-btn{
    display:inline-block;
    padding:14px 36px;
    background:#e75480;
    color:#fff;
    text-decoration:none;
    border-radius:30px;
    font-size:14px;
    transition:0.3s;
}

.logout-btn:hover{
    background:#d8436e;
}

/* RESPONSIVE */
@media(max-width:600px){
    .dashboard-container{
        padding:35px 25px;
    }
    .dashboard-container h1{
        font-size:26px;
    }
}
</style>
</head>

<body>

<div class="dashboard-container">
    <h1>Lalisa Beauty Clinic</h1>
    <p class="welcome">
        Halo, <strong><?= $_SESSION['nama']; ?></strong> 👋 <br>
        Beauty is investment, rawat kecantikanmu bersama tenaga medis profesional
    </p>

    <div class="dashboard-menu">
        <div class="menu-box">
            <h3>Konsultasi</h3>
            <p>Konsultasi langsung dengan dokter kecantikan profesional</p>
        </div>

        <div class="menu-box">
            <h3>Reservasi</h3>
            <p>Booking perawatan dengan cepat dan mudah</p>
        </div>

        <div class="menu-box">
            <h3>Produk BPOM</h3>
            <p>Produk aman dan bersertifikasi BPOM</p>
        </div>

        <div class="menu-box">
            <h3>Membership</h3>
            <p>Promo dan layanan eksklusif member</p>
        </div>
    </div>

    <a href="logout.php" class="logout-btn">Logout</a>
</div>

</body>
</html>