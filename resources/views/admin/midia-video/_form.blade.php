@if(isset($video->id))
<form method="post" action="{{ route('video.update', ['video' => $video->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
@else
<form method="post" action="{{ route('video.store') }}" enctype="multipart/form-data">
    @csrf
@endif
    <div class="row">
        <div class="col-6">
            <label>Título:</label>
            <input type="text" name="titulo" value="{{ $video->titulo ?? old('titulo') }}" placeholder="Título" style="width: 100%;">
            {{ $errors->has('titulo') ? $errors->first('titulo') : '' }}
        </div>
        <div class="col-6">
            <label>Data de Publicação:</label>
            <input type="datetime-local" class="form-control" name="data_publicacao" value="{{ $video->data_publicacao ?? old('data_publicacao') }}"  placeholder="Data de Publicação">
            {{ $errors->has('data_publicacao') ? $errors->first('data_publicacao') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <label>Resumo:</label>
            <textarea name="resumo" placeholder="Resumo" style="width: 100%;" rows="4" cols="50">{{ $video->resumo ?? old('resumo') }}</textarea>
            {{ $errors->has('resumo') ? $errors->first('resumo') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <p><label>Descrição:</label></p>
            <textarea class="descricao" name="descricao" placeholder="Descrição" style="width: 100% !important;">{{ $video->descricao ?? old('descricao') }}</textarea>
            {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-12">
            <p><label>Inserir link contido no src do incorporar (youtube->compartilhar->incorporar):</label></p>
            <input type="text" name="link" value="{{ $video->link ?? old('link') }}" placeholder="Youtube" style="width: 100%;">
            {{ $errors->has('link') ? $errors->first('link') : '' }}
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-2">
            <input type="hidden" id="destaque" name="destaque" value="0">
            <input type="checkbox" id="destaque" name="destaque" value="1" @if(isset($video)){{ $video->destaque==1?'checked':'' }}@endif>
            <label for="destaque">Destaque</label>
        </div>
        <div class="col-2">
            <input type="hidden" id="devocional" name="devocional" value="0">
            <input type="checkbox" id="devocional" name="devocional" value="1" @if(isset($video)){{ $video->devocional==1?'checked':'' }}@endif>
            <label for="devocional">Devocional</label>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-success">Cadastrar</button>
<form>
<br><br><br>

<script>
    tinymce.init({
        selector:'textarea.descricao',
        language: 'pt_BR'
    });
</script>
