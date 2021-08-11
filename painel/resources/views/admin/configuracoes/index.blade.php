@extends('adminlte::page')

@section('title','Configurações')

@section('content_header')
<h1> Configurações </h1>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{route('configuracao.salvar')}}" method="POST">
            @method('PUT')
            @csrf

            <div class="form-group row">
                <label>Título do Site</label>
                <input type="text" name="titulo" value="{{$configuracoes['titulo']}}" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Subtítulo do Site</label>
                <input type="text" name="subtitulo" value="{{$configuracoes['subTitulo ']}}" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Email para Contato</label>
                <input type="text" name="email" value="{{$configuracoes['email']}}" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Cor do Fundo</label>
                <input type="color" name="corFundo" value="{{$configuracoes['corFundo']}}" class="form-control" />
            </div>
            <div class="form-group row">
                <label>Cor do Texto</label>
                <input type="color" name="corTexto" value="{{$configuracoes['corFonte']}}" class="form-control" />
            </div>
            <div class="row">
                <div class="form-group col-12 text-left mt-3">
                    <input type="submit" value="Salvar" class="btn btn-primary" />
                </div>
            </div>
        </form>
    </div>
</div>
@endsection