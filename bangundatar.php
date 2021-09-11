<?php
$bangundatar =[
   'bangun datar'=>'segitiga','luas segitiga' => ['rumus luas segitiga = 1/2 alas x tinggi',
   'alas =' .$alas=12,
   'tinggi =' .$tinggi=10,
   'luas segitiga adalah =' .$sgtg=1/2*$alas*$tinggi.'cm'],
   'keliling segitiga' => [
       'rumus keliling segitiga = s + s + s',
       'sisi ='.$sisi=10,
       'keliling segitiga adalah =' .$ks=$sisi*$sisi*$sisi.'cm'],
       'persegi','luas persegi' => ['rumus luas persegi = sisi x sisi',
       'sisi=' .$s=5,
       'luas persegi adalah =' .$prsg=$s*$s.'cm'],
       'keliling persegi' => [
           'rumus keliling persegi = 4s',
           'sisi ='.$ss=10,
           'keliling segitiga adalah =' .$kp=$ss*$ss*$ss*$ss.'cm'],
           'persegi panjang','luas persegi panjang' => ['rumus luas persegi panjang = panjang x lebar',
           'panjang=' .$p=5,
           'lebar =' .$l=10,
           'luas persegi adalah =' .$prsgp=$p*$l.'cm'],
           'keliling persegi panjang' => [
               'rumus keliling persegi panjang = 2(p+l)',
               'panjang=' .$pj=5,
           'lebar =' .$lb=5,
               'keliling segitiga adalah =' .$kpp=2*($pj+$lb).'cm'],
               'lingkaran','luas persegi lingkaran' => ['rumus luas lingkaran = 3.14 * r * r',
           'jari - jari =' .$j=14,
           'luas persegi adalah =' .$lkrn=3.14*$j*$j.'cm'],
           'keliling lingkaran' => [
               'rumus keliling lingkaran = 2 * 3.14 * r',
               'jari - jari=' .$jari=7,
               'keliling lingkaran adalah =' .$kl=2*3.14*$jari.'cm'],
   ];

foreach($bangundatar as $key => $value);

?>
