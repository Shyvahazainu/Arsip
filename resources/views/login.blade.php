<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/login.css" />
</head>
<body>
    <div class="judul-login">
        <img src="../img/logo-kj.png" alt="Logo Kejaksaan">
        <h1>Arsip Kejaksaan Tinggi Aceh <br>Bidang Tindak Pidana Khusus</h1>
    </div>

    <div class="container">
        @if(session('error'))
        <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
        </div>
        @endif
            <div class="m-login">
                <h2>Masuk</h2>
                <h3>Masuk dan mulai lihat arsip</h3>
                <form action="{{ route('actionlogin') }}" method="post">
                    @csrf    
                    <input type="text" class="input-nip" id="nip" placeholder="NIP" name="nip" required="">
                    <input type="password" class="input-pass" id="password" placeholder="Password" name="password" requires="">
                    <input type="submit" value="Masuk" id="login-msk" class="login-msk">
                </form>
                
            </div>
    </div>
</body>
</html>