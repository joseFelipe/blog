@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Tags
        </div>
        <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>
                            Nome da tag
                        </th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </thead>
                    <tbody>
                        @if($tags->count() > 0)
                            @foreach($tags as $tag)
                                <tr>
                                    <td>
                                        {{ $tag->tag }}
                                    </td>
                                    <td>
                                        <a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-sm btn-primary">
                                            Editar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('tag.delete', ['id' => $tag->id]) }}" class="btn btn-sm btn-danger">
                                            Excluir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5" class="text-center">Nenhuma tag encontrada.</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
    </div>
@stop
