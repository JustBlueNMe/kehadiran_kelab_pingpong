<?php
#mula fungi session
session_start();

#memanggil fail header.php 
include('header.php');
?>
<table width='100%' >
    <tr>
        <td width='70%' bgcolor='#7cB9E8' >
            <img src='./img/banner.png' width='100%'>
        </td>
        <td align='center' bgcolor'#afeeee'>
            <h3>Daftar Sebagai Ahli Kelab</h3>
            <h3>Klik Pautan Di Bawah Untuk Mendaftar</h3>
            <a href='sign-borang.php'>Daftar Sini</a>
        </td>
    </tr>
</table>
<?php include('footer.php'); ?>