<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Channel</title>
    </head>
    <body>
        <h1>Test Data</h1>

        <ul>
            @foreach ($datas as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>

        <a href="/channels/create">Create New Data</a>
    </body>
</html>
