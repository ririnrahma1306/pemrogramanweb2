<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="" style="font-size: 45px;">
        <?php
            include "OrangBiasa.php";
            include "OrangInggris.php";
            include "Mahasiswa.php";

            $james = new OrangBiasa('James'); //memanggil construct
            $james->ucapSalam(); //memanggil menthod
            echo "<br>";
           
            $parto = new OrangInggris('Parto');
            $parto->ucapSalam(); //override
            echo "<br>";

            $emely = new Mahasiswa("Emely");
            $emely->ucapSalam();
            echo "<br>";
            $emely->setNim("701230036");
            $emely->setProdi("Sistem Informasi");

            $nilaiEmely = new Nilai();
            $nilaiEmely->setTugas(90);
            $nilaiEmely->setUts(76);
            $nilaiEmely->setUas(78);

            $emely->setNilai($nilaiEmely);
            $emely->tampilkanData();
        ?>
        </div>
</body>
</html>

