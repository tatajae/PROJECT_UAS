<!-- =========================
     MODERN ADMIN FOOTER
========================= -->

<style>

/* FOOTER WRAPPER */
.admin-footer{

    margin-top:40px;

    padding:25px 30px;

    border-radius:28px;

    background:
    linear-gradient(
        135deg,
        #4facfe,
        #00c6fb,
        #43e97b
    );

    background-size:300% 300%;

    animation:footerGlow 8s ease infinite;

    display:flex;

    justify-content:space-between;

    align-items:center;

    flex-wrap:wrap;

    color:white;

    position:relative;

    overflow:hidden;

    box-shadow:0 15px 35px rgba(0,0,0,0.12);

}

/* ANIMASI BACKGROUND */

@keyframes footerGlow{

    0%{background-position:0% 50%;}
    50%{background-position:100% 50%;}
    100%{background-position:0% 50%;}

}

/* DECORATION CIRCLE */

.admin-footer::before,
.admin-footer::after{

    content:"";

    position:absolute;

    border-radius:50%;

    background:rgba(255,255,255,0.15);

}

.admin-footer::before{

    width:180px;

    height:180px;

    top:-60px;

    right:-60px;

}

.admin-footer::after{

    width:120px;

    height:120px;

    bottom:-40px;

    left:-40px;

}

/* LEFT TEXT */

.footer-left{

    z-index:2;

}

.footer-left h4{

    margin:0;

    font-size:18px;

    font-weight:900;

    display:flex;

    align-items:center;

    gap:10px;

}

.footer-left p{

    margin:5px 0 0 0;

    font-size:13px;

    opacity:0.9;

}

/* RIGHT TEXT */

.footer-right{

    text-align:right;

    z-index:2;

}

.footer-right p{

    margin:0;

    font-weight:bold;

    font-size:14px;

}

.footer-right span{

    font-size:12px;

    opacity:0.9;

}

/* ICON ANIMATED */

.footer-icon{

    display:inline-block;

    animation:floatIcon 3s ease-in-out infinite;

}

@keyframes floatIcon{

    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-5px);}

}

/* RESPONSIVE */

@media(max-width:768px){

    .admin-footer{

        flex-direction:column;

        text-align:center;

        gap:15px;

    }

    .footer-right{

        text-align:center;

    }

}

</style>

<!-- FOOTER -->

<div class="admin-footer">

    <div class="footer-left">

        <h4>
            <span class="footer-icon">🚗</span>
            ParkWatch Admin
        </h4>

        <p>
            Sistem monitoring pelanggaran parkir liar realtime
        </p>

    </div>

    <div class="footer-right">

        <p>
            © <?= date('Y'); ?> ParkWatch
        </p>

        <span>
            Made with 💙 for Admin System
        </span>

    </div>

</div>