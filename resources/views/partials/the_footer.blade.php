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
$footer_dc = [
    [
        'text' => 'Term of Use',
    ],
    [
        'text' => 'Privacy policy (New)',
    ],
    [
        'text' => 'Ad Choices',
    ],
    [
        'text' => 'Advertising',
    ],
    [
        'text' => 'Jobs',
    ],
    [
        'text' => 'Subscriptions',
    ],
    [
        'text' => 'Talent Workshops',
    ],
    [
        'text' => 'CPSC Certificates',
    ],
    [
        'text' => 'Ratings',
    ],
    [
        'text' => 'Shop Help',
    ],
    [
        'text' => 'Contact Us',
    ],
];
$footer_sites = [
    [
        'text' => 'DC',
    ],
    [
        'text' => 'MAD Magazine',
    ],
    [
        'text' => 'DC Kids',
    ],
    [
        'text' => 'DC Universe',
    ],
    [
        'text' => 'DC Power Vista',
    ],
];
@endphp

<footer>
    {{-- elenco link --}}
    <div class="footer-hero container-fluid text-secondary">
        <div class="container d-flex flex-columns-2">
            <div class="col d-flex flex-wrap">
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
                        @foreach ($footer_dc as $value)
                            <li>
                                <a class="text-secondary text-decoration-none" href="#">{{ $value['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-4">
                    <ul class="list-unstyled mb-0">
                        <h4 class="text-white">SITES</h4>
                        @foreach ($footer_sites as $value)
                            <li>
                                <a class="text-secondary text-decoration-none" href="#">{{ $value['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <p>All Site Content TM and © 2020 DC Entertainment, unless otherwise noted here. All rights
                        reserved. Cookies Settings</p>
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
        <div class="container">
            <div class="row justfy-content-between align-items-center">
                <div class="col-7">
                    <button type="button" class="btn btn-outline-primary text-white">
                        SIGN-UP NOW!
                    </button>
                </div>
                <div class="col-5">
                    <ul class="d-flex align-items-center list-inline mb-0">
                        <h5 class="mb-0">FOLLOW US</h5>
                        <li class="list-inline-item px-3">
                            <img src="{{ asset('img/footer-facebook.png') }}" alt="facebook-logo">
                        </li>
                        <li class="list-inline-item px-3">
                            <img src="{{ asset('img/footer-twitter.png') }}" alt="facebook-logo">
                        </li>
                        <li class="list-inline-item px-3">
                            <img src="{{ asset('img/footer-youtube.png') }}" alt="facebook-logo">
                        </li>
                        <li class="list-inline-item px-3">
                            <img src="{{ asset('img/footer-pinterest.png') }}" alt="facebook-logo">
                        </li>
                        <li class="list-inline-item px-3">
                            <img src="{{ asset('img/footer-periscope.png') }}" alt="facebook-logo">
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>
