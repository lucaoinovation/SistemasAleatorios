function iniciarRodape(){
    tamanhoDaJanela = window.innerHeight;
    tamanhoDoCorpo = document.querySelectorAll("body")[0].offsetHeight;
    rodape = document.getElementById("rodape");
    rodapeHr = document.getElementById("rodapeHr");
    if(rodape !== null){ 
        if(rodape.style['position'] === 'fixed'){
            if(tamanhoDaJanela <= tamanhoDoCorpo+rodape.offsetHeight+42){
                rodapeHr.style.setProperty("display","block");
                rodape.style.setProperty("position","relative");
                rodape.style.setProperty("top","0px");
                rodape.style.setProperty("margin-top", "0px");
            }
        }else{
            if(tamanhoDaJanela > tamanhoDoCorpo){
                rodapeHr.style.setProperty("display","none");
                rodape.style.setProperty("position","fixed");
                rodape.style.setProperty("top","100%");
                rodape.style.setProperty("margin-top", '-'+String(rodape.offsetHeight)+'px');
            }
        }
    }
}
window.addEventListener("resize", iniciarRodape);
window.addEventListener('load', iniciarRodape);
/** @todo adicionar o metodo ao evento de modificação de tamanho do rodape*/