<?php
echo "1.Output array dengan menggunakan perintah PRINT_R";
$array=[];
$array[]='indonesia';
$array[]='malaysia';
$array[]='singapura';
$array[]='brunei darussalam';
$array[]='filipina';
echo "<pre>";
print_r($array);
    

echo"<hr>";
echo "2. Output array assosiatif";
echo "<br>";
$assosiatif=['Indonesia' => 'Jakarta',
'Malaysia' => 'Kuala lumpur',
'Singapura' => 'Singapura',
'Thailand' => 'Bangkok',
'Filipina' => 'Manila',];
foreach($assosiatif as $key => $value){
echo "<li> Ibukota $key adalah $value";
echo "<br>";
}

?>