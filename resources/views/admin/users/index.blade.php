@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Usuários
        </div>
        <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Permissões</th>
                        <th>Excluir</th>
                    </thead>
                    <tbody>
                        @if($users->count() > 0)
                            @foreach ($users as $user)
                                <tr>
                                    <td><img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}"
                                            width="60px" height="60px;" style="border-radius: 50%;"></td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        @if($user->admin)
                                            <a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Remover permissões</a>
                                        @else
                                            <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Tornar administrador</a>
                                        @endif
                                    </td>
                                    <td>
                                        @if(Auth::id() !== $user->id)
                                            <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">
                                                Excluir
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5" class="text-center">Nenhum usuário encontrado.</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
    </div>
@stop
