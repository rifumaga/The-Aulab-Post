<x-layout>
    <div class="container-fluid p-4 shadow bg-warning text-center">
        <div class="row justify-content-center">
            <x-navbar />
            <h1 class="display-1 fw-bold">
                The Aulab Post
            </h1>
            <h2 class="display-4 opacity-75 fw-lighter">
                Inserisci un articolo
            </h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="card p-5 shadow" action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo:</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{old('title')}}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{old('subtitle')}}"">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{old('body')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags:</label>
                        <input name="tags" class="form-control" id="tags" value="{{old('tags')}}">
                        <span class="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>
                    <div class="mt-2 text-center">
                        <button class="btn btn-outline-dark bg-warning text-black">Inserisci articolo</button>
                        <a class="btn btn-outline-warning bg-black" href="{{route('homepage')}}">Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>