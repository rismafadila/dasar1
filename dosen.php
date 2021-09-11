<?php
$kampus = [
    ["dosen" : "Danny Indra Gunawan" =>
    ["data" =>
    ["nim" => "1234"],
    ["nama" => "Nurul Huda"],
    ["umur" => "20"],
    ["email" => "Nurul@gmail.com"],

    ["nim" => "7658"],
    ["nama" => "adya"],
    ["umur" => "20"],
    ["email" => "eka@gmail.com"],

    ["nim" => "1924"],
    ["nama" => "tiara"],
    ["umur" => "20"],
    ["email" => "tiara@gmail.com"],

    ["nim" => "1564"],
    ["nama" => "abelina"],
    ["umur" => "21"],
    ["email" => "abel@gmail.com"],

    ["nim" => "1984"],
    ["nama" => "kayla"],
    ["umur" => "20"],
    ["email" => "kay@gmail.com"],

    
],
["dosen" => "Muhammad Sabar" =>
    ["data" =>
    ["nim" => "1235"],
    ["nama" => "renza ilhami risqi"],
    ["umur" => "21"],
    ["email" => "risqi@gmail.com"],

    ["nim" => "1985"],
    ["nama" => "meylani"],
    ["umur" => "21"],
    ["email" => "mey@gmail.com"],

    ["nim" => "1465"],
    ["nama" => "adzura"],
    ["umur" => "21"],
    ["email" => "jura@gmail.com"],

    ["nim" => "1786"],
    ["nama" => "lira"],
    ["umur" => "21"],
    ["email" => "raa@gmail.com"],

    ["nim" => "1546"],
    ["nama" => "seni"],
    ["umur" => "21"],
    ["email" => "seni@gmail.com"],
    ],

    ["nim" => "1546"],
    ["nama" => "seni"],
    ["umur" => "21"],
    ["email" => "seni@gmail.com"],
    ],

    ],
],
],
["dosen" => "Tarsinah Sumarni" =>
    ["data" =>
    ["nim" => "1345"],
    ["nama" => "taufan aji"],
    ["umur" => "21"],
    ["email" => "aji@gmail.com"]],
],
["dosen" => "Saepudin" =>
    ["data" =>
    ["nim" => "3456"],
    ["nama" => "rahmad"],
    ["umur" => "20"],
    ["email" => "rahmad@gmail.com"]],
],


]

$mahasiswa =json_decode($kampus);
foreach($mahasiswa as $key => $siswa){
    echo $siswa['dosen'];
}

?>