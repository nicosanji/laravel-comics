@php
$shop_list = [
    [
        'url' => 'img/buy-comics-digital-comics.png',
        'text' => 'DIGITAL COMICS',
    ],
    [
        'url' => 'img/buy-comics-merchandise.png',
        'text' => 'DC MERCHANDISE',
    ],
    [
        'url' => 'img/buy-comics-subscriptions.png',
        'text' => 'SUBSCRIPTION',
    ],
    [
        'url' => 'img/buy-comics-shop-locator.png',
        'text' => 'COMIC SHOP LOCATOR',
    ],
    [
        'url' => 'img/buy-dc-power-visa.svg',
        'text' => 'DC POWER VISA',
    ],
];
@endphp


{{-- layout default --}}
@extends("layouts.default")

{{-- titolo pagina "vista browser" --}}
@section('page_title', 'Homepage DC COMICS')

{{-- Qui inserisco il contenuto per la pagina HOME --}}
@section('content')
    {{-- button absolute --}}
    <div class="container position-relative">
        <button type="button" class="btn btn-primary position-absolute top-0 translate-middle-y">CURRENT
            SERIES</button>
    </div>
    {{-- sezione cards --}}
    <section class="bg-dark py-5">
        <div class="container">
            <div class="row">
                {{-- ciclo sul "database" --}}
                @foreach ($comics_list as $comic)
                    <a class="col-2 d-flex flex-column text-decoration-none" href="#">
                        <div class="ratio ratio-1x1 overflow-hidden">
                            <img class="w-auto h-auto" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </div>
                        <p class="py-2 text-white">{{ strtoupper($comic['series']) }}</p>
                    </a>
                @endforeach
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary">LOAD MORE</button>
            </div>
        </div>
    </section>
    {{-- sezione blu shop --}}
    <section class="bg-primary text-white">
        <div class="container">
            <div class="row justify-content-evenly align-items-center py-5">
                {{-- ciclo shop card --}}
                @foreach ($shop_list as $element)
                    <div class="col-2 d-flex align-items-center">
                        <img class="me-2" src="{{ $element['url'] }}" alt="{{ $element['text'] }}">
                        <p class="flex-shrink-0">{{ $element['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
