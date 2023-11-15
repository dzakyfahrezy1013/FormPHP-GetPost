<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form GET</title>
</head>

<body>

    <h2>Data yang Anda kirimkan (metode GET):</h2>

    <?php
    // Periksa apakah data 'nama' dan 'email' telah dikirim melalui metode GET
    if (isset($_GET['nama']) && isset($_GET['email'])) {
        $nama = $_GET['nama'];
        $email = $_GET['email'];

        echo "<p>Nama: $nama</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>Data tidak lengkap. Silakan isi form.</p>";
    }
    ?>

</body>

</html>