<table class="table table-striped table-hover border-warning text-center">
    <thead class="table-dark">
        <tr class="text-warning">
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->user->name}}</td>
            <td>
           @if (is_null($article->is_accepted))
           <a href="{{route('article.show', $article)}}" class="btn btn-outline-dark btn-info text-black bg-info mb-1">Leggi l'articolo</a>
           @else
           <a href="{{route('revisor.undoArticle', $article)}}" class="btn btn-outline-dark btn-warning text-black mb-1">Riporta in revisione</a>
           @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>