<!DOCTYPE html>
<html lang="ri">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$product -> name}}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="card">
           <h1>{{$product -> name}}</h1>
           <p>{{$product -> price}}</p>
           <p>{{$product -> description}}</p>
        </div>
    </div>
</body>
</html>