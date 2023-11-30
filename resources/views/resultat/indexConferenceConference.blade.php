<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List of participants Conferences - TamTech</title>
    <link href="{{ asset('image/TAMTECH-02.png') }}" rel="icon">
    <link href="{{ asset('image/TAMTECH-02.png') }}" rel="apple-touch-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>List of participants</h1>
        <form method="GET" action="{{ route('resultatsConference') }}">
            <div class="input-group mb-3 mt-5 w-100">
                <input type="search" class="form-control" placeholder="Find participant here"
                    aria-label="Find participant here" aria-describedby="basic-addon2" name="search"
                    value="{{ $search ?? '' }}">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
                <a class="btn btn-outline-primary" href="{{ route('resultatsConference') }}" role="button">All</a>
            </div>
        </form>

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Company</th>
                    <th scope="col">Conference Access</th>
                    <th></th>
                    {{-- <th scope="col">Date Inscription</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse($resultats as $data)
                    <tr>
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->fullname }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->company }}</td>
                        <td>{{ $data->type }}</td>
                        <td>
                            <div class="btn-group btn-group-xs" role="group">
                                <div class="form-check form-switch">
                                    <input class="form-check-input checkb" type="checkbox" role="switch"
                                        id="checkbox{{ $data->id }}" value="{{ $data->id }}"
                                        {{ $data->participated == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="checkbox1"> switch</label>
                                </div>
                            </div>
                        </td>
                        {{-- <td>{{ $data->created_at }}</td> --}}
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="7">User Not Found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $resultats->links() !!}
        </div>

        <br>
        <a class="btn btn-success mb-5" href="{{ route('export-conferences') }}">Export Conferences</a>
    </div>
    <script>
        $(document).ready(function() {
            $('.checkb').change(function() {
                id = $(this).val();
                console.log($(this).val());
                Swal.fire({
                    title: 'Are you sure?',
                    text: " ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "/changestate/" + id,
                            method: "GET",
                            processData: false,
                            contentType: false,
                            dataType: 'json',
                            success: function(result) {
                                if (result.success == 1) {
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'The status is changed successfully',
                                        showConfirmButton: false,
                                        timer: 1500
                                    })
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: "Something went wrong !"
                                    })
                                }
                            }
                        });

                        //// Swal.fire(
                        ////     'Deleted!',
                        ////     'Your file has been deleted.',
                        ////     'success'
                        //// )
                    }
                })

            });
        });
    </script>
</body>

</html>
