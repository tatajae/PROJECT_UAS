<?php

$query = mysqli_query($conn,
"SELECT * FROM users");

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
   TOP AREA
========================= */

.top-area{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:25px;

    flex-wrap:wrap;

    gap:10px;

}

/* =========================
   BUTTON TAMBAH
========================= */

.btn-tambah{

    background:#5db9ff;

    color:white;

    text-decoration:none;

    padding:12px 18px;

    border-radius:12px;

    font-weight:bold;

    transition:0.3s;

    box-shadow:
    0 4px 10px rgba(0,0,0,0.1);

}

.btn-tambah:hover{

    background:#3498db;

    transform:scale(1.03);

    color:white;

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

    border-bottom:
    1px solid #eaf6ff;

}

/* HOVER */

.table-custom tr:hover{

    background:#f3fbff;

    transition:0.3s;

}

/* ROLE */

.role{

    padding:8px 14px;

    border-radius:20px;

    color:white;

    font-size:13px;

    font-weight:bold;

}

/* ROLE ADMIN */

.admin{

    background:#3498db;

}

/* ROLE USER */

.user{

    background:#2ecc71;

}

/* BUTTON */

.btn-aksi{

    text-decoration:none;

    padding:8px 14px;

    border-radius:10px;

    color:white;

    font-size:13px;

    font-weight:bold;

    margin:2px;

    display:inline-block;

    transition:0.3s;

}

/* EDIT */

.btn-edit{

    background:#f39c12;

}

/* HAPUS */

.btn-hapus{

    background:#e74c3c;

}

/* HOVER BUTTON */

.btn-aksi:hover{

    transform:scale(1.05);

    color:white;

}

/* RESPONSIVE */

.table-wrapper{

    overflow-x:auto;

}

</style>

<div class="top-area">

<h2 class="title">
👥 Data User
</h2>

<a href="?menu=tambah_user"
class="btn-tambah">

➕ Tambah User

</a>

</div>

<div class="table-wrapper">

<table class="table-custom">

<tr>

<th>Nama</th>
<th>Email</th>
<th>Role</th>
<th>Aksi</th>

</tr>

<?php while($data = mysqli_fetch_array($query)){ ?>

<tr>

<td>

<b>
<?php echo $data['nama']; ?>
</b>

</td>

<td>

<?php echo $data['email']; ?>

</td>

<td>

<?php

if($data['role'] == "admin"){

    $class = "admin";

}else{

    $class = "user";

}

?>

<span class="role <?php echo $class; ?>">

<?php echo ucfirst($data['role']); ?>

</span>

</td>

<td>

<a
href="index.php?menu=edit_user&id=<?php echo $data['id_user']; ?>"
class="btn-aksi btn-edit">

✏️ Edit

</a>

<a
href="index.php?menu=hapus_user&id=<?php echo $data['id_user']; ?>"
class="btn-aksi btn-hapus"

onclick="return confirm('Yakin ingin menghapus user ini?')">

🗑 Hapus

</a>

</td>

</tr>

<?php } ?>

</table>

</div>