<!DOCTYPE html>
<html lang="en">
<head>
    <title>Harvey Deployments</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('pics/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/0dd4ecd465.js" crossorigin="anonymous"></script>
    <style>
        body {background-color: #212529}
        h1, p {color: #fff;}
    </style>
</head>

<body>
    <div class="container">
        <h1>Harvey Deployments</h1>
        @php $harvey_status_icon = $harvey_status == 200 ? '<i class="fas fa-check text-success"></i>' : '<i class="fas fa-bomb text-danger"></i>' @endphp
        <p><b>Harvey Status:</b> {!! $harvey_status_icon !!}</p>
        <p>The following are all of the most recent deployments done via Harvey.</p>
        
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <th>Project</th>
                    <th>Last Run</th>
                    <th>Status</th>
                </thead>
                <tbody>
                @forelse ($pipelines as $pipeline => $details)
                    @php $status_color = $details['status'] == 'Success' ? 'text-success' : 'text-danger'; @endphp
                    <tr>
                        <td><a href="harvey-pipeline?project={{$pipeline}}">{{ $pipeline }}</a></td>
                        <td>{{ $details['last_run'] }}</td>
                        <td class="{{ $status_color }}">{{ $details['status'] }}</td>
                    </tr>
                @empty
                    <p>There are no pipelines at this time.</p>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
