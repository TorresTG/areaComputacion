@extends('layout')

@section('content')
    <x-navbar />
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">

    <section class="contact-section">
        <div class="contact-hero">
            <h1 class="hero-title">Conectemos nuestras ideas</h1>
            <p class="hero-subtitle">Múltiples formas de colaborar</p>
        </div>

        <div class="contact-container">
            <div class="contact-methods">
                <!-- Tarjeta de Ubicación -->
                <div class="method-card location-card">
                    <div class="method-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Visita Nuestra Oficina</h3>
                    <p>Av. Innovación 1234<br>Lima, Perú</p>
                    <a href="https://maps.app.goo.gl/example" class="map-link" target="_blank" rel="noopener">
                        Ver en Google Maps
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.234567890123!2d-77.12345678901234!3d-12.123456789012345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDA3JzI0LjQiUyA3N8KwMDcnMjQuNCJX!5e0!3m2!1ses!2spe!4v1234567890123"
                            class="google-map" allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>

                <!-- Tarjeta de Contacto Directo -->
                <div class="method-card contact-card">
                    <div class="method-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>Contacto Directo</h3>
                    <div class="contact-buttons">
                        <a href="tel:+51987654321" class="action-button phone">
                            <i class="fas fa-phone"></i>
                            Llamar Ahora
                        </a>
                        <a href="https://wa.me/51987654321" class="action-button whatsapp" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i>
                            WhatsApp
                        </a>
                        <a href="mailto:contacto@computacion.com" class="action-button email">
                            <i class="fas fa-envelope"></i>
                            Email
                        </a>
                    </div>
                    <div class="business-hours">
                        <h4>Horario de Atención:</h4>
                        <p>Lunes - Viernes: 9:00 am - 6:00 pm<br>
                            Sábados: 9:00 am - 1:00 pm</p>
                    </div>
                </div>

                <!-- Tarjeta de Redes Sociales -->
                <div class="method-card social-card">
                    <div class="method-icon">
                        <i class="fas fa-hashtag"></i>
                    </div>
                    <h3>Síguenos en Redes</h3>
                    <div class="social-links">
                        <a href="#" class="social-button linkedin">
                            <i class="fab fa-linkedin"></i>
                            LinkedIn
                        </a>
                        <a href="#" class="social-button github">
                            <i class="fab fa-github"></i>
                            GitHub
                        </a>
                        <a href="#" class="social-button youtube">
                            <i class="fab fa-youtube"></i>
                            YouTube
                        </a>
                    </div>
                    <div class="social-qr">
                        <img src="{{ asset('images/qr-code.svg') }}" alt="QR de contacto" class="qr-image">
                        <p>Escanea para guardar contacto</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <x-footer />
@endsection