<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ROAM Dev Test')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <nav>
        <ul>
            <li><a href="/welcome">Laravel Welcome Page</a></li>
            <li><a href="/">Form</a></li>
        </ul>
    </nav>
    
    @yield('content')

    <footer>
        <a class="github" href="https://github.com/reallyMilo/ROAM-Dev-Test"></a>
    </footer>
    
</body>
</html>