<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form</title>
</head>

<body style="width: 25%;
    height:25%;
    margin: 50px auto;
    margin-top: 75px;
    background-image: url('huruf.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed; 
    background-size: 100% 100%;">
    <center><h1 style="color:white;
    font-family:'Courier New', Courier, monospace"><b>str_replace</b></h1></center>
    <br>
    <form method="post" action="action_str_replace.php">
        <div class="mb-3">
        <div class="alert alert-primary" role="alert">
            <label for="exampleInputEmail1" class="form-label">Kata awal</label>
        </div>
            <input type="text"  name="awal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="awal" class="form-text" style="color: white;"><b>Saya mau makan nasi goreng</b></div>
        </div>
        <div class="mb-3">
        <div class="alert alert-warning" role="alert">
            <label for="exampleInputEmail2" class="form-label">Ganti kata</label>
        </div>
            <input type="text"  name="ganti" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
            <div id="ganti" class="form-text" style="color: white;"><b>Ganti kata : makan</b></div>
        </div>
        <div class="mb-3">
        <div class="alert alert-info" role="alert">
            <label for="exampleInputPassword1" class="form-label">Kata ganti</label>
        </div>
            <input type="text" name="ganti_huruf" class="form-control" id="exampleInputPassword1">
            <div id="ganti" class="form-text" style="color: white;"><b>Kata ganti : minum</b></div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
