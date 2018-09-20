@extends ('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Criar novo usuário
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="{{ route('user.store') }}" method="post">
                {{-- Chave para envio de dados pelo POST do laravel --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success">Adicionar usuário</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
