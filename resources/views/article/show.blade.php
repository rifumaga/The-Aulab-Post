<x-layout>

    <div class="container-fluid p-4 shadow bg-warning text-center">
        <div class="row justify-content-center">
            <x-navbar />
            <h1 class="display-1 fw-bold">
                The Aulab Post
            </h1>
        </div>
    </div>

    <div class="container-fluid my-4">
        <div class="row justify-content-center ">
            <div class="col-122 col-md-8 rounded mx-auto">
               
                <h2 class="text-center fw-bold">
                    {{$article->title}}
                </h2>
                <hr>
                
                <div class="text-center">
                    <h5>{{$article->subtitle}}</h5>
                <div class="text-center my-3 text-muted fst-italic">
                    <p>Redatto da <a href="{{route('article.byWriter', ['user' => $article->user->id])}}">{{$article->user->name}}</a> il {{$article->created_at->format('d/m/Y')}}</p>
                </div>
                <img src="{{Storage::url($article->image)}}" class="img-fluid-my-4 img-thumbnail" alt="Immagine dell'articolo, all rights are reserved.">
                    
                </div>
                <hr>
                <p>{{$article->body}}</p>
                <div class="text-center">
                    @if (Auth::user() && Auth::user()->is_revisor)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="btn btn-success btn-outline-dark text-black my-5 " ">Accetta articolo</a></li>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="btn btn-danger btn-outline-dark text-black my-5" ">Rifiuta articolo</a></li>
                    @endif  
                </div>
                <div class="text-center">
                    <a href="{{route('homepage')}}" class="mt-4 text-center btn btn-outline-warning bg-black">Torna alla Home</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
