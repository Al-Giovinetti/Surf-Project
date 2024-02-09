
const board = [
        {
            'name':'JR Surfboards The Donny Stoker Yellow / Green Rail Fade',

            'stars':4,

            'images':[
                'https://shop.citybeachboardshop.com/prodotti/15483/XXL/15483foto.jpg',
                'https://www.tuttologicsurf.it/wp-content/uploads/2021/09/IMG_6990-scaled.jpg',
                'https://i.pinimg.com/originals/dc/e7/b6/dce7b6b09bf3b38c615d051b0063b291.jpg',
                'https://img.freepik.com/premium-vector/california-retro-t-shirt-design-with-waves-vector-illustration_140710-410.jpg'
            ],
            
            'description': 'Description aaaaaaaaaaaaaa Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vel odio incidunt neque consequuntur! Quidem, hic inventore aut, voluptatum, nostrum eum expedita sequi quibusdam distinctio consectetur qui? Rem, minus odio.',

            'features': 'Featuresssssss b Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vel odio incidunt neque consequuntur! Quidem, hic inventore aut, voluptatum, nostrum eum expedita sequi quibusdam distinctio consectetur qui? Rem, minus odio.',

            'dimensions': 'Dimensions Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vel odio incidunt neque consequuntur! Quidem, hic inventore aut, voluptatum, nostrum eum expedita sequi quibusdam distinctio consectetur qui? Rem, minus odio.',
            
            'price':'$499.99'
        }
    ];

    //Creazione dinamica delle immagini
    const centerCard = document.querySelector('div.js-center-card');
    const boardImages = board[0].images;
    const imgActive = document.querySelector('div.my-left-card>img');

    boardImages.forEach((image, index) => {
        const boxAndImage = document.createElement('div');
        boxAndImage.innerHTML = 
        ` 
            <img src="${image}" alt="board image">
        `
        centerCard.append(boxAndImage);

        if(index == 0){
            boxAndImage.classList.add('js-active');
        }

        //Cambio img + cambio colore bordo img attiva
        boxAndImage.addEventListener('click',function(){
            imgActive.setAttribute("src", image);
            const allDiv = document.querySelectorAll('.js-center-card>div');
            allDiv.forEach(div => {
                div.className=""; 
            });
            boxAndImage.classList.add('js-active');

        })
    });

    //Cambio testo a seconda di dove clicco
    const btnDescription = document.getElementById('li-description');
    const btnFeatures = document.getElementById('li-features');
    const btnDimensions = document.getElementById('li-dimensions');

    const divInfoText = document.querySelector('.my-right-card div.js-info-text');
    divInfoText.innerHTML = board[0].description;

    btnDescription.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].description;
        btnDescription.className="text-dark";
        btnDimensions.className="text-secondary";
        btnFeatures.className="text-secondary";
    })

    btnFeatures.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].features;
        btnFeatures.className="text-dark";
        btnDescription.className="text-secondary";
        btnDimensions.className="text-secondary";
    })


    btnDimensions.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].dimensions;
        btnDimensions.className="text-dark";
        btnDescription.className="text-secondary";
        btnFeatures.className="text-secondary";
    })

    const pPrice = document.getElementById('price');
    pPrice.innerHTML= board[0].price;

    const boardName = document.getElementById('board-name');
    boardName.innerHTML = board[0].name;

    const stars = document.getElementById('stars');
    getStars(parseInt(board[0].stars), 5, stars);

    function getStars( myStar, maxStar, nodeFather){
        const differentStar = maxStar - myStar;

        for(let i=0; i<myStar; i++){
            let star = document.createElement('i');
            star.setAttribute('class','fa-solid fa-star text-warning');
            nodeFather.append(star);
        }

        for(let i=0; i<differentStar; i++){
            let star=document.createElement('i');
            star.setAttribute('class','fa-regular fa-star');
            nodeFather.append(star);
        }
    }