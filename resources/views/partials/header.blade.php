@php
 $headerPages = ['boards','accessories','blog','technology','team','dealers'];
 $socials= ['fa-brands fa-facebook-f','fa-brands fa-instagram','fa-solid fa-envelope']
@endphp

<header>
    <div class="my-header-container d-flex">
        <h2>Surfers Co.</h2>
        <ul class="d-flex">
            @foreach ($headerPages as $pages)
            <li>
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