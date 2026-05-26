<!-- =========================
     CONTENT
========================= -->

<div class="content">

    <!-- =========================
         TOPBAR
    ========================= -->

    <div class="topbar">

        <!-- LEFT -->

        <div class="topbar-left">

            <div class="title-icon">
                <i class="fa-solid fa-chart-line"></i>
            </div>

            <div>

                <h1>
                    Admin Panel
                </h1>

                <p>
                    Monitoring sistem pelaporan parkir liar secara realtime
                </p>

            </div>

        </div>

        <!-- RIGHT PROFILE -->

        <div class="profile">

            <div class="profile-ring">

                <div class="profile-icon">

                    <i class="fa-solid fa-user"></i>

                </div>

            </div>

            <div class="profile-text">

                <h5>
                    <?= $_SESSION['nama']; ?>
                </h5>

                <span>
                    Administrator
                </span>

            </div>

        </div>

    </div>

    <!-- =========================
         WELCOME BOX
    ========================= -->

    <div class="welcome-box">

        <!-- EFFECT -->

        <div class="circle-1"></div>
        <div class="circle-2"></div>

        <div class="welcome-content">

            <div class="welcome-text">

                <span class="badge-admin">
                    🚀 DASHBOARD ADMIN
                </span>

                <h2>
                    👋 Selamat Datang, Admin!
                </h2>

                <p>
                    Kelola laporan parkir liar, pantau lokasi pelanggaran,
                    validasi data pengguna, dan monitoring aktivitas sistem
                    secara realtime dengan tampilan modern.
                </p>

                <div class="welcome-buttons">

                    <a href="index.php?menu=laporan">

                        <i class="fa-solid fa-file-circle-exclamation"></i>

                        Lihat Laporan

                    </a>

                    <a href="index.php?menu=grafik">

                        <i class="fa-solid fa-chart-column"></i>

                        Statistik

                    </a>

                </div>

            </div>

            <!-- ICON BESAR -->

            <div class="welcome-illustration">

                <div class="glass-icon">

                    <i class="fa-solid fa-car-side"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =========================
     STYLE
========================= -->

<style>

/* =========================
   TOPBAR
========================= */

.topbar{

    background:
    linear-gradient(
        135deg,
        rgba(255,255,255,0.95),
        rgba(255,255,255,0.85)
    );

    border-radius:30px;

    padding:25px 30px;

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:30px;

    box-shadow:
    0 10px 25px rgba(0,0,0,0.08);

    backdrop-filter:blur(10px);

    border:1px solid rgba(255,255,255,0.4);

    flex-wrap:wrap;

    gap:20px;

}

/* LEFT */

.topbar-left{

    display:flex;

    align-items:center;

    gap:18px;

}

/* ICON */

.title-icon{

    width:70px;

    height:70px;

    border-radius:22px;

    background:
    linear-gradient(
        135deg,
        #4facfe,
        #00c6fb
    );

    display:flex;

    justify-content:center;

    align-items:center;

    color:white;

    font-size:28px;

    box-shadow:
    0 10px 20px rgba(79,172,254,0.3);

}

/* TITLE */

.topbar h1{

    margin:0;

    font-size:32px;

    font-weight:900;

    color:#2d3436;

}

.topbar p{

    margin-top:5px;

    color:#777;

    font-size:15px;

}

/* =========================
   PROFILE
========================= */

.profile{

    display:flex;

    align-items:center;

    gap:15px;

    background:
    linear-gradient(
        135deg,
        #4facfe,
        #00c6fb
    );

    padding:12px 20px;

    border-radius:22px;

    color:white;

    box-shadow:
    0 10px 20px rgba(79,172,254,0.25);

}

/* PROFILE RING */

.profile-ring{

    padding:3px;

    border-radius:50%;

    background:
    linear-gradient(
        135deg,
        white,
        rgba(255,255,255,0.5)
    );

}

/* PROFILE ICON */

.profile-icon{

    width:50px;

    height:50px;

    border-radius:50%;

    background:white;

    color:#3498db;

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:20px;

}

/* PROFILE TEXT */

.profile-text h5{

    margin:0;

    font-weight:bold;

}

.profile-text span{

    font-size:13px;

    color:#eaf7ff;

}

/* =========================
   WELCOME BOX
========================= */

.welcome-box{

    position:relative;

    overflow:hidden;

    border-radius:35px;

    padding:45px;

    background:
    linear-gradient(
        135deg,
        #4facfe,
        #00c6fb,
        #43e97b
    );

    background-size:300% 300%;

    animation:gradientMove 8s ease infinite;

    box-shadow:
    0 15px 35px rgba(0,0,0,0.12);

    color:white;

}

/* ISI */

.welcome-content{

    display:flex;

    justify-content:space-between;

    align-items:center;

    gap:30px;

    flex-wrap:wrap;

    position:relative;

    z-index:2;

}

/* BADGE */

.badge-admin{

    display:inline-block;

    background:rgba(255,255,255,0.18);

    padding:10px 18px;

    border-radius:30px;

    font-size:13px;

    font-weight:bold;

    margin-bottom:20px;

    backdrop-filter:blur(8px);

}

/* TITLE */

.welcome-text h2{

    font-size:42px;

    font-weight:900;

    margin-bottom:15px;

}

.welcome-text p{

    max-width:650px;

    line-height:1.8;

    color:#f4fbff;

    font-size:16px;

}

/* BUTTON */

.welcome-buttons{

    margin-top:30px;

    display:flex;

    gap:15px;

    flex-wrap:wrap;

}

.welcome-buttons a{

    text-decoration:none;

    padding:14px 22px;

    border-radius:18px;

    font-weight:bold;

    transition:0.3s;

    display:flex;

    align-items:center;

    gap:10px;

}

/* BUTTON 1 */

.welcome-buttons a:first-child{

    background:white;

    color:#3498db;

}

/* BUTTON 2 */

.welcome-buttons a:last-child{

    background:rgba(255,255,255,0.15);

    color:white;

    border:1px solid rgba(255,255,255,0.2);

}

/* HOVER */

.welcome-buttons a:hover{

    transform:
    translateY(-4px)
    scale(1.03);

}

/* =========================
   ICON BESAR
========================= */

.welcome-illustration{

    display:flex;

    justify-content:center;

    align-items:center;

}

.glass-icon{

    width:180px;

    height:180px;

    border-radius:40px;

    background:rgba(255,255,255,0.15);

    border:1px solid rgba(255,255,255,0.2);

    backdrop-filter:blur(10px);

    display:flex;

    justify-content:center;

    align-items:center;

    font-size:75px;

    color:white;

    transform:rotate(-10deg);

    box-shadow:
    0 15px 30px rgba(0,0,0,0.12);

}

/* =========================
   EFFECT CIRCLE
========================= */

.circle-1{

    position:absolute;

    width:250px;

    height:250px;

    background:rgba(255,255,255,0.08);

    border-radius:50%;

    top:-80px;

    right:-50px;

}

.circle-2{

    position:absolute;

    width:180px;

    height:180px;

    background:rgba(255,255,255,0.08);

    border-radius:50%;

    bottom:-60px;

    left:-60px;

}

/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px){

    .topbar{

        flex-direction:column;

        align-items:flex-start;

    }

    .welcome-box{

        padding:30px;

    }

    .welcome-text h2{

        font-size:30px;

    }

    .glass-icon{

        width:130px;

        height:130px;

        font-size:55px;

    }

}

</style>