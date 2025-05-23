<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<div>
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                logo
            </div>
            
            <!-- Botón hamburguesa -->
            <button class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{route('nosotros') }}">Nosotros</a></li>
                <li><a href="{{route('contacto') }}">Contáctanos</a></li>
            </ul>
        </div>
    </nav>
</div>
<script src="{{ asset('js/navbar.js') }}"></script>