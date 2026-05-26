<?php
session_start();

if (!isset($_SESSION['id_user'])) {

    header("Location: login.php");
    exit;

}

/* kalau admin jangan masuk user */

if ($_SESSION['role'] == 'admin') {

    header("Location: admin/index.php");
    exit;

}

/* user lanjut dashboard */

include "dashboard.php";
?>