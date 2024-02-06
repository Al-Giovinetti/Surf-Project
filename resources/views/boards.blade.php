@extends("layout.app")

@section("title","MAUI")

@section("main")
<section class="board">
    <div class="my-hero-zone">
        <div class="my-hero-text">
            <h1>Ride every wave as if it's your last</h1>
            <p class="text-light">We love the motion of the ocean</p>
        </div>
        <div class="my-bottom-shadow"></div>
    </div>
    <div id="buy-board">
        <article class="my-board-card d-flex">
            <div class="my-left-card">
                <img src="https://shop.citybeachboardshop.com/prodotti/15483/XXL/15483foto.jpg" alt="surf board">
            </div>
            <div class="js-center-card d-flex">
                <!-- Created with js -->
            </div>
            <div class="my-right-card d-flex">
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
    
                    <div class="js-info-text"></div>
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

<section class="my-about-us">
    <p class="text-center my-text-strange">ABOUT US</p>
    <img src="https://i0.wp.com/lazysurfer.app/blog/wp-content/uploads/2021/03/wave-1246560_1920.jpg?fit=1568%2C855&ssl=1" alt="surfer in wave">
    <iframe width="40%" height="300" src="https://www.youtube.com/embed/ZfLSN4mxY0E" title="Top 10 BEST WAVES of NAZARE SWELL 2022." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="my-surfer-co">
        <p>WE ARE SRFERS co.</p>
        <p>X</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sequi autem, beatae repellat sint asperiores nulla reiciendis aliquam hic, blanditiis ex porro necessitatibus ipsa iusto molestias facere maxime magni deleniti.</p>
        <a href="#">Read more</a>
    </div>
</section>

<section class="my-insta-form d-flex container">
    <form action="" method="POST">
        <div>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control">
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
        </div>
        <div class="row justify-content-around">
            <select name="birth_place" id="birth_place" class="col-5 col-form-label">
                <option value="#">birth place</option>
                <option value="I">ITA</option>
                <option value="F">FR</option>
                <option value="S">SP</option>
            </select>
            <input type="date" name="birthday" id="birthday" placeholder="Birthday" class="col-5 col-form-label">
        </div>
        <div class="row justify-content-around">
            <input type="tel" name="phone" id="phone" placeholder="Phone" class="col-5 col-6-form-label">
            <input type="text" name="company" id="company" placeholder="Company" class="col-5 col-6-form-label">
        </div>
        <textarea name="mex" id="mex" cols="50%" rows="5" placeholder="Your Message" class="form-control"></textarea>
        <div>
            <input type="checkbox" name="privacy" id="privacy">
            <label for="privacy" class="form-label">Accept privacy policy</label>
        </div>
        <button type="submit" class="btn w-25 btn-primary">SEND</button>
    </form>

    <div class="my-instagram">
        <div class="row">
            <p class=" text-center my-text-strange">INSTAGRAM</p>
        </div>
        <div class="my-instagram-images d-flex">
            <img src="https://cdn.skuola.net/w1200h687/news_foto/2017/descrizione-mare.jpg" alt="sea">
            <img src="https://www.mauisurfergirls.com/app/uploads/2017/01/SunsetSurf-Group-e1470962482930.jpg" alt="surfer in sunset">
            <img src="https://static.displate.com/857x1200/displate/2022-04-16/339f4ad5e952e62eef0b105e37598cb9_cb7327514a100d0c5adab45056929bf5.jpg" alt="surfboard">
            <img src="https://www.americanoceans.org/wp-content/uploads/2023/09/best-beach-sunset-locations-1024x683.jpeg" alt="sunset beach">
        </div>
        <div class="d-flex p-2 bg-light insta-bottom">
            <i class="fa-brands fa-instagram"></i>
            <p class="m-0">FOLLOW US</p>
            <p class="m-0">@surfersco</p>
        </div>
    </div>
</section>

@endsection

@section('js')

@vite('resources/js/boardCard.js')

@endsection