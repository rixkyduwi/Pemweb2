<?php
//cara manual
$nama = "hodie";
$bahan = "kain";
$cindung = "pakecindung";
$lengan = "lenganpendek";
require_once "class/baju.php";
$hodie = new Baju($nama, $bahan, $cindung, $lengan);
$hodie->Show();
?>

<!-- cara pake table html
<html>

<head></head>

<body>
    <form action="">
        <span>masukan nama anda</span><br>
        <input type="text" name="namasaya"> </input><br>
        <span>masukan nama pesanan baju</span><br>
        <input type="text" name="baju"> </input><br>
        <input type="submit"> </input>
    </form>
</body>

</html> -->

