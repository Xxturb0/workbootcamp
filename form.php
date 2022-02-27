<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="tampilan.css" rel="stylesheet">
    <title>Form</title>
</head>

<body>
    <!-- <center><br> -->
    <h1>Form Input</h1>
    <form method="post" action="" class="badan"> 
        <div class="mb-3">
        <div class="alert alert-primary" role="alert">
        Nama
        </div>
            <input type="text" name="nama" class="form-control" required>
            <div id="nama" class="form-text">We'll never share your name with anyone else.</div>
        </div>
        <div class="mb-3">
            <div class="alert alert-warning" role="alert">
            Email Address
            </div>
            <input type="email" name="email" class="form-control" required>
            <div id="email" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <div class="alert alert-info" role="alert">
            Telpon
            </div>
            <input type="number" name="telp" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <div class="alert alert-danger" role="alert">
            Alamat
            </div>
            <textarea type="text" name="alamat" class="form-control" placeholder="Silahkan Isi" required></textarea>
            <div id="alamat" class="form-text">We'll never share your address with anyone else.</div>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Pria" checked reuired>
        <label class="form-check-label" for="exampleRadios1">
            Pria
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Wanita" reuired>
        <label class="form-check-label" for="exampleRadios2">
            Wanita
        </label>
        </div>
        <br>
        <div>
        <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Submit
        </button>
        <?php 
        if ($_POST){ ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Nama : <?=$_POST['nama']?></p>
                <p>Email : <?=$_POST['email']?></p>
                <p>Telpon : <?=$_POST['telp']?></p>
                <p>Alamat : <?=$_POST['alamat']?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
        </div>
        </div>
        <?php }?>
        
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>