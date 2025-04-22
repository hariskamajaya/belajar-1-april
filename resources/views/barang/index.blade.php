<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Barang</title>
</head>

<body>
    <h1>Halaman data data barang</h1>
    <p>Halaman semua barang : </p>

    <table style="height: 80%">
        <thead>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Ukuran</th>
        </thead>
        <tbody>

            @foreach ($data as $item)
                <tr>
                    <td>{{$item->nama_barang}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->ukuran}}</td>
                </tr>
            @endforeach

        </tbody>
    </table>


</body>

</html>