<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #d7be9b; 
            background-image: url("batikf.png");
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            background-color: #b58d67;
            border-right: 5px solid #3498db; /* Garis biru di sisi kiri */
            display: flex;
            flex-direction: column;
            padding: 20px 15px;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-text {
            color: #4ba3e3;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 0;
        }

        .sub-logo {
            font-size: 10px;
            color: #444;
            line-height: 1;
        }

        .menu-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .nav-btn {
            background-color: #a07855;
            color: white;
            border: none;
            padding: 12px;
            text-align: center;
            cursor: pointer;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-btn:hover {
            background-color: #8c6645;
        }

        .logout-btn {
            margin-top: auto;
            background-color: #a07855;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
        }

        .main-content {
            flex: 1;
            padding: 40px;
            background-image: radial-gradient(#c7a683 1px, transparent 1px); /* Pola dekoratif tipis */
            background-size: 40px 40px;
            background-color: #e3d5bc;
            text-align: center;
        }

        .main-title {
            font-size: 36px;
            color: #5d4037;
            margin-bottom: 50px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .candidate-grid {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .candidate-card {
            background-color: #f1e4d1;
            border: 2px solid #b58d67;
            border-radius: 20px;
            width: 280px;
            padding: 25px 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .candidate-name {
            font-size: 22px;
            color: #5d4037;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .photo-container {
            width: 100%;
            height: 250px;
            background-color: #ff0000; /* Background merah seperti di gambar */
            margin-bottom: 25px;
            overflow: hidden;
            display: flex;
            align-items: flex-end; /* Posisi foto kandidat biasanya dari bawah */
            justify-content: center;
        }

        .photo-container img {
            width: 90%;
            height: auto;
            object-fit: contain;
        }

        .detail-btn {
            background-color: #ffffff;
            color: #8d6239;
            border: none;
            padding: 10px 40px;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: 0.2s;
        }

        .detail-btn:hover {
            transform: translateY(-2px);
            background-color: #f9f9f9;
        }
    </style>

    <div class="container">
        <aside class="sidebar">
            <div class="logo-section">
                <div class="logo-text">digides</div>
                <div class="sub-logo">Digitalisasi Pemilihan Kepala Desa</div>
            </div>

            <div class="menu-container">
                <button class="nav-btn">Voting</button>
                <button class="nav-btn">Hasil Voting</button>
            </div>

            <button class="logout-btn">Log Out</button>
        </aside>

        <main class="main-content">
            <h1 class="main-title">DAFTAR KANDIDAT</h1>

            <div class="candidate-grid">
                
                <div class="candidate-card">
                    <div class="candidate-name">Agus Setiawan</div>
                    <div class="photo-container">
                        <img src="fotokades.png" alt="Agus Setiawan">
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>

                <div class="candidate-card">
                    <div class="candidate-name">Joko Darmanto</div>
                    <div class="photo-container">
                        <img src="fotokades2.jpeg" alt="Joko Darmanto">
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>

                <div class="candidate-card">
                    <div class="candidate-name">Panggih Wibowo</div>
                    <div class="photo-container">
                        <img src="fotokades3.png" alt="Panggih Wibowo">
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>

            </div>
        </main>
    </div>

</body>
</html>