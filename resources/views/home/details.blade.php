@php
$shop_list = [
    [
        'text' => 'DIGITAL COMICS',
        'url' => '/img/buy-comics-digital-comics.png',
    ],
    [
        'text' => 'SHOP DC',
        'url' => '/img/buy-comics-subscriptions.png',
    ],
    [
        'text' => 'COMIC SHOP LOCATOR',
        'url' => '/img/buy-comics-shop-locator.png',
    ],
    [
        'text' => 'SUBSCRIPTIONS',
        'url' => '/img/buy-comics-merchandise.png',
    ],
];
@endphp

{{-- layout default --}}
@extends("layouts.default")

{{-- titolo pagina "vista browser" --}}
@section('page_title', $single_comic['series'])


@section('content')
    {{-- details top --}}
    <div class="details-top">
        {{-- barra blu con img absolute --}}
        <div class="container-fluid bg-primary py-5">
            <div class="container position-relative">
                <img class="position-absolute bottom-0 border border-2 border-white" src="{{ $single_comic['thumb'] }}"
                    alt="">
            </div>
        </div>
        {{-- dettagli del singolo fumetto --}}
        <div class="container">
            <div class="row row-cols-2 py-5">
                {{-- sezione testo --}}
                <div class="col-8">
                    <h2 class="pb-4 mb-0">{{ strtoupper($single_comic['title']) }}</h2>
                    <div class="row bg-success border-bottom border-dark py-2">
                        <div class="col">
                            <p class="mb-0">U.S. Price: <span
                                    class="text-white">{{ $single_comic['price'] }}</span></p>
                        </div>
                        <div class="col">
                            <p class="mb-0 text-end">AVAILABLE</p>
                        </div>
                        <div class="col-3 border-start border-dark">
                            <p class="mb-0 text-center text-white">Check Availability</p>
                        </div>
                    </div>
                    <p class="py-5 text-secondary">
                        {{ $single_comic['description'] }}
                    </p>
                </div>
                {{-- sezione img --}}
                <div class="col-4">
                    <p class="text-secondary text-end mb-1">ADVERTISEMENT</p>
                    <img class="advertisement" src="{{ asset('img/adv.jpg') }}" alt="advertisement-logo">
                </div>
            </div>
        </div>
    </div>
    {{-- sfondo grigio --}}
    <div class="details-bottom border-top border-secondary">
        {{-- talent + specs --}}
        <div class="container pt-3 pb-5">
            <div class="row">
                {{-- talent --}}
                <div class="col-6 d-flex flex-column">
                    <h4 class="py-2">Talent</h4>
                    {{-- artists --}}
                    <div class="row-cols-2 d-flex border-top border-secondary py-2">
                        <div class="col">
                            <p>Art by:</p>
                        </div>
                        <div class="col">
                            @foreach ($single_comic['artists'] as $artist)
                                <a class="text-decoration-none"
                                    href="#">{{ $artist }}</a><span>{{ $loop->last ? '' : ',' }}</span>
                            @endforeach
                        </div>
                    </div>
                    {{-- writers --}}
                    <div class="row-cols-2 d-flex border-top border-bottom border-secondary py-2">
                        <div class="col">
                            <p>Written by:</p>
                        </div>
                        <div class="col">
                            @foreach ($single_comic['writers'] as $writer)
                                <a class="text-decoration-none"
                                    href="#">{{ $writer }}</a><span>{{ $loop->last ? '' : ',' }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- specs --}}
                <div class="col-6 d-flex flex-column">
                    <h4 class="py-2">Specs</h4>
                    {{-- series --}}
                    <div class="row-cols-2 d-flex border-top border-secondary py-2">
                        <div class="col">
                            <p class="mb-0">Series:</p>
                        </div>
                        <div class="col">
                            <p class="mb-0 text-primary">{{ strtoupper($single_comic['series']) }}</p>
                        </div>
                    </div>
                    {{-- price --}}
                    <div class="row-cols-2 d-flex border-top border-secondary py-2">
                        <div class="col">
                            <p class="mb-0">U.S. Price:</p>
                        </div>
                        <div class="col">
                            <p class="mb-0 text-dark">{{ $single_comic['price'] }}</p>
                        </div>
                    </div>
                    {{-- date --}}
                    <div class="row-cols-2 d-flex border-top border-bottom border-secondary py-2">
                        <div class="col">
                            <p class="mb-0">On Sale Date:</p>
                        </div>
                        <div class="col">
                            <p class="mb-0 text-dark">{{ $single_comic['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- bottom shop card --}}
        <div class="container-fluid border-top border-secondary mt-5">
            <div class="container">
                <div class="row row-cols-4 justify-content-evenly">
                    {{-- ciclo shop card --}}
                    @foreach ($shop_list as $element)
                        <div class="col d-flex justify-content-between border-start border-end border-secondary p-3">
                            <h6 class="text-secondary flex-shrink-0 mb-0">{{ $element['text'] }}</h6>
                            <img class="h-50 align-self-center" src="{{ $element['url'] }}"
                                alt="{{ $element['text'] }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
