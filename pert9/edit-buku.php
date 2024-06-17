<?php
    // Connect PHP dengan MySQL
    include_once("./connect.php");

    $id = $_GET["id"];
    $query_get_data =  mysqli_query($database, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        // Menampung Inputan User pada Database
        $query = mysqli_query ($database, "UPDATE buku SET
            nama='$nama', isbn='$isbn', unit=$unit WHERE id=$id
        ");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <header>
            <h1 class="my-4">Form Edit Data Buku</h1>
        </header>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input value="<?php echo $buku['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input value="<?php echo $buku['isbn'] ?>" type="text" class="form-control" id="isbn" name="isbn">
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input value="<?php echo $buku['unit'] ?>" type="number" class="form-control" id="unit" name="unit">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <br><br>
        <a class="btn btn-warning" href="./buku.php">Kembali ke Halaman Daftar Buku</a>
    </div>
</body>
</html>