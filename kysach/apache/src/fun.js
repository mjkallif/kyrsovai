let Hats = document.querySelectorAll('.postHats')
let Joggers = document.querySelectorAll('.postJoggers')
let Himself = document.querySelectorAll('.postHimself')
console.log(Hats.style)
function sortHats(){
    for(var i=0; i<Hats.length; i++){
        if (Hats[i].style.display === 'flex'){
            Hats[i].style.display = 'none';
        }
        else for(var i=0; i<Hats.length; i++){
            Hats[i].style.display = 'flex';
        }
    }
}

function sortHimself(){
    for(var i=0; i<Himself.length; i++){
        if (Himself[i].style.display === 'flex'){
            Himself[i].style.display = 'none';
        }
        else for(var i=0; i<Himself.length; i++){
            Himself[i].style.display = 'flex';
        }
    }
}

function sortJoggers(){
    for(var i=0; i<Joggers.length; i++){
        if (Joggers[i].style.display === 'flex'){
            Joggers[i].style.display = 'none';
        }
        else for(var i=0; i<Joggers.length; i++){
            Joggers[i].style.display = 'flex';
        }
    }
}

function sortAll(){
    for(var i=0; i<Joggers.length; i++){
        if (Joggers[i].style.display === 'none'){
            Joggers[i].style.display = 'flex';
        }

    }
    for(var i=0; i<Himself.length; i++){
        if (Himself[i].style.display === 'none'){
            Himself[i].style.display = 'flex';
        }

    }
    for(var i=0; i<Hats.length; i++){
        if (Hats[i].style.display === 'none'){
            Hats[i].style.display = 'flex';
        }
    }
}