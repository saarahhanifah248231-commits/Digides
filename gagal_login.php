<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Gagal</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        height: 100vh;
        background-color: #bda78f;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;  
        background-image: url('batik f - Copy.png');
    }
    
    h1 {
        margin-top: 70px;
        text-align: center;
        color: #8b5e3c;
        font-size: 40px;
        font-weight: 700;
        line-height: 1.3;
    }

    .card {
        margin-top: 60px;
        width: 600px;
        background: #e7ddd3;
        border-radius: 30px;
        padding: 50px 30px;
        text-align: center;
    }

    .card img {
        width: 150px;
        opacity: 0.9;
        margin-bottom: 20px;
    }

    .error-text {
        font-size: 30px;
        color: #c2a58a;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .btn {
        background-color: #b08968;
        border: none;
        padding: 12px 30px;
        font-size: 20px;
        color: #5a3e2b;
        border-radius: 0px;
        cursor: pointer;
        
    }

    .btn:hover {
        background-color: #8b5e3c;
        color: #fff;
    }

</style>
</head>
<body>

<h1>
    Login E-voting Kepala<br>
    Desa Manggis
</h1>

<div class="card">
    <img src="logingagal2.png" width="800" alt="">
    <div class="error-text">Login gagal !</div>
    <button class="btn"><b>coba lagi<b></button>
</div>

</body>
</html>