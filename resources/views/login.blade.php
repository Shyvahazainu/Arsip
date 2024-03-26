<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Arsip PIDSUS</title>
    <link rel="shortcut icon" type="image/x-icon" href="../img/siap.png">

    <link rel="stylesheet" href="../css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="judul-login">
        <img src="../img/logo-kj.png" alt="Logo Kejaksaan">
        <h1>Arsip Kejaksaan Tinggi Aceh <br>Bidang Tindak Pidana Khusus</h1>
    </div>

    <div class="container">
        <div class="m-login">
            <h2>Masuk</h2>
            <h3>Masuk dan mulai lihat arsip</h3>

            <form action="{{ route('actionlogin') }}" method="post">
                @csrf
                <input type="text" class="input-nip" id="nip" placeholder="NIP" name="nip"
                    autocomplete="off" required>
                <div class="pass">
                    <input type="password" class="input-pass" id="password" placeholder="Password" name="password"
                        required autocomplete="off">
                    <span><i id="toggler"class="far fa-eye"></i></span>
                </div>

                @if (session('error'))
                    <div class="error-lgn">
                        <span style="color: red"><b>Opps!</b> </span>{{ session('error') }}
                    </div>
                @endif
                <input type="submit" value="Masuk" id="login-msk" class="login-msk">
            </form>

        </div>
    </div>

    <script src="../js/login-eye.js"></script>
</body>

</html>
