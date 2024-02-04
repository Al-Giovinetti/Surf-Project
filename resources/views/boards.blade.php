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
                
                <ul class="d-flex">
                    <li id="li-description">Description</li>
                    <li id="li-features">Features</li>
                    <li id="li-dimensions">Dimensions</li>
                </ul>

                <div class="info-text"></div>

                <div>
                    <p id="price"></p>
                    <button>BUY NOW</button>
                </div>

                <a href="">View all Board</a>
            </div>
        </article>
        <p>ABOUT US</p>
    </div>
</section>

@endsection

@section('js')

@vite('resources/js/boardCard.js');

@endsection