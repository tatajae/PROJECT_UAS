<?php
session_start();
include "../koneksi.php";

/* =========================
   CEK LOGIN
========================= */

if(!isset($_SESSION['id_user'])){

    header("Location: ../login.php");
    exit;

}

/* =========================
   CEK ROLE ADMIN
========================= */

if($_SESSION['role'] != 'admin'){

    header("Location: ../user/index.php");
    exit;

}

/* =========================
   DASHBOARD ADMIN
========================= */

include "dashboard.php";

?>