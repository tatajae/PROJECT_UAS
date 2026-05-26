<?php

if(isset($_GET['menu'])){

    $menu = $_GET['menu'];

}else{

    $menu = "";

}

if($menu == "dashboard"){

    include "dashboard.php";

}

else if($menu == "laporan"){

    include "laporan.php";

}

else if($menu == "detail_laporan"){

    include "detail_laporan.php";

}

else if($menu == "hapus_laporan"){

    include "hapus_laporan.php";

}

else if($menu == "update_status"){

    include "update_status.php";

}

else if($menu == "user"){

    include "user.php";

}

else if($menu == "tambah_user"){

    include "tambah_user.php";

}

else if($menu == "edit_user"){

    include "edit_user.php";

}

else if($menu == "hapus_user"){

    include "hapus_user.php";

}

else if($menu == "peta"){

    include "peta.php";

}

else if($menu == "grafik"){

    include "grafik.php";

}

else{

    include "home.php";

}

?>
