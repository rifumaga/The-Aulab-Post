<x-layout>

    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif

    <div class="container-fluid p-4 shadow bg-warning text-center">
        <div class="row justify-content-center">
            <x-navbar />
            <h1 class="display-1 fw-bold">
                The Aulab Post
            </h1>
            <h2 class="display-4 opacity-75 fw-lighter">
                Informati, lavora e guadagna con noi!
            </h2>
        </div>
    </div>
    
    <div class="container-fluid my-4">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 card-group">
                    
                    <a href="{{route('article.show', compact('article'))}}" class="btn text-black">
                        <div class="card shadow mb-2">
                   
                        <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="Immagine dell'articolo, all rights are reserved.">
                        <div class="card-body">
                            <p class="small text-center text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                            <h4 class="card-title text-center">{{$article->title}}</h4>
                            <p class="card-text">{{$article->subtitle}}</p>
                            @if ($article->category)
                                <a href="{{route('article.byCategory', ['category' => $article->category->id])}}" class="small text-muted fst-italic text-capitalize text-center">{{$article->category->name}}</a>
                            @else
                                <p class="small text-muted fst-italic text-capitalize">
                                Non categorizzato
                                </p>
                            @endif
                            <span class="text-muted small fst-italic">- Tempo di lettura {{$article->readDuration()}} min</span>
                            <hr>
                            <p class="small fst-italic text-capitalize">
                                @foreach ($article->tags as $tag)
                                #<a href="{{route('article.search',['query' => $tag->name])}}">{{$tag->name}}</a>
                                @endforeach 
                            </p>
                        </div>
                        <div class="card-footer small text-muted d-flex justify-content-between align-items-center">
                            Redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                            <a href="{{route('article.byWriter', ['user' => $article->user->id])}}" class="small text-muted fst-italic text-capitalize">{{$article->user->name}}</a>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>

</x-layout>