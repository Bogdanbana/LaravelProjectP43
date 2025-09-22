<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страничка</title>
<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Вторая страничка</h1>
    <!-- <p>{{ $name }}</p>
    <p>{{ $arr['isAdmin'] }}</p> -->
    @foreach($arr as $item)
        <p>{{ $item }}</p>
    @endforeach
</body>
</html>