<?php
    include_once ('koneksi.php');

    if(isset($_GET['id'])) {
        $npm = $_GET['id'];
        $sql = "SELECT * FROM mahasiswa WHERE id = '$npm'";
        $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
        $data = mysqli_fetch_assoc($query);
    } else {
        echo "NPM mahasiswa tidak ditemukan.";
    }

    if(isset($_POST['proses'])) {
        $nama = $_POST['input1'];
        $prodi = $_POST['input2'];
        $newNPM = $_POST['input3']; // Ubah variabel $id menjadi $newNPM

        // Tambahkan id = '$newNpm' pada query UPDATE
        $sql = "UPDATE mahasiswa SET nama_mhs = '$nama', prodi = '$prodi', id = '$newNPM' WHERE id = '$npm'";
        
        $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

        if($query) {
            echo "<script>
                alert('Data mahasiswa berhasil di-update.');
                window.location.href='form.php';
            </script>";
        } else {
            echo "<script>
                alert('Data mahasiswa gagal di-update.');
                window.location.href='form.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data Mahasiswa</title>
    
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="library/assets/styles.css" rel="stylesheet" media="screen">
    <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <fieldset>
                <legend>Form Edit Data Mahasiswa</legend>
                <div class="control-group">
                    <label for="npm">NAMA</label>
                    <div class="controls">
                        <input type="text" name="input1" value="<?php echo $data['nama_mhs']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label for="npm">PRODI</label>
                    <div class="controls">
                        <input type="text" name="input2" value="<?php echo $data['prodi']; ?>">
                    </div>
                </div>
                <div class="control-group">
                    <label for="npm">NPM</label>
                    <div class="controls">
                        <input type="text" name="input3" value="<?php echo $data['id']; ?>">
                    </div>
                </div>
                <div class="form_action">
                    <button type="submit" class="btn btn-success" name="proses">Update</button>
                    <button type="reset" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>