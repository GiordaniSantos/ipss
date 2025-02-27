@extends('site.layouts.main')

@section('titulo', 'Notícias')

@section('conteudo')
{{ Breadcrumbs::render('noticia') }}
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Notícias</h1>
            </div>
            <div class="d-flex justify-content-center wow fadeInUp mb-5" data-wow-delay="0.1s">
                <a href="https://www.ipb.org.br/conteudos?conteudo=noticia" target="_blank">
                    <button class="button-more-noticias">
                        <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                          <path
                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                          ></path>
                        </svg>
                        <span class="text">Mais Notícias</span>
                        <span class="circle"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                          <path
                            d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
                          ></path>
                        </svg>
                    </button>              
                </a>
            </div>
            <div class="row g-4">
                @foreach ($noticias as $noticia)
                    @include('site.noticia._list_item',['noticia'=>$noticia])
                @endforeach
                {{ $noticias->appends($request)->links() }}
            </div>
        </div>
    </div>
@endsection
