document.addEventListener("DOMContentLoaded", () => {
    // aumentar fonte
    document.getElementById('aumentarFonte').addEventListener('click', event =>{
       event.preventDefault();
       percorrerDom(document.querySelector('body'), 'soma');
    });
 
    // diminuir fonte
    document.getElementById('diminuirFonte').addEventListener('click', event =>{
       event.preventDefault();
       percorrerDom(document.querySelector('body'), 'subtr');
    });
 
    // fonte tamanho padrão
    document.getElementById('fonteOriginal').addEventListener('click', event =>{
       event.preventDefault();
       percorrerDom(document.querySelector('body'), 'initial');
    });
 
    function percorrerDom(elem, operator){
       jQuery(elem).children().each(function(e){
          var tamanhoFonte = jQuery(this).css('font-size');
          if(tamanhoFonte){
             tamanhoFonte = parseInt(tamanhoFonte.substr(0,2));
             if(operator == 'soma'){
                tamanhoFonte++;
             } else if(operator == 'subtr'){
                tamanhoFonte--;
             } else {
                tamanhoFonte = '';
             }
             jQuery(this).css('font-size',tamanhoFonte);
          }
          percorrerDom(this, operator);
       });
     };
 });
 