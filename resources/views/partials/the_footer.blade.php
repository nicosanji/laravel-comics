@php
$footer_comics = [
    [
        'text' => 'Characters',
    ],
    [
        'text' => 'Comics',
    ],
    [
        'text' => 'Movies',
    ],
    [
        'text' => 'TV',
    ],
    [
        'text' => 'Games',
    ],
    [
        'text' => 'Videos',
    ],
    [
        'text' => 'News',
    ],
];
$footer_shop = [
    [
        'text' => 'Shop DC',
    ],
    [
        'text' => 'Shop DC Collectibles',
    ],
];
@endphp

<footer>
    {{-- elenco link --}}
    <div class="footer-hero container-fluid text-secondary">
        <div class="container d-flex flex-columns-2">
            <div class="col d-flex">
                <div class="col-4">
                    <ul class="list-unstyled mb-0">
                        <h4 class="text-white">DC COMICS</h4>
                        @foreach ($footer_comics as $value)
                            <li>
                                <a class="text-secondary text-decoration-none" href="#">{{ $value['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <ul class="list-unstyled mb-0">
                        <h4 class="text-white">SHOP</h4>
                        @foreach ($footer_shop as $value)
                            <li>
                                <a class="text-secondary text-decoration-none" href="#">{{ $value['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-4">
                    <ul class="list-unstyled mb-0">
                        <h4 class="text-white">DC COMICS</h4>
                        @foreach ($footer_comics as $value)
                            <li>
                                <a class="text-secondary text-decoration-none" href="#">{{ $value['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- immagine dc logo absolute --}}
            <div class="col position-relative overflow-hidden">
                <img class="position-absolute top-50 start-50 translate-middle"
                    src="{{ asset('img/dc-logo-bg.png') }}" alt="dc-footer-big">
            </div>
        </div>
    </div>
    {{-- social --}}
    <div class="container-fluid bg-dark text-white">
        <h1 class="mb-0">SEZIONE SOCIAL</h1>
    </div>
</footer>
