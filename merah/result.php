<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nama'])) {
        $_SESSION['nama'] = "Name is required";
    }
    if (empty($_POST['NOHP'])) {
        $_SESSION['NOHP'] = "NOHP is required";
    }
    if (empty($_POST['tanggal_berangkat'])) {
        $_SESSION['tanggal_berangkat'] = "Tanggal Lahir is required";
    }
    if (empty($_POST['Stasiun_Awal'])) {
        $_SESSION['Stasiun_Awal'] = "Stasiun_Awal is required";
    }
    if (empty($_POST['Stasiun_Tujuan'])) {
        $_SESSION['Stasiun_Tujuan'] = "Jenis Kelamin is required";
    }
    if (empty($_POST['Banyaknya_Orang'])) {
        $_SESSION['Banyaknya_Orang'] = "Jenis Kelamin is required";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="result.css">
    <title>FORM</title>
</head>

<body>
    <div class="container">
        <div class=side_right>
            <h2>Hasil Input :</h2><br>
            <span><?php echo "Nama : ", $_POST['nama']; ?></span>
            <br><span><?php echo "NOHP : ", $_POST['NOHP']; ?></span>
            <br><span><?php echo "tanggal_berangkat : ", $_POST['tanggal_berangkat']; ?></span>
            <br><span><?php echo "Stasiun_Awal : ", $_POST['Stasiun_Awal']; ?></span>
            <br><span><?php echo "Jenis Kelamin : ", $_POST['Stasiun_Tujuan']; ?></span>
            <br><span><?php echo "Banyaknya_Orang : ", $_POST['Banyaknya_Orang']; ?></span>

            <br>
            <p><a href="index.php">Kembali </a>Ke Halaman Sebelumnya</p>
        </div>
        <div class=side_left>
            <h6>SIDE LEFT</h6>
        </div>



    </div>




</body>

</html>