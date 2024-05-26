<?php
// Ambil nilai dari form dan inisialisasi variabel jika form belum di-submit tag @ gunanya untuk menghendel error jika belum ada di input
$a1 = @$_POST['a1'];
$a2 = @$_POST['a2'];
$a3 = @$_POST['a3'];
$a4 = @$_POST['a4'];
$a5 = @$_POST['a5'];
$a6 = @$_POST['a6'];

$b1 = @$_POST['b1'];
$b2 = @$_POST['b2'];
$b3 = @$_POST['b3'];
$b4 = @$_POST['b4'];
$b5 = @$_POST['b5'];
$b6 = @$_POST['b6'];

// Matriks A: 2x3 Matriks ini di bilang 2x3 maksudnya 2 baris * 3 kolom
$a = [
    [$a1, $a2, $a3],
    [$a4, $a5, $a6]
];

// Matriks B: 3x2 Matriks ini di bilang 2x3 maksudnya 3 baris * 2 kolom
$b = [
    [$b1, $b2],
    [$b3, $b4],
    [$b5, $b6]
];

// Proses perkalian matriks
if (isset($_POST['submit'])) {
    $hasil = []; // Inisialisasi array hasil
    for ($i = 0; $i < count($a); $i++) { // Iterasi melalui baris matriks A
        for ($j = 0; $j < count($b[0]); $j++) { // Iterasi melalui kolom matriks B
            $hasil[$i][$j] = 0; // Inisialisasi elemen hasil dengan nilai 0
            for ($k = 0; $k < count($b); $k++) { // Iterasi melalui elemen baris dari A dan kolom dari B
                  // Mengalikan elemen baris A dan elemen kolom B, lalu menambahkan hasilnya ke elemen hasil
                $hasil[$i][$j] += $a[$i][$k] * $b[$k][$j];
            }
        }
    }
}

echo "<body><center><form action='perkalian.php' method='post'>";
echo "<table border=1 width=50%>";
echo "<tr align=center><td colspan=2>Universitas Teknologi Akba Makassar</td>";
echo "<tr align=center><td colspan=2>Tugas Perkalian Matriks</td>";
echo "<tr align=center><td colspan=2>Tahun Akademik 2023/2024 Genap</td>";

echo "<tr><td><img src='test.png' width=200 height=80 px><td><marquee>Fery Fadul Rahman 20232125013 Sistem Informasi</marquee><br>
<textarea width=20px style='width: 388px; height: 77px;'></textarea></td>";
echo "<tr align=center><td colspan=2>Perkalian Matriks</td>";

echo "<tr bgcolor=yellow><td colspan=2 align=center>Input Matriks A (2x3):</td></tr>";
echo "<tr align=center>";
echo "<td colspan=2>";
echo "
<input type='text' name='a1' value='$a1'>
<input type='text' name='a2' value='$a2'>
<input type='text' name='a3' value='$a3'>
<br>
<input type='text' name='a4' value='$a4'>
<input type='text' name='a5' value='$a5'>
<input type='text' name='a6' value='$a6'>
</td>
</tr>";

echo "<tr bgcolor=#8A2BE2><td colspan=2 align=center>Input Matriks B (3x2): </td></tr>";
echo "<tr>";
echo "<td colspan=2 align=center>";
echo "
<input type='text' name='b1' value='$b1'>
<input type='text' name='b2' value='$b2'><br>
<input type='text' name='b3' value='$b3'>
<input type='text' name='b4' value='$b4'><br>
<input type='text' name='b5' value='$b5'>
<input type='text' name='b6' value='$b6'>
</td></tr>";

echo "<tr>";
echo "<td colspan=2><center>";
echo "<br>";
echo "<input type='submit' name='submit' value='Perkalian'>
<br><br>
<p>Persiapan Dan Kesan Saya :)</p><br>
</td></tr>";
echo "</form>";

echo "<tr align=center><td colspan=2>Tugas Perkalian Matriks Ordo A = (2 x 3) dan B = (3 x 2) menghasilkan Matriks C = (2 x 2) </td></tr>";
echo "<tr><td colspan=2><center>Inilah Hasilnya:
<table border=1 bgcolor=pink>";
if (isset($hasil)) {
    for ($i = 0; $i < 2; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 2; $j++) {
            echo "<td width='70px'>";
            echo "<center><strong>";
            echo $hasil[$i][$j];
            echo "</td></center>";
        }
        echo "</tr>";
    }
}
echo "</table>";
echo "</table>";
?>
