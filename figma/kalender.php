<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   StudyPilot Kalender
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            display: flex;
            height: 100vh;
            background-color: #F5F5F5;
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
            display: flex;
            flex-direction: column;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #D3D3D3;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .header-left {
            flex: 1;  /* Membuat header-left mengambil ruang yang tersedia */
        }

        .header-right {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .header .header-icons {
            display: flex;
            margin-left: 20px; /* Memberikan jarak antara ikon */
        }

        .header .user-info {
            display: flex;
            align-items: center;
            margin-right: 20px; /* Memberikan jarak antara informasi user dan ikon */
        }

        .header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
            border-radius: 50%;margin-right: 10px;
        }
        .calendar {
            display: flex;
            flex-direction: column;
            background-color: #FFFFE0;
            padding: 20px;
            border-radius: 10px;
        }
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #D3D3D3; /* Garis bawah header */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .calendar {
  background-color: #E0FFFF;
}

.event {
  color: #000; 
}

.event-tooltip {
  position: absolute;
  background-color: #F0F0F0;
  border: 1px solid #CCC;
  padding: 5px;
  z-index: 1;
}
        .calendar-header h2 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }
        .calendar-header .header-icons i {
            margin-left: 15px;
            font-size: 18px;
            cursor: pointer;
        }

        .calendar-header .header-icons i:hover {
            color: #2F4F4F; /* Efek hover */
        }
        .calendar-header .course-selector {
            background-color: #2F4F4F;
            color: #FFFFFF;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        .calendar-grid div {
            background-color: #FFFFE0;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 14px;
        }
        .calendar-grid .event {
            background-color: #B0C4DE;
            position: relative;
        }
        .calendar-grid .event span {
            position: absolute;
            bottom: 5px;
            left: 5px;
            font-size: 12px;
        }
        .information {
            background-color: #F5F5F5;
            padding: 20px;
            border-radius: 10px;
            margin-left: 20px;
            width: 250px;
        }
        .information h3 {
            margin: 0;
            margin-bottom: 20px;
            font-size: 18px;
        }
        .information .info-item {
            background-color: #D3D3D3;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .information .info-item span {
            font-size: 14px;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .main-content {
                padding: 10px;
            }
            .calendar {
                padding: 10px;
            }
            .calendar-header h2 {
                font-size: 20px;
            }
            .calendar-header .course-selector {
                font-size: 14px;
            }
            .calendar-grid div {
                font-size: 12px;
            }
            .information {
                width: 200px;
                padding: 10px;
            }
            .information h3 {
                font-size: 16px;
            }
            .information .info-item span {
                font-size: 12px;
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
        <h1>Kalender</h1>
        <div class="header-right">
        <div class="user-info">
            <img alt="User Profile Picture" height="40" src="https://storage.googleapis.com/a1aa/image/61QNEWNewDyfFU88nVqmoYZoBzypqiwoFirCpmupICFgfG2nA.jpg" width="40"/>
            <span>Febriana N.<br/>Pelajar</span>
        </div>
        <div class="header-icons">
            <i class="fas fa-search"></i>
            <i class="fas fa-bell"></i>
        </div>
    </div>
    </div>
    
    <div class="calendar">
        <div class="calendar-header">
        <button class="course-selector">
        All Course
        </button>
        <h2>
        November 2024
        </h2>
        <div>
        <i class="fas fa-chevron-left">
        </i>
        <i class="fas fa-chevron-right">
        </i>
        </div>
        </div>
        <div class="calendar-grid">
        <div>
        Mo
        </div>
        <div>
        Tu
        </div>
        <div>
        We
        </div>
        <div>
        Th
        </div>
        <div>
        Fr
        </div>
        <div>
        Sa
        </div>
        <div>
        Su
        </div>
        <div class="event">
        <span>
        29
        </span>
        </div>
        <div class="event">
        <span>
        30
        </span>
        </div>
        <div class="event">
        <span>
        31
        </span>
        </div>
        <div>
        1
        </div>
        <div>
        2
        </div>
        <div>
        3
        </div>
        <div>
        4
        </div>
        <div>
        5
        </div>
        <div class="event">
        <span>
        6
        </span>
        <span>
        B. Indonesia: Membuat Puisi
        </span>
        </div>
        <div>
        7
        </div>
        <div>
        8
        </div>
        <div>
        9
        </div>
        <div>
        10
        </div>
        <div>
        11
        </div>
        <div>
        12
        </div>
        <div>
        13
        </div>
        <div>
        14
        </div>
        <div>
        15
        </div>
        <div class="event">
        <span>
        16
        </span>
        <span>
        Matematika: Ulangan Harian
        </span>
        </div>
        <div>
        17
        </div>
        <div>
        18
        </div>
        <div>
        19
        </div>
        <div>
        20
        </div>
        <div class="event">
        <span>
        21
        </span>
        <span>
        Kimia: Tugas Koligatif
        </span>
        </div>
        <div>
        22
        </div>
        <div>
        23
        </div>
        <div>
        24
        </div>
        <div>
        25
        </div>
        <div>
        26
        </div>
        <div>
        27
        </div>
        <div>
        28
        </div>
        <div>
        29
        </div>
        <div>
        30
        </div>
        <div class="event">
        <span>
        1
        </span>
        </div>
        <div class="event">
        <span>
        2
        </span>
        </div>
        </div>
    </div>
    </div>
    <div class="information">
    <h3>
        Information
    </h3>
    <div class="info-item">
        <span>
        6 November: Membuat Puisi
        </span>
        <span>
        12 AM
        </span>
    </div>
    <div class="info-item">
        <span>
        14 November: Ulangan Harian Matematika
        </span>
        <span>
        09 AM
        </span>
    </div>
    <div class="info-item">
        <span>
        21 November: Tugas Koligatif Kimia
        </span>
        <span>
        12 AM
        </span>
    </div>
    </div>
 </body>
</html>
