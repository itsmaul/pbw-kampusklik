<!--Risma Auliya Salsabilla - 2210631170100 - 4A Informatika-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aplikasi Penghitung BMI</title>
    </head>

    <body>
        <h1>Aplikasi Penghitung BMI</h1>

        <form method="POST" action="">
                <label for="berat">Berat Badan (kg)   : </label>
                <input type="number" placeholder="Masukkan Berat Badan" name="bb">
                <br>
                <label for="tinggi">Tinggi Badan (cm) : </label>
                <input type="number" placeholder="Masukkan Tinggi Badan" name="tb">
                <br><br>
                <input type="submit" value="Hitung BMI">
        </form>

        <h3>Hasil Perhitungan : </h3>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $berat  = $_POST['bb'];
                $tinggi = $_POST['tb'];

                $tinggi_total = $tinggi / 100;
                $bmi          = $berat  / ($tinggi_total * $tinggi_total);

                echo "Berat Badan  : $berat <br>";
                echo "Tinggi Badan : $tinggi <br>";
                echo "BMI          : ", round ($bmi, 2), "<br>";
                echo "Kategori BMI : ";

                if ($bmi <= 17) {
                    echo "Sangat Kurus";
                } else if ($bmi <= 18.5) {
                    echo "Kurus";
                } else if ($bmi <= 25.0) {
                    echo "Normal";
                } else if ($bmi <= 27.5) {
                    echo "Gemuk (Overweight)";
                } else if ($bmi >  27.5) {
                    echo "Gemuk (Obesitas)";
                }
            }
        ?>

    </body>
</html>