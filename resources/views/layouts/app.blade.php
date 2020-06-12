<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SistemaHIS</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
    <div class="container">
    <hr>
        @if(session()->has('flash'))
            <div class="alert alert-info">{{ session('flash') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>
