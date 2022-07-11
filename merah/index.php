<?php
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Tugas3</title>
</head>

<body>
    <div class="container">
        <div class="side-right">
            <center>
                <h2>FORM</h2>
            </center>


            <form action="result.php" method="POST">
                <label>Nama<br></label>
                <input type="text" name="nama">
                <span><?php echo $_SESSION['nama']; ?></span>

                <br><label><br>NOHP<br></label>
                <input type="number" name="NOHP" id="myInput">
                <span><?php echo $_SESSION['NOHP']; ?></span>

                <br><label><br>Tanggal berangkat<br></label>
                <input type="date" name="tanggal_berangkat">
                <span><?php echo $_SESSION['tanggal_berangkat']; ?></span>

                <br><label><br>Stasiun Awal<br></label>
                <select name="Stasiun_Awal">
                    <option value="Malang">Malang</option>
                    <option value="Solo">Solo</option>
                </select>
                <span><?php echo $_SESSION['Stasiun_Awal']; ?></span>

                <br><label><br>Stasiun Tujuan<br></label>
                <select name="Stasiun_Tujuan">
                    <option value="Malang">Malang</option>
                    <option value="Solo">Solo</option>
                </select>
                <span><?php echo $_SESSION['Stasiun_Tujuan']; ?></span>

                <br><label><br>Banyaknya Orang<br></label>
                <input type="number" name="Banyaknya_Orang" id="myInput">
                <span><?php echo $_SESSION['Banyaknya_Orang']; ?></span>


                <br><br><input type="submit" name="submit" value="SUBMIT">
                <input type="reset" name="reset" value="RESET">

            </form>
        </div>

        <div class="side-left">
            <h6>SIDE LEFT</h6>
        </div>
    </div>
</body>

</html>

<?php
unset($_SESSION['nama']);
unset($_SESSION['NOHP']);
unset($_SESSION['tanggal_berangkat']);
unset($_SESSION['Stasiun_Awal']);
unset($_SESSION['Stasiun_Tujuan']);
unset($_SESSION['Banyaknya_Orang']);


?>