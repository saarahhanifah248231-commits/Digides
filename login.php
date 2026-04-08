<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login Digides</title>
<link rel="stylesheet" href="style.css">
<style>
    body{
        margin: 0;
        font-family: Arial, sans-serif;
        height: 100vh;
        background-size: cover;     
        background-position: center; 
        background-repeat: no-repeat;
    }

    body{
        margin:0;
        font-family: Arial, sans-serif;
        background: #CCB4A0;
        background-image: url("batik f.png");
        background-size: 300px;
    }

    .container{
        text-align: center;
        padding-top: 60px;
    }

    .logo{
        position: absolute;
        left: 40px;
        top: 25px;
    }

    h1{
        color: #8a5a2b;
        margin-bottom: 64px;
        font-size: 64px;
    }

    .form{
        width: 400px;
        margin: auto;
    }

    .input-group{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 25px 0;
    }

    label{
        width: 120px;
        text-align: right;
        margin-right: 10px;
        font-size: 20px;
        color: #8a5a2b;
    }

    .icon{
        margin-right: 10px;
        color: #8a5a2b;
    }

    input{
        padding: 12px;
        width: 200px;
        border: none;
        background: #ffff;
        border-radius: 3px;
    }

    button{
        margin-top: 30px;
        margin: 25px 0;
        width: 100%;
        border: 20px;
        border-radius: 50px;
        background: #eee;
        font-size: 20px;
        color: #8a5a2b;
        cursor: pointer;
    }

    button:hover{
        background: #ddd;
    }
</style>

<!-- icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

<div class="container">

    <div class="logo">
        <img src="logo.png" width="250" alt="">
    </div>

    <h1>Login E-voting Kepala <br> Desa Manggis</h1>

    <div class="form">

        <div class="input-group">
            <label>Username</label>
            <i class="fa fa-user icon"></i>
            <input type="text" placeholder="Masukkan Username">
        </div>

        <div class="input-group">
            <label>Password</label>
            <i class="fa fa-lock icon"></i>
            <input type="password" placeholder="Masukkan Password">
        </div>

        <button>
            <h2>Login<h2>
        </button>

    </div>

</div>

</body>
</html>