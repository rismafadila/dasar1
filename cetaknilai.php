<!DOCTYPE html>
<html lang="en">
<head>
    <title>cetaknilai</title>
    <link rel="stylesheet" href="styleku.css"/>
</head>
<body>
    <fieldset>
        <legend>NILAI</legend>
    <?php
if(isset($_POST['submit'])){
    $nama=$_POST['nama'];
    $nis=$_POST['nis'];
    $nilai=$_POST['nilai'];

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
        
    $mapel  = array(",","Pendidikan Agama Islam","PPKN","Bahasa Indonesia","Matematika","Bahasa Inggris",
    "Produk Kreatif dan Kewirausahaan","Al-quran","Bimbingan Konseling","Produktif RPL","Produktif TKJ");
     $siswa = count($mapel);
     
     echo "<table border='2' align='center'>";
     echo "<tr>";
     echo "<th>No</th>";
     echo "<th>Mata Pelajaran</th>";
     echo "<th >Grade</th>";
     echo "</tr>";
     // looping datanya
     $i=1;
     $hasil=0;
     $grade="";
     $nilai;
     
     if($nilai > 85 && $nilai <= 100){
      $grade = 'A';
$hasil =$hasil + 4;

  }else if($nilai >70 && $nilai <=85 ){
   $grade = 'B';
   $hasil =$hasil + 3;
  }else if($nilai > 60 && $nilai <= 70){
   $grade = 'C';
   $hasil =$hasil + 2;
  }else if($nilai >40 && $nilai <= 60){
   $grade = 'D';
   $hasil =$hasil + 1;
  }else if($nilai > 0 && $nilai <= 40){
   $grade = 'E'  ;
   $hasil =$hasil + 0;
  }
     
     for ($i=1; $i < $siswa; $i++) { 
       echo "<tr>";
       echo "<td>$i</td>";
       echo "<td>$mapel[$i]</td>";
       echo "<td>$grade</td>";
       echo "</tr>";
     }
    
     echo "</table><br>
     <center> <b>Nilai rata-rata anda adalah :".($hasil/10)."
     ";
    }

    ?>
    </fieldset>
</body>
</html>