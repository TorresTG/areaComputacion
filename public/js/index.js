document.addEventListener('DOMContentLoaded', function() {
    const parallaxContainer = document.querySelector('.parallax-container');
    const mainText = document.querySelector('.main-text');
    const secondaryText = document.querySelector('.secondary-text');
    const contentAfter = document.querySelector('.content-after');
    const navbar = document.querySelector('.navbar');
    
    // Asegurar que el navbar esté siempre visible
    
    
    let currentPhase = 0; // 0: inicial, 1: main fade out, 2: secondary fade in, 3: secondary fade out, 4: container fade out
    let isScrollingUp = false;
    let lastScrollY = 0;
    
    // Variables para controlar el timing - Aumentadas para más espacio
    const PHASE_1_START = 300;   // Cuando empezar a desvanecer "Área Computación"
    const PHASE_2_START = 800;   // Cuando mostrar "Creamos y diseñamos para ustedes"
    const PHASE_3_START = 1400;  // Cuando desvanecer el texto secundario
    const PHASE_4_START = 1800;  // Cuando empezar a desvanecer el contenedor
    const ANIMATION_END = 2200;  // Cuando terminar toda la animación
    const CONTENT_START = 2400;  // Cuando el usuario llega al contenido principal
    
    // Configurar el scroll inicial
    window.scrollTo(0, 0);
    
    function updateAnimationPhase(scrollY) {
        const previousPhase = currentPhase;
        
        // Determinar la fase actual basada en la posición del scroll
        if (scrollY < PHASE_1_START) {
            currentPhase = 0;
        } else if (scrollY < PHASE_2_START) {
            currentPhase = 1;
        } else if (scrollY < PHASE_3_START) {
            currentPhase = 2;
        } else if (scrollY < PHASE_4_START) {
            currentPhase = 3;
        } else {
            currentPhase = 4;
        }
        
        if (scrollY >= CONTENT_START) {
            contentAfter.classList.add('visible');
        } else {
            contentAfter.classList.remove('visible');
        }
    
        // Solo aplicar cambios si la fase ha cambiado
        if (previousPhase !== currentPhase) {
            applyPhaseStyles(currentPhase, previousPhase);
        }
    }
    
    function applyPhaseStyles(phase, previousPhase) {
        // Limpiar todas las clases primero
        mainText.classList.remove('fade-out', 'fade-in');
        secondaryText.classList.remove('fade-out', 'fade-in');
        parallaxContainer.classList.remove('fade-out', 'fade-in');
        
        switch(phase) {
            case 0: // Estado inicial - todo visible
    // parallaxContainer.style.display = 'fixed'; // Eliminar esta línea
            parallaxContainer.classList.add('fade-in');
            mainText.classList.add('fade-in');
            break;
                
            case 1: // Desvanecer texto principal
                mainText.classList.add('fade-out');
                break;
                
            case 2: // Mostrar texto secundario
                mainText.classList.add('fade-out');
                secondaryText.classList.add('fade-in');
                break;
                
            case 3: // Desvanecer texto secundario
                mainText.classList.add('fade-out');
                secondaryText.classList.add('fade-out');
                break;
                
            case 4: // Desvanecer todo el contenedor
                mainText.classList.add('fade-out');
                secondaryText.classList.add('fade-out');
                parallaxContainer.classList.add('fade-out');
                break;
        }
    }
    
    function handleScroll() {
        const scrollY = window.pageYOffset || document.documentElement.scrollTop;
        
        // Detectar dirección del scroll
        isScrollingUp = scrollY < lastScrollY;
        lastScrollY = scrollY;
        
        // Actualizar la fase de animación
        updateAnimationPhase(scrollY);
        
        // Si estamos en la fase final y hacemos scroll hacia arriba, volver a mostrar
        if (currentPhase === 4 && isScrollingUp && scrollY < ANIMATION_END) {
            // parallaxContainer.style.display = 'fixed'; // Eliminar esta línea
            parallaxContainer.classList.add('fade-in');
        }
    }
    
    // Función para scroll suave automático (opcional)
    function autoScroll() {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll < ANIMATION_END && currentPhase < 4) {
            const targetScroll = Math.min(currentScroll + 1, ANIMATION_END);
            window.scrollTo(0, targetScroll);
            requestAnimationFrame(autoScroll);
        }
    }
    
    // Event listener principal para scroll
    let ticking = false;
    
    window.addEventListener('scroll', function() {
        if (!ticking) {
            requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Inicializar estado
    applyPhaseStyles(0);
    
    // Función para reiniciar la animación (opcional, para testing)
    window.restartAnimation = function() {
        currentPhase = 0;
        lastScrollY = 0;
        window.scrollTo(0, 0);
        applyPhaseStyles(0);
    };
    
    // Función para activar auto-scroll (opcional)
    window.startAutoScroll = function() {
        setTimeout(() => {
            autoScroll();
        }, 1000);
    };
    
    // Manejar cambios de orientación en móviles
    window.addEventListener('orientationchange', function() {
        setTimeout(() => {
            handleScroll();
        }, 100);
    });
    
    // Manejar resize de ventana
    window.addEventListener('resize', function() {
        handleScroll();
    });
    
    // Prevenir comportamientos extraños al cargar la página
    window.addEventListener('beforeunload', function() {
        window.scrollTo(0, 0);
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in-up').forEach(element => {
        observer.observe(element);
    });
});