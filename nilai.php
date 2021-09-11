<!DOCTYPE html>
<html>
    
<head>
    <title>form nilai</title>
    <link rel="stylesheet" href="styleku.css"/>
</head>

<body>
    <form action="nilai1.php" method="POST">
        <fieldset>
            <legend>SMK ASSALAAM BANDUNG</legend>
    <table align="center">
    <h3 align="center">Form Cetak Nilai Siswa </h3>
    <h1 align="center">SMK ASSALAAM BANDUNG</h1>
    <h3 align="center">Tahun 2021/2022 </h3>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Nis</td>
        <td>:</td>
        <td><input type="text" name="nis"></td>
    </tr>

    </table>
    <table border=2 align="center">
    <tr >
        <td class="risma">No</td>
        <td class="risma" align="center" > Mata Pelajaran</td>
        <td class="risma" align="center">Nilai</td>
    </tr>
    <tr>
        <td class="ma" align="center">1</td>
        <td class="m"> Pendidikan Agama Islam</td>
        <td><input type="text" name="pai"></td>
    </tr>
    <tr>
        <td class="ma" align="center">2</td>
        <td class="m"> PPKN</td>
        <td><input type="text" name="pkn"></td>
    </tr>
    <tr>
        <td class="ma" align="center">3</td>
        <td class="m"> Bahasa Indonesia</td>
        <td><input type="text" name="bid"></td>
    </tr>
    <tr>
        <td class="ma" align="center">4</td>
        <td class="m">Matematika</td>
        <td><input type="text" name="mtk"></td>
    </tr>
    <tr>
        <td class="ma" align="center">5</td>
        <td class="m"> Bahasa Inggris</td>
        <td><input type="text" name="big"></td>
    </tr>
    <tr>
        <td class="ma" align="center">6</td>
        <td class="m"> PKK</td>
        <td><input type="text" name="pkk"></td>
    </tr>
    <tr>
        <td class="ma" align="center">7</td>
        <td class="m"> Al-Quran</td>
        <td><input type="text" name="aqn"></td>
    </tr>
    <tr>
        <td class="ma" align="center">8</td>
        <td class="m"> Bimbingan konseling</td>
        <td><input type="text" name="bkn"></td>
    </tr>
    <tr>
        <td class="ma" align="center">9</td>
        <td class="m"> Produktif RPL</td>
        <td><input type="text" name="rpl"></td>
    </tr>
    <tr>
        <td class="ma" align="center">10</td>
        <td class="m">  Produktif TKJ</td>
        <td><input type="text" name="tkj"></td>
    </tr>
    </table>
    <tr>
        <td>
    <button type="submit" name="submit" value="submit">Cetak Nilai</button></td>
    </tr>
    </form>
    
    </fieldset>
</body>
</html>