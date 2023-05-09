<x-layout>
    <div class="container-fluid p-4 shadow bg-warning text-center">
        <x-navbar />
        <div class="row justify-content-center">
                <h1 class="display-1 fw-bold">
                    The Aulab Post
                </h1>  
            <h2 class="display-4 opacity-75 fw-lighter">
                Accedi
            </h2>
        </div>
    </div>

    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card p-5 shadow" action="{{route('login')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <div class="p-3 mb-1 d-flex justify-content-center">
                        <button class="btn btn-outline-dark bg-warning text-black">Accedi</button>
                    </div>
                    <p class="small text-center">Non sei registrato? <a href="{{route('register')}}">Clicca qui!</a></p>
                </form>
            </div>
        </div>
    </div>
</x-layout>