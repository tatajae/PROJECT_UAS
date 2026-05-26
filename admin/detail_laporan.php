<?php

$id = $_GET['id'];

$query = mysqli_query($conn,
"SELECT laporan.*, users.nama
FROM laporan
JOIN users ON laporan.id_user = users.id_user
WHERE id_laporan='$id'");

$data = mysqli_fetch_array($query);

?>

<!-- =========================
     DETAIL LAPORAN
========================= -->

<div class="detail-container">

    <!-- HEADER -->

    <div class="detail-header">

        <div>

            <span class="badge-detail">
                🚨 DETAIL LAPORAN
            </span>

            <h2>
                Detail Laporan Parkir Liar
            </h2>

            <p>
                Informasi lengkap laporan pelanggaran parkir
            </p>

        </div>

        <a href="index.php?menu=laporan"
        class="btn-kembali">

            <i class="fa-solid fa-arrow-left"></i>

            Kembali

        </a>

    </div>

    <!-- CARD -->

    <div class="detail-card">

        <!-- FOTO -->

        <div class="detail-image">

            <img
            src="../uploads/<?php echo $data['foto']; ?>">

            <div class="image-overlay">

                <i class="fa-solid fa-camera"></i>

            </div>

        </div>

        <!-- INFO -->

        <div class="detail-info">

            <!-- ITEM -->

            <div class="info-box">

                <div class="info-icon blue">

                    <i class="fa-solid fa-user"></i>

                </div>

                <div>

                    <span>Pelapor</span>

                    <h4>
                        <?php echo $data['nama']; ?>
                    </h4>

                </div>

            </div>

            <!-- ITEM -->

            <div class="info-box">

                <div class="info-icon green">

                    <i class="fa-solid fa-location-dot"></i>

                </div>

                <div>

                    <span>Lokasi</span>

                    <h4>
                        <?php echo $data['lokasi']; ?>
                    </h4>

                </div>

            </div>

            <!-- ITEM -->

            <div class="info-box">

                <div class="info-icon orange">

                    <i class="fa-solid fa-file-lines"></i>

                </div>

                <div>

                    <span>Deskripsi</span>

                    <p class="desc">
                        <?php echo $data['deskripsi']; ?>
                    </p>

                </div>

            </div>

            <!-- STATUS -->

            <div class="status-box">

                <span>Status Laporan</span>

                <?php
                if($data['status'] == 'Pending'){
                ?>

                    <div class="status pending">
                        ⏳ Pending
                    </div>

                <?php
                }elseif($data['status'] == 'Diproses'){
                ?>

                    <div class="status proses">
                        🔄 Diproses
                    </div>

                <?php
                }else{
                ?>

                    <div class="status selesai">
                        ✅ Selesai
                    </div>

                <?php } ?>

            </div>

        </div>

    </div>

</div>

<!-- =========================
     STYLE
========================= -->

<style>

/* =========================
   CONTAINER
========================= */

.detail-container{

    animation:fadeIn 0.6s ease;

}

/* =========================
   HEADER
========================= */

.detail-header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:30px;

    flex-wrap:wrap;

    gap:20px;

}

.badge-detail{

    display:inline-block;

    background:
    linear-gradient(
        135deg,
        #4facfe,
        #00c6fb
    );

    color:white;

    padding:10px 18px;

    border-radius:30px;

    font-size:13px;

    font-weight:bold;

    margin-bottom:15px;

}

.detail-header h2{

    margin:0;

    font-size:36px;

    font-weight:900;

    color:#2d3436;

}

.detail-header p{

    margin-top:8px;

    color:#777;

}

/* BUTTON */

.btn-kembali{

    text-decoration:none;

    background:
    linear-gradient(
        135deg,
        #4facfe,
        #00c6fb
    );

    color:white;

    padding:14px 22px;

    border-radius:18px;

    font-weight:bold;

    display:flex;

    align-items:center;

    gap:10px;

    transition:0.3s;

    box-shadow:
    0 10px 20px rgba(79,172,254,0.25);

}

.btn-kembali:hover{

    transform:
    translateY(-4px);

    color:white;

}

/* =========================
   CARD
========================= */

.detail-card{

    display:grid;

    grid-template-columns:
    1fr 1fr;

    gap:35px;

    background:white;

    border-radius:35px;

    padding:35px;

    box-shadow:
    0 15px 35px rgba(0,0,0,0.08);

    overflow:hidden;

}

/* =========================
   IMAGE
========================= */

.detail-image{

    position:relative;

    overflow:hidden;

    border-radius:30px;

}

.detail-image img{

    width:100%;

    height:100%;

    object-fit:cover;

    border-radius:30px;

    transition:0.5s;

}

.detail-image:hover img{

    transform:scale(1.05);

}

/* OVERLAY */

.image-overlay{

    position:absolute;

    top:20px;
    right:20px;

    width:55px;

    height:55px;

    border-radius:18px;

    background:rgba(255,255,255,0.2);

    backdrop-filter:blur(8px);

    display:flex;

    justify-content:center;

    align-items:center;

    color:white;

    font-size:22px;

}

/* =========================
   INFO
========================= */

.detail-info{

    display:flex;

    flex-direction:column;

    gap:22px;

}

/* INFO BOX */

.info-box{

    display:flex;

    align-items:flex-start;

    gap:18px;

    background:#f8fbff;

    padding:22px;

    border-radius:22px;

    transition:0.3s;

}

.info-box:hover{

    transform:translateY(-4px);

    box-shadow:
    0 10px 20px rgba(0,0,0,0.05);

}

/* ICON */

.info-icon{

    width:60px;

    height:60px;

    border-radius:18px;

    display:flex;

    justify-content:center;

    align-items:center;

    color:white;

    font-size:24px;

    flex-shrink:0;

}

.blue{

    background:
    linear-gradient(
        135deg,
        #4facfe,
        #00c6fb
    );

}

.green{

    background:
    linear-gradient(
        135deg,
        #43e97b,
        #38f9d7
    );

}

.orange{

    background:
    linear-gradient(
        135deg,
        #ff9a44,
        #fc6076
    );

}

/* TEXT */

.info-box span{

    color:#777;

    font-size:14px;

}

.info-box h4{

    margin-top:5px;

    font-size:22px;

    font-weight:bold;

    color:#2d3436;

}

.desc{

    margin-top:8px;

    line-height:1.7;

    color:#555;

}

/* =========================
   STATUS
========================= */

.status-box{

    background:#f8fbff;

    padding:25px;

    border-radius:22px;

}

.status-box span{

    display:block;

    margin-bottom:15px;

    color:#777;

    font-size:14px;

}

/* STATUS STYLE */

.status{

    display:inline-block;

    padding:12px 22px;

    border-radius:30px;

    font-weight:bold;

    font-size:15px;

}

/* PENDING */

.pending{

    background:#fff4d6;

    color:#f39c12;

}

/* PROSES */

.proses{

    background:#dff4ff;

    color:#3498db;

}

/* SELESAI */

.selesai{

    background:#d9ffe8;

    color:#27ae60;

}

/* =========================
   ANIMATION
========================= */

@keyframes fadeIn{

    from{

        opacity:0;

        transform:translateY(20px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:900px){

    .detail-card{

        grid-template-columns:1fr;

    }

}

@media(max-width:768px){

    .detail-header{

        flex-direction:column;

        align-items:flex-start;

    }

    .detail-header h2{

        font-size:28px;

    }

    .detail-card{

        padding:20px;

    }

}

</style>