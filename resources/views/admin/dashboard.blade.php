<x-layout>

    <div class="container-fluid p-4 shadow bg-warning text-center">
        <div class="row justify-content-center">
            <x-navbar/>
            <h1 class="display-1 fw-bold">
                The Aulab Post
            </h1>
            <h2 class="display-4 opacity-75 fw-lighter">
                Dashboard
            </h2>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo amministratore</h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo revisore</h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Richieste per ruolo redattore</h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>I tags della piattaforma</h2>
                <x-metainfo-table :metaInfos="$tags" metatype="tags"/>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metatype="categorie"/>
                <form class="d-flex" action="{{route('admin.storeCategory')}}" method="post">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btn btn-warning text-black btn-outline-dark">Aggiungi</button>
                </form>
            </div>
        </div>
    </div>
    
</x-layout>