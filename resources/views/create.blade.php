<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./assets/css/create.css" rel="stylesheet">
    <title>Register</title>
</head>

<body class="fundo">
<div class="col-6 m-auto">
    <div class="card editar">
        <div class="card-body">

            <div class="d-flex justify-content-start mb-2">
                <h3>Resgister contact</h3>
            </div>

            @include('components.alert')
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nome" name="name">
                    <label>Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="phone" class="form-control" maxlength="9" placeholder="Contact" name="contact">
                    <label>Contact</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="E-mail" name="email">
                    <label>E-mail</label>
                </div>

                <div class="form-floating d-flex justify-content-end">
                    <a href="{{ route('contact.index') }}" class="btn btn-dark btn-rounded waves-effect waves-light mb-2 me-2">
                        <i class="mdi mdi-keyboard-return me-1"></i>Back</a>

                    <button type="submit" class="btn btn-success btn-rounded waves-effect me-2 mb-2">
                        <i class="mdi mdi-check me-1"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
