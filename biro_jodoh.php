<!DOCTYPE html>
<html lang=en>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Biro Jodoh</title>
    </head>
    <body>
        <form method="post" action="">
            <div class="mb-3">
            <div class="alert alert-primary" role="alert">
            Nama Jodoh
            </div>
                <input type="text" name="nama" class="form-control" required>
                <div id="nama" class="form-text">We'll never share your name with anyone else.</div>
            </div>
            <input type="radio" id="html" name="pria">
            <label for="html">Pria</label><br>
            <input type="radio" id="css" name="wanita">
            <label for="css">Wanita</label><br>
            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Submit
        </button>
        </form>
        <?php
        $laki = array("Aiko","Brayen","Hera","Jack Nas","Jawa","Tocing","Entong","Ceks","Bung","Isnaini");
        $wanita = array("Dilla","Iin","Batin","Ayu","Mita","Anita","Iwon","Umi");

        $random_key = array_rand($wanita,2);
        $random_key = array_rand($laki,2);
        $nama = $_POST['nama'];

        if (isset ($_POST['pria'])){
            echo $nama ." " . "Jodoh Mu Adalah  " . $wanita[$random_key[0]];
        } else {
            echo $nama ." " . "Jodoh Mu Adalah  " . $laki[$random_key[0]];
        }
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>