<?php
$proses = isset($_POST['proses']) ? $_POST['proses'] : "success";
$nama = isset($_POST['nama']) ? $_POST['nama'] : "";
$matkul = isset($_POST['matkul']) ? $_POST['matkul'] : "";
$nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : "";
$nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : "";
$nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : "";
$nilai_akhir = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

if ($nilai_akhir > 55) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

if ($nilai_akhir >= 85) {
    $grade = "A";
} elseif ($nilai_akhir >= 70) {
    $grade = "B";
} elseif ($nilai_akhir >= 60) {
    $grade = "C";
} elseif ($nilai_akhir >= 40) {
    $grade = "D";
} else {
    $grade = "E";
}


echo 'Proses : ' . $proses;
echo '<br/>Nama : ' . $nama;
echo '<br/>Mata Kuliah : ' . $matkul;
echo '<br/>Nilai UTS : ' . $nilai_uts;
echo '<br/>Nilai UAS : ' . $nilai_uas;
echo '<br/>Nilai Tugas Praktikum : ' . $nilai_tugas;
echo '<br/>Nilai Akhir : ' . $nilai_akhir;
echo '<br/>Status : ' . $status;
echo '<br/>Grade : ' . $grade;

?>