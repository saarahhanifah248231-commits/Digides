<div class="wrapper">
  <div class="kotak">
    <p>
      Yakin dengan pilihan anda ? <br>
      Setelah klik “Simpan”, pilihan anda tidak dapat diubah.
    </p>

    <div class="btn-group">
      <button class="btn">Batal</button>
      <button class="btn">Simpan</button>
    </div>
  </div>
</div>

<style>
  body{
    margin: 0;
  }

  .wrapper{
    width: 100%;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    background: #d7c1ae;
  }

  .kotak{
    width: 650px;
    height: 350px;
    background: #9c6b3f;
    border-radius: 25px;
    border-bottom: 6px solid #6f4727;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .kotak p{
    color: white;
    text-align: center;
    font-size: 24px;
    line-height: 1.5;
    margin-bottom: 70px;
    font-family: Arial, sans-serif;
  }

  .btn-group{
    display: flex;
    gap: 70px;
  }

  .btn{
    width: 160px;
    height: 50px;
    background: white;
    border: none;
    color: #9c6b3f;
    font-size: 22px;
    cursor: pointer;
  }
</style>