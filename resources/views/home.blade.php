<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d093a04ba7.js" crossorigin="anonymous"></script>
    <title>To do list</title>
</head>

<body class="fundo">
<div class="col-md-12">
    <div class="container pagina">
        <div class="row">
            <div class="col">
                <h4>Listagem de contatos</h4>
                <h6>Total de contatos: 99</h6>
                <a href="{{ route('contato.create') }}">
                    <button class="btn btn-primary" title="Editar contato">Novo Contato</button>
                </a>
                    <hr />

                <div class="row mb-3 d-flex align-items-center">
                        <div class="col-sm-9">
                            Cristian - (79) 99999-9999
                            <hr>
                        </div>

                        <div class="col-sm-3">
                            <a href="" style="text-decoration: none">
                                <button class="btn btn-primary" title="Editar contato"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a>

                            <a href="">
                                <button class="btn btn-danger" title="Excluir contato"><i class="fa-solid fa-trash"></i></button>
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
