<?php
$json_data=file_get_contents("mahasiswa1.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama: ";echo $obj->nama;
echo "<br>";
echo "No_hp: ";echo $obj->no_hp;
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[2];
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[3];
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[4];
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[5];
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[6];
echo "<br>";
echo "Mata_kuliah: ";echo $obj->mata_kuliah[7];
echo "<br>";
?>