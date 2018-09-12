@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            Categorias
        </div>
        <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>
                            Nome da categoria
                        </th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </thead>
                    <tbody>
                        @if($categories->count() > 0)
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        {{ $category->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-primary">
                                            Editar
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('category.delete', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">
                                            Excluir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <th colspan="5" class="text-center">Nenhuma categoria encontrada.</th>
                            </tr>
                        @endif
                    </tbody>
                </table>
        </div>
    </div>
@stop
