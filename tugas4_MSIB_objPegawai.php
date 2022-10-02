<?php
require 'ClassPegawai.php';

$kriz = new Pegawai('2053010001', 'krizna pandu', 'Manager', 'hindu', 'menikah');
$indri = new Pegawai('2053010002', 'indriani kusuma', 'Manager', 'islam', 'belum menikah');
$guntur = new Pegawai('2053010003', 'guntur rifai', 'asisten manager', 'kristen', 'menikah');
$andrian = new Pegawai('2053010004', 'andriansyah', 'Staff', 'krislam', 'belum menikah');
$lukman = new Pegawai('2053010005', 'lukman nul hakim', 'kepala bagian', 'islam', 'belum menikah');

echo '<h2 align="center">'.Pegawai::title.'</h3><br />';
$kriz->mencetak();
$indri->mencetak();
$guntur->mencetak();
$andrian->mencetak();
$lukman->mencetak();
echo 'Jumlah Pegawai : '.Pegawai::$jumlah.' orang';
?>