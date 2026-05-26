<?php
include "../koneksi.php";

/* =========================
   AMBIL ID
========================= */

$id = $_GET['id'];

$data = mysqli_query($conn, "

SELECT * FROM laporan
WHERE id_laporan='$id'

");

$d = mysqli_fetch_assoc($data);

?>

<style>

/* =========================
   CARD DETAIL
========================= */

.detail-card{

    background:white;

    border-radius:25px;

    overflow:hidden;

    box-shadow:
    0 5px 20px rgba(0,0,0,0.1);

}

/* =========================
   FOTO
========================= */

.detail-foto{

    width:100%;

    height:400px;

    object-fit:cover;

}

/* =========================
   CONTENT
========================= */

.detail-content{

    padding:30px;

}

.detail-title{

    font-size:35px;

    font-weight:bold;

    color:#2c3e50;

}

/* =========================
   INFO BOX
========================= */

.info-box{

    background:#f5fbff;

    border-left:
    5px solid #5db9ff;

    padding:15px 20px;

    border-radius:15px;

    margin-bottom:20px;

}

.info-label{

    font-weight:bold;

    color:#3498db;

    margin-bottom:5px;

}

.info-text{

    color:#444;

    margin:0;

}

/* =========================
   STATUS
========================= */

.status{

    display:inline-block;

    padding:10px 18px;

    border-radius:30px;

    font-weight:bold;

    font-size:14px;

}

.pending{

    background:#ffe08a;

    color:#8a5b00;

}

.proses{

    background:#9ed0ff;

    color:#004085;

}

.selesai{

    background:#b9f6ca;

    color:#00695c;

}

/* =========================
   BUTTON
========================= */

.btn-kembali{

    background:#5db9ff;

    color:white;

    border:none;

    padding:12px 20px;

    border-radius:12px;

    text-decoration:none;

    font-weight:bold;

    transition:0.3s;

}

.btn-kembali:hover{

    background:#3498db;

    color:white;

    transform:translateY(-2px);

}

/* =========================
   MAP
========================= */

#map{

    width:100%;

    height:350px;

    border-radius:20px;

    margin-top:20px;

    overflow:hidden;

}

</style>

<!-- =========================
     TITLE
========================= -->

<div class="mb-4">

<a
href="index.php?menu=riwayat"
class="btn-kembali">

← Kembali

</a>

</div>

<!-- =========================
     DETAIL CARD
========================= -->

<div class="detail-card">

<!-- FOTO -->

<img
src="../uploads/<?= $d['foto']; ?>"
class="detail-foto">

<!-- CONTENT -->

<div class="detail-content">

<h2 class="detail-title mb-4">
📋 Detail Laporan
</h2>

<!-- STATUS -->

<?php

if($d['status'] == "pending"){

    echo "
    <span class='status pending'>
    Pending
    </span>
    ";

}

else if($d['status'] == "diproses"){

    echo "
    <span class='status proses'>
    Diproses
    </span>
    ";

}

else{

    echo "
    <span class='status selesai'>
    Selesai
    </span>
    ";

}

?>

<hr class="my-4">

<!-- LOKASI -->

<div class="info-box">

<div class="info-label">
📍 Lokasi
</div>

<p class="info-text">

<?= $d['lokasi']; ?>

</p>

</div>

<!-- DESKRIPSI -->

<div class="info-box">

<div class="info-label">
📝 Deskripsi
</div>

<p class="info-text">

<?= $d['deskripsi']; ?>

</p>

</div>

<!-- KOORDINAT -->

<div class="info-box">

<div class="info-label">
🌍 Koordinat GPS
</div>

<p class="info-text">

Latitude:
<?= $d['latitude']; ?>

<br>

Longitude:
<?= $d['longitude']; ?>

</p>

</div>

<!-- MAP -->

<div id="map"></div>

</div>

</div>

<!-- LEAFLET -->

<link
rel="stylesheet"
href="https://unpkg.com/leaflet/dist/leaflet.css"/>

<script
src="https://unpkg.com/leaflet/dist/leaflet.js">
</script>

<script>

/* =========================
   MAP
========================= */

var latitude =
<?= $d['latitude']; ?>;

var longitude =
<?= $d['longitude']; ?>;

var map = L.map('map').setView(
    [latitude, longitude],
    16
);

L.tileLayer(
'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
{
    attribution:'© OpenStreetMap'
}).addTo(map);

L.marker([latitude, longitude])
.addTo(map)
.bindPopup("Lokasi Parkir Liar")
.openPopup();

</script>