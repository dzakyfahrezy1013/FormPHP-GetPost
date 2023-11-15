<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form POST</title>
</head>

<body>

    <h2>Data yang Anda kirimkan (metode POST):</h2>

    <?php
    // Periksa apakah data 'nama' dan 'email' telah dikirim melalui metode POST
    if (isset($_POST['nama']) && isset($_POST['email'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];

        echo "<p>Nama: $nama</p>";
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>Data tidak lengkap. Silakan isi form.</p>";
    }
    ?>

</body>

</html>