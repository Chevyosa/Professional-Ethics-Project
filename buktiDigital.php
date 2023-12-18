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
    <title>Langkah 1 - Bukti Digital</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');

        * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Poppins", sans-serif;
        }

        body {
          margin: 0;
          padding: 0;
          background-color: #171717;
          font-family: 'Poppins', sans-serif;
          position: relative;
        }

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
          z-index: -1;
        }


        header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  margin: 0 100px;
  margin-top: -15px;
  margin-bottom: 15px;
  position: relative;
  z-index: 3;
}

.logo img {
  margin-top: 29px;
  height: 60px;
}

nav {
  margin-top: 35px;
  margin-left: 300px;
  flex-grow: 1;
}

.menu-container {
  background-color: #303536;
  border-radius: 40px;
  overflow: hidden;
  padding: 20px;
  width: fit-content;
  margin-left: 50%;
}

.menu {
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
  background: linear-gradient(to bottom right, #00A7D6, #0A767B);
  color: #fff;
}

.nav-link.active {
  background: linear-gradient(to bottom right, #00A7D6, #0A767B);
  color: #fff;
}

.buttons {
  margin-top: 35px;
  display: flex;
  align-items: center;
}

button {
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

        .container {
          height: 95vh;
          margin-top: -90px;
          width: 100%;
          align-items: center;
          display: flex;
          justify-content: center;
          background-color: transparent;
          z-index: 99;
        }

        .card {
          border-radius: 10px;
          box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
          width: 800px;
          height: 410px;
          background-color: #ffffff;
          padding: 30px 30px;
          position: relative;
    
        }

        .card h3 {
          font-size: 28px;
          font-weight: 600;
          margin-bottom: 20px;
        }

        .upload-section {
          display: flex;
          justify-content: space-between;
          margin-bottom: 20px;
        }

        .drop_box {
          flex: 0.48; /* 48% of the container width */
          margin: 10px 0;
          padding: 20px;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          border: 3px dotted #a3a3a3;
          border-radius: 5px;
          margin-bottom: 20px;
          position: relative;
        }

        .drop_box h4 {
          font-size: 16px;
          font-weight: 400;
          color: #2e2e2e;
          margin-bottom: 10px;
          margin-left: px;
        }

        .drop_box p {
            text-align: center;

          margin-left: 20px;
          margin-right: 15px;
          font-size: 12px;
          color: #a3a3a3;
          margin-bottom: 20px;
        }

        .btn {
            font-size: 14px;
            font-weight: 500;
          text-decoration: none;
          background-color: #005af0;
          color: #ffffff;
          padding: 10px 20px;
          border: none;
          outline: none;
          transition: 0.3s;
          z-index: 99;
          border-radius: 5pt;
          position: relative; /* Menambahkan posisi relatif */
        }

        .btn:hover {
          text-decoration: none;
          background-color: #ffffff;
          opacity: 1;
          color: #005af0;
          padding: 10px 20px;
          border: none;
          outline: 1px solid #005af0;
        }


        .next-btn {
            font-size: 14px;
          text-decoration: none;
          width: 165px;
          background-color: #F66950;
          color: #fff;
          padding: 15px 25px;
          border: none;
          outline: none;
          transition: 0.3s;
          z-index: 99;
          top: 70%; /* Sesuaikan dengan jarak yang diinginkan dari atas */
          border-radius: 5pt;
          margin-left: 570px; /* Menggeser tombol ke kanan */

        }

        .next-btn:hover {
            background: transparent;
            border: 1px solid #F66950;
            color: #F66950;
        }

        .report-title {
            font-size: 5em;
            font-weight: bold;
            background-color: #ffff;
            -webkit-background-clip: text;
            color: transparent;
            font-family: 'Titillium Web', sans-serif;
            text-align: center;
            margin-top: 70px;
            position: relative;
        }

    /* Garis di bawah judul "About Us" */
    .report-title::after {
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


    </style>
</head>
<body>

  <header>
    <div class="logo">
      <img src="images/logo.svg" alt="Cyber Crime Reporting Portal">
    </div>
    <nav>
      <div class="menu-container">
        <ul class="menu">
          <li><a href="index.php" class="nav-link" id="home">Home</a></li>
          <li><a href="faqPage.php" class="nav-link" id="faq">FAQ</a></li>
          <li><a href="buktiDigital.php" class="nav-link active" id="buktiDigital">Report</a></li>
      </ul>
      </div>
    </nav>
    <div class="buttons">
      <a href="logout.php"><button class="register-btn">Keluar</button></a>
    </div>
  </header>

      <div class="report-title">Reporting Portal</div>


    <div class="container" id="buktiDigital">
        <div class="card">


            <h3>Langkah 1  -  Upload Bukti Digital</h3>

            <div class="upload-section">
                <div class="drop_box" id="screenshotDropBox">
                        <h4>1. Screenshot atau Rekaman Layar</h4>
                    <p>Pengguna dapat mengunggah tangkapan layar atau rekaman layar yang menunjukkan kejadian atau aktivitas yang mencurigakan.</p>
                    <input type="file" hidden accept="image/*" id="fileScreenshot" style="display:none;">
                    <button class="btn" onclick="document.getElementById('fileScreenshot').click()">Pilih File</button>
                </div>
                <div class="drop_box" id="logDropBox">
                        <h4>2. File Log atau Catatan Aktivitas</h4>
                    <p>Jika memungkinkan, pengguna dapat melampirkan file log atau catatan aktivitas terkait dengan insiden yang dilaporkan.</p>
                    <input type="file" hidden accept=".txt, .log" id="fileLog" style="display:none;">
                    <button class="btn" onclick="document.getElementById('fileLog').click()">Pilih File</button>
                </div>
            </div>
                            <button class="next-btn" id="nextBtn">Selanjutnya  &rarr;</button>

        </div>
    </div>
    <script>
        const screenshotInput = document.getElementById("fileScreenshot");
        const logInput = document.getElementById("fileLog");
        const nextBtn = document.getElementById("nextBtn");
      
        const setupFileUpload = (input, dropArea) => {
          const button = dropArea.querySelector("button");
      
          button.onclick = () => {
            input.click();
          };
      
          input.addEventListener("change", function (e) {
            var fileName = e.target.files[0].name;
            let filedata = `
              <div class="form">
                <br>
                <center>
                <h4>${fileName}</h4>
            </center><br>

                <center>
                <button class="btn" onclick="changeFile('${input.id}', '${dropArea.id}')">Ganti File</button>
                </center>
              </div>`;
              dropArea.innerHTML = filedata;

// Mengubah warna garis putus-putus menjadi hijau setelah file dipilih
dropArea.style.borderColor = '#008000'; // Warna hijau
setupFileUpload(input, dropArea); // Re-setup file upload for the new input
});
};

      
        function changeFile(inputId, dropAreaId) {
          const input = document.getElementById(inputId);
          const dropArea = document.getElementById(dropAreaId);
      
          input.value = "";
          dropArea.innerHTML = `
            <header>
              <h4>File yang akan diunggah</h4>
            </header>
            <p>Pilih file untuk diunggah</p>
            <input type="file" hidden accept="image/*" id="${inputId}" style="display:none;">
            <button class="btn" onclick="document.getElementById('${inputId}').click()">Pilih File</button>`;
        }
      
        setupFileUpload(screenshotInput, document.getElementById("screenshotDropBox"));
        setupFileUpload(logInput, document.getElementById("logDropBox"));
      
        nextBtn.onclick = function () {
    window.location.href = "dokumenIdentifikasi.html";
  };
      
      </script>
      
</body>
</html>