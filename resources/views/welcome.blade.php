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
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#form">Form</a>
                </li>

            </ul>
        </div>
    </nav>

</header>
<div class="background">
    <div class="container">

        <br>
        <h1 style="text-align: center">Welcome to the BackOffice of SlingshotApp</h1><br>

        <table class="table" style="padding: 10%">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Age</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($customers as $customer)

                <tr>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->age}}</td>
                    <td>
                        <a href="/customers/{{ $customer->id }}/edit" type="button" class="btn btn-warning">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="/customers/{{ $customer->id }}">

                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>

                            @csrf
                        </form>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

        {!! $customers->links() !!}

        <div class="form" id="form">
            <h2 style="padding: 2%; text-align: center">Add a new customer!</h2>
            <form style="padding: 2%" method="POST" action="/customers">
                <div class="form-group">
                    <label for="formGroupExampleInput"><strong>Name</strong></label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2"><strong>Email</strong></label>
                    <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2"><strong>Age</strong></label>
                    <input type="number" class="form-control" name="age" id="formGroupExampleInput2" placeholder="Age">
                </div>
                <button type="submit" class="btn btn-info">Save</button>
                <button type="button" class="btn btn-secondary">Cancel</button>

                @csrf

            </form>
        </div>

    </div>
    <div class="footer" id="footer" style="padding: 5%">
        <p style="text-align: center">Todos os direitos reservados!</p>
    </div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>
