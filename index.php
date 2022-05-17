<html>
<head>
<title>Program Sederhana</title>
</head>
<body>
  <h1>Program Sederhana</h1>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir"><br></td>
      </tr>
      <tr>
      <tr>
        <td>pekerjaan</td>
        <td>:</td>
        <td>
        <select name="pkj" autofocus>
          <option></option>
          <option value="Dokter">Dokter</option>
          <option value="Programmer">Programmer</option>
          <option value="Guru">Guru</option>
        </select>
        </td>
      </tr>
        <td><input type="submit"></td>
      </tr>
    </table>
</form>

<!--?php 
$pkj = $_POST['pkj'];

if($pkj == 'Dokter'){
    $gaji = 'Rp.10,000,000,00 /Bulan';
}elseif ($pkj == 'Programmer') {
    $gaji = 'Rp.20,000,000,00 /Bulan';
}elseif ($pkj == 'Guru') {
    $gaji = 'Rp.5,000,000,00 /Bulan';
}else{
    $gaji= 'Rp.0 /Bulan';
}

$tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
$sekarang = new DateTime("today");
if ($tanggal_lahir > $sekarang) { 
  $tgl = "0";
  $bln = "0";
  $thn = "0";
}
$tgl = $sekarang->diff($tanggal_lahir)->d;
$bln = $sekarang->diff($tanggal_lahir)->m;
$thn = $sekarang->diff($tanggal_lahir)->y;

?-->

<table>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><? echo $_POST['nama'] ?></td>
  </tr>
  <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><? echo $_POST['tanggal_lahir'] ?></td>
  </tr>
  <tr>
    <td>Umur</td>
    <td>:</td>
    <td><?php include 'core/umur.php' ?> Tahun</td>
  </tr>
  <tr>
    <td>Pekerjaan</td>
    <td>:</td>
    <td><? echo $_POST['pkj'] ?></td>
  </tr>
  <tr>
    <td>Gaji</td>
    <td>:</td>
    <td>Rp.<?php include 'core/gaji.php' ?> /Bulan</td>
  </tr>
</table>



</body>
</html>
