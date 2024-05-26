<?php
// Ambil nilai dari form
$a11 = @$_POST['a11'];
$a12 = @$_POST['a12'];

$a21 = @$_POST['a21'];
$a22 = @$_POST['a22'];

$b11 = @$_POST['b11'];
$b12 = @$_POST['b12'];

$b21 = @$_POST['b21'];
$b22 = @$_POST['b22'];

// Matriks A: 2x2
$a = [
    [$a11, $a12],
    [$a21, $a22]
];

// Matriks B: 2x2
$b = [
    [$b11, $b12],
    [$b21, $b22]
];

if (isset($_POST['submit'])) {
    $hasil = [];
    for ($i = 0; $i < count($a); $i++) {
        for ($j = 0; $j < count($b[0]); $j++) { 
            $hasil[$i][$j] = 0;
            for ($k = 0; $k < count($b); $k++) { 
                $hasil[$i][$j] += $a[$i][$k] * $b[$k][$j]; 
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                        <img src="ruangserver.png" width="200px" height="200px" style="border-radius: 50%;">
                        <h4>Fery Fadul Rahman</h4>
                        <p>20232125013</p>
                    </div>
                    <div class="col-md-6">
                        <img src="dea.png" width="200px" height="200px" style="border-radius: 50%;">
                        <h4>Jumriani dea saputri</h4>
                        <p>20232125005</p>
                    </div>
                </div>
                <hr>
                <form action="ordo2x2.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Input Matriks A (2x2)</h5>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" name="a11" value="<?= $a11 ?>"></td>
                                        <td><input type="text" class="form-control" name="a12" value="<?= $a12 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="a21" value="<?= $a21 ?>"></td>
                                        <td><input type="text" class="form-control" name="a22" value="<?= $a22 ?>"></td>
                                    </tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5>Input Matriks B (2x2)</h5>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control" name="b11" value="<?= $b11 ?>"></td>
                                        <td><input type="text" class="form-control" name="b12" value="<?= $b12 ?>"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="b21" value="<?= $b21 ?>"></td>
                                        <td><input type="text" class="form-control" name="b22" value="<?= $b22 ?>"></td>
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
                                <?php for ($i = 0; $i < 2; $i++) : ?>
                                    <tr>
                                        <?php for ($j = 0; $j < 2; $j++) : ?>
                                            <td><?= @$hasil[$i][$j] ?? 0 ?></td>
                                        <?php endfor; ?>
                                    </tr>
                                <?php endfor; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endif; ?>
                <marquee>Tugas Perkalian Matriks Ordo A = (2 x 2) dan B = (2 x 2) menghasilkan C = (2 x 2)</marquee>
            </div>
        </div>
    </div>
</body>

</html>