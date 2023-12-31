<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FAQ</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" charset="utf-8"></script>
  <style media="screen">
    body::before,
    body::after {
      content: '';
      display: block;
      position: absolute;
      top: 0;
    }

    body::before {
      left: 0;
      width: 60%;
      height: 100%;
      background-image: url('images/lineTexture.svg');
      background-size: 100%;
      background-repeat: no-repeat;
      z-index: 0;
    }

    body::after {
      content: '';
      display: block;
      position: fixed;
      top: -60%;
      right: -35%;
      width: 100%;
      height: 200%;
      background-image: url('images/glowTexture.svg');
      background-size: contain;
      background-position: top right;
      background-repeat: no-repeat;
      z-index: 0;
    }

    header {
      display: flex;
      justify-content: space-evenly;
      align-items: center;
      padding: 10px 20px;
      margin: 0 100px;
      margin-top: 0px;
      position: relative;
      z-index: 3;
    }

    .logo img {
      margin-top: 29px;
      height: 60px;
    }

    nav {
      margin-top: -50px;
      margin-left: 830px;
      flex-grow: 1;
    }

    .menu-container {
      background-color: #303536;
      border-radius: 40px;
      overflow: hidden;
      padding: 20px;
      width: fit-content;
    }

    .menu {
      text-decoration: none;
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .nav-link {
      text-decoration: none;
      color: #fff;
      padding-left: 25px;
      padding-right: 25px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-radius: 30px;
      transition: background-color 0.3s, color 0.3s;
      font-family: 'Titillium Web', sans-serif;
      font-size: medium;
      font-weight: 600;
    }

    .nav-link:hover {
      text-decoration: none;

      background: linear-gradient(to bottom right, #00A7D6, #0A767B);
      color: #fff;
    }

    .nav-link.active {
      background: linear-gradient(to bottom right, #00A7D6, #0A767B);
      color: #fff;
    }

    .buttons {
      margin-top: -57px;
      margin-left: 1200px;
      display: flex;
      align-items: center;
    }

    .buttons button {
      border: none;
      border-radius: 30px;
      padding: 15px 30px;
      cursor: pointer;
      margin-left: 15px;
      transition: background-color 0.5s;
      font-family: 'Titillium Web', sans-serif;
      font-size: medium;
      font-weight: 600;
    }

    .login-btn {
      background-color: #fff;
      border: 1px solid #fff;
    }

    .login-btn:hover {
      background-color: transparent;
      border: 1px solid #fff;
      color: #fff;
    }

    .register-btn {
      background: linear-gradient(to bottom right, #00A7D6, #0A767B);
      color: #fff;
      border: 1px solid transparent;
    }

    .register-btn:hover {
      background: transparent;
      border: 1px solid #fff;
      color: #fff;
    }


    /* Gaya untuk judul "About Us" */
    .faq-title {
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
    .faq-title::after {
        
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

.accordions {
  width: 80%;
  margin: 100px auto;
  padding: 20px; /* Optional: add padding to match the body padding */
  position: relative;
  z-index: 1; /* Set a higher z-index to bring it to the forefront */
}

.accordions h3 {
text-align: center;
font-family: "Roboto", sans-serif;
font-weight: bold;
}

.accordion-item {
background: linear-gradient(to top, #00A7D6, #0A767B);
margin-bottom: 20px;
border: 1px solid #100e34;
border-radius: 5px;
color: #ffffff;
}

.accordion-item .accordion-title {
cursor: pointer;
padding: 20px;
transition: transform 0.4s ease-in-out;
}

.accordion-item .accordion-title.active-title {
background-color: #005261;
color: #ffffff;
}

.accordion-item .accordion-title h3 {
font-weight: 700;
margin: 0;
font-size: 18px;
display: flex;
justify-content: space-between;
font-weight: bold;
}

.accordion-item .accordion-title i.fa-chevron-down {
transform: rotate(0);
transition: 0.4s;
}

.accordion-item .accordion-title i.fa-chevron-down.chevron-top {
transform: rotate(-180deg);
color: #fa5019;
}

.accordion-item .accordion-content {
display: none;
line-height: 1.7;
padding: 20px;
background-color: #ffffff;
border-radius: 0 0 5px 5px;
color: #100e34;
}

.accordion-item .accordion-content.active {
display: block;
}

.accordion-item .accordion-content p {
margin: 0;
font-family: "Nunito Sans", sans-serif;
font-size: 16px;
}

.details {
background: #dce1f2;
}

.details .detailed_info {
margin: 50px auto;
}

.details img {
margin: 0 auto;
display: block;
/* margin-top: 120px; */
}

.details h3 {
font-family: "Poppins", sans-serif;
font-weight: bold;
font-size: 20px;
}

.details p {
font-family: "Nunito Sans", sans-serif;
font-size: 16px;
line-height: 1.5em;
}

.details ul li {
font-family: "Nunito Sans", sans-serif;
font-size: 16px;
line-height: 1.7em;
}

  </style>
</head>
<body style="margin: 0; padding: 0; background-color: #171717; font-family: 'Poppins', sans-serif; position: relative;">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <header>
    <div class="logo">
      <img src="images/logo.svg" alt="Cyber Crime Reporting Portal">
    </div>
    <nav>
      <div class="menu-container">
        <ul class="menu">
            <li><a href="index.php" class="nav-link" id="home">Home</a></li>
            <li><a href="faqPage.php" class="nav-link active" id="faq">FAQ</a></li>
            <li><a href="buktiDigital.php" class="nav-link" id="buktiDigital">Report</a></li>
        </ul>
      </div>
    </nav>
    <div class="buttons">
      <a href="logout.php"><button class="register-btn">Keluar</button></a>
    </div>
  </header>

  <div class="faq-title">FAQ</div>


   <section id="faq">

    
    <div class="container faq">

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="accordions">
              <div class="accordion-item">
                <div class="accordion-title" data-tab="item1">
                  <h3>Apa tujuan dari Sistem Pelaporan Keamanan Siber ini?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item1">
                  <p>
                    Tujuan utama sistem ini adalah memberikan sarana efektif bagi pengguna internet untuk melaporkan kejahatan siber dan aktivitas mencurigakan, menciptakan lingkungan online yang lebih aman.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item2">
                  <h3>Bagaimana cara melaporkan kejahatan siber melalui sistem ini?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item2">
                  <p>
                    Pengguna dapat mengakses formulir pelaporan intuitif di website kami dan mengisi detail kejadian keamanan siber yang mereka alami atau saksikan.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item3">
                  <h3>Apakah identitas saya akan dirahasiakan saat melaporkan kejadian keamanan siber?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item3">
                  <p>
                    Ya, identitas pelapor akan dijaga kerahasiaannya sesuai dengan kebijakan privasi dan hukum yang berlaku.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item4">
                  <h3>Bagaimana sistem ini memberikan respons terhadap laporan?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item4">
                  <p>
                    Tim kami akan memberikan respon yang cepat dalam waktu 24 jam untuk mengevaluasi dan merespons laporan yang diterima.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item5">
                  <h3>Apa langkah keamanan yang diimplementasikan dalam pengumpulan informasi pelaporan?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item5">
                  <p>
                    Kami menerapkan langkah-langkah keamanan ketat untuk melindungi informasi yang dilaporkan agar tidak jatuh ke tangan yang tidak berwenang.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item6">
                  <h3>Apakah sistem ini dapat diakses oleh masyarakat umum?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item6">
                  <p>
                  Ya, sistem pelaporan ini dapat diakses secara publik untuk memastikan partisipasi aktif dari seluruh lapisan masyarakat.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item7">
                  <h3>Apakah ada pelatihan yang disediakan untuk menggunakan sistem pelaporan?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item7">
                  <p>
                    Ya, kami menyediakan pelatihan untuk memastikan pengguna memahami cara menggunakan sistem ini dengan benar.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item8">
                  <h3>Bagaimana koordinasi antara sistem pelaporan dengan lembaga penegak hukum dan<i class="fa fa-chevron-down"></i></h3>
                  <h3>penyedia layanan internet?</h3>
                </div>
                <div class="accordion-content" id="item8">
                  <p>
                    Sistem ini memanfaatkan integrasi API dan kerja sama aktif dengan pihak terkait untuk koordinasi yang efektif dalam menanggapi insiden.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item9">
                  <h3>Apa yang terjadi setelah saya melaporkan kejahatan siber?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item9">
                  <p>
                  Tim kami akan menindaklanjuti laporan, melakukan evaluasi, dan mengambil langkah-langkah yang diperlukan untuk menanggapi insiden.
                  </p>
                </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title" data-tab="item10">
                  <h3>Apakah ada dokumentasi yang harus saya lampirkan sebagai bukti pendukung pelaporan?<i class="fa fa-chevron-down"></i></h3>
                </div>
                <div class="accordion-content" id="item10">
                  <p>
                  Ya, dalam sistem ini, pengguna dapat mengunggah berbagai dokumen seperti tangkapan layar, file log, atau dokumen lain sebagai pendukung laporan keamanan siber mereka.
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
  $(document).ready(function () {
    $(".accordion-title").click(function (e) {
      var accordionitem = $(this).attr("data-tab");
      $("#" + accordionitem)
        .slideToggle()
        .parent()
        .siblings()
        .find(".accordion-content")
        .slideUp();

      $(this).toggleClass("active-title");
      $("#" + accordionitem)
        .parent()
        .siblings()
        .find(".accordion-title")
        .removeClass("active-title");

      $("i.fa-chevron-down", this).toggleClass("chevron-top");
      $("#" + accordionitem)
        .parent()
        .siblings()
        .find(".accordion-title i.fa-chevron-down")
        .removeClass("chevron-top");
    });
  });

  </script>
</body>
</html>