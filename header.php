<!-- tajuk sistem -->
<h1>SISTEM KEHADIRAN KELAB PING PONG</h1>
<p>Sistem Pengesahan Kehadiran Ahli</p>
<hr>

<?PHP 
if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "ADMIN") { ?>
    <!-- menu admin : dipaparkan sekiranya admin telah login -->
    | <a href='index.php'               >Laman Utama</a>
    | <a href='profil.php'              >Profil</a>
    | <a href='kehadiran-rekod.php'     >Kaunter Kehadiran</a>
    | <a href='senarai-ahli.php'        >Senarai Ahli</a>
    | <a href='senarai-aktiviti.php'    >Senarai Aktiviti</a>
    | <a href='kehadiran-laporan.php'   >Laporan Kehadiran</a>
    | <a href='logout.php'              >Logout</a>
    | <hr>
<?php } else if(!empty($_SESSION['tahap']) and $_SESSION['tahap'] == "AHLI BIASA") {?>\
    <!-- menu ahli biasa : dipaparkan sekiranya ahli telah login -->
    | <a href='index.php'               >Laman Utama</a>
    | <a href='profil.php'              >Profil</a>
    | <a href='logout.php'              >Logout</a>
    | <hr>
<?php } else { ?>
    <!-- menu laman utama : dipaparkan sekiranya admin atau ahli tidak login -->
    | <a href='index.php'               >Laman Utama</a>
    | <a href='login-borang.php'               >Daftar Masuk Ahli</a>
    | <hr>
<?php } ?>
