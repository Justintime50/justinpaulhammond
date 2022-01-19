<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $project }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('pics/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        h1, h2, p {color: #fff;}
        body {background-color: #212529;}
        button {margin: 20px 0px;}
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $project }}</h1>
        <p><b>Locked:</b> {{ !empty($locked) ? $locked : 'false' }}</p>
        <a href="harvey"><button class="btn btn-primary">Back to Dashboard</button></a>

        <button class="btn btn-warning" disabled>Redeploy</button>
        <button class="btn btn-secondary" disabled>{{ $locked == false ? 'Lock' : 'Unlock' }} Deployments</button>
        <button class="btn btn-danger" disabled>Shutdown</button>

        <h2 class="text-left">Deployments</h2>
        @if($pipelines != [])
            <div class="table-responsive">
                <table class="table table-dark table-striped">
                    <thead>
                        <th>Commit</th>
                        <th>Last Run</th>
                        <th>Status</th>
                    </thead>
                    <tbody>
                        @foreach ($pipelines as $pipeline)
                            @php $status_color = ( $pipeline['status'] == 'Success' ) ? 'text-success' : (( $pipeline['status'] == 'In-Progress' ) ? 'text-info' : 'text-danger'); @endphp
                            <tr>
                                <td><a href="harvey-pipeline?pipeline={{ $pipeline['project'] }}-{{ $pipeline['commit'] }}">{{ $pipeline['commit'] }}</a></td>
                                <td>{{ $pipeline['timestamp'] }}</td>
                                <td class="{{ $status_color }}">{{ $pipeline['status'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p>There are no pipelines at this time.</p>
        @endif
    </div>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
