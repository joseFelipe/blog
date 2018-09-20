@extends ('layouts.app')

@section('content')

    @include('admin.includes.errors')

    <div class="card">
        <div class="card-header">
            Editar post {{ $post->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                {{-- Chave para envio de dados pelo POST do laravel --}}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="featured">Imagem destaque</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    @foreach ($tags as $tag)
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                                    @foreach ($post->tags as $t)
                                        @if($tag->id == $t->id)
                                            checked
                                        @endif
                                    @endforeach
                                >
                                {{ $tag->tag }}
                            </label>
                        </div>
                    @endforeach
                </div>
                <div class="form-group">
                    <label for="category">Selecione uma Categoria</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                @if($post->category->id == $category->id)
                                    selected
                                @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Conteúdo</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">
                        {{ $post->content }}
                    </textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success">Atualizar post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
