<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container w-75">
        <header>
            <h1 class="my-4">Aplikasi Perpustakaan</h1>
        </header>

        <a class="btn btn-primary" href="buku.php">Lihat Daftar Buku</a>
        <a class="btn btn-success" href="staff.php">Lihat Daftar staff</a>

        <form class="mt-4" action="logout_process.php">
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
</body>
</html>