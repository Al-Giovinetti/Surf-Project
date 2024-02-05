@extends("layout.app")

@section("title","MAUI")

@section("main")
<section>
    <div class="hero-zone">
        <div class="hero-text">
            <h1>Ride every wave as if it's your last</h1>
            <p class="c-white">We love the motion of the ocean</p>
        </div>
        <div class="bottom-shadow"></div>
    </div>
    <div class="buy-board">
        <article class="board-card d-flex">
            <div class="left-card">
                <img src="https://shop.citybeachboardshop.com/prodotti/15483/XXL/15483foto.jpg" alt="surf board">
            </div>
            <div class="center-card d-flex">
                
            </div>
            <div class="right-card d-flex">
                <div>
                    <h3>Titolo</h3>
                    <div class="star-zone">Stelle</div>
                </div>
                
                <div>
                    <ul class="d-flex">
                        <li id="li-description">Description</li>
                        <li id="li-features">Features</li>
                        <li id="li-dimensions">Dimensions</li>
                    </ul>
    
                    <div class="info-text"></div>
                </div>

                <div>
                    <p id="price"></p>
                    <button>BUY NOW</button>
                </div>

                <a href="#">View all Board</a>
            </div>
        </article>
    </div>
</section>

<section class="about-us">
    <p class="text-center">ABOUT US</p>
    <img src="https://i0.wp.com/lazysurfer.app/blog/wp-content/uploads/2021/03/wave-1246560_1920.jpg?fit=1568%2C855&ssl=1" alt="surfer in wave">
    <iframe width="40%" height="300" src="https://www.youtube.com/embed/ZfLSN4mxY0E" title="Top 10 BEST WAVES of NAZARE SWELL 2022." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="surfer-co">
        <p>WE ARE SRFERS co.</p>
        <p>X</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sequi autem, beatae repellat sint asperiores nulla reiciendis aliquam hic, blanditiis ex porro necessitatibus ipsa iusto molestias facere maxime magni deleniti.</p>
        <a href="#">Read more</a>
    </div>
</section>

@endsection

@section('js')

@vite('resources/js/boardCard.js');

@endsection