@if(isset($noticia->id))
<form method="post" action="{{ route('noticia.update', ['noticium' => $noticia->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
@else
<form method="post" action="{{ route('noticia.store') }}" enctype="multipart/form-data">
    @csrf
@endif
    <div class="row">
        <div class="col-6">
            <label>Título:</label>
            <input type="text" name="titulo" value="{{ $noticia->titulo ?? old('titulo') }}" placeholder="Título" style="width: 100%;">
            {{ $errors->has('titulo') ? $errors->first('titulo') : '' }}
        </div>
        <div class="col-6">
            <label>Data de Publicação:</label>
            <input type="datetime-local" class="form-control" name="data_publicacao" value="{{ $noticia->data_publicacao ?? old('data_publicacao') }}"  placeholder="Data de Publicação">
            {{ $errors->has('data_publicacao') ? $errors->first('data_publicacao') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <label>Resumo:</label>
            <textarea name="resumo" placeholder="Resumo" style="width: 100%;" rows="4" cols="50">{{ $noticia->resumo ?? old('resumo') }}</textarea>
            {{ $errors->has('resumo') ? $errors->first('resumo') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <p><label>Descrição:</label></p>
            <textarea class="descricao" name="descricao" placeholder="Descrição" style="width: 100% !important;">{{ $noticia->descricao ?? old('descricao') }}</textarea>
            {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-6">
            <p><label>Autor:</label></p>
            <input type="text" name="autor" value="{{ $noticia->autor ?? old('autor') }}" placeholder="Autor" style="width: 100%;">
            {{ $errors->has('autor') ? $errors->first('autor') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" name="images[]" id="customFileLangHTML" multiple>
                <label for="customFileLangHTML" class="custom-file-label" data-browse="Enviar Imagens"></label>
            </div>
        </div>
    </div>
    @if (isset($noticia))      
        <div class="row">
            <div class="col-12">
                @component('admin.noticia._components._grid_arquivos_form', ['noticia' => $noticia])
                @endcomponent
            </div>
        </div>
    @endif
    <br>
    <div class="row">
        <div class="col-2">
            <input type="hidden" id="ativo" name="ativo" value="0">
            <input type="checkbox" id="ativo" name="ativo" value="1" @if(isset($noticia)){{ $noticia->ativo==1?'checked':'' }}@endif>
            <label for="ativo">Ativo</label>
        </div>
        <div class="col-2">
            <input type="hidden" id="destaque" name="destaque" value="0">
            <input type="checkbox" id="destaque" name="destaque" value="1" @if(isset($noticia)){{ $noticia->destaque==1?'checked':'' }}@endif>
            <label for="destaque">Destaque</label>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Cadastrar</button>
<form>
<br><br><br>

<script>
    tinymce.init({
        selector:'textarea.descricao',
        language: 'pt_BR',
    });
</script>
