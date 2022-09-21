document.addEventListener("DOMContentLoaded", abaixarConteudo);
window.addEventListener("resize", abaixarConteudo);

function abaixarConteudo(){
    marginTop = document.querySelectorAll('div.menu')[0].offsetHeight;
    conteudo = document.querySelectorAll('div.conteudo')[0];
    if(window.innerWidth > 700){
        conteudo.style['margin-top'] = marginTop+'px';
    }else{
        conteudo.style['margin-top'] = '0px';
    }
}