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
                        <th>Editar</th>
                        <th>Excluir</th>
                    </thead>
                    <tbody>
                        @if($posts->count() > 0)
                            @foreach ($posts as $post)
                                <tr>
                                    <td><img src="{{ $post->featured }}" alt="{{ $post->title }}"
                                            width="90px" height="50px;"></td>
                                    <td>{{ $post->title }}</td>
                                    <td>
                                        <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-primary">
                                            Editar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-sm btn-danger">
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
