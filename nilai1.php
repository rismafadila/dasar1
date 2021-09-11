<html>
 <head>
  <title>cetaknilai</title>
 </head>
 <link rel="stylesheet" href="styleku.css"/>
 <body>
   <fieldset>
     <legend>Cetak Nilai Siswa</legend>
 <?php
 if(isset($_POST['submit'])){
  $nama=$_POST['nama'];
  $nis=$_POST['nis'];
  $nilai=@$_POST['nilai'];
  $pai=$_POST['pai'];
  $pkn=$_POST['pkn'];
  $bid=$_POST['bid'];
  $pkk=$_POST['pkk'];
  $aqn=$_POST['aqn'];
  $bkn=@$_POST['bkn'];
  $rpl=$_POST['rpl'];
  $tkj=$_POST['tkj'];
  $mtk=$_POST['mtk'];
  $big=$_POST['big'];
  
  
  
     // looping datanya
     $nilai  = ["Pendidikan Agama Islam" => $pai,
     "PPKN" => $pkn,"Bahasa Indonesia" => $bid,
     "Matematika" => $mtk,"Bahasa Inggris" => $big,
     "Produk Kreatif dan Kewirausahaan" => $pkk,
     "Al-quran" => $aqn,"Bimbingan Konseling" => $bkn,"Produktif RPL"=> $rpl,"Produktif TKJ"=> $tkj];
     echo"
     <center>
     <h1>SMK ASSALAAM BANDUNG<br>
     Tahun 2021/2022</h1><br>
    <tr>
    
   <td>Nama</td>
        <td>:</td>
        <td>$nama</td>
        </tr>
        <br>
        <tr>
     <td>Nis</td>
        <td>:</td>
        <td>$nis</td>
        </tr>";
     
     
     echo "<table border='2' align='center'>";
     echo "<tr>";
     echo "<th>No</th>";
     echo "<th>Mata Pelajaran</th>";
     echo "<th >Grade</th>";
     echo "</tr>";
     $i=1;
     $total=0;
     $grade="";
     foreach($nilai as $key => $value){
     if($value >= 85 && $value <= 100){
      $grade = 'A';
$total=$total + 4;
  }else if($value >=70 && $value <=85 ){
   $grade = 'B';
   $total=$total + 3;
  }else if($value >= 60 && $value <= 70){
   $grade = 'C';
   $total=$total + 2;
  }else if($value >=40 && $value <= 60){
   $grade = 'D';
   $total=$total + 1;
  }else if($value> 0 && $value <= 40){
   $grade = 'E' ;
   $total=$total + 0;
  }

     
       echo "<tr>
       <td>$i</td>
       <td>$key</td>
       <td>$grade</td>
       </tr>";
       $i++;
     }
     
     echo "</table><br>
     <center> <b>Nilai rata-rata anda adalah :".($total/10)."
     ";
      
 
    }
 ?>
 
  
 </table>

 </fieldset>
</body>
</html>