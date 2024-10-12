<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <h1>Laravel Google Sheet Api</h1>
            <a href="{{ route('create') }}" type="button" class="btn btn-primary">Create</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                </tr>
                </thead>
                <tbody>
                @foreach($values as $key=>$value)
                <tr>
                    <th scope="row"> {{ $key+1 }}</th>
                    <td>{{ data_get($value, 'name') }}</td>
                    <td>{{ data_get($value, 'email') }}</td>
                    <td>{{ data_get($value, 'phone') }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
