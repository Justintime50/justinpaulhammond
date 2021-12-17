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
        <h1>Deployment</h1>
        <a href="harvey"><button class="btn btn-primary">Back to Dashboard</button></a>
        @php $status_color = $pipeline['status'] == 'Success' ? 'text-success' : 'text-danger'; @endphp
        <p><b>Project:</b> {{ $pipeline['project'] }}</p>
        <p><b>Commit:</b> {{ $pipeline['commit'] }}</p>
        <p><b>Timestamp:</b> {{ $pipeline['timestamp'] }}</p>
        <p><b>Status:</b><span class="{{ $status_color }}"> {{ $pipeline['status'] }}</span></p>
        <p><b>Logs:</b><br />{!! nl2br(e($pipeline['log'])) ?? '' !!}</p>
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
