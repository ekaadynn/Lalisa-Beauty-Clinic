<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lalisa Beauty Clinic</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #fdeef4;
     font-family: 'Poppins', sans-serif;
}

/* NAVBAR */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 60px;
    min-height: 80px;
    background: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(10px);
    position: sticky;
    top: 0;
    z-index: 999;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.nav-home i{
    font-size:22px;      
}

.nav-home{
    padding:10px 14px;
    border-radius:50%;
    color:#e75480;
    transition:0.3s;
}

.nav-home:hover{
    background:#fdeef4;
    color:#d8436e;
}

/* BRAND */
.nav-brand {
    display: flex;
    align-items: center;
    gap: 14px;
}

.nav-brand img {
    height: 60px;          
    width: auto;
    object-fit: contain;
}

.nav-brand span {
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #e75480;
}

@media (max-width: 768px) {
    .navbar {
        padding: 15px 25px;
        min-height: 70px;
    }

    .nav-brand img {
        height: 50px;
    }

    .nav-brand span {
        font-size: 18px;
    }
}

/* MENU */
.nav-menu {
    list-style: none;
    display: flex;
    align-items: center;
    gap: 30px;
}

.nav-menu a {
    text-decoration: none;
    font-size: 16px;
    font-weight: 500;
    color: #555;
    transition: color 0.3s ease;
}

.nav-menu a:hover {
    color: #e75480;
}

/* LOGIN BUTTON */
.nav-btn {
    padding: 8px 18px;
    background: #e75480;
    color: white !important;
    border-radius: 25px;
    font-size: 14px;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .navbar {
        padding: 15px 25px;
    }

    .nav-menu {
        gap: 15px;
    }

    .nav-brand span {
        font-size: 18px;
    }
}

/* HERO */
.hero {
    min-height: 100vh;
    background: linear-gradient(135deg, #fff5f8, #fdeef4);
    display: flex;
    align-items: center;
    padding: 0 80px;
}

.hero-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    gap: 40px;
}

/* TEXT */
.hero-text {
    max-width: 550px;
}

.hero-text h1 {
    font-size: 64px;
    font-weight: 700;
    color: #e75480;
    line-height: 1.2;
    margin-bottom: 20px;
}

.hero-text p {
    font-size: 20px;
    color: #555;
    line-height: 1.7;
    margin-bottom: 35px;
}

.hero-btn {
    display: flex;
    gap: 15px;
}

.hero-btn a {
    padding: 14px 28px;
    border-radius: 30px;
    text-decoration: none;
    font-size: 15px;
    font-weight: 500;
}

.hero-btn a:first-child {
    background: #e75480;
    color: white;
}

.hero-btn .outline {
    border: 2px solid #e75480;
    color: #e75480;
}

/* IMAGE */
.hero-image img {
    width: 480px;
    max-width: 100%;
    border-radius: 25px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

@media (max-width: 768px) {
    .hero {
        padding: 120px 30px;
    }

    .hero-wrapper {
        flex-direction: column;
        text-align: center;
    }

    .hero-text h1 {
        font-size: 42px;
    }

    .hero-text p {
        font-size: 17px;
    }

    .hero-btn {
        justify-content: center;
        flex-wrap: wrap;
    }

    .hero-image img {
        width: 100%;
    }
}

.about-section {
    padding: 80px 60px;
    background: #fff;
}

.about-container {
    display: flex;
    align-items: center;
    gap: 40px;
    max-width: 1100px;
    margin: auto;
}

.about-image img {
    width: 450px;
    border-radius: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

.about-text h2 {
    color: #e75480;
    margin-bottom: 15px;
}

.about-text p {
    line-height: 1.7;
    margin-bottom: 10px;
    color: #555;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .about-container {
        flex-direction: column;
        text-align: center;
    }

    .about-image img {
        width: 100%;
    }
}

.services-section {
    padding: 80px 60px;
    background: #fdeef4;
}

.services-section h2 {
    text-align: center;
    color: #e75480;
    margin-bottom: 40px;
    font-size: 32px;
    letter-spacing: 1px;
}

.services-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: auto;
}

.service-card {
    background: white;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.service-card:hover {
    transform: translateY(-8px);
}

.service-card img {
    width: 100%;
    height: 280px;
    object-fit: cover;
}

.service-card p {
    text-align: center;
    padding: 15px;
    font-size: 18px;
    font-weight: 500;
    color: #555;
    letter-spacing: 0.5px;
}

.why-section {
    padding: 80px 60px;
    background: #fff;
}

.why-section h2 {
    text-align: center;
    color: #e75480;
    margin-bottom: 40px;
    font-size: 32px;
    letter-spacing: 1px;
}

.why-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
    gap: 30px;
    max-width: 1100px;
    margin: auto;
}

.why-card {
    background: #fdeef4;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.why-card:hover {
    transform: translateY(-8px);
}

.why-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.why-card p {
    text-align: center;
    padding: 15px;
    font-size: 16px;
    font-weight: 500;
    color: #555;
    letter-spacing: 0.5px;
}

/* SECTION */
section {
    padding: 80px 60px;
}

section h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #e75480;
}

/* CARD */
.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
    gap: 20px;
}

.card {
    background: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,.1);
}

.contact-section {
    padding: 90px 60px;
    background: linear-gradient(135deg, #fff5f8, #fdeef4);
}

.contact-wrapper {
    max-width: 1100px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

/* INFO */
.contact-info h2 {
    color: #e75480;
    font-size: 34px;
    margin-bottom: 15px;
}

.contact-info p {
    color: #555;
    line-height: 1.7;
    margin-bottom: 25px;
}

.contact-info ul {
    list-style: none;
    padding: 0;
}

.contact-info ul li {
    margin-bottom: 12px;
    font-size: 16px;
    color: #555;
}

/* FORM */
.contact-form {
    background: white;
    padding: 35px;
    border-radius: 20px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

.contact-form h3 {
    margin-bottom: 20px;
    color: #e75480;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 15px;
    border-radius: 10px;
    border: 1px solid #ddd;
    font-family: inherit;
}

.contact-form textarea {
    resize: none;
    height: 120px;
}

.contact-form button {
    width: 100%;
    padding: 14px;
    background: #e75480;
    color: white;
    border: none;
    border-radius: 30px;
    font-size: 15px;
}

@media (max-width: 768px) {
    .contact-section {
        padding: 70px 25px;
    }

    .contact-wrapper {
        grid-template-columns: 1fr;
        text-align: center;
    }

    .contact-form {
        margin-top: 30px;
    }
}

/* FOOTER */
footer {
    background: #e75480;
    color: white;
    text-align: center;
    padding: 20px;
}
</style>
</head>

<body link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<!-- NAVBAR -->
<nav class="navbar">
    <div class="nav-brand">
        <img src="assets/images/logo1.png" alt="Lalisa Beauty Clinic Logo">
        <span>Lalisa Beauty Clinic</span>
    </div>

    <ul class="nav-menu">

    <!-- HOME ICON -->
   <li>
    <a href="#home" class="nav-home" title="Home">
        <i class="fa-solid fa-house"></i>
    </a>
</li>

    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#why-us">Why Us</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="login.php" class="nav-btn">Login</a></li>

</ul>
</nav>

<!-- HERO -->
<section class="hero" id="home">
    <div class="hero-wrapper">
        <!-- TEXT -->
        <div class="hero-text">
            <h1>Beauty is Investment</h1>
            <p>Rawat kecantikan kulitmu bersama tenaga medis profesional</p>

            <div class="hero-btn">
                <a href="#services">Lihat Layanan</a>
                <a href="reservasi.php" class="outline">Reservasi Sekarang</a>
            </div>
        </div>

        <!-- IMAGE -->
        <div class="hero-image">
            <img src="assets/images/hero.jpeg" alt="Lalisa Beauty Clinic">
        </div>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="about-section">
    <div class="about-container">
        <div class="about-image">
            <img src="assets/images/about.jpeg" alt="Lalisa Beauty Clinic">
        </div>

        <div class="about-text">
            <h2>Tentang Lalisa Beauty Clinic</h2>
            <p style="text-align: center;">
                Lalisa Beauty Clinic merupakan klinik kecantikan profesional yang
                menghadirkan layanan perawatan kulit berkualitas dengan tenaga medis
                berpengalaman, peralatan modern, serta produk yang aman dan
                tersertifikasi BPOM.
            </p>
            <p style="text-align: center;">
                Dengan konsep ruang yang nyaman dan privat, Lalisa Beauty Clinic
                berkomitmen memberikan pengalaman perawatan terbaik bagi setiap
                pelanggan.
            </p>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="services-section">
    <h2>Layanan Kami</h2>

    <div class="services-container">
        <div class="service-card">
            <img src="assets/images/services1.jpeg" alt="Facial Treatment">
            <p>Facial Treatment</p>
        </div>

        <div class="service-card">
            <img src="assets/images/services2.jpeg" alt="Konsultasi Dokter">
            <p>Konsultasi Dokter Kulit</p>
        </div>

        <div class="service-card">
            <img src="assets/images/services3.jpeg" alt="Skincare">
            <p>Skincare & Anti Aging</p>
        </div>
    </div>
</section>

<!-- WHY US -->
<section id="why-us" class="why-section">
    <h2>Mengapa Memilih Lalisa Beauty Clinic?</h2>

    <div class="why-container">
        <div class="why-card">
            <img src="assets/images/whyus1.jpeg" alt="Tenaga Profesional">
            <p>Tenaga Medis Profesional & Berpengalaman</p>
        </div>

        <div class="why-card">
            <img src="assets/images/whyus2.jpeg" alt="Peralatan Modern">
            <p>Peralatan Kecantikan Modern & Canggih</p>
        </div>

        <div class="why-card">
            <img src="assets/images/whyus3.jpeg" alt="Ruang Nyaman">
            <p>Ruang Perawatan Nyaman, Bersih & Privat</p>
        </div>

        <div class="why-card">
            <img src="assets/images/whyus4.jpeg" alt="BPOM">
            <p>Produk Aman & Bersertifikasi BPOM</p>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section id="contact" class="contact-section">
    <div class="contact-wrapper">

        <!-- INFO -->
        <div class="contact-info">
            <h2>Hubungi Kami</h2>
            <p>
                Konsultasikan kebutuhan perawatan kulit Anda bersama
                Lalisa Beauty Clinic. Tim kami siap membantu Anda.
            </p>

            <ul>
                <li>📍 Jl. Kecantikan No. 88, Indonesia</li>
                <li>📞 +62 812 3456 7890</li>
                <li>✉️ info@lalisabeautyclinic.com</li>
                <li>⏰ Senin – Sabtu : 09.00 – 18.00</li>
            </ul>
        </div>

        <!-- FORM -->
<div class="contact-form">
    <h3>Kirim Pesan</h3>

    <form id="contactForm">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="pesan" placeholder="Pesan Anda" required></textarea>

        <button type="submit">Kirim Pesan</button>

        <!-- PESAN SUKSES -->
        <p id="successMsg" style="display:none; margin-top:15px; color:#2e7d32; font-size:14px;">
            Pesan Anda telah terkirim 💖
        </p>
    </form>
</div>

    </div>
</section>

<footer>
    © 2026 Lalisa Beauty Clinic
</footer>
<script>
document.getElementById("contactForm").addEventListener("submit", function(e){
    e.preventDefault(); // cegah reload

    const form = this;
    const formData = new FormData(form);

    fetch("proses_pesan.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        if(result === "success"){
            document.getElementById("successMsg").style.display = "block";
            form.reset();
        }
    })
    .catch(error => {
        alert("Terjadi kesalahan. Silakan coba lagi.");
    });
});
</script>
</body>
</html>