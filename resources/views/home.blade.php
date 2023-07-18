<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Verlino BLog | Home</title>
</head>
<body>
    <h1>Halaman Home</h1>
    {{-- Kalo di sini data yang dipassing menjadi sebuah variabel beda dengan mvc yang menjadi array associative --}}
    <h3>Hi {{ $name }}</h3>
    <h3>Contact me {{ $email }}</h3>

    <script src="js/script.js"></script>
</body>
</html>