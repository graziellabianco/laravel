@extends('adminlte::page')

@section('title','Usuarios')

@section('content_header')
<h1>Meus Usuários
    <a href="{{route('usuarios.create')}}" class="btn btn-sm btn-success">Novo Usuário</a>

</h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">

        <table class="table table-hover">
            <thead>
                <tr>

                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Açoes</th>

                    @foreach ($users as $user)
                </tr>
            </thead>

            <tbody>
                <tr>

                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td>
                        <a href="{{ route('usuarios.edit',['usuario' => $user->id])}}" class="btn btn-sm btn-info">Editar</a>
                        @if($loggedId !== intval($user->id))
                        <form class="d-inline" action="{{ route('usuarios.destroy', ['usuario' => $user->id])}}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir?')">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                        @endif
                    </td>



                    @endforeach
                </tr>
            <tbody>
        </table>
    </div>

</div>

{{$users->links()}}


@endsection