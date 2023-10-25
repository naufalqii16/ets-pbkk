<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container mt-4">
        <h1 style="margin-top: 2%; margin-bottom:2%; margin-left:5% ">New Rekam Medis</h1>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <div class="card">
            <div class="card-body">
                <form name="form" id="form" method="POST" action="{{url('employee')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                      <label for="pasienID" class="col-sm-2 col-form-label">pasien_id</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="pasien_id" placeholder="pasien_id" name="pasien_id">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="dokterID" class="col-sm-2 col-form-label">dokter_id</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="dokter_id" placeholder="dokter_id" name="dokter_id">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="kondisi" class="col-sm-2 col-form-label">kondisi</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="kondisi" placeholder="kondisi" name="kondisi">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="suhu_tubuh" class="col-sm-2 col-form-label">suhu_tubuh(C)</label>
                      <div class="col-sm-4">
                        <input type="decimal" class="form-control" id="suhu_tubuh" placeholder="suhu_tubuh" name="suhu_tubuh">
                      </div>
                    </div>


                    <div class="form-group row">
                        <label for="inputPhoto3" class="col-sm-2 col-form-label">Personal Photo</label>
                        <div class="col-sm-4">
                          <input type="file" class="form-control" id="inputPhoto3" name="personal_photo">
                        </div>
                        @error('personal_photo')
                            <div class="col-sm-4 text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px" name="submit_button" value="clicked">Submit</button>
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>

</body>
</html>


