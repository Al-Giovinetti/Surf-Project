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
<script>
    const board = [
        {
            'name':'board A',
            'images':[
                'https://shop.citybeachboardshop.com/prodotti/15483/XXL/15483foto.jpg',
                'https://www.tuttologicsurf.it/wp-content/uploads/2021/09/IMG_6990-scaled.jpg',
                'https://i.pinimg.com/originals/dc/e7/b6/dce7b6b09bf3b38c615d051b0063b291.jpg',
                'https://img.freepik.com/premium-vector/california-retro-t-shirt-design-with-waves-vector-illustration_140710-410.jpg'
            ],
            'description': 'description aaaaaaaaaaaaaa',
            'features': 'featuresssssss b',
            'dimensions': 'dimensions',
            'price':'$499.99'
        }
    ];

    //Creazione dinamica delle immagini
    const centerCard = document.querySelector('div.center-card');
    const boardImages = board[0].images;
    const imgActive = document.querySelector('div.left-card>img');

    boardImages.forEach(image => {
        const boxAndImage = document.createElement('div');
        boxAndImage.innerHTML = 
        ` 
            <img src="${image}" alt="board image">
        `
        centerCard.append(boxAndImage);

        //Cambio img + cambio colore bordo img attiva
        boxAndImage.addEventListener('click',function(){
            imgActive.setAttribute("src", image);
            const allDiv = document.querySelectorAll('.center-card>div');
            allDiv.forEach(div => {
                div.className=""; 
            });
            boxAndImage.classList.add('active');

        })

    });

    //Cambio testo a seconda di dove clicco
    const btnDescription = document.getElementById('li-description');
    const btnFeatures = document.getElementById('li-features');
    const btnDimensions = document.getElementById('li-dimensions');

    const divInfoText = document.querySelector('.right-card div.info-text');
    divInfoText.innerHTML = board[0].description;

    btnDescription.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].description;
    })

    btnFeatures.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].features;
    })


    btnDimensions.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].dimensions;
    })

    const pPrice = document.getElementById('price');
    pPrice.innerHTML= board[0].price;





</script>
@endsection