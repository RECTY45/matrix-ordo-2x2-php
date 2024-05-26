<?php
// Ambil nilai dari form
$a11 = @$_POST['a11'];
$a12 = @$_POST['a12'];
$a13 = @$_POST['a13'];
$a21 = @$_POST['a21'];
$a22 = @$_POST['a22'];
$a23 = @$_POST['a23'];
$a31 = @$_POST['a31'];
$a32 = @$_POST['a32'];
$a33 = @$_POST['a33'];
$a41 = @$_POST['a41'];
$a42 = @$_POST['a42'];
$a43 = @$_POST['a43'];

$b11 = @$_POST['b11'];
$b12 = @$_POST['b12'];
$b13 = @$_POST['b13'];
$b14 = @$_POST['b14'];
$b21 = @$_POST['b21'];
$b22 = @$_POST['b22'];
$b23 = @$_POST['b23'];
$b24 = @$_POST['b24'];
$b31 = @$_POST['b31'];
$b32 = @$_POST['b32'];
$b33 = @$_POST['b33'];
$b34 = @$_POST['b34'];

// Matriks A: 4x3
$a = [
    [$a11, $a12, $a13],
    [$a21, $a22, $a23],
    [$a31, $a32, $a33],
    [$a41, $a42, $a43]
];

// Matriks B: 3x4
$b = [
    [$b11, $b12, $b13, $b14],
    [$b21, $b22, $b23, $b24],
    [$b31, $b32, $b33, $b34]
];

if (isset($_POST['submit'])) {
    $hasil = [];
    for ($i = 0; $i < count($a); $i++) { // Iterasi melalui baris matriks A
        for ($j = 0; $j < count($b[0]); $j++) { // Iterasi melalui kolom matriks B
            $hasil[$i][$j] = 0; // Inisialisasi elemen hasil dengan nilai 0
            for ($k = 0; $k < count($b); $k++) { // Iterasi melalui elemen baris dari A dan kolom dari B
                $hasil[$i][$j] += $a[$i][$k] * $b[$k][$j]; // Mengalikan elemen baris A dan elemen kolom B, lalu menambahkan hasilnya ke elemen hasil
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian Matriks</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #111;
            color: #fff;
        }

        .form-control {
            background-color: #222;
            border-color: #444;
            color: #fff;
        }

        .btn-primary {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }

        .btn-primary:hover {
            background-color: #45a049;
            border-color: #45a049;
        }

        table {
            background-color: #222;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="ruangserver.png" width="100px" height="100px" style="border-radius: 50%;">
                        <h4>Fery Fadul Rahman</h4>
                        <p>20232125013</p>
                    </div>
                    <div class="col-md-6">
                        <img src="ariexploiter.png" width="100px" height="100px" style="border-radius: 50%;">
                        <h4>Ari Tegal Exploiter</h4>
                        <p>20232125013</p>
                    </div>
                </div>
                <hr>
                <form action="perkalians.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Input Matriks A (4x3)</h5>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" name="a11" value="<?= $a11 ?>"></td>
                                        <td><input type="text" class="form-control" name="a12" value="<?= $a12 ?>"></td>
                                        <td><input type="text" class="form-control" name="a13" value="<?= $a13 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="a21" value="<?= $a21 ?>"></td>
                                        <td><input type="text" class="form-control" name="a22" value="<?= $a22 ?>"></td>
                                        <td><input type="text" class="form-control" name="a23" value="<?= $a23 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="a31" value="<?= $a31 ?>"></td>
                                        <td><input type="text" class="form-control" name="a32" value="<?= $a32 ?>"></td>
                                        <td><input type="text" class="form-control" name="a33" value="<?= $a33 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="a41" value="<?= $a41 ?>"></td>
                                        <td><input type="text" class="form-control" name="a42" value="<?= $a42 ?>"></td>
                                        <td><input type="text" class="form-control" name="a43" value="<?= $a43 ?>"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5>Input Matriks B (3x4)</h5>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" name="b11" value="<?= $b11 ?>"></td>
                                        <td><input type="text" class="form-control" name="b12" value="<?= $b12 ?>"></td>
                                        <td><input type="text" class="form-control" name="b13" value="<?= $b13 ?>"></td>
                                        <td><input type="text" class="form-control" name="b14" value="<?= $b14 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="b21" value="<?= $b21 ?>"></td>
                                        <td><input type="text" class="form-control" name="b22" value="<?= $b22 ?>"></td>
                                        <td><input type="text" class="form-control" name="b23" value="<?= $b23 ?>"></td>
                                        <td><input type="text" class="form-control" name="b24" value="<?= $b24 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="b31" value="<?= $b31 ?>"></td>
                                        <td><input type="text" class="form-control" name="b32" value="<?= $b32 ?>"></td>
                                        <td><input type="text" class="form-control" name="b33" value="<?= $b33 ?>"></td>
                                        <td><input type="text" class="form-control" name="b34" value="<?= $b34 ?>"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary btn-block mt-3">Perkalian</button>
                </form>
                <?php if (isset($_POST['submit'])) : ?>
                    <div class="mt-5">
                        <h5>Hasil Perkalian Matriks :</h5>
                        <table class="table">
                            <tbody class="text-white">
                                <?php for ($i = 0; $i < 4; $i++) : ?>
                                    <tr>
                                        <?php for ($j = 0; $j < 4; $j++) : ?>
                                            <td><?= @$hasil[$i][$j] ?? 0 ?></td>
                                        <?php endfor; ?>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
                <marquee>Tugas Perkalian Matriks Ordo A = (4 x 3) dan B = (3 x 4) menghasilkan C = (4 x 4)</marquee>
            </div>
        </div>
    </div>
</body>

</html>