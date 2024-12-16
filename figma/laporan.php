<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   StudyPilot - Laporan
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            display: flex;
            height: 100vh;
            background-color: #f5f5f5;
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
            overflow-y: auto;
        }
        .main-content header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .main-content header h2 {
            margin: 0;
            font-size: 24px;
        }
        .main-content header .user-info {
            display: flex;
            align-items: center;
        }
        .main-content header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .main-content header .user-info span {
            font-size: 18px;
        }
        .stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .stats .stat {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            flex: 1;
            margin: 0 10px;
        }
        .stats .stat h3 {
            margin: 0;
            font-size: 36px;
        }
        .stats .stat p {
            margin: 0;
            font-size: 18px;
        }
        .chart {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
        }
        .chart h3 {
            margin: 0 0 20px 0;
            font-size: 18px;
        }
        .chart img {
            width: 100%;
        }
        .chart .legend {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .chart .legend div {
            display: flex;
            align-items: center;
            margin: 0 10px;
        }
        .chart .legend div span {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin-right: 5px;
        }
        .chart .legend .materi span {
            background-color: #d9534f;
        }
        .chart .legend .tugas span {
            background-color: #f0ad4e;
        }
        .chart .legend .kuis span {
            background-color: #5bc0de;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .main-content header h2 {
                font-size: 20px;
            }
            .main-content header .user-info span {
                font-size: 16px;
            }
            .stats .stat h3 {
                font-size: 24px;
            }
            .stats .stat p {
                font-size: 16px;
            }
        }
        @media (max-width: 576px) {
            .sidebar {
                width: 150px;
            }
            .main-content header h2 {
                font-size: 18px;
            }
            .main-content header .user-info span {
                font-size: 14px;
            }
            .stats {
                flex-direction: column;
            }
            .stats .stat {
                margin: 10px 0;
            }
            .stats .stat h3 {
                font-size: 20px;
            }
            .stats .stat p {
                font-size: 14px;
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
   </div>
  </div>
  <div class="main-content">
   <header>
    <h2>
     Laporan
    </h2>
    <div class="user-info">
     <img alt="User Profile Picture" height="40" src="https://storage.googleapis.com/a1aa/image/G2b23enSOP31JinDeAKihwZzsjyJoh0dqfEfBG1wKHoM0NsPB.jpg" width="40"/>
     <span>
      Febriana N.
      <br/>
      Pelajar
     </span>
    </div>
   </header>
   <div class="stats">
    <div class="stat">
     <h3>
      800
      <span>
       jam
      </span>
     </h3>
     <p>
      Total belajar
     </p>
    </div>
    <div class="stat">
     <h3>
      12
      <span>
       dari 30
      </span>
     </h3>
     <p>
      Peringkat kelas
     </p>
    </div>
    <div class="stat">
     <h3>
      80
      <span>
       %
      </span>
     </h3>
     <p>
      Rata rata nilai
     </p>
    </div>
    <div class="stat">
     <h3>
      12
      <span>
       /20
      </span>
     </h3>
     <p>
      Tugas selesai
     </p>
    </div>
    <div class="stat">
     <h3>
      9
      <span>
       /20
      </span>
     </h3>
     <p>
      Kuis selesai
     </p>
    </div>
   </div>
   <div class="chart">
    <h3>
     Statistik Penilaian
    </h3>
    <img alt="Bar chart showing statistics for different subjects" height="300" src="https://storage.googleapis.com/a1aa/image/ZQ2xcJHggQrAB1JHTPRCL0lNkWDASd0vhEAisEBXJbfiuh9JA.jpg" width="600"/>
    <div class="legend">
     <div class="materi">
      <span>
      </span>
      Materi
     </div>
     <div class="tugas">
      <span>
      </span>
      Tugas
     </div>
     <div class="kuis">
      <span>
      </span>
      Kuis
     </div>
    </div>
   </div>
  </div>
 </body>
</html>