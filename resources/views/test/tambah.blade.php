<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/test/tambah-data" method="post">
        @csrf
        <input type="text" name="judul">
        <input type="text" name="file">
        <input type="text" name="kategori">
        <button type="submit">submit</button>
    </form>
</body>

</html>
