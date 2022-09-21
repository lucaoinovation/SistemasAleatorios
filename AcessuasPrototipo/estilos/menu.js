window.onclick = function(event) {
    elementoClicado = event.target;
    classeDoElementoClicado = typeof(elementoClicado) !== 'undefined'? elementoClicado.className:'';
    if (event.target.matches('.menu')) {
        itens  = elementoClicado.querySelectorAll('li');
        if(window.innerWidth <= 700){
            for(i = 0; i < itens.length; i++){
                estiloAtual = itens[i].style.display;
                if(itens[i].className !== 'logo'){
                    if((estiloAtual == 'none' || estiloAtual == '')){
                        itens[i].style.display = 'inline-block';
                    }else{
                        itens[i].style.display = 'none';
                    }
                }
            }
        }
    }
    if(classeDoElementoClicado !== 'dropDown'){
        lis = document.querySelectorAll('ul.menu')[0].querySelectorAll('li');
        for(i = 0; i < lis.length; i++){
            if(lis[i].className == 'dropDown'){
                if(typeof(lis[i].querySelectorAll('ul')[0]) !== 'undefined'){
                    lis[i].querySelectorAll('ul')[0].style.display = 'none';
                }
            }
        }
    }
    if (classeDoElementoClicado === 'dropDown') {
        ul = elementoClicado.parentElement.querySelectorAll('ul')[0];
        lis = elementoClicado.parentElement.parentElement.querySelectorAll('li');
        for(i = 0; i < lis.length; i++){
            if(lis[i].className == 'dropDown'){
                if(lis[i].querySelectorAll('ul')[0] !== ul){
                        lis[i].querySelectorAll('ul')[0].style.display = 'none';
                }
            }
        }
        if(ul.style['display'] === 'none' || ul.style['display'] === ''){
            ul.style.setProperty("display","block");
        }else{
            ul.style['display'] = 'none';
        }
        console.log(document.querySelectorAll("body")[0].offsetHeight);
    }
    iniciarRodape();
};