document.addEventListener('DOMContentLoaded',function(){
    eventListener();
    darkmode();
})

function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click',navegacionresponsive)
}

function navegacionresponsive(){
    const navegacion = document.querySelector('.navegacion');
    if(navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar')
    }else{
        navegacion.classList.add('mostrar')
    }
    //si no este codigo navegacion.classList.toggle('mostrar')
}

function darkmode(){
    //este codigo cambia la pagina a la precerencia del usuario es decir si tiene modo oscuro en la pc la paginaa tambien lo tiene
    const prefdarkmode = window.matchMedia('(prefers-color-scheme: dark)'); 

    if(prefdarkmode.matches){
        document.body.classList.add('dark-mode')
    }
    else{
        document.body.classList.remove('dark-mode')
    }

    prefdarkmode.addEventListener('change',function(){
        if(prefdarkmode.matches){
            document.body.classList.add('dark-mode')
        }
        else{
            document.body.classList.remove('dark-mode')
        }
    });

    const botondarkmode = document.querySelector('.dark-mode-boton');

    botondarkmode.addEventListener('click',function (){
        document.body.classList.toggle('dark-mode')
    });
}

