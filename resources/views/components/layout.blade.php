<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="./media/Color_A_no_background.png">
    <title>CapeTech</title>

    @vite('resources/css/app.css');
</head>
<body>

    {{$slot}}
    

    @vite('resources/js/app.js');
</body>
</html>