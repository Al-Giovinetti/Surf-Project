@php
 $headerPages = ['boards','accessories','blog','technology','team','dealers'];
 $socials= ['fa-brands fa-facebook-f','fa-brands fa-instagram','fa-solid fa-envelope']
@endphp

<header class="ps-2">
    <div class="my-header-container d-lg-flex justify-content-lg-around">
        <h2>Surfers Co.</h2>
        <ul class="d-flex justfy-content-around p-lg-2 ps-md-0 ps-0 pb-2 flex-wrap">
            @foreach ($headerPages as $pages)
            <li class="pe-3">
                <a href="#">{{ strtoupper($pages) }}</a>
            </li>
            @endforeach
        </ul>
        <div class="d-flex" id="social-icons">
            @foreach ($socials as $social)
                <div class="my-back-circle d-flex">
                    <i class="{{ $social }} text-light"></i>
                </div>
            @endforeach
        </div>
    </div>
</header>