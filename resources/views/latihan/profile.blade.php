<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Profile aplikasi latihan kita.</title>
</head>
<body>
    <h1>Ini adalah halaman profile.</h1>
    <a href="{{route('halaman-dashboard')}}">Halaman Dashboard</a>

    <form action="{{route('kirim')}}" method="post">
        @csrf
        <button type="submit">kirim</button>
    </form>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eius cupiditate necessitatibus quia autem nemo. Labore similique mollitia exercitationem, repellendus saepe ad autem non nisi in velit eos repudiandae at, aspernatur modi qui dignissimos aperiam quidem, nobis neque! Provident aspernatur neque minus dolores ipsum necessitatibus molestias vero earum cumque voluptatibus voluptate, veniam temporibus. Minus, omnis dolore harum quia quos alias molestiae soluta perferendis error quidem sint magni totam sed? Maxime, earum vel exercitationem impedit numquam suscipit, corrupti animi soluta unde ab esse temporibus quasi molestiae, sit aliquam eveniet minima cupiditate quia natus ipsa voluptatum blanditiis? Architecto ullam quia ipsum veritatis!</p>
</body>
</html>