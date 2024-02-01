@php
 $headerPages = ['boards','accessories','blog','technology','team','dealers'];
 $socials= ['fa-brands fa-facebook-f','fa-brands fa-instagram','fa-solid fa-envelope']
@endphp

<header class="d-flex">
    <h2>Surfers Co.</h2>
    <ul class="d-flex">
        @foreach ($headerPages as $pages)
        <li>
            <a href="">{{ strtoupper($pages) }}</a>
        </li>
        @endforeach
    </ul>
    <div class="socials d-flex">
        @foreach ($socials as $social)
            <div class="back-circle d-flex">
                <i class="{{ $social }}"></i>
            </div>
        @endforeach
    </div>
</header>