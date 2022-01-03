<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Terima Kasih</title>

    <style>
        h1 {
            font-family: 'rubik';
            color: #009ed7;
            font-size: 40px;
            font-weight: 400;
            margin-top: 50px
        }
        img {
            width: 500px;
            margin-top: 70px;
        }
    </style>

  </head>
  <body>

    <div class="container">
        <div class="content mt-5 d-flex flex-column justify-content-center align-items-center">
            {{--  <h1>Terimakasih Telah Memesan Produk Kami</h1>  --}}
            <h1>{{ $message }}</h1>
            <img src="../../../img/pana.png" alt="Terima Kasih">
        </div>
    </div>
    <script>setTimeout(function(){ window.location.href = 'https://api.whatsapp.com/send/?phone={{ $wa }}&text={{ $text }}'; }, 3000);</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>