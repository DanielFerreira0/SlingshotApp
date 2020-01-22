<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slingshot-BackOffice</title>

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Slingshot - BackOffice</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>

</header>

<div class="form" id="form">
    <h2 style="padding: 2%; text-align: center">Edit you Customer!</h2>
    <form style="padding: 2%" method="POST" action="/customers/{{ $customers->id }}">

        @method("PUT")

        <div class="form-group">
            <label for="formGroupExampleInput"><strong>Name</strong></label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name"
                   value="{{ $customers->name }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><strong>Email</strong></label>
            <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Email"
                   value="{{ $customers->email }}">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2"><strong>Age</strong></label>
            <input type="number" class="form-control" name="age" id="formGroupExampleInput2" placeholder="Age"
                   value="{{ $customers->age }}">
        </div>
        <button type="submit" class="btn btn-info">Save</button>
        <a href="/customers" type="button" class="btn btn-secondary">Cancel</a>

        @csrf
    </form>
</div>
</body>
