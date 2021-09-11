<?php
$bangundatar = array(  
    array('segitiga', 'rumus luas segitiga = 1/2 alas x tinggi',
                         'alas ='.$alas=15 ,
                         'tinggi =' .$tinggi=10,
                         'jadi,luas segitiga adalah =' .$sgtg=1/2*$alas*$tinggi.'cm',
                         'rumus keliling segitiga = s + s + s ,sisi ='.$sisi=10,
                         'jadi,keliling segitiga adalah =' .$ks=$sisi*$sisi*$sisi.'cm'),
  array('persegi', 'rumus luas persegi = sisi x sisi',
                         'sisi=' .$s=5,
                         'jadi,luas persegi adalah =' .$prsg=$s*$s.'cm',
                         'rumus keliling persegi = 4s',
                         'sisi ='.$ss=10,
                         'jadi,keliling persegi adalah =' .$kp=$ss*$ss*$ss*$ss.'cm'),
array('persegi panjang', 'rumus luas persegi = panjang x lebar, panjang ='.$p=5,
                         'lebar='.$l=10,
                        'jadi,luas persegi adalah =' .$prsgp=$p*$l.'cm',
                         'rumus keliling persegi panjang = 2(p+l) ,panjang =' .$pj=5,
                        'lebar ='.$lb=8,
                         'jadi,keliling persegi panjang adalah =' .$kpp=2*($pj+$lb).'cm'),
array('Lingkaran', 'rumus luas lingkaran = 3.14 * r * r',
                         'jari - jari =' .$j=14,
                         'jadi,luas lingkaran adalah =' .$lkrn=3.14*$j*$j.'cm',
                        'rumus keliling lingkaran = 2 * 3.14 * r',
                         'jari - jari=' .$jari=7,
                         'jadi,keliling lingkaran adalah =' .$kl=2*3.14*$jari.'cm'
                        ),
                           
);

foreach($bangundatar as $key => $value){
    echo "<li>$value[0] <br> $value[1] <br> $value[2], $value[3] <br> $value[4] <br> $value[5] <br> $value[6] <br></li>";
    
    echo "<br>";
    }
?>