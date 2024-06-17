<?php
    // Connect PHP dengan MySQL
    include_once("./connect.php");

    $id = $_GET["id"];
    $query_get_data =  mysqli_query($database, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if (isset($_POST['submit'])) {
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        // Menampung Inputan User pada Database
        $query = mysqli_query ($database, "UPDATE staff SET
            nama='$nama', telp='$telp', email='$email' WHERE id=$id
        ");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <header>
            <h1 class="my-4">Form Edit Data Staff</h1>
        </header>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input value="<?php echo $staff['nama'] ?>" type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telepon</label>
                <input value="<?php echo $staff['telp'] ?>" type="text" class="form-control" id="telp" name="telp">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input value="<?php echo $staff['email'] ?>" type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        <br><br>
        <a class="btn btn-warning" href="./staff.php">Kembali ke Halaman Daftar Staff</a>
    </div>
</body>
</html>