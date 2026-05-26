<?php
include '../koneksi.php';

if(!isset($_SESSION['id_user'])){

    header("Location: login.php");
    exit;

}

if(isset($_POST['kirim'])){

    $id_user = $_SESSION['id_user'];

    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];

    $lokasi = $_POST['lokasi'];
    $deskripsi = $_POST['deskripsi'];

    /* =========================
       UPLOAD FOTO
    ========================= */

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $nama_foto = time().'-'.$foto;

    move_uploaded_file(
        $tmp,
        '../uploads/'.$nama_foto
    );

    /* =========================
       INSERT DATABASE
    ========================= */

    mysqli_query($conn,
    "INSERT INTO laporan VALUES(

    NULL,

    '$id_user',

    '$nama_foto',

    '$latitude',

    '$longitude',

    '$lokasi',

    '$deskripsi',

    'Menunggu',

    NOW()

    )");

    $success = "Laporan berhasil dikirim";

}
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Kirim Laporan</title>

<style>

/* =========================
   BODY
========================= */

body{

    font-family:Arial, Helvetica, sans-serif;

}

/* =========================
   CARD
========================= */

.laporan-card{

    background:white;

    border-radius:25px;

    padding:30px;

    position:relative;

    overflow:hidden;

    box-shadow:
    0 8px 20px rgba(0,0,0,0.1);

}

/* CORAK JEANS */

.laporan-card::before{

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

.title{

    text-align:center;

    font-size:30px;

    font-weight:bold;

    color:#3498db;

    margin-bottom:10px;

}

.subtitle{

    text-align:center;

    color:#555;

    margin-bottom:30px;

}

/* =========================
   LABEL
========================= */

label{

    font-weight:bold;

    color:#2c3e50;

}

/* =========================
   INPUT
========================= */

input,
textarea{

    width:100%;

    padding:12px;

    border-radius:12px;

    border:2px solid #8ed0ff;

    margin-top:8px;

    margin-bottom:20px;

    transition:0.3s;

}

input:focus,
textarea:focus{

    outline:none;

    border-color:#5db9ff;

    box-shadow:
    0 0 10px rgba(93,185,255,0.3);

}

/* =========================
   BUTTON
========================= */

.btn-kirim{

    width:100%;

    background:#5db9ff;

    color:white;

    border:none;

    padding:14px;

    border-radius:12px;

    font-size:16px;

    font-weight:bold;

    transition:0.3s;

}

.btn-kirim:hover{

    background:#3498db;

    transform:scale(1.02);

}

/* =========================
   ALERT
========================= */

.success{

    background:#d4edda;

    color:#155724;

    padding:12px;

    border-radius:12px;

    margin-bottom:20px;

    text-align:center;

}

/* =========================
   PREVIEW FOTO
========================= */

.preview{

    width:100%;

    max-height:250px;

    object-fit:cover;

    border-radius:15px;

    margin-top:10px;

    display:none;

    border:3px solid #8ed0ff;

}

</style>

</head>
<body>

<div class="laporan-card">

<h2 class="title">
📍 Kirim Laporan
</h2>

<p class="subtitle">
Laporkan kendaraan parkir liar secara realtime
</p>

<?php if(isset($success)){ ?>

<div class="success">

<?php echo $success; ?>

</div>

<?php } ?>

<form method="POST"
enctype="multipart/form-data">

<!-- FOTO -->

<label>
📷 Upload Foto Kendaraan
</label>

<input
type="file"
name="foto"
id="foto"
accept="image/*"
required>

<img id="preview"
class="preview">

<!-- GPS -->

<input
type="hidden"
id="latitude"
name="latitude">

<input
type="hidden"
id="longitude"
name="longitude">

<!-- LOKASI -->

<label>
📍 Lokasi Kejadian
</label>

<textarea
name="lokasi"
rows="3"
placeholder="Masukkan lokasi parkir liar..."
required></textarea>

<!-- DESKRIPSI -->

<label>
📝 Deskripsi
</label>

<textarea
name="deskripsi"
rows="4"
placeholder="Masukkan deskripsi laporan..."
required></textarea>

<button
type="submit"
name="kirim"
class="btn-kirim">

🚗 Kirim Laporan

</button>

</form>

</div>

<script>

/* =========================
   GPS
========================= */

navigator.geolocation.getCurrentPosition(

function(position){

    document.getElementById(
    'latitude').value =
    position.coords.latitude;

    document.getElementById(
    'longitude').value =
    position.coords.longitude;

});

/* =========================
   PREVIEW FOTO
========================= */

foto.onchange = evt => {

    const [file] = foto.files;

    if(file){

        preview.src =
        URL.createObjectURL(file);

        preview.style.display =
        "block";

    }

}

</script>

</body>
</html>