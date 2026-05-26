<?php
include "../koneksi.php";

$id_user = $_SESSION['id_user'];

/* =========================
   AMBIL DATA LAPORAN
========================= */

$data = mysqli_query($conn, "

SELECT * FROM laporan
WHERE id_user='$id_user'
ORDER BY id_laporan DESC

");

?>

<style>

/* =========================
   TITLE
========================= */

.title-riwayat{

    font-size:35px;
    font-weight:bold;
    color:#2c3e50;

}

/* =========================
   TABLE
========================= */

.table-custom{

    overflow:hidden;
    border-radius:20px;
    background:white;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);

}

/* HEADER */

.table-custom thead{
    background:#5db9ff;
    color:white;
}

.table-custom th,
.table-custom td{

    text-align:center;
    padding:15px;
    vertical-align:middle;

}

/* =========================
   FOTO
========================= */

.foto-laporan{

    width:90px;
    height:90px;
    object-fit:cover;
    border-radius:15px;
    border:3px solid #dff6ff;
    transition:0.3s;

}

.foto-laporan:hover{
    transform:scale(1.05);
}

/* =========================
   STATUS (REAL DB STYLE)
========================= */

.status{

    padding:8px 15px;
    border-radius:30px;
    font-size:14px;
    font-weight:bold;
    display:inline-block;

}

/* warna fleksibel sesuai DB */

.pending,
.menunggu{

    background:#ffe08a;
    color:#8a5b00;

}

.proses,
.diproses{

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

.btn-action{

    border:none;
    padding:8px 15px;
    border-radius:10px;
    text-decoration:none;
    font-weight:bold;
    margin:2px;
    display:inline-block;
    transition:0.3s;
    color:white;

}

.btn-detail{ background:#5db9ff; }
.btn-edit{ background:#f39c12; }
.btn-hapus{ background:#e74c3c; }

.btn-action:hover{
    transform:translateY(-2px);
    color:white;
}

/* EMPTY */

.empty-box{
    text-align:center;
    padding:50px;
}

</style>

<!-- =========================
     HEADER
========================= -->

<div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">

<div>

<h2 class="title-riwayat">
📋 Riwayat Laporan
</h2>

<p>
Daftar laporan parkir liar yang kamu kirim
</p>

</div>

<div>

<a href="index.php" class="btn btn-secondary">
← Kembali
</a>

<a href="index.php?menu=kirim_laporan" class="btn btn-primary">
+ Kirim Laporan
</a>

</div>

</div>

<!-- =========================
     DATA
========================= -->

<?php if(mysqli_num_rows($data) > 0){ ?>

<div class="table-responsive table-custom">

<table class="table">

<thead>

<tr>

<th>No</th>
<th>Foto</th>
<th>Lokasi</th>
<th>Deskripsi</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php
$no = 1;

while($d = mysqli_fetch_assoc($data)){

$status = strtolower($d['status']);

?>

<tr>

<td><?= $no++; ?></td>

<td>
<img src="../uploads/<?= $d['foto']; ?>" class="foto-laporan">
</td>

<td><?= $d['lokasi']; ?></td>

<td><?= substr($d['deskripsi'],0,50); ?>...</td>

<td>

<span class="status 
<?php
    if($status == "menunggu" || $status == "pending"){
        echo "pending";
    }
    elseif($status == "diproses" || $status == "proses"){
        echo "proses";
    }
    elseif($status == "selesai"){
        echo "selesai";
    }
    else{
        echo "proses";
    }
?>">
    <?= $d['status']; ?>
</span>

</td>

<td>

<a href="index.php?menu=detail_riwayat&id=<?= $d['id_laporan']; ?>"
class="btn-action btn-detail">
👁 Detail
</a>

<?php if($status == "menunggu" || $status == "pending"){ ?>


<?php } ?>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<?php } else { ?>

<div class="empty-box">

<h3>📭 Belum Ada Laporan</h3>

<p>Kamu belum pernah mengirim laporan</p>

<a href="index.php?menu=kirim_laporan" class="btn btn-primary mt-3">
📍 Kirim Laporan Sekarang
</a>

</div>

<?php } ?>