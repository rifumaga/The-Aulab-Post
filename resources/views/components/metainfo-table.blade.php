<table class="table table-striped table-hover border-warning text-center">
    <thead class="table-dark">
        <tr class="text-warning text-center">
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Q.ta articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Inserisci / Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th class="text-center" scope ="row">{{$metaInfo->id}}</th>
            <td class="text-center">{{$metaInfo->name}}</td>
            <td class="text-center">{{count($metaInfo->articles)}}</td>
           @if ($metaInfo == "tags")
           <td class="text-center">
                <form action="{{route('admin.editTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-info text-white">Aggiorna</button>
                </form>
           </td>
           <td>
                <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger text-white">Elimina</button>
                </form>
            </td>
            @else
            <td>
                <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST"
                    @csrf
                    @method('put')
                    <input type="text" name="name" placeholder="Aggiorna con nuovo nome" class="form-control w-50 d-inline">
                    <button type="submit" class="btn btn-outline-dark btn-warning text-black">Aggiorna</button>
                </form>
            </td>  
            <td>
                <form action="{{route('admin.storeCategory', ['category' => $metaInfo])}}" method="POST" class="d-flex">
                    @csrf
                    <input type="text" name="name" placeholder="Inserisci una nuova categoria" class="form-control me-2">
                    <button type="submit" class="btn btn-success btn-outline-dark text-black">Aggiungi</button>
                </form>
           </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category' => $metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-outline-dark text-black">Elimina</button>
                </form>
           </td>
           @endif
        </tr>
        @endforeach
    </tbody>
</table>