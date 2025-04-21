<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    <h1>Halaman Form Umur</h1>
    <p>Masukan data kamu dibawah ini : </p>

    <form action="{{route('proses')}}" method="post">
        @csrf
        <div class="">
            <label for="">Nama Lengkap</label>
            <input type="text" name="nama" required placeholder="masukan nama kamu">
        </div>
        <div class="">
            <label for="">Umur</label>
            <input type="number" name="umur" required placeholder="masukan umur kamu">
        </div>
        <div class="">
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>
</html>