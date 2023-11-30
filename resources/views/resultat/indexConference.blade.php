<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultats Conferences - TamTech</title>
    <link href="{{ asset('image/TAMTECH-02.png') }}" rel="icon">
    <link href="{{ asset('image/TAMTECH-02.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Resultats</h1>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Company</th>
                    <th scope="col">Conference Access</th>
                    <th scope="col">Date Inscription</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultats as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->fullname }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->company }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->created_at  }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $resultats->links() !!}
        </div>
    </div>
</body>
</html>
