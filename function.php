<?php
function namafungsi(){
    echo 'Assalamualaikum<br>';
    echo"perkenalkan nama Risma<br>";
    echo 'senang berkenalan dengan anda<br>';
}
namafungsi();

function perkenalan($nama,$salam){
    echo $salam.",";
    echo "perkenalkan nama saya ".$nama."<br>";
    echo "senang berkenalan dengan anda";
}
echo"<hr>";
perkenalan("risma","Hi");
echo "<hr>";
$saya ="indry";
$ucapansalam ="selamat pagi";

perkenalan($saya,$ucapansalam);
echo "<hr>";

function umur($lahir,$sekarang){
    $hasil =$sekarang - $lahir;
    return $hasil;
}
echo "umur saya adalah ".umur(2003,2021) ." tahun";
echo "<hr>";
function faktorial($angka){
    if($angka < 2){
        return 1;
    }else{
        return ($angka * faktorial($angka-1));
        }
}
echo "faktorial 5 adalah ".faktorial(5);
?>