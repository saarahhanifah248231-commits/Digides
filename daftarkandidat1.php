<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kandidat Digides</title>
    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        body {
            background-color: #c4a484;
            background-image: url('logo.png');
            display: flex;
            height: 100vh;
            overflow: hidden;
        }
        .sidebar {
            width: 150px;
            background-color: rgba(139, 115, 85, 0.5);
            display: flex;
            flex-direction: column;
            padding: 20px 10px;
            border-right: 1px solid rgba(0,0,0,0.1);
        }
        .logo-area {
            margin-bottom: 50px;
        }
        .logo-text { 
            font-weight: bold; 
            font-size: 20px; 
        }
        .digi { 
            color: #5bc0de; 
        }
        .des { 
            color: #4b4b4b; 
        }
        .sub-logo { 
            font-size: 8px; 
            display: block; 
            color: #5d4037; 
        }
        .nav-btn {
            background-color: #a67c52;
            color: white;
            border: none;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            text-align: center;
        }
        .btn-logout {
            margin-top: auto;
            background-color: #8d6e63;
            color: white;
            border: none;
            padding: 8px;
            border-radius: 4px;
            cursor: pointer;
        }
        .main-content {
            flex: 1;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h1.title {
            color: #5d4037;
            font-size: 36px;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .candidate-card {
            background-color: rgba(255, 255, 255, 0.6);
            border-radius: 20px;
            width: 90%;
            max-width: 800px;
            padding: 30px;
            display: flex;
            gap: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .photo-section {
            text-align: center;
        }
        .photo-section h2 {
            color: #8d6e63;
            margin-bottom: 10px;
        }
        .candidate-photo {
            width: 250px;
            height: 300px;
            object-fit: cover;
            border: 5px solid white;
        }
        .info-section {
            color: #5d4037;
            font-size: 18px;
            line-height: 1.6;
        }
        .info-section h3 { 
            margin-top: 10px; 
        }
        .info-section ol { 
            margin-left: 20px; 
        }
        .button-group {
            margin-top: 40px;
            display: flex;
            gap: 150px;
        }
        .btn-action {
            padding: 12px 40px;
            border-radius: 10px;
            border: none;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            color: #8d6e63;
            background-color: #fff9f5;
        }
        .btn-action:hover {
            filter: brightness(0.95);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <div class="logo">
        <img src="batik f.png" width="250" alt="">
    </div>
        
        <button class="nav-btn">Voting</button>
        <button class="nav-btn">Hasil Voting</button>
        
        <button class="btn-logout">Log Out</button>
    </div>

    <div class="main-content">
        <h1 class="title">Daftar Kandidat</h1>

        <div class="candidate-card">
            <div class="photo-section">
                <h2>Agus Setiawan</h2>
                <img src="fotokades.png" alt="Foto Kandidat" class="candidate-photo">
            </div>

            <div class="info-section">
                <h3>Visi:</h3>
                <p>Mewujudkan Desa Digital Mandiri & Sejahtera.</p>
                
                <h3>Misi:</h3>
                <ol>
                    <li>Peningkatan Akses Internet Desa.</li>
                    <li>Pelatihan UMKM Digital.</li>
                    <li>Transparansi Anggaran Berbasis Aplikasi.</li>
                </ol>
            </div>
        </div>

        <div class="button-group">
            <button class="btn-action">Kembali</button>
            <button class="btn-action">Pilih Sekarang</button>
        </div>
    </div>

</body>
</html>