@extends ('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Editar seu perfil
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                {{-- Chave para envio de dados pelo POST do laravel --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Usuário</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Nova Senha</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Perfil Facebook</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="youtube">Perfil Youtube</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}"class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">Sobre você</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group">
                    <label for="email">Atualizar imagem</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success">Atualizar perfil</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
