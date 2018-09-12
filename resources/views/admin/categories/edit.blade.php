@extends ('layouts.app')

@section('content')
    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Atualizar categoria: {{ $category->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post">
                {{-- Chave para envio de dados pelo POST do laravel --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Atualizar categoria</button>
                </div>
            </form>
        </div>
    </div>
@stop
