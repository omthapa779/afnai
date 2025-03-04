<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yield('title', '') . Sasto Pathao</title>
    <link rel="stylesheet" href="{{ asset('./resources/css/style.css') }}">   
    <link rel="stylesheet" href="{{ asset('./resources/css/util.css') }}">
</head>
<body>
    <div class="main_container w_100 h_fc">
        <navs class="navbar w_100 h_10vh">
        </navs>

        <main class="main w_100">
            @yield('content')
        </main>
    </div>
</body>
</html>