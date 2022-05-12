<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .container{
            width: 80%;
	        margin: auto;
	        text-align: center;
	        padding-top: 50px;
        }
        .card{
            flex-basis: 30%;
            margin-right: 10px;
	        border-radius: 10px;
	        margin-bottom: 30px;
	        position: relative;
	        overflow: hidden;
        }
        .card a{
            color: black;
	        text-decoration: none;
	        font-size: 13px;
	        font-family: "playfair-display";
        }
        .card img{
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<section class="container">
    <div class="row">    
        <div class="card">
            <a href="Member.php">
            <img src="https://png.pngtree.com/png-vector/20190214/ourmid/pngtree-people-icon-business-corporate-team-working-together-social-network-png-image_448334.jpg" class="rounded" alt="..." width="200px" height="200px">
            <h1 style="position: center;">Data Member</h1>
            </a>
        </div>
        <div class="card">
            <a href="Buku.php">
            <img src="https://png.pngtree.com/template/20190316/ourmid/pngtree-books-logo-image_79143.jpg" class="rounded" alt="..." width="200px" height="200px">
            <h1 style="position: center;">Data Buku</h1>
            </a>
        </div>
        <div class="card">
            <a href="Peminjaman.php">
            <img src="https://thumbs.dreamstime.com/b/hand-giving-open-book-filled-outline-icon-hand-giving-open-book-filled-outline-icon-line-vector-sign-linear-colorful-pictogram-121375538.jpg" class="rounded" alt="..." width="200px" height="180px">
            <h1 style="position: center;">Data Peminjaman</h1>
            </a>
        </div>
    </div>
</section>
</body>
</html>