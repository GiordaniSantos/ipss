<?php
if(count($noticia->arquivos) != 0){
    $fotos = $noticia->arquivos;
}
?>

@extends('site.layouts.main')

@section('titulo', $noticia->titulo)

@section('conteudo')
    {{ Breadcrumbs::render('noticiaView', $noticia) }}
    <div class="container py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-12 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-5">{{$noticia->titulo}}</h1>
                <p>
                    @if ($noticia->autor)
                        <strong>Autor: </strong>{{$noticia->autor}}<br />
                    @endif
                    @if ($noticia->data_publicacao)
                        <strong>Data de Publicação: </strong> {{$noticia->data_publicacao->format('d/m/Y')}}<br>
                    @endif
                </p>
                <hr><br>
                @if ($noticia->descricao)
                    <?=$noticia->descricao?>
                @endif
            </div>
            <div class="col-lg-12 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                @if ($fotos)
                    <div class="owl-carousel header-carousel position-relative mb-5">
                        @foreach ($fotos as $arquivo)
                            <div class="owl-carousel-item position-relative">
                                <img class="img-fluid" src="{{url('/')}}/storage/uploads/noticia/{{$arquivo->id}}/{{$arquivo->arquivo}}" alt="{{$arquivo->nome_original}}">
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection