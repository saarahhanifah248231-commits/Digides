<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kandidat Semua</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #d2b48c; /* Warna dasar cokelat */
            background-image: url('batik f.png'); /* Pastikan file ini ada */
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            width: 160px;
            background-color: rgba(139, 115, 85, 0.4); /* Transparansi seperti di gambar */
            display: flex;
            flex-direction: column;
            padding: 20px 10px;
            border-right: 1px solid rgba(0,0,0,0.1);
        }

        .logo-area {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .digi { color: #5bc0de; } /* Biru muda */
        .des { color: #4b4b4b; }  /* Abu gelap */

        .sub-logo {
            font-size: 7px;
            color: #5d4037;
            display: block;
            margin-top: -5px;
        }

        .nav-btn {
            background-color: #986A41;
            color: white;
            border: none;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 2px;
            cursor: pointer;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-btn:hover {
            background-color: #7d5635;
        }

        .btn-logout {
            margin-top: auto;
            background-color: #986A41;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 2px;
            cursor: pointer;
            text-align: left;
            padding-left: 15px;
        }
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
        }
        .title {
            color: #5d4037;
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 3px;
            opacity: 0.8;
        }
        .candidate-wrapper {
            display: flex;
            gap: 25px;
            justify-content: center;
            align-items: flex-start;
            width: 95%;
        }
        .candidate-card {
            background-color: #e8dccb; /* Warna krem kartu */
            border: 3px solid #bda084;
            border-radius: 15px;
            width: 280px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 6px 15px rgba(0,0,0,0.15);
            transition: transform 0.3s, border 0.3s;
        }
        .card-highlight {
            border: 3px solid #3498db;
        }
        .candidate-card:hover {
            transform: translateY(-5px);
        }
        .candidate-name {
            font-size: 22px;
            font-weight: bold;
            color: #4b4b4b;
            margin-bottom: 15px;
            text-align: center;
        }
        .candidate-photo {
            width: 100%;
            height: 320px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 20px;
            background-color: #ddd; /* Placeholder jika gambar belum ada */
        }
        .btn-detail {
            background-color: white;
            color: #986A41;
            border: 1px solid #dcdcdc;
            padding: 10px 35px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: 0.2s;
        }
        .btn-detail:hover {
            background-color: #f8f8f8;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="logo-area">
            <div class="logo-text">
                <img src="logo.png" alt width="200">
            </div>
        </div>
        
        <button class="nav-btn">Voting</button>
        <button class="nav-btn" style="height: 60px;">Hasil<br>Voting</button>
        
        <button class="btn-logout">Log Out</button>
    </div>

    <div class="main-content">
        <h1 class="title">Daftar Kandidat</h1>

        <div class="candidate-wrapper">
            <div class="candidate-card">
                <p class="candidate-name">Agus Setiawan</p>
                <img src="fotokades.png" alt="Foto Agus" class="candidate-photo">
                <button class="btn-detail">Detail</button>
            </div>

            <div class="candidate-card card-highlight">
                <p class="candidate-name">Joko Darmanto</p>
                <img src="fotokades2.jpeg" alt="Foto Joko" class="candidate-photo">
                <button class="btn-detail">Detail</button>
            </div>

            <div class="candidate-card">
                <p class="candidate-name">Panggih Wibowo</p>
                <img src="fotokades3.png" alt="Foto Panggih" class="candidate-photo">
                <button class="btn-detail">Detail</button>
            </div>
        </div>
    </div>

</body>
</html>