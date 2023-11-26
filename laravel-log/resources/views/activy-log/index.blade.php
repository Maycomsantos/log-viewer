<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activy Logs!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Hello World
            </h1>
            <p class="subtitle">
                The first website of <strong>Logs</strong>!
            </p>
        </div>
    </section>

    <table class="table">
        <thead>
            <tr>
                <th>Name Log</th>
                <th>Description</th>
                <th>Type Message</th>
                <th>Event</th>
                {{-- <th>Caused<th> --}}
                <th>Created at:</th>
                <th>Updated at:</th>
            </tr>
        </thead>

        <tbody>
        @foreach($activys as $activy)
            <tr>
                <td>{{ $activy->log_name }}</td>
                <td>{{ $activy->description }}</td>
                <td>{{ $activy->subject_type }}</td>
                <td>{{ $activy->event }}</td>
                {{-- <td>{{ $activy->causer_id }}</td> --}}
                <td>{{ $activy->created_at }}</td>
                <td>{{ $activy->updated_at }}</td>
            </tr>

        @endforeach
        </tbody>
    </table>
</body>

</html>
