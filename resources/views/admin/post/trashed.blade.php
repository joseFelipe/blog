
@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Excluir</th>
                        <th>Restaurar</th>
                    </thead>
                    <tbody>
                        @if($posts->count() > 0)
                            @foreach ($posts as $post)
                                <tr>
                                    <td><img src="{{ $post->featured }}" alt="{{ $post->title }}"
                                            width="90px" height="50px;"></td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-sm btn-success">
                                            Restaurar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
                                            Excluir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5" class="text-center">Nenhum post encontrado.</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
    </div>
@stop
