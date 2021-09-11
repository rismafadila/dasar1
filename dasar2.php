<?php
echo "1.Contoh program array numeric";
$jurusan =array('jurusan Teknik Informatika',
'Teknik Sistem Informasi',
'Jurusan Sistem Komputer',
'Jurusan Manajemen Informatika');

foreach($jurusan as $key => $value){
    echo "$value - ada di index $key";
    echo"<br>";
}
echo "<hr>";
echo "2.Contoh program array assosiatif";
echo "<br>";

$assosiatif=['jurusan1' => 'Teknik Informatika',
'jurusan2' => 'Sistem Informasi',
'jurusan3' => 'Teknik Komputer',
'jurusan4' => 'Manajemen Informatika'];
foreach($assosiatif as $key => $value){
echo "Kata kunci index = $key,Nilai = $value";
echo "<br>";
}
?>