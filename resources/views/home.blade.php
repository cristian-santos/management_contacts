<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="./assets/css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d093a04ba7.js" crossorigin="anonymous"></script>
    <title>Listing</title>
</head>

<body class="fundo">
<div class="col-md-12">
    <div class="container page">
        <div class="row">
            <div class="col">
                <h4>Contact list</h4>
                <h6>Total contacts: {{$count}}</h6>
                <a href="{{ route('contact.create') }}">
                    <button class="btn btn-primary" title="Edit contact">New contact</button>
                </a>
                <hr />

                @foreach($data as $contact)
                <div class="row mb-3 d-flex align-items-center">
                        <div class="col-sm-9">
                            {{$contact->name}} - {{$contact->contact}}
                            <hr>
                        </div>

                        <div class="col-sm-3">
                            <a href="{{route('contact.show', $contact->id)}}" style="text-decoration: none">
                                <button class="btn btn-success" title="Show contact"><i class="fa-regular fa-eye"></i></button>
                            </a>

                            <a href="{{ route('contact.edit', $contact->id) }}" style="text-decoration: none">
                                <button class="btn btn-primary" title="Edit contact"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a>

                            <a href="{{ route('contact.destroy', $contact->id) }}">
                                <button class="btn btn-danger" title="Delete contact"><i class="fa-solid fa-trash"></i></button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
