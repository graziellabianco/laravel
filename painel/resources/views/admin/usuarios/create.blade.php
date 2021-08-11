@extends('adminlte::page')

@section('title','Novo Usuário')

@section('content_header')
<div class="container">
    <h1>Novo Usuário</h1>
</div>
@endsection

@section('content')

<div class="container">

    @if($errors->any())

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i>Ocorreu um erro!</h5>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card card-body">
        <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-6">
                    <label>Nome Completo</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" />
                </div>
                <div class="form-group col-6">
                    <label>E-mail</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-6">
                    <label>Senha</label>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" />
                </div>
                <div class="form-group col-6">
                    <label>Confirmação Senha</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" />
                </div>
            </div>
            <div class="row">
                <div class="form-group col-12 text-left mt-3">
                    <input type="submit" value="Cadastrar" class="btn btn-primary" />
                </div>
            </div>
    </div>
</div>

</form>



@endsection