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
                    <form method="GET" action="{{ url('/result') }}" >
                        <div class="form-group">
                            <label for="quiz">Nilai Quiz</label>
                            <input type="number" min="0" max="100" class="form-control" id="quiz" name="quiz" placeholder="Masukkan nilai quiz" required>
                        </div>
                        <div class="form-group">
                            <label for="tugas">Nilai Tugas</label>
                            <input type="number" min="0" max="100" class="form-control" id="tugas" name="tugas" placeholder="Masukkan nilai quiz" required>
                        </div>
                        <div class="form-group">
                            <label for="absensi">Nilai Absensi</label>
                            <input type="number" min="0" max="100" class="form-control" id="absensi" name="absensi" placeholder="Masukkan nilai absensi" required>
                        </div>
                        <div class="form-group">
                            <label for="praktek">Nilai Praktek</label>
                            <input type="number" min="0" max="100" class="form-control" id="praktek" name="praktek" placeholder="Masukkan nilai quiz" required>
                        </div>
                        <div class="form-group">
                            <label for="uas">Nilai UAS</label>
                            <input type="number" min="0" max="100" class="form-control" id="uas" name="uas" placeholder="Masukkan nilai quiz" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
