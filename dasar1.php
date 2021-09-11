<?php
$array =[];
$array[]='one';
$array[]='two';
$array[]='three';
echo'<pre>';
print_r($array); 

echo"<br>";

$employee =['name' => 'john',
'email' => 'john@example.com',
'phone' => '1234567890',];
echo $employee['name'];
foreach($employee as $key => $value){
    echo $key .":".$value;
    echo"<br>";
}
?>