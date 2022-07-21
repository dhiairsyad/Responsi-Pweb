<?php  
$nama = $_POST['nama'];
$nomor = $_POST['nomor'];
$hari = $_POST['hari'];
$pilih = $_POST['pilih'];

$fp = fopen("invoice.txt", "a+");
fputs($fp,"DATA REGISTRASI RENTAL MOBIL\n");
fputs($fp,"===============================\n");
fputs($fp,"Nama            : $nama\n");
fputs($fp,"Nomor           : $nomor\n");
fputs($fp,"Tipe Mobil      : $pilih\n");
fputs($fp,"Jumlah Hari     : $hari\n");
fputs($fp,"===============================\n");
fclose($fp);

echo "Output terkirim";
echo '<a href="index.html">Halaman Awal</a></br></br>';
 ?>