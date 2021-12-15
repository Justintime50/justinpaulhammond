<!DOCTYPE html>
<html lang="en">
<head>
    <title>Harvey Deployments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('pics/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body style="background-color: #212529;">
    <h1 style="color:#fff;padding: 20px;">Harvey Deployments</h1>
    <div class="table-responsive">
        <table class="table table-dark table-striped">
            <thead>
                <th>Project</th>
                <th>Last Run</th>
                <th>Status</th>
            </thead>
            <tbody>
            @forelse ($pipelines as $pipeline => $details)
                <tr>
                    <td><a href="harvey-pipeline?project={{$pipeline}}">{{ $pipeline }}</a></td>
                    <td>{{ $details['last_run'] }}</td>
                    <td>{{ $details['status'] }}</td>
                </tr>
            @empty
                <p>There are no pipelines at this time.</p>
            @endforelse
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
