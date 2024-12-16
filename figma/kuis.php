<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>StudyPilot</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #f5f5f5;
            color: #000000;
        }
        .dark-mode body {
            background-color: #121212;
            color: #ffffff;
        }
        .sidebar {
            width: 250px;
            background-color: #FFFFFF;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            padding: 20px;
            height: 100%;
        }
        .sidebar .logo-text {
            display: flex;
            align-items: center;
            margin-bottom: 20px; /* Memberikan jarak setelah logo dan judul */
        }
        .sidebar img {
            width: 40px;
            height: 40px;
        }
        .sidebar h1 {
            font-size: 24px;
            margin: 0;
            margin-left: 10px; 
            font-weight: bold; 
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0 ;
            flex: 1;
        }
        .sidebar ul li {
            margin-bottom: 30px;
            margin-left:50px;
            font-size: 18px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #000;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .sidebar .settings {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top: auto;
        }
        .sidebar .settings i {
            font-size: 20px;
            margin-right: 10px;
        }
        .sidebar .settings a {
            display: flex;
            align-items: center;
            font-size: 18px;
            margin-bottom: 10px;
            color: #000; /* Mengubah warna teks menjadi hitam */
            text-decoration: none; /* Menghapus garis bawah */
        }
        
        .main-content {
            flex: 1;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h1 {
            font-size: 24px;
            font-weight: 700;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .user-info span {
            font-weight: 500;
        }
        .tabs {
            display: flex;
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 20px;
        }
        .dark-mode .tabs {
            border-bottom: 2px solid #333;
        }
        .tabs a {
            text-decoration: none;
            color: #333;
            padding: 10px 20px;
            font-weight: 500;
            border-bottom: 2px solid transparent;
        }
        .dark-mode .tabs a {
            color: #ffffff;
        }
        .tabs a.active {
            border-bottom: 2px solid #4caf50;
            color: #4caf50;
        }
        .content {
            display: flex;
            justify-content: space-between;
        }
        .upcoming, .completed {
            width: 48%;
            background-color: #e0f7fa;
            padding: 20px;
            border-radius: 10px;
        }
        .dark-mode .upcoming, .dark-mode .completed {
            background-color: #1e1e1e;
        }
        .upcoming h2, .completed h2 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .upcoming .quiz, .completed .quiz {
            background-color: #fff;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .dark-mode .upcoming .quiz, .dark-mode .completed .quiz {
            background-color: #333;
        }
        .upcoming .quiz .date, .completed .quiz .date {
            font-size: 24px;
            font-weight: 700;
        }
        .upcoming .quiz .details, .completed .quiz .details {
            flex: 1;
            margin-left: 20px;
        }
        .upcoming .quiz .details h3, .completed .quiz .details h3 {
            font-size: 16px;
            font-weight: 700;
            margin: 0;
        }
        .upcoming .quiz .details p, .completed .quiz .details p {
            margin: 5px 0;
            font-size: 14px;
            color: #666;
        }
        .dark-mode .upcoming .quiz .details p, .dark-mode .completed .quiz .details p {
            color: #bbb;
        }
        .completed .quiz .progress {
            display: flex;
            align-items: center;
        }
        .completed .quiz .progress .bar {
            width: 100px;
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin-right: 10px;
            position: relative;
        }
        .dark-mode .completed .quiz .progress .bar {
            background-color: #555;
        }
        .completed .quiz .progress .bar .fill {
            height: 100%;
            background-color: #4caf50;
            border-radius: 5px;
            position: absolute;
            top: 0;
            left: 0;
        }
        .completed .quiz .progress span {
            font-size: 14px;
            color: #666;
        }
        .dark-mode .completed .quiz .progress span {
            color: #bbb;
        }
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
            .upcoming, .completed {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<div class="sidebar">
        <div class="logo-text">
            <img alt="StudyPilot logo" height="40" src="images/studypilot_logo.png" width="40"/>
            <h1>StudyPilot</h1>
        </div>
        
        <!-- Daftar menu sidebar tetap dengan ul dan li -->
        <ul>
            <li>
                <a  class="#" href="beranda.php">
                    <i class="fas fa-home"></i>
                    Beranda
                </a>
            </li>
            <li>
                <a class= "#" href="pelajaran.php">
                    <i class="fas fa-book"></i>
                    Pelajaran
                </a>
            </li>
            <li>
                <a class= "#" href="Laporan.php">
                    <i class="fas fa-chart-bar"></i>
                    Laporan
                </a>
            </li>
            <li>
                <a class= "#" href="kalender.php">
                    <i class="fas fa-calendar-alt"></i>
                    Kalender
                </a>
            </li>
        </ul>

        <!-- Pengaturan dan Dark Mode -->
        <div class="settings">
            <a href="#">
                <i class="fas fa-cog"></i>
                Pengaturan
            </a>
            <a href="#">
                <i class="fas fa-moon"></i>
                Dark Mode
            </a>
        </div>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Pusat Pembelajaran</h1>
            <div class="user-info">
                <img alt="User Profile Picture" height="40" src="https://storage.googleapis.com/a1aa/image/Nfhs9lItbgz5cyoS48odOLXp65a5kQBIXfK9ZerGxJx3YG2nA.jpg" width="40"/>
                <span>Febriana N.</span>
            </div>
        </div>
        <div class="tabs">
            <a href="#">Materi</a>
            <a href="#">Tugas</a>
            <a class="active" href="#">Kuis</a>
        </div>
        <div class="content">
            <div class="upcoming">
                <h2>Yang akan datang</h2>
                <div class="quiz">
                    <div class="date">
                        15<br/>NOV
                    </div>
                    <div class="details">
                        <h3>BAHASA INDONESIA</h3>
                        <p>Pilihan Ganda</p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="quiz">
                    <div class="date">
                        17<br/>NOV
                    </div>
                    <div class="details">
                        <h3>Kimia</h3>
                        <p>Benar / Salah</p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="quiz">
                    <div class="date">
                        20<br/>NOV
                    </div>
                    <div class="details">
                        <h3>Matematika</h3>
                        <p>Esai Singkat</p>
                    </div>
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <div class="completed">
                <h2>Selesai</h2>
                <div class="quiz">
                    <div class="details">
                        <h3>Matematika</h3>
                        <p>BAB 2 - Persamaan Linier</p>
                        <p><i class="fas fa-calendar-alt"></i> 10 Nov 2024</p>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 70%;"></div>
                            </div>
                            <span>70%</span>
                        </div>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 90%;"></div>
                            </div>
                            <span>90%</span>
                        </div>
                        <p><i class="fas fa-user"></i> Mr. Wibowo Sucipto</p>
                        <p><i class="fas fa-question-circle"></i> 30 Pertanyaan</p>
                    </div>
                    <i class="fas fa-ellipsis-v"></i>
                </div>
                <div class="quiz">
                    <div class="details">
                        <h3>Fisika</h3>
                        <p>BAB 2 - Fisika Atom</p>
                        <p><i class="fas fa-calendar-alt"></i> 11 Nov 2024</p>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 80%;"></div>
                            </div>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 85%;"></div>
                            </div>
                            <span>85%</span>
                        </div>
                        <p><i class="fas fa-user"></i> Mr. Wibowo Sucipto</p>
                        <p><i class="fas fa-question-circle"></i> 30 Pertanyaan</p>
                    </div>
                    <i class="fas fa-ellipsis-v"></i>
                </div>
                <div class="quiz">
                    <div class="details">
                        <h3>Bhs Jawa</h3>
                        <p>BAB 1 - Serat Wedhatama</p>
                        <p><i class="fas fa-calendar-alt"></i> 11 Nov 2024</p>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 90%;"></div>
                            </div>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 100%;"></div>
                            </div>
                            <span>100%</span>
                        </div>
                        <p><i class="fas fa-user"></i> Mr. Wibowo Sucipto</p>
                        <p><i class="fas fa-question-circle"></i> 30 Pertanyaan</p>
                    </div>
                    <i class="fas fa-ellipsis-v"></i>
                </div>
                <div class="quiz">
                    <div class="details">
                        <h3>PKn</h3>
                        <p>BAB 2 - Geopolitik dan Geostrategi</p>
                        <p><i class="fas fa-calendar-alt"></i> 11 Nov 2024</p>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 90%;"></div>
                            </div>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="bar">
                                <div class="fill" style="width: 100%;"></div>
                            </div>
                            <span>100%</span>
                        </div>
                        <p><i class="fas fa-user"></i> Mr. Wibowo Sucipto</p>
                        <p><i class="fas fa-question-circle"></i> 30 Pertanyaan</p>
                    </div>
                    <i class="fas fa-ellipsis-v"></i>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('dark-mode-toggle').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>
</html>