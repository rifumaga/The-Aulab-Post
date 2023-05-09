<x-layout>
    <div class="container-fluid p-4 shadow bg-warning text-center">
        <div class="row justify-content-center">
            <x-navbar />
            <h1 class="display-1 fw-bold">
                The Aulab Post
            </h1>
            <h2 class="display-4 opacity-75 fw-lighter">
                Lavora con noi
            </h2>
        </div>
    </div>

    <div class="container-fluid my-4">
        <div class="row justify-content-center align-items-center border rounded p-3 shadow">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: Ti occuperai dell'amministrazione della piattaforma e ti occuperai della gestione delle richieste di lavoro.</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai: Sarai uno dei tanti editors della piattaforma, ti occuperai di decidere se un articolo può essere pubblicato o meno.</p>
                <h2>Lavora come redattore</h2>
                <p>Cosa farai: Quotidianamente ti occuperai di scrivere gli articoli per noi.</p>
            </div>

            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="p-5 shadow" action="{{route('careers.submit')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                        <select name="role" class="form-control" id="role">
                            <option value="">Scegli qui!</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Redattore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" value="{{old('email') ?? Auth::user()->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Parlaci di te</label>
                        <textarea name="message" id="message" cols="30" row="7" class="form-control">{{old('message')}}</textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-warning btn-outline-dark text-black">Invia la candidatura</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>