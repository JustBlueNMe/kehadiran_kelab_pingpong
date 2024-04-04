<?php
#menyemak nilai pemboleh ubah session['tahap']
if(!empty($_SESSION['tahap'])){
    if($_SESSION['tahap'] != "AHLI BIASA")
    {
        #jika nilai tidak sama dengan AHLI BIASA. Atur cara tamat
        die("<script>alert('sila login');
        window.location.href='logout.php';</script>");
    }
}else{
    #jika nilai session empty
    die("<script>alert('sila login');
    window.location.href='logout.php';</script>");
}
?>