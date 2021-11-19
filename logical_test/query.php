<?php 

$name = "SELECT mhs_nama FROM tb_mahasiswa WHERE id=4";

$score = "SELECT nilai FROM tb_mahasiswa_nilai WHERE id=3";

$mk = "SELECT mk_kode FROM tb_matakuliah WHERE id=2";

echo $name . " " . $score . " " . $mk;

?>