window.addEventListener("load",function(){
    checkboxOutros = document.querySelectorAll("input[name=v1385399][type=checkbox]")[0];
    textareaOutros = document.querySelectorAll("textarea[name=v13855]")[0];
    if(typeof(checkboxOutros) !== "undefined" && typeof(textareaOutros) !== "undefined"){
        textareaOutros.disabled = true;
        checkboxOutros.addEventListener("click", function(){
            textareaOutros.disabled = !checkboxOutros.checked;
        });
    }else{
        console.log("Checkbox ou caixa de texto outros não foram encontrados encontrado!!!");
    }
});