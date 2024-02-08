const username = document.getElementById('name');
const email = document.getElementById('email');
const birthPlace = document.getElementById('birth_place');
const birthday = document.getElementById('birthday');
const phone = document.getElementById('phone');
const company = document.getElementById('company');
const message = document.getElementById('mex');
const privacy = document.getElementById('privacy');

const btnSub = document.getElementById('send');

btnSub.addEventListener('submit',function(){
    let check=true;
    const results = [];

    if((username.value.length < 30)&&(typeof username.value === 'string')){
        check=true;
    }else{
        check=false;
    }
    results.push(check);

    if((email.value.length < 40)&&(email.value.includes('@'))){
        check=true;
    }else{
        check=false;
    }
    results.push(check);

    const possiblePlaces = ['I','F','S']
    if(possiblePlaces.includes(birthPlace.value)){
        check=true;
    }else{
        check=false;
    }
    results.push(check);

    const actualyDate = new Date();
    const minUserBirth = parseInt(actualyDate.getFullYear()-18) + '-' + parseInt(actualyDate.getMonth()+1)  + '-' + actualyDate.getDate();
    const maxUserBirth = parseInt(actualyDate.getFullYear()-90) + '-' + parseInt(actualyDate.getMonth()+1)  + '-' + actualyDate.getDate();
    if((minUserBirth >= birthday.value) && (maxUserBirth < birthday.value)){
        check=true;
    }else{
        check=false;
    }
    results.push(check);

    if(/^\d+$/.test(phone.value)){
        check = true;
    }else{
        check=false;
    }
    results.push(check);

    if((company.value.length < 30)&&(typeof company.value === 'string')){
        check=true;
    }else{
        check=false;
    }
    results.push(check);

    if((message.value.length < 500)&&(typeof company.value === 'string')){
        check=true;
    }else{
        check=false;
    }
    results.push(check);

    if(privacy.value == 'on'){
        check=true;
    }else{
        check=false;
    }
    results.push(check);
    console.log(results)

    if(results.includes(false)){
        console.log('dati errati');
        btnSub.removeEventListener
    }
})
   



