<table class="table table-striped table-hover border-warning text-center">
    <thead class="table-dark">
        <tr class="text-warning text-center">
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roleRequests as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              @switch($role)
                  @case('amministratore')
                  <a href="{{route('admin.setAdmin', $user)}}" method="put" class="btn btn-outline-dark btn-warning text-black bg-warning mb-1">Attiva {{$role}}</a>
                  @break;
                  @case('revisore')
                  <a href="{{route('admin.setRevisor', $user)}}" method="put" class="btn btn-outline-dark btn-warning text-black bg-warning mb-1">Attiva {{$role}}</a>
                  @break;
                  @case('redattore')
                  <a href="{{route('admin.setWriter', $user)}}" method="put" class="btn btn-outline-dark btn-warning text-black bg-warning mb-1">Attiva {{$role}}</a>
                  @break;
              @endswitch
            </td>
        </tr>
        @endforeach
    </tbody>
</table>