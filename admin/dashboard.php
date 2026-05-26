<?php
include '../koneksi.php';

if(!isset($_SESSION['id_user'])){
    header("Location: ../login.php");
    exit;
}

if($_SESSION['role'] != 'admin'){
    header("Location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin ParkWatch</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

/* =========================
   BODY FULL SCREEN
========================= */

body{

    margin:0;
    padding:0;

    font-family:Arial;

    background:#cfefff;

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
   SIDEBAR FULL HEIGHT
========================= */

.sidebar{

    position:fixed;
    top:0;
    left:0;

    width:240px;
    height:100vh;

    background:#5db9ff;

    padding:20px;

    box-shadow:5px 0 15px rgba(0,0,0,0.1);

    overflow-y:auto;

}

.sidebar h2{

    color:white;
    text-align:center;

}

.sidebar a{

    display:block;

    padding:12px;
    margin-bottom:10px;

    color:white;
    text-decoration:none;

    border-radius:12px;

    background:rgba(255,255,255,0.1);

    transition:0.3s;

    font-weight:bold;

}

.sidebar a:hover{

    background:white;
    color:#3498db;

}

/* =========================
   CONTENT FULL WIDTH
========================= */

.content{

    margin-left:240px;

    padding:25px;

    width:calc(100% - 240px);

    min-height:100vh;

    box-sizing:border-box;

}

/* =========================
   TOP CARD
========================= */

.card-box{

    background:white;

    border-radius:25px;

    padding:25px;

    min-height:90vh;

    position:relative;

    overflow:hidden;

    box-shadow:0 8px 20px rgba(0,0,0,0.1);

}

/* jeans effect */

.card-box::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:100%;

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

/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

    .sidebar{

        position:relative;
        width:100%;
        height:auto;

    }

    .content{

        margin-left:0;
        width:100%;

    }

}

</style>

</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <h2>🚗 ParkWatch</h2>

    <a href="index.php">Dashboard</a>
    <a href="index.php?menu=laporan">Laporan</a>
    <a href="index.php?menu=user">User</a>
    <a href="index.php?menu=peta">Peta</a>
    <a href="index.php?menu=grafik">Grafik</a>
    <a href="../logout.php">Logout</a>

</div>

<!-- CONTENT FULL -->
<div class="content">

    <div class="card-box">

        <?php include "menu.php"; ?>
        <?php include "footer.php"; ?>

    </div>

</div>

</body>
</html>