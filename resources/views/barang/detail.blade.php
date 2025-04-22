<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Barang</title>
</head>

<body>
    <h1>Halaman Detail barang</h1>
    <table style="height: 80%">
        <tbody>
            <tr>
                <td> Nama Barang </td>
                <td> : </td>
                <td> {{$data->nama_barang}} </td>
            </tr>
            <tr>
                <td> Jenis </td>
                <td> : </td>
                <td> {{$data->jenis}} </td>
            </tr>
            <tr>
                <td> Ukuran </td>
                <td> : </td>
                <td> {{$data->ukuran}} </td>
            </tr>
        </tbody>
    </table>
</body>
</html>