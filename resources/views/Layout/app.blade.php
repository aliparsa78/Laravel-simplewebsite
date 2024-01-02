<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    @include('Layout.navbar')

    <div class="container">
        @if(Request::is('/'))
            @include('Layout.showcase')
        @endif
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                @include('Layout.sidebar')
            </div>
        </div>
    </div>
</body>
</html>