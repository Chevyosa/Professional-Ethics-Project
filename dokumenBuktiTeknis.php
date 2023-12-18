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
    <title>Langkah 7 - Dokumen Bukti Teknis</title>
    <style>
        /* CSS Styles */

        /* Import Google Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap');

        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styles */
        body {
            margin: 0;
            padding: 0;
            background-color: #171717;
            font-family: 'Poppins', sans-serif;
            position: relative;
        }

        /* Background Styles */
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

        /* Header Styles */
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

        /* Logo Styles */
        .logo img {
            margin-top: 29px;
            height: 60px;
        }

        /* Navigation Styles */
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

        /* Buttons Styles */
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

        /* Container Styles */
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

        /* Card Styles */
        .card {
            border-radius: 10px;
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.3);
            width: 763px;
            height: 390px;
            background-color: #ffffff;
            padding: 30px 30px;
            position: relative;
        }

        .card h3 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Upload Section Styles */
        .upload-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            flex-direction: column;
        }

        /* Drop Box Styles */
        .drop_box {
            flex: 0.48;
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
        }

        .drop_box p {
            text-align: center;
            margin-left: 60px;
            margin-right: 60px;
            font-size: 12px;
            color: #a3a3a3;
            margin-bottom: 20px;
        }

        /* Button Styles */
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
            position: relative;
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

        /* Next Button Styles */
        .next-btn {
            font-size: 14px;
            text-decoration: none;
            width: 165px;
            background-color: green;
            color: #fff;
            padding: 15px 25px;
            border: none;
            outline: none;
            transition: 0.3s;
            z-index: 99;
            top: 70%;
            border-radius: 5pt;
            margin-left: 537px;
        }

        .next-btn:hover {
            background: transparent;
            border: 1px solid green;
            color: green;
        }

        /* Report Title Styles */
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

        /* Line Below the Title "About Us" */
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

    <div class="container" id="dokumenBuktiTambahan">
        <div class="card">
            <h3>Langkah 7 - Upload Dokumen Bukti Teknis</h3>
    
            <div class="upload-section">
                <div class="drop_box" id="technicalEvidenceDropBox">
                    <h4>Laporan Analisis Keamanan</h4>
                    <p>Jika telah ada analisis keamanan atau laporan teknis terkait insiden, dokumen tersebut dapat diunggah sebagai pendukung.</p>
                    <input type="file" hidden accept=".pdf, .doc, .docx" id="fileTechnicalEvidence" style="display:none;">
                    <button class="btn" onclick="document.getElementById('fileTechnicalEvidence').click()">Pilih File</button>
                </div>
            </div>
    
            <button class="next-btn" id="nextBtn">Kirim Laporan &rarr;</button>
        </div>
    </div>
    
    <script>
        const technicalEvidenceInput = document.getElementById("fileTechnicalEvidence");
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
                dropArea.style.borderColor = '#008000';
                setupFileUpload(input, dropArea);
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
                <input type="file" hidden accept=".pdf, .doc, .docx" id="${inputId}" style="display:none;">
                <button class="btn" onclick="document.getElementById('${inputId}').click()">Pilih File</button>`;
            setupFileUpload(input, dropArea);
        }
    
        setupFileUpload(technicalEvidenceInput, document.getElementById("technicalEvidenceDropBox"));
        nextBtn.onclick = function () {
            window.location.href = "index.html";
        };
    </script>
    
    
    
    </body>
    
    </html>