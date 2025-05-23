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
    </div>
    <script src="{{ asset('js/index.js') }}"></script>
    <x-footer />
@endsection