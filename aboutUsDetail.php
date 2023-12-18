<?php
    include 'koneksi.php';
    //inisialisasi session
    session_start();
    //mengecek username pada session
    if( !isset($_SESSION['email']) ){
      $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
      header('Location: masuk.php');
    }
?>

<!-- aboutUsDetail.html -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Gaya khusus untuk Lottie animation pada halaman aboutUsDetail.html */
    #lottie-about-us {
      width: 220%;
      height: auto;
      margin-top: 20px;
      margin-left: -50px;
    }

    /* Tambahan untuk responsif (jika diperlukan) */
    @media (max-width: 768px) {
      #lottie-about-us {
        width: 100%;
        margin-left: 0;
      }
    }

    /* Gaya untuk judul "About Us" */
    .about-us-title {
      font-size: 5em;
      font-weight: bold;
      background-color: #ffff;
      -webkit-background-clip: text;
      color: transparent;
      font-family: 'Titillium Web', sans-serif;
      text-align: center;
      margin-top: 100px;
      position: relative;
    }

    /* Garis di bawah judul "About Us" */
    .about-us-title::after {
        
      content: '';
      display: block;
      width: 15%;
      height: 7px;
      background-color: #3ED5DD;
      position: absolute;
      top: 100pt;
      bottom: -10px;
      left: 42.5%;
    }

    .about-us-content-mirror .about-us-text {
      text-align: right; /* Menggeser teks ke kanan */
      max-width: 60%; /* Sesuaikan dengan kebutuhan */
      margin-left: 180px;
      margin-right: 180px;
      margin-top: -29px;
    }


    /* Gaya untuk konten "about-us" dan "about-us-content-mirror" */
    .about-us-content,
    .about-us-content-mirror {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin: 60px 115px;
      position: relative;
    }

    .about-us-content img,
    .about-us-content-mirror img {
      width: 40%;
      border-radius: 10px;
      margin-right: 100px;
    }

    .about-us-content-mirror .about-us-text {
      text-align: left;
    }

    /* Gaya untuk Lottie Mirror */
    #lottie-mirror {
      width: 150%; /* Sesuaikan dengan kebutuhan */
      height: auto;
      margin-top: -150px;
      margin-left: -150px; /* Sesuaikan dengan kebutuhan */
      margin-right: 100px;
    }

    /* Gaya untuk H2 */
    .about-us-text h2 {
      font-size: 2.2em; /* Sesuaikan dengan kebutuhan */
      color: #fff; /* Sesuaikan dengan kebutuhan */
      font-family: 'Titillium Web', sans-serif;
      margin-bottom: 25px;
      margin-top: 80px;
      line-height: 1.2;
    }
  </style>
  <title>About Us - Detailed</title>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="logo">
      <img src="images/logo.svg" alt="Cyber Crime Reporting Portal">
    </div>
    <nav>
      <div class="menu-container">
        <ul class="menu">
            <li><a href="index.php" class="nav-link" id="home">Home</a></li>
            <li><a href="faqPage.php" class="nav-link" id="faq">FAQ</a></li>
            <li><a href="buktiDigital.php" class="nav-link" id="buktiDigital">Report</a></li>
        </ul>
      </div>
    </nav>
    <div class="buttons">
      <a href="logout.php"><button class="register-btn">Keluar</button></a>
    </div>
  </header>

  <!-- Judul "About Us" -->
  <div class="about-us-title">About Us</div>

  <!-- Konten "about-us" -->
  <section class="about-us">
    <div class="about-us-content">
      <div id="lottie-about-us"></div>
      <div class="about-us-text">
        <h2>Jelajahi Perjalanan Kami<br>Melindungi Dunia Digital Anda</h2>
        <p>Kami adalah satu-satunya sumber terpercaya dan aman bagi masyarakat untuk melaporkan kejahatan siber dan aktivitas mencurigakan secara daring. Sebagai portal pelaporan kejahatan siber terkemuka, misi kami adalah menciptakan lingkungan online yang lebih aman dan terlindungi bagi semua pengguna.</p>
      </div>
    </div>
  </section>

  <!-- Konten "about-us-content-mirror" -->
  <section class="about-us-content-mirror">
    <div class="about-us-text">
      <h2>Jelajahi Perjalanan Kami<br>Melindungi Dunia Digital Anda</h2>
      <p>Kami adalah satu-satunya sumber terpercaya dan aman bagi masyarakat untuk melaporkan kejahatan siber dan aktivitas mencurigakan secara daring. Sebagai portal pelaporan kejahatan siber terkemuka, misi kami adalah menciptakan lingkungan online yang lebih aman dan terlindungi bagi semua pengguna.</p>
    </div>
    <div id="lottie-mirror"></div>

  </section>

  <!-- Include the Lottie library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.2/lottie.min.js"></script>

  <!-- Include the script.js file -->
  <script src="script.js"></script>

  <!-- Load Lottie animation for mirror version -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const lottieMirrorContainer = document.getElementById('lottie-mirror');
      lottie.loadAnimation({
        container: lottieMirrorContainer,
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: 'animations/aboutUs2Animation.json', // Ganti dengan path file animasi yang sesuai
      });
    });
  </script>
</body>

</html>
