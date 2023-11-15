<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP dan CSS</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <form action="proses.php" method="post">
            <h2>Form Pengguna</h2>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>

</html>