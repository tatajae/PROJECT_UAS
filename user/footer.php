<!-- =========================
     FOOTER
========================= -->

<style>

.footer{

    background:
    linear-gradient(
        135deg,
        #5db9ff,
        #3498db
    );

    color:white;

    padding:50px 0 20px;

    margin-top:60px;

    position:relative;

    overflow:hidden;

    box-shadow:
    0 -5px 15px rgba(0,0,0,0.1);

}

/* CORAK JEANS */

.footer::before{

    content:"";

    position:absolute;

    top:0;
    left:0;

    width:100%;
    height:100%;

    background-image:

    repeating-linear-gradient(
        45deg,
        rgba(255,255,255,0.07),
        rgba(255,255,255,0.07) 2px,
        transparent 2px,
        transparent 12px
    );

    pointer-events:none;

}

.footer-container{

    width:90%;

    margin:auto;

    position:relative;

    z-index:2;

}

.footer-row{

    display:flex;

    justify-content:space-between;

    flex-wrap:wrap;

    gap:30px;

}

.footer-col{

    flex:1;

    min-width:250px;

}

.footer-title{

    font-size:22px;

    font-weight:bold;

    margin-bottom:20px;

}

.footer-text{

    line-height:1.8;

    color:#f1f1f1;

}

.footer-menu{

    list-style:none;

    padding:0;

}

.footer-menu li{

    margin-bottom:12px;

}

.footer-menu a{

    color:white;

    text-decoration:none;

    transition:0.3s;

}

.footer-menu a:hover{

    color:#dff6ff;

    padding-left:5px;

}

.social-box{

    margin-top:15px;

}

.social-box a{

    display:inline-block;

    width:40px;

    height:40px;

    line-height:40px;

    text-align:center;

    border-radius:50%;

    background:rgba(255,255,255,0.2);

    color:white;

    text-decoration:none;

    margin-right:10px;

    transition:0.3s;

    font-size:18px;

}

.social-box a:hover{

    background:white;

    color:#3498db;

    transform:translateY(-3px);

}

.footer-bottom{

    text-align:center;

    margin-top:40px;

    padding-top:20px;

    border-top:
    1px solid rgba(255,255,255,0.3);

    font-size:14px;

    color:#f1f1f1;

}

/* RESPONSIVE */

@media(max-width:768px){

.footer-row{

    flex-direction:column;

}

}

</style>

<footer class="footer">

<div class="footer-container">

<div class="footer-row">

<!-- ABOUT -->

<div class="footer-col">

<h3 class="footer-title">
🚗 ParkWatch
</h3>

<p class="footer-text">

Platform pelaporan parkir liar berbasis GPS realtime
untuk membantu masyarakat melaporkan kendaraan
yang mengganggu ketertiban umum secara cepat
dan mudah.

</p>

</div>

<!-- MENU -->

<div class="footer-col">

<h3 class="footer-title">
📌 Menu
</h3>

<ul class="footer-menu">

<li>
<a href="index.php">
🏠 Home
</a>
</li>

<li>
<a href="index.php?menu=kirim_laporan">
📍 Kirim Laporan
</a>
</li>

<li>
<a href="index.php?menu=riwayat">
📋 Riwayat
</a>
</li>

<li>
<a href="index.php?menu=peta">
🗺 Peta
</a>
</li>

</ul>

</div>

<!-- CONTACT -->

<div class="footer-col">

<h3 class="footer-title">
📞 Contact
</h3>

<p class="footer-text">

📍 Cirebon, Indonesia <br>
📧 parkwatch@gmail.com <br>
📱 0812-3456-7890

</p>

<div class="social-box">

<a href="#">
🌐
</a>

<a href="#">
📘
</a>

<a href="#">
📷
</a>

<a href="#">
🎵
</a>

</div>

</div>

</div>

<!-- COPYRIGHT -->

<div class="footer-bottom">

© 2026 ParkWatch — Sistem Pelaporan Parkir Liar

</div>

</div>

</footer>