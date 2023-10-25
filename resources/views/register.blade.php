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
        <h1 style="margin-top: 2%; margin-bottom:2%; margin-left:5% ">New Employee Registration</h1>
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
                      <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputName3" placeholder="Name" name="name">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                      </div>
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


