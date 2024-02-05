@extends("layout.app")

@section("title","MAUI")

@section("main")
<section class="board">
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

<section class="insta-form d-flex">
    <form action="" method="POST">
        <div>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email">
        </div>
        <div>
            <select name="birth_place" id="birth_place">
                <option value="#">birth place</option>
                <option value="I">ITA</option>
                <option value="F">FR</option>
                <option value="S">SP</option>
            </select>
            <input type="date" name="birthday" id="birthday" placeholder="Birthday">
        </div>
        <div>
            <input type="tel" name="phone" id="phone" placeholder="Phone">
            <input type="text" name="company" id="company" placeholder="Company">
        </div>
        <textarea name="mex" id="mex" cols="50%" rows="5" placeholder="Your Message"></textarea>
        <div>
            <input type="checkbox" name="privacy" id="privacy">
            <label for="privacy">Accept privacy policy</label>
        </div>
    </form>
</section>

@endsection

@section('js')

@vite('resources/js/boardCard.js');

@endsection