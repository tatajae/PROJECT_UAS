<?php

$id = $_GET['id'];

if(isset($_POST['update'])){

    $status = $_POST['status'];

    mysqli_query($conn,
    "UPDATE laporan
    SET status='$status'
    WHERE id_laporan='$id'");

    header("Location: index.php?menu=laporan");
    exit;
}

?>

<!-- =========================
     UPDATE STATUS UI
========================= -->

<div class="status-container">

    <div class="status-header">

        <h2>
            🔄 Update Status Laporan
        </h2>

        <a href="?menu=laporan" class="back-btn">
            ← Kembali
        </a>

    </div>

    <form method="POST" class="status-card">

        <label>Status Laporan</label>

        <select name="status" required>

            <option value="Menunggu">Menunggu</option>
            <option value="Diproses">Diproses</option>
            <option value="Petugas Menuju Lokasi">Petugas Menuju Lokasi</option>
            <option value="Selesai">Selesai</option>

        </select>

        <button type="submit" name="update">
            Update Status
        </button>

    </form>

</div>

<!-- =========================
     STYLE (SAFE FOR DASHBOARD)
========================= -->

<style>

/* CONTAINER */
.status-container{

    background:#fff;

    padding:30px;

    border-radius:25px;

    box-shadow:0 10px 25px rgba(0,0,0,0.08);

    max-width:500px;

    margin:auto;

}

/* HEADER */
.status-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:20px;

}

.status-header h2{

    margin:0;

    font-size:22px;

    color:#3498db;

}

/* BACK BUTTON */
.back-btn{

    text-decoration:none;

    color:#3498db;

    font-weight:bold;

}

/* LABEL */
label{

    font-weight:bold;

    display:block;

    margin-bottom:10px;

}

/* SELECT */
select{

    width:100%;

    padding:12px;

    border-radius:12px;

    border:2px solid #ddd;

    margin-bottom:20px;

    outline:none;

}

/* BUTTON */
button{

    width:100%;

    padding:12px;

    border:none;

    border-radius:12px;

    background:linear-gradient(135deg,#4facfe,#00c6fb);

    color:white;

    font-weight:bold;

    cursor:pointer;

    transition:0.3s;

}

button:hover{

    transform:translateY(-3px);

    box-shadow:0 10px 20px rgba(79,172,254,0.25);

}

</style>