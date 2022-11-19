@component('components.header-home')
@endcomponent

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
                    @include('components.alert')
                <hr />

                @foreach($data as $contact)
                <div class="row mb-3 d-flex align-items-center">
                        <div class="col-sm-9">
                            {{$contact->name}} - {{$contact->contact}}
                            <hr>
                        </div>

                        <div class="col-sm-3 d-flex justify-content-center">
                            <a href="{{route('contact.show', $contact->id)}}" style="text-decoration: none">
                                <button class="btn btn-success" title="Show contact"><i class="fa-regular fa-eye"></i></button>
                            </a>&nbsp

                            <a href="{{ route('contact.edit', $contact->id) }}" style="text-decoration: none">
                                <button class="btn btn-primary" title="Edit contact"><i class="fa-solid fa-pen-to-square"></i></button>
                            </a>&nbsp

                            <div>
                                <form action="{{route('contact.destroy', $contact->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" title="Delete contact"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>
