<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    /* =========================
       CEK EMAIL
    ========================= */

    $query = mysqli_query($conn,

    "SELECT * FROM users
    WHERE email='$email'"

    );

    $data = mysqli_fetch_assoc($query);

    /* =========================
       VALIDASI LOGIN
    ========================= */

    if($data){

        if(password_verify($password,$data['password'])){

            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['role'] = $data['role'];

            /* =========================
               REDIRECT ROLE
            ========================= */

            if($data['role'] == 'admin'){

                header("Location: admin/index.php");
                exit;

            }else{

                header("Location: user/index.php");
                exit;

            }

        }else{

            $error = "Password salah";

        }

    }else{

        $error = "Email tidak ditemukan";

    }

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Login - ParkWatch</title>

<!-- BOOTSTRAP -->

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
   LOGIN CARD
========================= */

.login-card{

    width:400px;

    background:white;

    padding:40px;

    border-radius:25px;

    position:relative;

    overflow:hidden;

    box-shadow:
    0 8px 20px rgba(0,0,0,0.15);

}

/* CORAK JEANS CARD */

.login-card::before{

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

.login-title{

    text-align:center;

    font-size:30px;

    font-weight:bold;

    color:#3498db;

    margin-bottom:10px;

}

.login-subtitle{

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

.btn-login{

    width:100%;

    background:#5db9ff;

    color:white;

    border:none;

    padding:12px;

    border-radius:12px;

    font-weight:bold;

    transition:0.3s;

}

.btn-login:hover{

    background:#3498db;

    transform:scale(1.02);

}

/* =========================
   REGISTER LINK
========================= */

.register-link{

    text-align:center;

    margin-top:20px;

}

.register-link a{

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

<!-- =========================
     LOGIN CARD
========================= -->

<div class="login-card">

<h2 class="login-title">
🚗 ParkWatch
</h2>

<p class="login-subtitle">
Sistem Pelaporan Parkir Liar
</p>

<!-- ERROR -->

<?php if(isset($error)){ ?>

<div class="error">

<?= $error; ?>

</div>

<?php } ?>

<!-- FORM LOGIN -->

<form method="POST">

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
name="login"
class="btn-login">

🔐 Login

</button>

</form>

<!-- REGISTER -->

<div class="register-link">

Belum punya akun?

<a href="register.php">

Register

</a>

</div>

</div>

</body>
</html>