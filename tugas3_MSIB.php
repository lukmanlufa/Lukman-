<?php
$m1 = ['nim' => '2053010001', 'nama' => 'Adi Samsara', 'nilai' => 20];
$m2 = ['nim' => '2053010002', 'nama' => 'Rivaldo', 'nilai' => 50];
$m3 = ['nim' => '2053010003', 'nama' => 'Lukman Nul Hakim', 'nilai' => 85];
$m4 = ['nim' => '2053010004', 'nama' => 'Rafif Naufal', 'nilai' => 60];
$m5 = ['nim' => '2053010005', 'nama' => 'Krizna Pandu', 'nilai' => 95];
$m6 = ['nim' => '2053010006', 'nama' => 'Guntur Rifai', 'nilai' => 75];
$m7 = ['nim' => '2053010007', 'nama' => 'Indriani Kusuma', 'nilai' => 90];
$m8 = ['nim' => '2053010008', 'nama' => 'Kiki Nur', 'nilai' => 70];
$m9 = ['nim' => '2053010009', 'nama' => 'Amanda Khoirul', 'nilai' => 40];
$m10 = ['nim' => '2053010010', 'nama' => 'Andriansayah', 'nilai' => 25];

$judul = ['No', 'NIM', 'Nama', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$total_mahasiswa = count($mahasiswa);
$jumlah_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jumlah_nilai);
$max_nilai = max($jumlah_nilai);
$min_nilai = min($jumlah_nilai);
$rata = $total_nilai / $total_mahasiswa;

$keterangan = [
    'Jumlah Mahasiswa' => $total_mahasiswa,
    'Nilai Tertinggi' => $max_nilai,
    'Nilai Terendah' => $min_nilai,
    'Rata - Rata ' => $rata
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 3 PHP MSIB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg bg-light">
        <h2 class="text-center my-4">Daftar Nilai Mahasiswa Universitas Merdeka Madiun</h2>
        <div class="row">
            <div class="container-lg-6">
                <table class="table table-bordered table-striped"  bgcolor="	#EEE8AA">
                    <thead bgcolor="#FFDEAD" align="center">
                    <tr bgcolor="orange">
                        <th scope="col">No</th>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Predukat</th>
                    </tr>
                
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($mahasiswa as $mhs){
                                $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';

                                if ($mhs['nilai'] >= 80 && $mhs['nilai'] <= 100 ) {
                                    $grade = 'A' ;
                                }elseif ($mhs['nilai'] >= 70 && $mhs['nilai'] < 80 ) {
                                    $grade = 'B';
                                }elseif ($mhs['nilai'] >= 60 && $mhs['nilai'] < 70 ) {
                                    $grade = 'C';
                                }elseif ($mhs['nilai'] >= 30 && $mhs['nilai'] < 60 ) {
                                    $grade = 'D';
                                }elseif ($mhs['nilai'] >= 10 && $mhs['nilai'] < 30 ) {
                                    $grade = 'E';
                                }else{
                                    $grade = '';
                                }

                            switch($grade){
                                case 'A' : $predikat = 'Memuaskan'; break;
                                case 'B' : $predikat = 'Baik'; break;
                                case 'C' : $predikat = 'Cukup'; break;
                                case 'D' : $predikat = 'Kurang Baik'; break;
                                case 'E' : $predikat = 'Buruk'; break;
                                }
                                ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $mhs['nim'] ?></td>
                                    <td><?= $mhs['nama'] ?></td>
                                    <td><?= $mhs['nilai'] ?></td>
                                    <td><?= $ket ?></td>
                                    <td><?= $grade ?></td>
                                    <td><?= $predikat ?></td>
                                </tr>
                        <?php $no++; } ?>
                    </tbody>
                    <tfoot>
                        <th class="text-center" colspan="2">Keterangan</th>
                        <?php foreach($keterangan as $ktrg => $result) { ?>
                            <tr>
                                
                                <td><?= $ktrg  ?></td>
                                <td><?= $result  ?></td>
                            </tr>
                        <?php } ?>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>