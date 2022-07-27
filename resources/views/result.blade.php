<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding: 20px;">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">Nilai Anda</h6>
                            <h5 class="card-title">{{ $grade }}</h5>

                            <a href="{{ url('/') }}" class="card-link">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
