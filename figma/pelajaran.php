<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   StudyPilot
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-color: #F5F5F5;
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode {
            background-color: #121212;
            color: #FFFFFF;
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
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode .main-content {
            background-color: #121212;
            color: #FFFFFF;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
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
            border-bottom: 2px solid #E0E0E0;
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
            transition: color 0.3s, border-color 0.3s;
        }
        .dark-mode .tabs a {
            color: #FFFFFF;
        }
        .tabs a.active {
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
        }
        .card {
            background-color: #E0F7FA;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode .card {
            background-color: #333;
            color: #FFFFFF;
        }
        .card img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            margin-right: 20px;
        }
        .card .info {
            flex: 1;
        }
        .card .info h3 {
            margin: 0;
            font-size: 18px;
            font-weight: 500;
        }
        .card .info p {
            margin: 5px 0;
            color: #666;
        }
        .dark-mode .card .info p {
            color: #CCCCCC;
        }
        .card .info span {
            display: flex;
            align-items: center;
            color: #666;
        }
        .dark-mode .card .info span {
            color: #CCCCCC;
        }
        .card .info span i {
            margin-right: 5px;
        }
        .card .action {
            color: #4CAF50;
            font-size: 20px;
        }
        .details {
            background-color: #E0F7FA;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode .details {
            background-color: #333;
            color: #FFFFFF;
        }
        .details h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 10px;
        }
        .details h3 {
            margin: 0;
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 20px;
        }
        .details .list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .details .list li {
            background-color: #FFFFFF;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: background-color 0.3s, color 0.3s;
        }
        .dark-mode .details .list li {
            background-color: #444;
            color: #FFFFFF;
        }
        .details .list li h4 {
            margin: 0;
            font-size: 16px;
            font-weight: 500;
        }
        .details .list li p {
            margin: 5px 0 0 0;
            color: #666;
            font-size: 14px;
        }
        .dark-mode .details .list li p {
            color: #CCCCCC;
        }
        .details .list li .action {
            color: #4CAF50;
            font-size: 20px;
        }
        .tasks {
            display: none;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .task-card {
            background-color: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            position: relative;
        }
        .task-card h3 {
            font-size: 20px;
            margin: 0 0 10px;
        }
        .task-card p {
            font-size: 16px;
            margin: 0 0 10px;
        }
        .task-card .status {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            color: #fff;
        }
        .task-card .status.dikumpulkan {
            background-color: #FFC107;
        }
        .task-card .status.selesai {
            background-color: #4CAF50;
        }
        .task-card .status.terlambat {
            background-color: #F44336;
        }
        .task-card .details {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #757575;
        }
        .task-card .details i {
            margin-right: 5px;
        }
        .task-card .details span {
            margin-right: 20px;
        }
        .task-card .teacher {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #757575;
        }
        .task-card .teacher i {
            margin-right: 5px;
        }
        .task-card .share {
            position: absolute;
            bottom: 20px;
            right: 20px;
            font-size: 18px;
            color: #333;
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
    <h1>
     Pusat Pembelajaran
    </h1>
    <div class="user-info">
     <img alt="User Profile Picture" height="40" src="https://storage.googleapis.com/a1aa/image/KUkKT60c6mrEFp1loJO3OKXx02Gvvjzhr0d8tvXz9pw42weJA.jpg" width="40"/>
     <span>
      Febriana N.
      <br/>
      Pelajar
     </span>
    </div>
   </div>
   <div class="tabs">
    <a href="#" id="materi-tab">
     Materi
    </a>
    <a class="active" href="#" id="tugas-tab">
     Tugas
    </a>
    <a href="kuis.php">
     Kuis
    </a>
   </div>
   <div class="tasks" id="tasks">
    <div class="task-card">
     <h3>
      Matematika
     </h3>
     <p>
      Ulangan Harian BAB 1
     </p>
     <div class="status dikumpulkan">
      Dikumpulkan
     </div>
     <div class="details">
      <span>
       <i class="fas fa-calendar-alt">
       </i>
       10 Nov 2024
      </span>
      <span>
       <i class="fas fa-clock">
       </i>
       21:00 WIB
      </span>
     </div>
     <div class="teacher">
      <i class="fas fa-user">
      </i>
      Mr. Wibowo Sucipto
     </div>
     <div class="share">
      <i class="fas fa-share-alt">
      </i>
     </div>
    </div>
    <div class="task-card">
     <h3>
      Bhs Inggris
     </h3>
     <p>
      Tugas BAB 1
     </p>
     <div class="status selesai">
      Selesai
     </div>
     <div class="details">
      <span>
       <i class="fas fa-calendar-alt">
       </i>
       10 Nov 2024
      </span>
      <span>
       <i class="fas fa-clock">
       </i>
       21:00 WIB
      </span>
     </div>
     <div class="teacher">
      <i class="fas fa-user">
      </i>
      Mr. Wibowo Sucipto
     </div>
     <div class="share">
      <i class="fas fa-share-alt">
      </i>
     </div>
    </div>
    <div class="task-card">
     <h3>
      PKn
     </h3>
     <p>
      Tugas Pertemuan 3
     </p>
     <div class="status terlambat">
      Terlambat
     </div>
     <div class="details">
      <span>
       <i class="fas fa-calendar-alt">
       </i>
       10 Nov 2024
      </span>
      <span>
       <i class="fas fa-clock">
       </i>
       21:00 WIB
      </span>
     </div>
     <div class="teacher">
      <i class="fas fa-user">
      </i>
      Mr. Wibowo Sucipto
     </div>
     <div class="share">
      <i class="fas fa-share-alt">
      </i>
     </div>
    </div>
    <div class="task-card">
     <h3>
      Bhs Inggris
     </h3>
     <p>
      Tugas BAB 1
     </p>
     <div class="status selesai">
      Selesai
     </div>
     <div class="details">
      <span>
       <i class="fas fa-calendar-alt">
       </i>
       10 Nov 2024
      </span>
      <span>
       <i class="fas fa-clock">
       </i>
       21:00 WIB
      </span>
     </div>
     <div class="teacher">
      <i class="fas fa-user">
      </i>
      Mr. Wibowo Sucipto
     </div>
     <div class="share">
      <i class="fas fa-share-alt">
      </i>
     </div>
    </div>
   </div>
   <div class="details" id="materi">
    <h2>
     Bahasa Indonesia
    </h2>
    <h3>
     Kali ini apa yang akan kita pelajari?
    </h3>
    <ul class="list">
     <li>
      <div>
       <h4>
        1. Mengkritisi informasi tentang tokoh
       </h4>
       <p>
        Mencermati informasi tentang Tokoh
        <br/>
        Mencari Informasi dari Ensiklopedia
        <br/>
        Menggunakan Kata-Kata Khusus
        <br/>
        Menimbang Informasi yang Valid
        <br/>
        Memahami Tata Aksara (Ejaan) di dalam Kalimat
        <br/>
        Mendiskusikan Kiprah Seorang Tokoh
        <br/>
        Menulis Narasi dan Deskripsi
        <br/>
        Menyajikan Informasi dalam infografik
       </p>
      </div>
      <div class="action">
       <i class="fas fa-arrow-right">
       </i>
      </div>
     </li>
     <li>
      <div>
       <h4>
        2. Mempresentasikan ide kewirausahaan
       </h4>
      </div>
      <div class="action">
       <i class="fas fa-arrow-right">
       </i>
      </div>
     </li>
     <li>
      <div>
       <h4>
        3. Memahami fenomena kecerdasan buatan
       </h4>
      </div>
      <div class="action">
       <i class="fas fa-arrow-right">
       </i>
      </div>
     </li>
     <li>
      <div>
       <h4>
        4. Menyampaikan opini tentang perundungan
       </h4>
      </div>
      <div class="action">
       <i class="fas fa-arrow-right">
       </i>
      </div>
     </li>
     <li>
      <div>
       <h4>
        5. Mengungkapkan kekaguman dalam narasi
       </h4>
      </div>
      <div class="action">
       <i class="fas fa-arrow-right">
       </i>
      </div>
     </li>
     <li>
      <div>
       <h4>
        6. Menulis praktik baik dan cerita dalam lingkungan
       </h4>
      </div>
      <div class="action">
       <i class="fas fa-arrow-right">
       </i>
      </div>
     </li>
    </ul>
   </div>
  </div>
  <script>
   document.getElementById('dark-mode-toggle').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
        });

        document.getElementById('tugas-tab').addEventListener('click', function() {
            document.getElementById('tasks').style.display = 'grid';
            document.getElementById('materi').style.display = 'none';
            document.getElementById('tugas-tab').classList.add('active');
            document.getElementById('materi-tab').classList.remove('active');
        });

        document.getElementById('materi-tab').addEventListener('click', function() {
            document.getElementById('tasks').style.display = 'none';
            document.getElementById('materi').style.display = 'block';
            document.getElementById('materi-tab').classList.add('active');
            document.getElementById('tugas-tab').classList.remove('active');
        });
  </script>
 </body>
</html>
