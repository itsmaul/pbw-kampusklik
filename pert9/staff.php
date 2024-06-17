<?php
    // Connect PHP dengan MySQL
    include_once("./connect.php");

    // Menampilkan Inputan User pada Database
    $query = mysqli_query ($database, "SELECT * FROM staff");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <header>
            <h1 class="my-4">Daftar Staff</h1>
        </header>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $staff) { ?>
                    <tr>
                        <td><?php echo $staff["nama"] ?></td>
                        <td><?php echo $staff["telp"] ?></td>
                        <td><?php echo $staff["email"] ?></td>
                        <td>
                            <a href=<?php echo "edit-staff.php?id=" . $staff["id"] ?>>EDIT</a>
                            <a href=<?php echo "delete-staff.php?id=" . $staff["id"] ?>>DELETE</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <br>
        <a class="btn btn-primary" href="./tambah-staff.php">Tambah Data Staff</a>
        <br><br>
        <a class="btn btn-warning" href="./index.php">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>