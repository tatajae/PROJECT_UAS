<?php
include 'koneksi.php';

if(isset($_POST['register'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $cek = mysqli_query($conn,
    "SELECT * FROM users
    WHERE email='$email'");

    if(mysqli_num_rows($cek) > 0){

        $error = "Email sudah digunakan";

    }else{

        $password = password_hash(
            $_POST['password'],
            PASSWORD_DEFAULT
        );

        mysqli_query($conn,
        "INSERT INTO users VALUES(
        NULL,
        '$nama',
        '$email',
        '$password',
        'user'
        )");

        header("Location: login.php");

    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Register - ParkWatch</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

/* =========================
   BODY
========================= */

body{

    font-family:Arial, Helvetica, sans-serif;

    background:#cfefff;

    /* CORAK JEANS */

    background-image:

    repeating-linear-gradient(
        45deg,
        rgba(255,255,255,0.08),
        rgba(255,255,255,0.08) 2px,
        transparent 2px,
        transparent 12px
    ),

    repeating-linear-gradient(
        -45deg,
        rgba(0,0,0,0.03),
        rgba(0,0,0,0.03) 2px,
        transparent 2px,
        transparent 12px
    );

    display:flex;

    justify-content:center;

    align-items:center;

    min-height:100vh;

}

/* =========================
   REGISTER CARD
========================= */

.register-card{

    width:420px;

    background:white;

    padding:40px;

    border-radius:25px;

    position:relative;

    overflow:hidden;

    box-shadow:
    0 8px 20px rgba(0,0,0,0.15);

}

/* CORAK JEANS */

.register-card::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:100%;

    background-image:

    repeating-linear-gradient(
        45deg,
        rgba(93,185,255,0.05),
        rgba(93,185,255,0.05) 3px,
        transparent 3px,
        transparent 15px
    );

    pointer-events:none;

}

/* =========================
   TITLE
========================= */

.register-title{

    text-align:center;

    font-size:30px;

    font-weight:bold;

    color:#3498db;

    margin-bottom:10px;

}

.register-subtitle{

    text-align:center;

    color:#555;

    margin-bottom:30px;

}

/* =========================
   INPUT
========================= */

input{

    width:100%;

    padding:12px;

    border-radius:12px;

    border:2px solid #8ed0ff;

    margin-bottom:20px;

    transition:0.3s;

}

input:focus{

    outline:none;

    border-color:#5db9ff;

    box-shadow:
    0 0 10px rgba(93,185,255,0.3);

}

/* =========================
   BUTTON
========================= */

.btn-register{

    width:100%;

    background:#5db9ff;

    color:white;

    border:none;

    padding:12px;

    border-radius:12px;

    font-weight:bold;

    transition:0.3s;

}

.btn-register:hover{

    background:#3498db;

    transform:scale(1.02);

}

/* =========================
   LOGIN LINK
========================= */

.login-link{

    text-align:center;

    margin-top:20px;

}

.login-link a{

    color:#3498db;

    text-decoration:none;

    font-weight:bold;

}

/* =========================
   ERROR
========================= */

.error{

    background:#ffdddd;

    color:#c0392b;

    padding:10px;

    border-radius:10px;

    margin-bottom:20px;

    text-align:center;

}

</style>

</head>
<body>

<div class="register-card">

<h2 class="register-title">
🚗 ParkWatch
</h2>

<p class="register-subtitle">
Buat akun pelaporan parkir liar
</p>

<?php if(isset($error)){ ?>

<div class="error">

<?php echo $error; ?>

</div>

<?php } ?>

<form method="POST">

<input
type="text"
name="nama"
placeholder="Masukkan Nama"
required>

<input
type="email"
name="email"
placeholder="Masukkan Email"
required>

<input
type="password"
name="password"
placeholder="Masukkan Password"
required>

<button
type="submit"
name="register"
class="btn-register">

Register

</button>

</form>

<div class="login-link">

Sudah punya akun?

<a href="login.php">

Login

</a>

</div>

</div>

</body>
</html>