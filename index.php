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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
 
  <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.8/build/player/lottie.min.js"></script>

  <title>CCRP | CyberCrime Reporting Portal</title>
</head>
<body>
  <header>
    <div class="logo">
      <img src="images/logo.svg" alt="Cyber Crime Reporting Portal">
    </div>
    <nav>
      <div class="menu-container">
        <ul class="menu">
          <li><a href="index.php" class="nav-link active" id="home1">Home</a></li>
          <li><a href="faqPage.php" class="nav-link" id="faq">FAQ</a></li>
          <li><a href="buktiDigital.php" class="nav-link" id="buktiDigital">Report</a></li>
      </ul>
      </div>
    </nav>
    <div class="buttons">
      <a href="logout.php"><button class="register-btn">Keluar</button></a>
    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Laporkan<br>Kejahatan Siber!</h1>
      <p>
        Dengan melaporkan kejahatan siber, kita berkontribusi membangun fondasi<br>keamanan digital.
        Satu langkah kecil dari kita, dampak besar untuk<br>lingkungan daring yang lebih aman dan terlindungi.
      </p>
      <button class="start-btn">Mulai Sekarang</button>
    </div>
    <div id="lottie-animation"></div>
  </section>
  

  <section class="about-us">
    <div class="about-us-content">
      <div id="lottie-about-us"></div>
      <div class="about-us-text">
        <h3>ABOUT US</h3> 
        <h2>Jelajahi Perjalanan<br>Kami Melindungi<br>Dunia Digital Anda</h2>
        <p>Kami adalah satu-satunya sumber terpercaya dan aman bagi masyarakat untuk melaporkan kejahatan siber dan aktivitas mencurigakan secara daring. Sebagai portal pelaporan kejahatan siber terkemuka, misi kami adalah menciptakan lingkungan online yang lebih aman dan terlindungi bagi semua pengguna.</p>
        <button id="readMoreBtn" class="read-more-btn">Baca Selengkapnya</button>
      </div>
    </div>
  </section>
  
  <section class="our-service">
    <div class="section-heading">
      <h3>OUR SERVICE</h3>
    </div>
    <div class="service-content">
      <h2>Melindungi Aset Digital Anda<br>Dengan Para Ahli</h2>
      <p>Layanan kami unggul dengan dukungan dari tim ahli keamanan siber berpengalaman, siap menyelidiki dan menanggapi setiap laporan kejahatan daring.<br>Keahlian kami menciptakan lingkungan online yang lebih aman bagi pengguna. Percayakan keamanan daring Anda kepada para profesional kami.</p>
      <div class="service-box">
        <div class="box-item">
          <div class="box-icon icon1">
            <img src="images/icon1.svg" alt="Icon 1">
          </div>
          <h4>Cyber Security<br>Assessment</h4>
          <p>Penilaian keamanan siber kami memberikan gambaran lengkap tentang potensi risiko dalam sistem Anda, diikuti dengan rekomendasi perbaikan untuk meningkatkan ketahanan.</p>
        </div>
        
        <div class="box-item">
          <div class="box-icon icon2">
            <img src="images/icon2.svg" alt="Icon 2">
          </div>
          <h4>Intrusion Detection<br>and Prevention</h4>
          <p>Sistem Deteksi dan Pencegahan Intrusi kami memberikan perlindungan real-time terhadap serangan siber dengan mendeteksi aktivitas mencurigakan dan mencegah akses tanpa izin, memastikan keamanan sistem Anda.</p>
        </div>
        
        <div class="box-item">
          <div class="box-icon icon3">
            <img src="images/icon3.svg" alt="Icon 3">
          </div>
          <h4>Incident Response<br>and Recovery</h4>
          <p>Layanan kami memberikan respons cepat terhadap serangan siber, membantu merespon secara efektif dan memulihkan sistem dengan cepat setelah kejadian keamanan.</p>
        </div>
        
      </div>
    </div>
  </section>

  <section class="feature-point">
    <div class="feature-point-content">
      <div class="feature-point-image">
        <div id="lottie-feature-point"></div>
      </div>
      <div class="feature-point-details">
        <h3>FEATURE POINT</h3>
        <h2>Key Service Features Protecting You</h2>
        <p>
          Layanan kami menonjol dengan serangkaian fitur utama yang dirancang untuk melindungi Anda secara menyeluruh. Dari pemindaian keamanan yang mendalam hingga perlindungan terhadap identitas, kami menawarkan solusi komprehensif yang memastikan keamanan dan ketenangan pikiran.
        </p>
        <div class="feature-boxes">
          <!-- Kotak 1 -->
          <div class="feature-box">
            <img src="images/icon4.svg" alt="Icon 1">
            <h4>Customized<br>Security Solutions</h4>
            <p>Solusi keamanan yang dikustomisasi sesuai dengan karakteristik yang tidak bersifat satu ukuran untuk semua</p>
          </div>
          <!-- Kotak 2 -->
          <div class="feature-box">
            <img src="images/icon5.svg" alt="Icon 2">
            <h4>Vulnerability<br>Assessment</h4>
            <p>Layanan penilaian rentan yang komprehensif untuk mengevaluasi potensi kelemahan dalam sistem keamanan.</p>
          </div>
          <!-- Kotak 3 -->
          <div class="feature-box">
            <img src="images/icon6.svg" alt="Icon 3">
            <h4>24/7 Incident<br>Response</h4>
            <p>Tim kami bersedia memberikan bantuan teknis selama 24/7</p>
          </div>
          <!-- Kotak 4 -->
          <div class="feature-box">
            <img src="images/icon7.svg" alt="Icon 4">
            <h4>User Training<br>Programs</h4>
            <p>Program pelatihan yang dirancang khusus untuk meningkatkan pemahaman keamanan siber pengguna</p>
          </div>
        </div>        
      </div>
    </div>
  </section>


  
  

  <script src="script.js"></script>

</body>
</html>
