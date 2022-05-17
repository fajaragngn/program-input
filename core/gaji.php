<?php 
$pkj = $_POST['pkj'];

if($pkj == 'Dokter'){
    $gaji = 10000000;
}elseif ($pkj == 'Programmer') {
    $gaji = 20000000;
}elseif ($pkj == 'Guru') {
    $gaji = 5000000;
}else{
    $gaji= 0;
}
$gaji = number_format($gaji,2);
echo $gaji;
?>

