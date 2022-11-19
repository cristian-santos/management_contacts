<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./assets/css/create.css" rel="stylesheet">
    <title>Cadastrar</title>

    <style>

    </style>
</head>

<body class="fundo">
<div class="col-6 m-auto">
    <div class="card editar">
        <div class="card-body">

            <div class="d-flex justify-content-start mb-2">
                <h3>Cadastrar contato</h3>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" placeholder="Nome">
                <label>Nome</label>
            </div>

            <div class="form-floating mb-3">
                <input type="number" class="form-control" placeholder="preço">
                <label>Preço</label>
            </div>

            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Descrição"></textarea>
                <label>Descrição</label>
            </div>

            <div class="form-floating d-flex justify-content-end">
                <a href="{{ route('contato.index') }}" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2">
                    <i class="mdi mdi-keyboard-return me-1"></i> Voltar</a>

                <button type="submit" class="btn btn-success btn-rounded waves-effect me-2 mb-2">
                    <i class="mdi mdi-check me-1"></i>Salvar</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
