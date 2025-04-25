


/* 
APROVEITE E DE UMA OLHADA NOS CONTEUDOS: 
https://github.com/CleitonDsd/ 


!!!!! PARA O PROJETO FINAL REMOVA O EXCESSO DE COMENTÁRIOS!!!!! */

// Ativando o efeito de scroll
document.addEventListener('scroll', function () {
    let elementos = document.querySelectorAll('.efeito-scroll');
    
    elementos.forEach(function (elemento) {
        let posicaoElemento = elemento.getBoundingClientRect().top;
        let alturaTela = window.innerHeight;

        if (posicaoElemento < alturaTela - 100) {
            elemento.classList.add('ativo');
        }
    });
});



/* 
APROVEITE E DE UMA OLHADA NOS CONTEUDOS: 
https://github.com/CleitonDsd/ 


!!!!! PARA O PROJETO FINAL REMOVA O EXCESSO DE COMENTÁRIOS!!!!! */
