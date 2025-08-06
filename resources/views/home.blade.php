@extends('layouts.app')

@section('title', 'Home - Agnivolt')

@section('content')
<!-- Hero Section -->
<section id="home" class="font-googlesans relative min-h-screen flex items-center justify-center bg-cover bg-center pt-24 pb-24" style="background-image: url('{{ asset('assets/hero-home-image.svg') }}') ;">
    <div class="absolute inset-0 bg-gradient-to-br from-black/40 via-black/55 to-black/45"></div>

    <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-semibold mb-6 leading-tight tracking-tight">
            Listrik Berkelanjutan dari 
            <span class="text-cyan-400">Alam Sekitar</span>
        </h1>
        <p class="text-lg md:text-xl mb-8 max-w-3xl mx-auto text-gray-100 leading-relaxed font-light">
            Agnivolt menghadirkan solusi Pembangkit Listrik Tenaga Mikro Hidro (PLTMH) modular dengan sistem IoT dan aplikasi monitoring – efisien, cerdas, dan ramah lingkungan.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="#technology" class="bg-cyan-600 hover:bg-cyan-700 text-white font-medium px-8 py-3 rounded-lg text-base transition-colors duration-200 shadow-lg hover:shadow-xl">
                Jelajahi Teknologi Kami
            </a>
            <a href="#contact" class="bg-white/90 hover:bg-white text-gray-800 font-medium px-8 py-3 rounded-lg text-base transition-all duration-200 shadow-lg hover:shadow-xl">
                Lihat Potensi Energi Desa Anda
            </a>
        </div>
    </div>
</section>



@endsection
