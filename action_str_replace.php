<!DOCTYPE html>
<html lang=en>
    <head>
    </head>
        <body>
            <?php
            $kata_awal=$_POST['awal'];
            $ganti=$_POST['ganti'];
            $ganti_huruf = $_POST['ganti_huruf'];

            echo $hasil = str_replace($ganti,$ganti_huruf,$kata_awal);
            ?>
        </body>
</html>