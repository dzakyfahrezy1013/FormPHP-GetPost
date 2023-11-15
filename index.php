<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <div>
            <form action="">
                <h2>Form</h2>
                <hr />

                <label>Nama :</label>
                <input type="text" name="fnama" id="fnama" />

                <label>Alamat :</label>
                <input type="text" name="lalamat" id="lalamat" />

                <label>Pilih Metode :</label>
                <span><input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="method" value="post">POST</span>

                <input type="submit" name="submit" id="submit" value="Submit">
            </form>

            <?php include "proses.php"; ?>
        </div>
    </div>
</body>

</html>