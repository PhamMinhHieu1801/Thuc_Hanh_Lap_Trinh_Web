<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Del Luna</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    @yield('content')

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXhj2da6dV16T7twgO6aNoz9AoxgQp_CQ&libraries=places&language=vi&region=VI&callback=initMap" type="text/javascript"></script>
</body>
</html>