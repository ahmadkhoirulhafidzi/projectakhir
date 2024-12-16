<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>StudyPilot Kalender</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
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
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 20px;
            height: 100%;
        }
        .sidebar .logo-text {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
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
            margin: 0;
            flex: 1;
        }
        .sidebar ul li {
            margin-bottom: 20px;
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
        .header .user-info {
            display: flex;
            align-items: center;
            margin-left: auto;
        }
        .header .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }
        .calendar-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 20px;
        }
        .calendar {
            flex: 3;
            background-color: #FFFFE0;
            padding: 20px;
            border-radius: 10px;
        }
        .calendar-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .calendar-header h2 {
            margin: 0;
        }
        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
        }
        .calendar-grid div {
            background-color: #FFF;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            font-size: 14px;
        }
        .calendar-header button {
            background-color: #2F4F4F;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .information {
            flex: 1;
            background-color: #F5F5F5;
            padding: 20px;
            border-radius: 10px;
            margin-right: 10px;
        }
        .information h3 {
            margin-top: 0;
        }
        .info-item {
            background-color: #D3D3D3;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        .info-item span {
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo-text">
            <img src="images/studypilot_logo.png" alt="StudyPilot logo" />
            <h1>StudyPilot</h1>
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Beranda</a></li>
            <li><a href="#"><i class="fas fa-book"></i>Pelajaran</a></li>
            <li><a href="#"><i class="fas fa-chart-bar"></i>Laporan</a></li>
            <li><a href="#"><i class="fas fa-calendar-alt"></i>Kalender</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <h1>Kalender</h1>
            <div class="user-info">
                <img src="https://storage.googleapis.com/a1aa/image/61QNEWNewDyfFU88nVqmoYZoBzypqiwoFirCpmupICFgfG2nA.jpg" alt="User Profile Picture" />
                <span>Febriana N.<br />Pelajar</span>
            </div>
        </div>
        <div class="calendar-section">
            <div class="calendar">
                <div class="calendar-header">
                    <button>All Course</button>
                    <h2>November 2024</h2>
                </div>
                <div class="calendar-grid">
                    <div>Mo</div><div>Tu</div><div>We</div><div>Th</div><div>Fr</div><div>Sa</div><div>Su</div>
                    <div>1</div><div>2</div><div>3</div><div>4</div><div>5</div><div>6</div><div>7</div>
                    <div>8</div><div>9</div><div>10</div><div>11</div><div>12</div><div>13</div><div>14</div>
                </div>
            </div>
            <div class="information">
                <h3>Information</h3>
                <div class="info-item"><span>6 November</span><span>Puisi</span></div>
                <div class="info-item"><span>14 November</span><span>Matematika</span></div>
                <div class="info-item"><span>21 November</span><span>Kimia</span></div>
            </div>
        </div>
    </div>
</body>
</html>
