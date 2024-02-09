<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.google.com/specimen/Raleway?selection.family=Raleway:400,600" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Montserrat?query=montserrat&selection.family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.google.com/specimen/Roboto+Condensed?selection.family=Roboto+Condensed:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
@include("partials.header")

<main>
    @yield("main")   
</main>

@include("partials.footer")

@vite('resources/js/app.js')
</body>
@yield("js")
</html>