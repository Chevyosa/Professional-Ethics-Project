<?php

require_once("koneksi.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
        $username    = strip_tags($_POST['username']);
        $password    = strip_tags($_POST['password']);
        $email    = strip_tags($_POST['email']);

        if(empty($email) || empty($password) || empty($username)) {
          /**
           * Cek apakah formulir telah terisi data.
           */
          echo '<b>Warning!</b> Silahkan isi data yang diperlukan.';
        } else {
          /**
           * Memasukkan data ke database.
           */
          $insert = $connect->query('INSERT INTO `tb_user`(`username`,`email`, `password`) VALUES("'.$username.'","'.$email.'", "'.password_hash($password, PASSWORD_BCRYPT).'")');
          if($insert) {
            echo 'Pendaftaran berhasil!';
             header("Location: masuk.php");
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Additional Styles Go Here */

        /* ===== Google Font Import - Poformsins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #171717;
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

        .container {
            position: relative;
            max-width: 430px;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin: 0 20px;
        }

        .container .forms {
            display: flex;
            align-items: center;
            height: 600px;
            width: 200%;
            transition: height 0.2s ease;
        }

        .container .form {
            width: 50%;
            padding: 30px;
            background-color: #fff;
            transition: margin-left 0.18s ease;
        }

        .container.active .signup {
            margin-left: -50%;
            opacity: 0;
            transition: margin-left 0.18s ease, opacity 0.15s ease;
        }

        .container .login {
            opacity: 0;
            transition: opacity 0.09s ease;
        }

        .container.active .login {
            opacity: 1;
            transition: opacity 0.2s ease;
        }

        .container.active .forms {
            height: 600px;
        }

        .container .form .title {
            position: relative;
            font-size: 27px;
            font-weight: 600;
        }

        .form .title::before {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            background-color: #4070f4;
            border-radius: 25px;
        }

        .form .input-field {
            position: relative;
            height: 50px;
            width: 100%;
            margin-top: 30px;
        }

        .input-field input {
            position: absolute;
            height: 100%;
            width: 100%;
            padding: 0 35px;
            border: none;
            outline: none;
            font-size: 16px;
            border-bottom: 2px solid #ccc;
            border-top: 2px solid transparent;
            transition: all 0.2s ease;
        }

        .input-field input:is(:focus, :valid) {
            border-bottom-color: #4070f4;
        }

        .input-field i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
            font-size: 23px;
            transition: all 0.2s ease;
        }

        .input-field input:is(:focus, :valid)~i {
            color: #4070f4;
        }

        .input-field i.icon {
            left: 0;
        }

        .input-field i.showHidePw {
            right: 0;
            cursor: pointer;
            padding: 10px;
        }

        .form .checkbox-text {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }

        .checkbox-text .checkbox-content {
            display: flex;
            align-items: center;
        }

        .checkbox-content input {
            margin-right: 10px;
            accent-color: #4070f4;
        }

        .form .text {
            color: #333;
            font-size: 14px;
        }

        .form a.text {
            color: #4070f4;
            text-decoration: none;
        }

        .form a:hover {
            text-decoration: underline;
        }

        .form .button {
            margin-top: 35px;
        }

        .form .button input {
            border: none;
            color: #fff;
            font-size: 17px;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 6px;
            background-color: #4070f4;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .button input:hover {
            background-color: #265df2;
        }

        .form .login-signup {
            margin-top: 30px;
            text-align: center;
        }

        .close-icon {
            position: absolute;
            top: 28px;
            right: 28px;
            cursor: pointer;
            color: #ccc;
            font-size: 30px;
            transition: color 0.3s ease;
        }

        .close-icon:hover {
            color: #000; 
        }
    </style>

    <title>Signup Form</title>
</head>

<body>

    <div class="container">

      <div class="close-icon" onclick="window.location.href='index.html'"> <!-- Add the onclick event to navigate to index.html -->
        <i class="uil uil-times"></i>
    </div>

        <div class="forms">
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form method="POST">
                    <div class="input-field">
                        <input type="text"  name="username" placeholder="Enter your username" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text"  name="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password"  name="password" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password"  name="repassword" class="password" placeholder="Confirm a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="termCon">
                            <label for="termCon" class="text">I accepted all terms and conditions</label>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-primary btn-block" name="register" value="Daftar" />
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="masuk.php" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JS Code Goes Here

        const container = document.querySelector(".container"),
            pwShowHide = document.querySelectorAll(".showHidePw"),
            pwFields = document.querySelectorAll(".password"),
            signUp = document.querySelector(".signup-link"),
            login = document.querySelector(".login-link");

        //   JS code to show/hide password and change icon
        pwShowHide.forEach(eyeIcon => {
            eyeIcon.addEventListener("click", () => {
                pwFields.forEach(pwField => {
                    if (pwField.type === "password") {
                        pwField.type = "text";

                        pwShowHide.forEach(icon => {
                            icon.classList.replace("uil-eye-slash", "uil-eye");
                        })
                    } else {
                        pwField.type = "password";

                        pwShowHide.forEach(icon => {
                            icon.classList.replace("uil-eye", "uil-eye-slash");
                        })
                    }
                })
            })
        })

    </script>
</body>

</html>
