<html>
<head>
    <title>StudyPilot Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            transition: background-color 0.3s, color 0.3s;
        }
        .container {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .sidebar img {
            width: 40px;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 30px;
            margin-left:50px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .sidebar ul li a.active {
            font-weight: bold;
        }
        .sidebar .settings {
            margin-top: auto;
        }
        .sidebar .settings a {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 18px;
        }
        .sidebar .settings a i {
            margin-right: 10px;
        }
        .sidebar .dark-mode {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        .sidebar .dark-mode label {
            margin-left: 10px;
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
            font-weight: 500;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info img {
            width: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .header .user-info span {
            font-size: 16px;
        }
        .cards {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .card {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            width: 30%;
            text-align: center;
            margin-right: 20px;
        }
        .card:last-child {
            margin-right: 0;
        }
        .card h2 {
            font-size: 36px;
            margin: 0;
        }
        .card p {
            font-size: 18px;
            margin: 10px 0;
        }
        .card a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .status {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            width: 20%;
        }
        .status h3 {
            font-size: 18px;
            margin: 0 0 10px 0;
        }
        .status ul {
            list-style: none;
            padding: 0;
        }
        .status ul li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .status ul li span {
            font-size: 16px;
        }
        .status ul li .badge {
            padding: 5px 10px;
            border-radius: 5px;
            color: #ffffff;
        }
        .status ul li .badge.yellow {
            background-color: #fbc02d;
        }
        .status ul li .badge.green {
            background-color: #4caf50;
        }
        .status ul li .badge.blue {
            background-color: #2196f3;
        }
        .status ul li .badge.red {
            background-color: #f44336;
        }
        .lessons {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
        }
        .lessons h2 {
            font-size: 24px;
            margin: 0 0 20px 0;
        }
        .lesson-cards {
            display: flex;
            justify-content: space-between;
        }
        .lesson-card {
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            width: 23%;
            text-align: center;
            margin-right: 20px;
        }
        .lesson-card:last-child {
            margin-right: 0;
        }
        .lesson-card img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .lesson-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .lesson-card p {
            font-size: 14px;
            margin: 5px 0;
        }
        .lesson-card .students {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .lesson-card .students img {
            width: 30px;
            border-radius: 50%;
            margin-right: 5px;
        }
        .lesson-card .students span {
            font-size: 14px;
        }
        .dark-mode-enabled {
            background-color: #333;
            color: #fff;
        }
        .dark-mode-enabled .sidebar {
            background-color: #444;
        }
        .dark-mode-enabled .card {
            background-color: #555;
        }
        .dark-mode-enabled .status {
            background-color: #444;
        }
        .dark-mode-enabled .lessons {
            background-color: #444;
        }
        .dark-mode-enabled .lesson-card {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div>
            <img alt="StudyPilot logo" height="40" src="images/studypilot_logo.png" width="40"/>
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
            </div>
            <div class="settings">
                <a href="#">
                    <i class="fas fa-cog"></i>
                    Pengaturan
                </a>
                <div class="dark-mode">
                    <i class="fas fa-moon"></i>
                    <label>
                        Dark Mode
                        <input id="dark-mode-toggle" type="checkbox"/>
                    </label>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Welcome back, Febriana</h1>
                <div class="user-info">
                    <img alt="User Profile Picture" height="40" src="https://storage.googleapis.com/a1aa/image/zxfN0inkhg1zdKgcm1DysvJ0DTAMrsctSJf696dxnvhtTC7TA.jpg" width="40"/>
                    <span>
                        Febriana N.<br/>
                        Pelajar
                    </span>
                </div>
            </div>
            <div class="cards">
                <div class="card" style="background-color: #d4e157;">
                    <h2>5</h2>
                    <p>Pelajaran</p>
                    <a href="#">
                        View details
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="card" style="background-color: #ba68c8;">
                    <h2>3</h2>
                    <p>Tugas</p>
                    <a href="#">
                        View details
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="card" style="background-color: #ff8a65;">
                    <h2>3</h2>
                    <p>Kuis</p>
                    <a href="#">
                        View details
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                <div class="status">
                    <h3>Pelajaran</h3>
                    <ul>
                        <li>
                            <span>Matematika</span>
                            <span class="badge yellow">Dikerjakan</span>
                        </li>
                        <li>
                            <span>Bhs Inggris</span>
                            <span class="badge green">Selesai</span>
                        </li>
                        <li>
                            <span>Fisika</span>
                            <span class="badge blue">Dinilai</span>
                        </li>
                        <li>
                            <span>Biologi</span>
                            <span class="badge red">Terlambat</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="lessons">
                <h2>Belajar apa hari ini?</h2>
                <div class="lesson-cards">
                    <div class="lesson-card" style="background-color: #d4e157;">
                        <img alt="Matematika Lesson Image" height="150" src="https://storage.googleapis.com/a1aa/image/dIySWV8yflXwEaXPdvs1ciYWjPxl3G12U5Uf4EOQUI0sTC7TA.jpg" width="200"/>
                        <h3>Matematika</h3>
                        <p>08.00-10.00</p>
                        <p>10 Nov 2024</p>
                        <div class="students">
                            <img alt="Student 1" height="30" src="https://storage.googleapis.com/a1aa/image/RFC4cXeKPd0jPaeu4kWeAXWWnMGvNUoctoXCmKeQWiINPJsPB.jpg" width="30"/>
                            <img alt="Student 2" height="30" src="https://storage.googleapis.com/a1aa/image/mf7wakp3Kv2TMasmETwtY8huN6XVjfoJOOgHnfNOjQoeOJsPB.jpg" width="30"/>
                            <span>+ 5 siswa lainnya</span>
                        </div>
                    </div>
                    <div class="lesson-card" style="background-color: #ba68c8;">
                        <img alt="Bahasa Inggris Lesson Image" height="150" src="https://storage.googleapis.com/a1aa/image/g1pJ58PeYhWUZatX84GAeeBYhfm6LtetTxPjGJf591No6kweJA.jpg" width="200"/>
                        <h3>Bahasa Inggris</h3>
                        <p>08.00-10.00</p>
                        <p>10 Nov 2024</p>
                        <div class="students">
                            <img alt="Student 1" height="30" src="https://storage.googleapis.com/a1aa/image/RFC4cXeKPd0jPaeu4kWeAXWWnMGvNUoctoXCmKeQWiINPJsPB.jpg" width="30"/>
                            <img alt="Student 2" height="30" src="https://storage.googleapis.com/a1aa/image/mf7wakp3Kv2TMasmETwtY8huN6XVjfoJOOgHnfNOjQoeOJsPB.jpg" width="30"/>
                            <span>+ 5 siswa lainnya</span>
                        </div>
                    </div>
                    <div class="lesson-card" style="background-color: #ff8a65;">
                        <img alt="Fisika Lesson Image" height="150" src="https://storage.googleapis.com/a1aa/image/fSherZsGb1i1epndbHRLkifvC01fXXGXqJnRyKVtDCHAekweJA.jpg" width="200"/>
                        <h3>Fisika</h3>
                        <p>08.00-10.00</p>
                        <p>10 Nov 2024</p>
                        <div class="students">
                            <img alt="Student 1" height="30" src="https://storage.googleapis.com/a1aa/image/RFC4cXeKPd0jPaeu4kWeAXWWnMGvNUoctoXCmKeQWiINPJsPB.jpg" width="30"/>
                            <img alt="Student 2" height="30" src="https://storage.googleapis.com/a1aa/image/mf7wakp3Kv2TMasmETwtY8huN6XVjfoJOOgHnfNOjQoeOJsPB.jpg" width="30"/>
                            <span>+ 5 siswa lainnya</span>
                        </div>
                    </div>
                    <div class="lesson-card" style="background-color: #4db6ac;">
                        <img alt="Kimia Lesson Image" height="150" src="https://storage.googleapis.com/a1aa/image/mZGQXypXakIdAdeYvhCGk6s5efhQyTYfrcAMBeyndkxMdSYfE.jpg" width="200"/>
                        <h3>Kimia</h3>
                        <p>08.00-10.00</p>
                        <p>10 Nov 2024</p>
                        <div class="students">
                            <img alt="Student 1" height="30" src="https://storage.googleapis.com/a1aa/image/RFC4cXeKPd0jPaeu4kWeAXWWnMGvNUoctoXCmKeQWiINPJsPB.jpg" width="30"/>
                            <img alt="Student 2" height="30" src="https://storage.googleapis.com/a1aa/image/mf7wakp3Kv2TMasmETwtY8huN6XVjfoJOOgHnfNOjQoeOJsPB.jpg" width="30"/>
                            <span>+ 5 siswa lainnya</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const darkModeToggle = document.getElementById('dark-mode-toggle');
        darkModeToggle.addEventListener('change', () => {
            document.body.classList.toggle('dark-mode-enabled', darkModeToggle.checked);
        });
    </script>
</body>
</html>