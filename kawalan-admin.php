<?php
# menyemak nilai pembolehubah session['tahap']
if(!empty($_SESSION['tahap'])){
    if($_SESSION['tahap'] !="ADMIN")
    {
        #jika nilai tidak sama dengan AHLI BIASA. aturcara akan tamat
        die("<script>alert('sila login');
        window.location.href='logout.php';</script>");
    }
}else{
    #jika nilai session empty
    die("<script>alert('sila login');
    window.location.href='logout.php';</script>");
}
?>