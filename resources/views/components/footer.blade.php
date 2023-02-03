@php
$dcComicsLinks=["Characters","Comics","Movies","TV","Games","Videos","News"];
$dcLinks=["Terms of Use","Privacy policy(New)","Ad Choices","Advertising","Jobs","Subscriptions","Talent
Workshops","CPSC Certificates","Ratings","Shop Help","Contact Us" ];
$sitesLinks=["DC","MAD Magazine","DC Kids","DC Universe", "DC Power Visa"];
$shopLinks=["Shop DC","Shop DC Collectbles"];
@endphp

<footer>

    <section class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row row-cols-1 row-cols-lg-3 text-white py-3 gy-4">

                        <div class="col">

                            <ul class="navbar-nav">

                                <li class="nav-item fw-bold fs-5">DC COMICS</li>

                                @foreach ($dcComicsLinks as $link)

                                <li class="nav-item">
                                    <a href="#" class="nav-link text-secondary">{{$link}}</a>
                                </li>

                                @endforeach


                            </ul>

                        </div>

                        <div class="col">

                            <ul class="navbar-nav">

                                <li class="nav-item fw-bold fs-5">DC</li>

                                @foreach ($dcLinks as $link)

                                <li class="nav-item">
                                    <a href="#" class="nav-link text-secondary">{{$link}}</a>
                                </li>

                                @endforeach

                            </ul>

                        </div>

                        <div class="col">

                            <ul class="navbar-nav">

                                <li class="nav-item fw-bold fs-5">SITES</li>

                                @foreach ($sitesLinks as $link)

                                <li class="nav-item">
                                    <a href="#" class="nav-link text-secondary">{{$link}}</a>
                                </li>

                                @endforeach

                            </ul>

                        </div>

                        <div class="col">

                            <ul class="navbar-nav">

                                <li class="nav-item fw-bold fs-5">SHOP</li>

                                @foreach ($shopLinks as $link)

                                <li class="nav-item">
                                    <a href="#" class="nav-link text-secondary">{{$link}}</a>
                                </li>

                                @endforeach

                            </ul>

                        </div>

                    </div>

                    <div class="d-flex">

                        <div class="text-secondary fw-small py-3">
                            All site Content TM and © 2020 DC Entertaiment, unless osherwise <span><a href="#"
                                    class=" text-primary text-decoration-none">notted here</a> . All rightes
                                reserveted.</span>

                            <a href="#" class="nav-link text-primary">Cookies settings</a>
                        </div>

                    </div>
                </div>
                <div class="col bg-dc-footer d-none d-md-flex">
                    {{-- <img src="{{Vite::asset('resources/imgs/dc-logo-bg.png')}}" class="img-fluid" alt=""> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark">
        <div class="container d-flex justify-content-between py-4">

            <!-- Container Button -->
            <div>
                <button type="button" class="border-primary text-white p-3 bg-dark">SIGN-UP NOW!</button>
            </div>

            <!-- Container Icon Social -->
            <div>

                <ul class="nav align-items-center g-1">

                    <li class="nav-item d-none d-md-flex">
                        <a class="nav-link px-2 fw-bold fs-5" href="#">FOLLOW US</a>
                    </li>

                    <li class="text-white">
                        <a class="nav-link px-2" href="#">
                            <img src="{{Vite::asset('resources/imgs/footer-facebook.png')}}" alt="" class="text-dark">
                        </a>
                    </li>

                    <li class="text-white">
                        <a class="nav-link px-2" href="#">
                            <img src="{{Vite::asset('resources/imgs/footer-twitter.png')}}" alt="" class="text-dark">
                        </a>
                    </li>

                    <li class="text-white">
                        <a class="nav-link px-2" href="#">
                            <img src="{{Vite::asset('resources/imgs/footer-youtube.png')}}" alt="" class="text-dark">
                        </a>
                    </li>

                    <li class="text-white">
                        <a class="nav-link px-2" href="#">
                            <img src="{{Vite::asset('resources/imgs/footer-pinterest.png')}}" alt="" class="text-dark">
                        </a>
                    </li>

                    <li class="text-white">
                        <a class="nav-link px-2" href="#">
                            <img src="{{Vite::asset('resources/imgs/footer-periscope.png')}}" alt="" class="text-dark">
                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </section>
</footer>