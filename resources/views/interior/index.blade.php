@extends('layout')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <x-navbar />
    <div class="parallax-container">
        <div class="image-container">
            <img src="{{ asset('images/intro.jpg') }}" alt="Computación" class="modified-image">
            <div class="text-overlay">
                <div class="main-text">Área Computación</div>
                <div class="secondary-text">Creamos y diseñamos para ustedes</div>
            </div>
        </div>
    </div>
    <div class="content-after">
        <section class="intro-section fade-in-up" style="margin-bottom: 8rem;">
            <div class="feature-card" style="max-width: 1200px; margin: 0 auto;">
                <div class="icon-container" style="text-align: center; padding-top: 2rem;">
                    <i class="fas fa-server fa-4x" style="color: #2ca880;"></i>
                </div>
                <h2 class="feature-title" style="text-align: center; font-size: 3.2rem; margin: 1.5rem 0; font-weight: 800;">
                    Soluciones Integrales de Infraestructura TI
                </h2>
                <div style="padding: 0 2rem 3rem;">
                    <p class="feature-text" style="text-align: center; font-size: 1.4rem; line-height: 1.8; margin-bottom: 3rem;">
                        Especializados en el mantenimiento, optimización y gestión de infraestructuras de servidores. 
                        Ofrecemos servicios completos de soporte técnico, venta de licencias de software empresarial 
                        y consultoría en tecnologías de la información para empresas de todos los tamaños.
                    </p>
                    
                    <!-- Estadísticas -->
                    <div class="stats-container">
                        <div class="stat-item fade-in-up">
                            <span class="stat-number">99.9%</span>
                            <span class="stat-label">Uptime Garantizado</span>
                        </div>
                        <div class="stat-item fade-in-up">
                            <span class="stat-number">24/7</span>
                            <span class="stat-label">Soporte Técnico</span>
                        </div>
                        <div class="stat-item fade-in-up">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Servidores Gestionados</span>
                        </div>
                        <div class="stat-item fade-in-up">
                            <span class="stat-number">150+</span>
                            <span class="stat-label">Clientes Satisfechos</span>
                        </div>
                    </div>

                    <div class="feature-grid" style="margin-top: 4rem; gap: 2rem;">
                        <div class="tech-badge">
                            <h4>
                                <i class="fas fa-tools"></i> Mantenimiento de Servidores
                            </h4>
                            <ul>
                                <li>Monitoreo proactivo 24/7</li>
                                <li>Actualizaciones y parches de seguridad</li>
                                <li>Optimización de rendimiento</li>
                                <li>Backup y recuperación de datos</li>
                                <li>Mantenimiento preventivo programado</li>
                            </ul>
                        </div>
                        <div class="tech-badge">
                            <h4>
                                <i class="fas fa-key"></i> Licencias de Software
                            </h4>
                            <ul>
                                <li>Microsoft Windows Server</li>
                                <li>Office 365 y Microsoft 365</li>
                                <li>Licencias SQL Server</li>
                                <li>VMware vSphere y Hyper-V</li>
                                <li>Antivirus empresariales</li>
                            </ul>
                        </div>
                    </div>

                    <div class="feature-grid" style="margin-top: 3rem;">
                        <div class="tech-badge">
                            <h4>
                                <i class="fas fa-shield-alt"></i> Seguridad y Respaldo
                            </h4>
                            <ul>
                                <li>Implementación de firewalls</li>
                                <li>Sistemas de backup automático</li>
                                <li>Auditorías de seguridad</li>
                                <li>Planes de recuperación ante desastres</li>
                                <li>Cifrado de datos empresariales</li>
                            </ul>
                        </div>
                        <div class="tech-badge">
                            <h4>
                                <i class="fas fa-chart-line"></i> Consultoría Especializada
                            </h4>
                            <ul>
                                <li>Análisis de infraestructura actual</li>
                                <li>Migración a la nube</li>
                                <li>Virtualización de servidores</li>
                                <li>Optimización de costos TI</li>
                                <li>Estrategias de escalabilidad</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de servicios destacados -->
        <section class="intro-section fade-in-up" style="margin-bottom: 6rem;">
            <h2 style="text-align: center; font-size: 2.8rem; margin-bottom: 3rem; color: #1a202c; font-weight: 700;">
                ¿Por qué elegir nuestros servicios?
            </h2>
            <div class="feature-grid">
                <div class="feature-card fade-in-left">
                    <div class="icon-container">
                        <i class="fas fa-clock fa-3x"></i>
                    </div>
                    <h3 class="feature-title">Respuesta Inmediata</h3>
                    <p class="feature-text">
                        Nuestro equipo de soporte técnico responde en menos de 30 minutos ante cualquier 
                        incidencia crítica, garantizando la continuidad de tu negocio.
                    </p>
                </div>
                <div class="feature-card fade-in-up">
                    <div class="icon-container">
                        <i class="fas fa-certificate fa-3x"></i>
                    </div>
                    <h3 class="feature-title">Certificaciones Oficiales</h3>
                    <p class="feature-text">
                        Contamos con certificaciones Microsoft, VMware y otras tecnologías líderes del mercado. 
                        Solo trabajamos con licencias originales y soporte autorizado.
                    </p>
                </div>
                <div class="feature-card fade-in-right">
                    <div class="icon-container">
                        <i class="fas fa-handshake fa-3x"></i>
                    </div>
                    <h3 class="feature-title">Relación a Largo Plazo</h3>
                    <p class="feature-text">
                        No somos solo un proveedor, somos tu socio tecnológico. Construimos relaciones 
                        duraderas basadas en confianza y resultados comprobados.
                    </p>
                </div>
            </div>
        </section>

        <!-- CTA mejorado -->
        <section class="intro-section fade-in-up">
            <div class="cta-container">
                <h2 class="cta-title">¿Listo para optimizar tu infraestructura?</h2>
                <p class="cta-text">
                    Contáctanos hoy y descubre cómo podemos mejorar el rendimiento, 
                    seguridad y eficiencia de tus servidores.
                </p>
                <a href="#contact" class="cta-button">
                    Solicitar Consultoría Gratuita
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </section>
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <x-footer />
@endsection