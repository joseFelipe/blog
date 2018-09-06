@extends ('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
              </div>
            @endforeach
        </ul>
    @endif
    <div class="card">
        <div class="card-header">
            Criar novo post
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                {{-- Chave para envio de dados pelo POST do laravel --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Imagem destaque</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Conteúdo</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success">Salvar post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
