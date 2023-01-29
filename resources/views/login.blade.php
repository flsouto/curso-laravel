<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

<div class="container mt-5">
    <div class="row">

        <form action="/login" method="POST" class="col-4 mx-auto">
            @if (session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
            @endif
            @csrf
            <div class="form-group">
                <label>Email:</label>
                <input name="email" class="form-control" type="email" required />
            </div>

            <div class="form-group">
                <label>Senha:</label>
                <input name="senha" class="form-control" type="password" required />
            </div>
            <button class="btn btn-primary">Login</button>
        </form>

    </div>
</div>