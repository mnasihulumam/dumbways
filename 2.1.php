<?php
error_reporting(E_ALL^(E_NOTICE | E_WARNING));
$n = $_POST['n'];
for ($i=0; $i <= $n - 1; $i++)
{
$nilai[$i] = $_POST['data'.$i];
if ($nilai[$i] > 65) {
	$ket =  "Lulus";
}
elseif($nilai[$i] < 65) {
	$ket = "Tidak Lulus";
}
}
$jumlah = 0;
for ($i=0; $i <= $n - 1; $i++)
{
$jumlah += $nilai[$i];
}
$rataRata = $jumlah/$n;
for ($i=0; $i <= $n - 1; $i++)
{
 echo "Nilai ".$nilai[$i]."=>".$ket."<br>";
}
echo "========================";
echo "<br><b>Jumlah Nilai yang disubmit: ".$n."<b>";
echo "<br><b>Rata-rata Nilai : ".$rataRata."<b>";
echo "<br>Lulus : ";
echo "<br>Tidak Lulus : ";
?>