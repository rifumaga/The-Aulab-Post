<table class="table table-striped table-hover border-warning text-center">
    <thead class="table-dark">
        <tr class="text-warning">
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">categoria</th>
            <th scope="col">Tags</th>
            <th scope="col">Creato il</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->category->name ?? 'Non categorizzato'}}</td>
            <td>
                @foreach ($article->tags as $tag)
                    #{{$tag->name}},
                @endforeach
            </td>
            <td>
                {{$article->created_at->format('d/m/Y')}}
            </td>
            <td>
                <a href="{{route('article.show', $article)}}" class="btn btn-outline-dark btn-info text-black mb-1">Leggi l'articolo</a>
                <a href="{{route('article.edit', $article)}}" class="btn btn-outline-dark btn-warning text-black mb-1">Modifica l'articolo</a>
                <form action="{{route('article.destroy', $article)}}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-dark btn-danger text-black">Elimina l'articolo</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>