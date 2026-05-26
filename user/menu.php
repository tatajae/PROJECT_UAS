<?php

if(isset($_GET['menu'])){

    $menu = $_GET['menu'];

}else{

    $menu = "";

}

/* =========================
   ROUTING MENU
========================= */

if($menu == "kirim_laporan"){

    include "kirim_laporan.php";

}

else if($menu == "riwayat"){

    include "riwayat.php";

}

else if($menu == "detail_riwayat"){

    include "detail_riwayat.php";

}

else if($menu == "edit_laporan"){

    include "edit_laporan.php";

}

else if($menu == "hapus_laporan"){

    include "hapus_laporan.php";

}

else if($menu == "peta"){

    include "peta.php";

}

else{
    include "home.php";
}
?>