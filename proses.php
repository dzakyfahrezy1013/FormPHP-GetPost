<?php
//sintak php untuk method POST
if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "Nama : " . $nama . "<br/>Email : " . $email;
}
//--------------------------------------------------------------------
//sintak php untuk method POST
if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
    echo "Nama : " . $nama . "<br/>Email : " . $email;
}
