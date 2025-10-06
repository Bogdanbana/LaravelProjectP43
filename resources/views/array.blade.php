<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

<!-- Scripts -->
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container">
            <div class="main_menu">
                <img src="{{ Vite::asset('resources/img/IMAGE.jpg') }}">
                <div class="navigation">
                    <a class="Link" href="#">Features</a>
                    <a class="Link" href="{{ route('arraycing') }}">Arraicing</a>
                    <a class="Link" href="#">Integration</a>
                    <a class="Link" href="#">Learn</a>
                </div>
                <div>
                    <a class="Link2" href="#">Sign in</a>
                    <button class="Button1">Book a demo</button>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div class="container">
            <div class="body_menu">
                <div></div>
                <div>
                    <img src="{{ Vite::asset('resources/img/IMAGE (1).jpg') }}">
                </div>
            </div>
        </div>
    </body>
    <footer>
        <div class="container">
            
        </div>
    </footer>
</body>
</html>