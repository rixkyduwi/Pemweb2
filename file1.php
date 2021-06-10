<?php
$i=100;
$y=40;
$hasil=$i+$y;
//echo $hasil;
?>
<?php
function tambah1(){
    $i=100;
    $y=40;
    $hasil=$i+$y;
    echo $hasil;
}
//tambah2();
?>
<?php
function tambah2($i,$y){
    $hasil=$i+$y;
    return $hasil;
}
$result=tambah2(12,2);//menggunakan variable karena ada return statement
//echo $result;
?>
<?php
class hitung{
    function tambah3($i,$y){
        $hasil=$i+$y;
        return $hasil;
    }
}
$data = new hitung();
$result = $data -> tambah3(101,50);
echo $result;
?>
