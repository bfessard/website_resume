function showText(x) {
    var test = ['phone','map','mail','skype','github','linkedin'];
    var list = {
        'phone':'06.52.12.26.75',
        'map' : '4 rue du maréchal de lattre de tassigny 76500 Elbeuf',
        'mail': 'baptistefessard@gmail.com',
        'skype':'baptistefessard@gmail.com',
        'github':'bfessard',
        'linkedin':'baptiste fessard'
    };


    console.log(x);

    document.getElementById('value'+test.indexOf(x)).innerHTML =list[x];
    document.getElementById('value'+test.indexOf(x)).className='blue';

}
function removeText(x){
    var test = ['phone','map','mail','skype','github','linkedin'];
    document.getElementById('value'+test.indexOf(x)).innerHTML='';
}


