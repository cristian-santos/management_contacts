<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./assets/css/create.css" rel="stylesheet">
    <title>Register</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .card {
            border: none;
            margin-top: 25px;
        }

        .editar {
            box-shadow:  2px 5px 20px 8px rgb(113, 143, 240);
            background-color: #fff;
            border-radius: 20px;
        }

    </style>
</head>

<body class="fundo">
<div class="col-6 m-auto">
    <div class="card editar">
        <div class="card-body">

            <div class="d-flex justify-content-start mb-2">
                <h3>Resgister contact</h3>
            </div>
                <div class="form-floating mb-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{$contact->id}}</th>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->contact}}</td>
                            <td>{{$contact->email}}</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            <div class="form-floating d-flex justify-content-end">
                <a href="{{ route('contact.index') }}" class="btn btn-dark btn-rounded waves-effect waves-light mb-2 me-2">
                    Back</a>

                <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">
                    <i class=" arrow-round-back"></i>Edit</a>

                <a href="{{ route('contact.destroy', $contact->id) }}" class="btn btn-danger btn-rounded waves-effect waves-light mb-2 me-2">
                    <i class="mdi mdi-keyboard-return me-1"></i>Delete</a>

            </div>

        </div>
    </div>
</div>
</body>
</html>
