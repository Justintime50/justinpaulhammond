<!DOCTYPE html>
<html lang="en">
<head>
    <title>Project Logs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('pics/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        h1, p {color: #fff;}
        body {background-color: #212529;}
        button {margin: 20px 0px;}
    </style>
</head>

<body>
    <div class="container">
        <h1>Project Logs</h1>
        <a href="harvey"><button class="btn btn-primary">Back to Pipelines</button></a>
        <p><b>Project:</b> {{ $pipeline['project'] }}</p>
        <p><b>Last Run:</b> {{ $pipeline['last_run'] }}</p>
        <p><b>Status:</b> {{ $pipeline['status'] }}</p>
        <p><b>Logs:</b> {{ $pipeline['project_log'] }}</p>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
