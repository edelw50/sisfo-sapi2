<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


//halaman awal
if(isset($_GET['login'])){ 
    include'login.php';
}
 if(isset($_GET['logout'])){ 
include'logout.php';
} 
if(isset($_GET['lupa-sandi'])){ 
include'reset.php';
}

if(!isset($_COOKIE['id_user']))
{
    if(!isset($_GET['login']) && !isset($_GET['logout']) && !isset($_GET['lupa-sandi'])){
        header('Location: /page.php?login');
    }
}

//halaman admin
if(isset($_GET['admin-home'])){ 
include'admin/home.php';
} 
if(isset($_GET['admin-daftar-user'])){ 
include'admin/daftar-user.php';
}
if(isset($_GET['admin-daftar-jenis'])){ 
    include'admin/daftar-jenis.php';
}
if(isset($_GET['admin-daftar-pakan'])){ 
    include'admin/daftar-pakan.php';
}
if(isset($_GET['admin-daftar-vaksin'])){ 
    include'admin/daftar-vaksin.php';
}
if(isset($_GET['admin-daftar-history'])){ 
    include'admin/daftar-history.php';
}


//halaman peternak
if(isset($_GET['peternak-home'])){ 
include'peternak/home.php';
}
if(isset($_GET['peternak-daftar-sapi'])){ 
include'peternak/daftar-sapi.php';
}
if(isset($_GET['peternak-daftar-jenis'])){ 
include'peternak/daftar-jenis.php';
}
if(isset($_GET['peternak-daftar-pakan'])){ 
include'peternak/daftar-pakan.php';
}
if(isset($_GET['peternak-daftar-vaksin'])){ 
include'peternak/daftar-vaksin.php';
}
if(isset($_GET['peternak-daftar-indukan'])){ 
    include'peternak/daftar-indukan.php';
}
if(isset($_GET['peternak-history'])){ 
include'peternak/daftar-history.php';
}  

//halaman view
if(isset($_GET['view'])){
include'view/view.php';
}
if(isset($_GET['view-induk'])){
include'view/indukan.php';
}

//download
if(isset($_GET['download'])){
    include'download.php';
    }
?>
