<?php
$datajson = "[5,3,4,2,1]";

$data = json_decode($datajson);
echo implode("-",$data); 

 echo "<hr>";
$json='{
"nama": "nurul huda",
"domisili": "surabaya",
"usia": 23,
"wni": true,
"hobi": [
    "berenang","berlari","bertamasya"]

}';
$mahasiswa =json_decode($json);
echo "nama : {$mahasiswa -> nama} <br>";
echo "domisili : {$mahasiswa -> domisili} <br>";
echo "hobi :".implode(",",$mahasiswa->hobi);

echo "<hr>";
$mahasiswa =[
    'nama' => 'nurul huda',
    'domisili' => 'surabaya'
];
echo json_encode($mahasiswa);

echo"<hr>";

$listmahasiswajson ='[
    {"nama": "nurul huda"},
    {"nama": "renza ilhami risqi"},
    {"nama": "taufan aji"},
    {"nama": "rahmad dwi oktanto"}
    ]';
    $listmahasiswa =json_decode($listmahasiswajson);
    foreach ($listmahasiswa as $key => $mahasiswa){
        echo"{$key}. nama : {$mahasiswa -> nama} <br>";
    }
?>