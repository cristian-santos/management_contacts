@component('components.header')
@endcomponent

<body class="fundo">
<div class="col-6 m-auto">
    <div class="card editar">
        <div class="card-body">

            <div class="d-flex justify-content-start mb-2">
                <h3>Register contact</h3>
            </div>

            @include('components.alert')
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}">
                    <label>Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="phone" class="form-control" maxlength="9" placeholder="Contact" name="contact" value="{{ old('contact')}}">
                    <label>Contact</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">
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
