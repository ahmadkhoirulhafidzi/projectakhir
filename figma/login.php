<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Study Pilot - Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            display: flex;
            height: 100vh;
            width: 100%;
        }
        .container {
            display: flex;
            width: 100%;
        }
        .left {
            width: 50%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .right {
            width: 50%;
            background-color: #d9e0d4;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            display: flex;
            align-items: center;
            margin-bottom: 0; /* Opsional: Hapus margin bawah */
        }
        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px; /* Jarak antara logo dan teks */
        }
        .logo span {
            font-size: 24px;
            font-weight: 700;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .avatar i {
            font-size: 40px;
            color: #7d7d7d;
        }
        .title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .subtitle {
            font-size: 14px;
            color: #7d7d7d;
            margin-bottom: 20px;
        }
        .social-login {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }
        .social-login img {
            width: 40px;
            height: 40px;
            margin: 0 10px;
            cursor: pointer;
        }
        .divider {
            width: 100%;
            border-bottom: 1px solid #e0e0e0;
            text-align: center;
            margin: 20px 0;
        }
        .divider span {
            background-color: #fff;
            padding: 0 10px;
            color: #7d7d7d;
        }
        .input-group {
            width: 50%;
            margin-bottom: 20px;
        }
        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            font-size: 14px;
        }
        .input-group.password {
            display: flex;
            align-items: center;
            position: relative; /* Untuk ikon mata agar berada di dalam kotak input */
        }

        .input-group.password input {
            border: 1px solid #e0e0e0;
            padding: 10px;
            border-radius: 5px;
            font-size: 14px;
            flex: 1; /* Mengisi lebar container */
        }

        .input-group.password i {
            position: absolute;
            right: 10px;
            cursor: pointer;
            color: #7d7d7d;
        }

        .options {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            font-size: 14px;
            padding: 0 50px; /* Tambahkan padding kiri-kanan */
        }

        .options label {
            display: flex;
            align-items: center;
        }

        .options label input {
            margin-right: 5px;
        }

        .options a {
            margin-left: 100px; /* Tambahkan jarak manual */
            color: #7d7d7d;
            text-decoration: none;
        }

        .sign-in-btn {
            width: 50%;
            padding: 10px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .sign-up {
            font-size: 14px;
        }
        .sign-up a {
            color: #000;
            text-decoration: none;
            font-weight: 600;
        }
        .footer {
            position: fixed;
            bottom: 10px;
            left: 10px;
            display: flex;
            justify-content: space-between;
            width: calc(100% - 20px);
            font-size: 12px;
            color: #7d7d7d;
        }
        .footer span:last-child {
            margin-left: auto;
            margin-right: 10px;
        }

        .right-content {
            max-width: 400px;
        }
        .right-content h1 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .right-content p {
            font-size: 14px;
            color: #7d7d7d;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .left, .right {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="logo">
            <img alt="StudyPilot logo" height="40" src="images/studypilot_logo.png" width="40"/>
                <span>StudyPilot</span>
            </div>
            <div class="avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="title">Sign in to your account</div>
            <div class="subtitle">Enter your details to sign in</div>
            <div class="social-login">
                <img alt="Google logo" height="40" src="images/Google.png" width="40"/>
                <img alt="Facebook logo" height="40" src="images/fb.png" width="40"/>
                <img alt="X logo" height="40" src="images/tw.png" width="40"/>
            </div>
            <div class="divider"><span>OR</span></div>
            <div class="input-group">
                <input placeholder="Username" type="email"/>
            </div>
            <div class="input-group password">
                <input placeholder="Password" type="password" id="password" />
                <i class="fas fa-eye" id="togglePassword"></i>
            </div>
            <div class="options">
                <label>
                    <input type="checkbox" />
                    Keep me logged in
                </label>
                <a href="#">Forgot Password?</a>
            </div>
            <script>
                const togglePassword = document.getElementById("togglePassword");
                const passwordInput = document.getElementById("password");

                // Setel status awal ikon mata berdasarkan tipe input password
                window.addEventListener("load", function () {
                    if (passwordInput.type === "password") {
                        togglePassword.classList.remove("fa-eye");
                        togglePassword.classList.add("fa-eye-slash");  // Jika password tersembunyi, gunakan ikon mata tertutup
                    }
                });

                // Fungsi untuk mengubah tipe input dan ikon saat mata diklik
                togglePassword.addEventListener("click", function () {
                    // Toggle tipe input
                    const type = passwordInput.type === "password" ? "text" : "password";
                    passwordInput.type = type;

                    // Ubah ikon mata berdasarkan tipe input
                    if (passwordInput.type === "password") {
                        this.classList.remove("fa-eye");
                        this.classList.add("fa-eye-slash");  // Mata tertutup saat password tidak terlihat
                    } else {
                        this.classList.remove("fa-eye-slash");
                        this.classList.add("fa-eye");  // Mata terbuka saat password terlihat
                    }
                });


            </script>

            <button class="sign-in-btn" onclick="signIn()">Sign in</button>
            <div class="sign-up">
                Don't have an account? <a href="#">Sign Up</a>
            </div>
            <div class="footer">
                <span>© Study2024</span>
                <span>ENG <i class="fas fa-chevron-down"></i></span>
            </div>
        </div>
        <div class="right">
            <div class="right-content">
                <h1>Mulai Petualangan Belajarmu Bersama StudyPilot!</h1>
                <p>Rencanakan perjalanan belajar Anda, pelajari dengan bimbingan terarah, dan raih setiap tujuan dengan percaya diri. Semua kebutuhan belajar Anda kini ada di satu aplikasi.</p>
            </div>
        </div>
    </div>
    <script>
        function signIn() {
            alert("Sign in button clicked!");
        }
    </script>
</body>
</html>