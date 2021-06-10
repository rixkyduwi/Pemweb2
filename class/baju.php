<?php
Class Baju{
private $nama;
private $bahan;
private $cindung;
private $lengan;

function __construst($namabaju,$bahanbaju,$pakecindung,$bentuklengan){
    echo "menerima pesanan";
    $this->nama = $namabaju;
    $this->bahan = $bahanbaju;
    $this->cindung= $pakecindung;
    $this->lengan= $bentuklengan;
}
function Show(){
    $buathodie = $this->nama;
    $itemArray = array ($buathodie =>array ('nama'=>$this->nama,'bahan'=>$this->bahan,
    'cindung'=>$this->cindung,'bentuklengan'=>$this->lengan));
    if (!empty($_SESSION['daftar_baju'])){
        $itemcheck=$_SESSION['daftar_baju'];
        if(in_array($buathodie,array_column($itemcheck,'nama'))){

        }else{
            $_SESSION['daftar_baju']=array_merge($_SESSION['daftar_baju'],$itemArray);
        }
    }else{
        $_SESSION['daftar_baju']=$itemArray;
    }
}
}
?>