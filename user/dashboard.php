<?php
include "../koneksi.php";

/* =========================
   CEK LOGIN
========================= */

if(!isset($_SESSION['id_user'])){

    header("Location: login.php");
    exit;

}

/* =========================
   MENU
========================= */

if(isset($_GET['menu'])){

    $menu = $_GET['menu'];

}else{

    $menu = "";

}

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistem Pelaporan Parkir Liar</title>

<!-- BOOTSTRAP -->

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<!-- LEAFLET -->

<link
rel="stylesheet"
href="https://unpkg.com/leaflet/dist/leaflet.css"/>

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

    min-height:100vh;

}

/* =========================
   NAVBAR
========================= */

.navbar{

    background:#5db9ff;

    border-bottom:
    4px solid #8ed0ff;

    box-shadow:
    0 3px 10px rgba(0,0,0,0.1);

}

.navbar-brand{

    color:white !important;

    font-size:25px;

    font-weight:bold;

}

.nav-link{

    color:white !important;

    font-weight:bold;

    transition:0.3s;

}

.nav-link:hover{

    color:#dff6ff !important;

    transform:translateY(-2px);

}

/* =========================
   CARD
========================= */

.card-custom{

    background:white;

    border:none;

    border-radius:20px;

    overflow:hidden;

    position:relative;

    box-shadow:
    0 5px 15px rgba(0,0,0,0.1);

}

/* CORAK JEANS DI CARD */

.card-custom::before{

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
   BUTTON
========================= */

.btn-custom{

    background:#5db9ff;

    color:white;

    border:none;

    border-radius:12px;

    padding:10px 20px;

    font-weight:bold;

    transition:0.3s;

}

.btn-custom:hover{

    background:#3498db;

    transform:scale(1.03);

    color:white;

}

/* =========================
   TEXT
========================= */

h1,h2,h3,h4,h5{

    color:#2c3e50;
    font-weight:bold;

}

p{

    color:#555;

}

/* =========================
   INPUT
========================= */

input,
textarea,
select{

    width:100%;

    padding:12px;

    border-radius:12px;

    border:2px solid #8ed0ff;

    background:white;

}

input:focus,
textarea:focus,
select:focus{

    outline:none;

    border-color:#5db9ff;

    box-shadow:
    0 0 10px rgba(93,185,255,0.3);

}

/* =========================
   FOOTER
========================= */

.footer{

    background:#5db9ff;

    color:white;

    text-align:center;

    padding:15px;

    margin-top:50px;

    font-weight:bold;

    box-shadow:
    0 -2px 10px rgba(0,0,0,0.1);

}

/* =========================
   ICON CARD
========================= */

.icon-box{

    font-size:50px;

    margin-bottom:10px;

}

/* =========================
   ANIMATION
========================= */

.card-custom:hover{

    transform:translateY(-5px);

    transition:0.3s;

}

</style>

</head>
<body>

<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="index.php">
🚗 ParkWatch
</a>

<button
class="navbar-toggler bg-white"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse"
id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link"
href="index.php">
Home
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="index.php?menu=kirim_laporan">
Kirim Laporan
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="index.php?menu=riwayat">
Riwayat
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="index.php?menu=peta">
Peta
</a>
</li>

<li class="nav-item">
<a class="nav-link"
href="../logout.php">
Logout
</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- DASHBOARD CONTENT -->
<div class="container">

    <?php include "menu.php"; ?>

</div>
    <?php include "footer.php"; ?>

<!-- BOOTSTRAP JS -->

<script
src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>