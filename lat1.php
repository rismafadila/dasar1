<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lingkaran</title>
    
</head>
<fieldset>
    <legend>Fungsi perhitungan luas dan keliling Lingkaran</legend>
<body>
<form action="" method="POST">
<tr>
    <td>Jari - jari</td>
    <td>:</td>
    <td><input type=text name=jari></td>
   </tr>
   <tr>
    <td>
   <input type="submit" name="submit" value="Submit" /></td> </tr><br>
   <?php
   if(isset($_POST['submit'])){
            $a = $_POST['jari'];
//optional parameter/default parameter
function luasLingkaran($jari , $phi=3.14)
{
    $luas = $phi * $jari * $jari;
    return $luas;
}
function kelilingLingkaran($jari , $phi=3.14)
{
    $keliling = 2 * ($phi * $jari);
    return $keliling;
}
echo "jari =".$a ."<br>";
echo "Luas Lingkaran =".luaslingkaran($a) ."<br>";
echo "Keliling Lingkaran =".kelilinglingkaran($a) ."<br>";
   }
?>

</fieldset>
</body>
</html>
    </fieldset>
</body>
</html>