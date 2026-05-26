<?php
include "koneksi.php";

if(isset($_SESSION['id_user'])){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ParkWatch System</title>

<style>

/* =========================
   BODY
========================= */

body{

    margin:0;
    font-family:Arial;

    background:#cfefff;

    overflow-x:hidden;

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

}

/* =========================
   WRAPPER
========================= */

.wrapper{

    min-height:100vh;

    display:flex;

    justify-content:center;
    align-items:center;

    padding:40px;

}

/* =========================
   CONTAINER
========================= */

.container{

    max-width:1100px;

    width:100%;

    display:grid;

    grid-template-columns:1.2fr 1fr;

    gap:30px;

    animation:fadeIn 1s ease;

}

/* =========================
   ANIMATION
========================= */

@keyframes fadeIn{

    from{

        opacity:0;
        transform:translateY(20px);

    }

    to{

        opacity:1;
        transform:translateY(0);

    }

}

/* =========================
   HERO CARD
========================= */

.hero{

    background:white;

    border-radius:30px;

    padding:50px;

    position:relative;

    overflow:hidden;

    box-shadow:0 20px 40px rgba(0,0,0,0.12);

}

/* glow effect */

.hero::before{

    content:"";

    position:absolute;

    top:-100px;
    left:-100px;

    width:300px;
    height:300px;

    background:radial-gradient(circle,#5db9ff55,transparent 60%);

}

/* jeans texture */

.hero::after{

    content:"";

    position:absolute;

    inset:0;

    background-image:
    repeating-linear-gradient(
        45deg,
        rgba(93,185,255,0.04),
        rgba(93,185,255,0.04) 3px,
        transparent 3px,
        transparent 15px
    );

    pointer-events:none;

}

/* TITLE */

.hero h1{

    font-size:40px;

    color:#3498db;

    margin-bottom:10px;

}

.hero p{

    color:#555;

    line-height:1.6;

}

/* BUTTONS */

.btn-group{

    margin-top:25px;

    display:flex;

    gap:15px;

    flex-wrap:wrap;

}

.btn{

    padding:13px 22px;

    border-radius:15px;

    text-decoration:none;

    font-weight:bold;

    color:white;

    transition:0.3s;

    display:inline-block;

}

.btn:hover{

    transform:translateY(-3px);

}

.login{

    background:#5db9ff;

}

.login:hover{

    background:#3498db;

}

.register{

    background:#00c6fb;

}

.register:hover{

    background:#009edb;

}

/* =========================
   FEATURES
========================= */

.features{

    display:flex;

    flex-direction:column;

    gap:20px;

}

/* CARD */

.card{

    background:white;

    border-radius:25px;

    padding:25px;

    box-shadow:0 10px 25px rgba(0,0,0,0.1);

    position:relative;

    overflow:hidden;

    transition:0.3s;

}

.card:hover{

    transform:translateY(-5px);

}

/* jeans */

.card::before{

    content:"";

    position:absolute;

    inset:0;

    background-image:
    repeating-linear-gradient(
        45deg,
        rgba(93,185,255,0.05),
        rgba(93,185,255,0.05) 3px,
        transparent 3px,
        transparent 15px
    );

}

/* ICON */

.icon{

    font-size:40px;

    margin-bottom:10px;

}

/* TEXT */

.card h3{

    margin:0;
    color:#2c3e50;

}

.card p{

    color:#666;

}

/* RESPONSIVE */

@media(max-width:768px){

    .container{

        grid-template-columns:1fr;

    }

    .hero h1{

        font-size:30px;

    }

}

</style>

</head>

<body>

<div class="wrapper">

<div class="container">

<!-- HERO -->
<div class="hero">

<h1>🚗 ParkWatch</h1>

<p>
Sistem pelaporan parkir liar berbasis masyarakat dengan GPS otomatis,
upload foto, dan monitoring status laporan secara realtime.
</p>

<div class="btn-group">

<a href="login.php" class="btn login">
Login
</a>

<a href="register.php" class="btn register">
Register
</a>

</div>

</div>

<!-- FEATURES -->
<div class="features">

<div class="card">
<div class="icon">📍</div>
<h3>GPS Otomatis</h3>
<p>Lokasi langsung terdeteksi tanpa input manual.</p>
</div>

<div class="card">
<div class="icon">📷</div>
<h3>Upload Bukti</h3>
<p>Foto kendaraan sebagai bukti pelanggaran.</p>
</div>

<div class="card">
<div class="icon">📊</div>
<h3>Monitoring Real-time</h3>
<p>Status laporan bisa dipantau dari proses sampai selesai.</p>
</div>

</div>

</div>

</div>

</body>
</html>