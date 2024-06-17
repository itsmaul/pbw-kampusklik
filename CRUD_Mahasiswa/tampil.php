<?php
    include_once("koneksi.php");

    // Inisialisasi query dasar
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    if (is_string(isset($_POST["cari"]))) {
        echo "<script>
                alert('Digit NPM Harus Angka');
                window.location.href='form.php';
        </script>";
    } else {
        // Mengecek apakah aksi telah dikirim
        if (isset($_POST["cari"])) {
            $cari = $_POST["cari"];
            $panjangCari = strlen($cari);

            if ($panjangCari == 13) {
                $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa
                        WHERE id LIKE '%$cari%'");
            } else if ($panjangCari > 13) {
                echo "<script>
                    alert('Digit NPM Lebih Dari 13 Angka');
                    window.location.href='form.php';
                </script>";
            } else if ($panjangCari < 13) {
                echo "<script>
                    alert('Digit NPM Kurang Dari 13 Angka');
                    window.location.href='form.php';
                </script>";
            }
        }
    }
?>