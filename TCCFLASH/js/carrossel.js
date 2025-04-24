let slideIndex = 0;
let isTransitioning = false; // Nova variável para verificar a transição

function mudarSlide(direcao) {
    if (isTransitioning) return; // Impede a mudança de slide enquanto a animação está em andamento
    const slides = document.querySelector('.slides');
    const totalSlides = slides.children.length;
    slideIndex = (slideIndex + direcao + totalSlides) % totalSlides;
    
    isTransitioning = true; // Bloqueia a transição até que termine
    slides.style.transition = 'transform 0.5s ease'; // Adiciona uma transição suave
    slides.style.transform = `translateX(-${slideIndex * 100}%)`;

    // Remove a transição após 0.5s, permitindo novas mudanças de slide
    setTimeout(() => {
        isTransitioning = false;
        slides.style.transition = ''; // Reseta a transição
    }, 500); // Tempo da transição (500ms)
}

// Slide automático (opcional)
setInterval(() => mudarSlide(1), 5000);



/* 
APROVEITE E DE UMA OLHADA NOS CONTEUDOS: 
https://github.com/CleitonDsd/ 


!!!!! PARA O PROJETO FINAL REMOVA O EXCESSO DE COMENTÁRIOS!!!!! */
