@extends('layout')

@section('content')
<x-navbar />
<link rel="stylesheet" href="{{ asset('css/nosotros.css') }}">

<!-- Hero Section -->
<div class="about-hero">
    <div class="hero-content">
        <h1 class="hero-title">Excelencia tecnológica respaldada por tres décadas de experiencia</h1>
        <p class="hero-subtitle">Liderazgo empresarial comprometido con la transformación digital integral</p>
        <div class="experience-badge">
            <span>30</span>
            <div class="badge-text">Años de<br>Experiencia</div>
        </div>
    </div>
    <div class="hero-animation">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>
</div>

<!-- Nuestra Esencia -->
<section class="essence-section">
    <div class="container">
        <div class="essence-grid">
            <div class="essence-card">
                <div class="card-icon">🏛️</div>
                <h3>Arquitectura Empresarial</h3>
                <p>Desarrollamos infraestructuras tecnológicas sólidas que respaldan el crecimiento sostenible de organizaciones de todos los sectores.</p>
            </div>
            
            <div class="essence-card">
                <div class="card-icon">⚖️</div>
                <h3>Rigor Metodológico</h3>
                <p>Aplicamos marcos de trabajo consolidados y mejores prácticas internacionales para garantizar resultados predecibles y de alta calidad.</p>
            </div>
            
            <div class="essence-card">
                <div class="card-icon">🎯</div>
                <h3>Orientación Estratégica</h3>
                <p>Alineamos cada iniciativa tecnológica con los objetivos corporativos, maximizando el retorno de inversión y el impacto empresarial.</p>
            </div>
        </div>
    </div>
</section>

<!-- Nuestro ADN -->
<section class="dna-section">
    <div class="container">
        <h2 class="section-title">Indicadores de Rendimiento</h2>
        <div class="dna-grid">
            <div class="dna-item" data-percentage="98">
                <div class="dna-circle">
                    <div class="percentage">98%</div>
                </div>
                <h4>Satisfacción Corporativa</h4>
                <p>Índice de conformidad empresarial</p>
            </div>
            
            <div class="dna-item" data-percentage="90">
                <div class="dna-circle">
                    <div class="percentage">90%</div>
                </div>
                <h4>Retención Comercial</h4>
                <p>Clientes con contratos renovados</p>
            </div>
            
            <div class="dna-item" data-percentage="250">
                <div class="dna-circle">
                    <div class="percentage">250+</div>
                </div>
                <h4>Proyectos Culminados</h4>
                <p>Implementaciones exitosas</p>
            </div>
            
            <div class="dna-item" data-percentage="24">
                <div class="dna-circle">
                    <div class="percentage">24/7</div>
                </div>
                <h4>Disponibilidad Técnica</h4>
                <p>Soporte especializado continuo</p>
            </div>
        </div>
    </div>
</section>

<!-- Nuestro Proceso -->
<section class="process-section">
    <div class="container">
        <h2 class="section-title">Metodología Empresarial</h2>
        <div class="process-timeline">
            <div class="process-step">
                <div class="step-number">01</div>
                <div class="step-content">
                    <h3>Análisis Estratégico</h3>
                    <p>Realizamos un diagnóstico integral de los requerimientos corporativos y establecemos objetivos mensurables alineados con la visión empresarial.</p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="step-number">02</div>
                <div class="step-content">
                    <h3>Diseño Arquitectónico</h3>
                    <p>Elaboramos especificaciones técnicas detalladas, definiendo arquitecturas escalables y cronogramas de implementación optimizados.</p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="step-number">03</div>
                <div class="step-content">
                    <h3>Ejecución Técnica</h3>
                    <p>Nuestros especialistas implementan soluciones bajo estrictos estándares de calidad, siguiendo protocolos de desarrollo empresarial.</p>
                </div>
            </div>
            
            <div class="process-step">
                <div class="step-number">04</div>
                <div class="step-content">
                    <h3>Gestión Post-Implementación</h3>
                    <p>Garantizamos la operación continua mediante servicios de mantenimiento especializado y soporte técnico profesional.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nuestros Valores -->
<section class="values-section">
    <div class="container">
        <h2 class="section-title">Principios Corporativos</h2>
        <div class="values-grid">
            <div class="value-card">
                <div class="value-icon">🤝</div>
                <h3>Compromiso Profesional</h3>
                <p>Mantenemos alianzas estratégicas duraderas fundamentadas en la confianza mutua y la excelencia operacional.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">🏆</div>
                <h3>Estándares de Calidad</h3>
                <p>Aplicamos rigurosos protocolos de control de calidad que garantizan la entrega de soluciones de nivel empresarial.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">🔍</div>
                <h3>Innovación Tecnológica</h3>
                <p>Incorporamos las tendencias tecnológicas más avanzadas para proporcionar ventajas competitivas sostenibles.</p>
            </div>
            
            <div class="value-card">
                <div class="value-icon">📈</div>
                <h3>Desarrollo Continuo</h3>
                <p>Mantenemos programas de actualización profesional que aseguran competencias técnicas de vanguardia.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>¿Está preparado para iniciar su transformación digital?</h2>
            <p>Nuestro equipo de especialistas está disponible para desarrollar la solución tecnológica que su empresa requiere</p>
            <a href="/contacto" class="cta-button">Solicite una consultoría estratégica</a>
        </div>
    </div>
</section>

<x-footer />
@endsection