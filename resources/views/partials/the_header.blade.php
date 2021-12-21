@php
$nav_links = [
    [
        'text' => 'CHARACTERS',
    ],
    [
        'text' => 'COMICS',
    ],
    [
        'text' => 'MOVIES',
    ],
    [
        'text' => 'TV',
    ],
    [
        'text' => 'GAMES',
    ],
    [
        'text' => 'COLLECTIBLES',
    ],
    [
        'text' => 'VIDEOS',
    ],
    [
        'text' => 'FANS',
    ],
    [
        'text' => 'NEWS',
    ],
    [
        'text' => 'SHOP',
    ],
];
@endphp

<header class="header">
    {{-- blu small text --}}
    <div class="container-fluid bg-primary text-white">
        <div class="container d-flex justify-content-end">
            <span class="pe-3">DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </div>
    {{-- navbar --}}
    <div class="container py-2 d-flex justify-content-between align-items-center">
        <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo">
        <ul class="d-flex align-items-center list-inline mb-0">
            @foreach ($nav_links as $value)
                <li class="list-inline-item px-3">
                    <a class="text-dark text-decoration-none" href="#">{{ $value['text'] }}</a>
                </li>
            @endforeach
            <form class="d-flex">
                <input class="form-control me-2 text-end" type="search" placeholder="Search" aria-label="Search">
            </form>
        </ul>
    </div>
    {{-- jumbotron --}}
    <div class="container-fluid jumbotron">
    </div>
</header>
