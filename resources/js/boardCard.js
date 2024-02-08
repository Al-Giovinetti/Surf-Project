const board = [
        {
            'name':'board A',

            'images':[
                'https://shop.citybeachboardshop.com/prodotti/15483/XXL/15483foto.jpg',
                'https://www.tuttologicsurf.it/wp-content/uploads/2021/09/IMG_6990-scaled.jpg',
                'https://i.pinimg.com/originals/dc/e7/b6/dce7b6b09bf3b38c615d051b0063b291.jpg',
                'https://img.freepik.com/premium-vector/california-retro-t-shirt-design-with-waves-vector-illustration_140710-410.jpg'
            ],
            
            'description': 'description aaaaaaaaaaaaaa Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vel odio incidunt neque consequuntur! Quidem, hic inventore aut, voluptatum, nostrum eum expedita sequi quibusdam distinctio consectetur qui? Rem, minus odio.',

            'features': 'featuresssssss b Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vel odio incidunt neque consequuntur! Quidem, hic inventore aut, voluptatum, nostrum eum expedita sequi quibusdam distinctio consectetur qui? Rem, minus odio.',

            'dimensions': 'dimensions Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt vel odio incidunt neque consequuntur! Quidem, hic inventore aut, voluptatum, nostrum eum expedita sequi quibusdam distinctio consectetur qui? Rem, minus odio.',
            
            'price':'$499.99'
        }
    ];

    //Creazione dinamica delle immagini
    const centerCard = document.querySelector('div.js-center-card');
    const boardImages = board[0].images;
    const imgActive = document.querySelector('div.my-left-card>img');

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
    })

    btnFeatures.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].features;
    })


    btnDimensions.addEventListener('click',function(){
        divInfoText.innerHTML = board[0].dimensions;
    })

    const pPrice = document.getElementById('price');
    pPrice.innerHTML= board[0].price;