<?php

$query = mysqli_query($conn,
"SELECT laporan.*, users.nama
FROM laporan
JOIN users ON laporan.id_user = users.id_user
ORDER BY id_laporan DESC");

?>

<style>

/* =========================
   TITLE
========================= */

.title{

    color:#3498db;

    font-weight:bold;

    margin-bottom:25px;

}

/* =========================
   TABLE
========================= */

.table-custom{

    width:100%;

    border-collapse:collapse;

    overflow:hidden;

    border-radius:20px;

    background:white;

    box-shadow:
    0 5px 15px rgba(0,0,0,0.1);

}

/* HEADER */

.table-custom th{

    background:#5db9ff;

    color:white;

    padding:15px;

    text-align:center;

    font-size:15px;

}

/* DATA */

.table-custom td{

    padding:15px;

    text-align:center;

    vertical-align:middle;

    border-bottom:
    1px solid #eaf6ff;

}

/* ROW HOVER */

.table-custom tr:hover{

    background:#f3fbff;

    transition:0.3s;

}

/* FOTO */

.foto{

    width:100px;

    height:80px;

    object-fit:cover;

    border-radius:12px;

    border:3px solid #8ed0ff;

}

/* STATUS */

.status{

    padding:8px 14px;

    border-radius:20px;

    color:white;

    font-size:13px;

    font-weight:bold;

}

/* STATUS COLORS */

.menunggu{

    background:#f39c12;

}

.diproses{

    background:#3498db;

}

.selesai{

    background:#2ecc71;

}

/* BUTTON */

.btn-aksi{

    text-decoration:none;

    padding:8px 12px;

    border-radius:10px;

    color:white;

    font-size:13px;

    font-weight:bold;

    margin:2px;

    display:inline-block;

    transition:0.3s;

}

.btn-detail{

    background:#3498db;

}

.btn-update{

    background:#f39c12;

}

.btn-hapus{

    background:#e74c3c;

}

.btn-aksi:hover{

    transform:scale(1.05);

    color:white;

}

/* RESPONSIVE */

.table-wrapper{

    overflow-x:auto;

}

</style>

<h2 class="title">
📋 Data Laporan Parkir Liar
</h2>

<div class="table-wrapper">

<table class="table-custom">

<tr>

<th>Foto</th>
<th>Pelapor</th>
<th>Lokasi</th>
<th>Status</th>
<th>Aksi</th>

</tr>

<?php while($data = mysqli_fetch_array($query)){ ?>

<tr>

<td>

<img
src="../uploads/<?php echo $data['foto']; ?>"
class="foto">

</td>

<td>

<b>
<?php echo $data['nama']; ?>
</b>

</td>

<td>

<?php echo $data['lokasi']; ?>

</td>

<td>

<?php

$status = $data['status'];

if($status == "Menunggu"){

    $class = "menunggu";

}
else if($status == "Diproses"){

    $class = "diproses";

}
else{

    $class = "selesai";

}

?>

<span class="status <?php echo $class; ?>">

<?php echo $status; ?>

</span>

</td>

<td>

<a
href="index.php?menu=detail_laporan&id=<?php echo $data['id_laporan']; ?>"
class="btn-aksi btn-detail">

Detail

</a>

<a
href="index.php?menu=update_status&id=<?php echo $data['id_laporan']; ?>"
class="btn-aksi btn-update">

Update

</a>

<a
href="index.php?menu=hapus_laporan&id=<?php echo $data['id_laporan']; ?>"
class="btn-aksi btn-hapus"

onclick="return confirm('Yakin ingin menghapus laporan ini?')">

Hapus

</a>

</td>

</tr>

<?php } ?>

</table>

</div>