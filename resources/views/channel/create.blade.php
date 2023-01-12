<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Channel</title>
    </head>
    <body>
        <h1>Create Data</h1>

        <form action="#">
            <select name="name" id="name">
                @foreach ($datas as $index => $item)
                <option value="{{ $index }}">{{ $item }}</option>
                @endforeach
            </select>

            <br />
            <label for="name">Name</label>
            <br />
            <input type="text" placeholder="Name Unique Value" />
            <br />
            <button type="submit">Submit</button>
        </form>

        <a href="/channels">Back to Home</a>
    </body>
</html>
