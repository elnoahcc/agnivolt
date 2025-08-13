@extends('layouts.app')

@section('title', 'Home - Agnivolt')

@section('content')

<style>
@keyframes fade-in {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.fade-in {
  animation: fade-in 1s ease-out both;
}

/* Responsive button sizing */
@media (max-width: 480px) {
  .btn-pill {
    font-size: 14px;
    padding-left: 14px;
    padding-right: 14px;
  }
}
</style>

<!-- Hero Section -->
<section id="home" class="font-googlesans relative min-h-screen flex items-center justify-center bg-cover bg-center pt-24 pb-24" style="background-image: url('{{ asset('assets/hero-home-image.svg') }}');">
  <div class="absolute inset-0 bg-gradient-to-br from-black/40 via-black/55 to-black/45"></div>

  <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
    <h1 class="font-poppins text-4xl md:text-6xl font-semibold mb-6 leading-tight tracking-tight fade-in">
      Listrik Berkelanjutan dari 
      <span class="text-cyan-400">Alam Sekitar</span>
    </h1>
    
    <p class="font-inter text-lg md:text-xl mb-8 max-w-3xl mx-auto text-gray-100 leading-relaxed font-light fade-in" style="animation-delay: 0.3s;">
      Agnivolt menghadirkan solusi Pembangkit Listrik Tenaga Mikro Hidro (PLTMH) modular dengan sistem IoT dan aplikasi monitoring – efisien, cerdas, dan ramah lingkungan.
    </p>
    
    <!-- Tombol sejajar di mobile -->
    <div class="font-poppins flex flex-row flex-wrap justify-center gap-2 fade-in" style="animation-delay: 0.6s;">
      <a href="#technology" 
         class="btn-pill bg-cyan-600 hover:bg-cyan-700 text-white font-medium px-6 py-2 rounded-full text-sm transition-colors duration-200 shadow hover:shadow-md w-auto">
        Jelajahi Teknologi
      </a>
      <a href="#potensi" 
         class="btn-pill font-poppins bg-white/90 hover:bg-white text-gray-800 font-medium px-6 py-2 rounded-full text-sm transition-all duration-200 shadow hover:shadow-md w-auto">
        Potensi Energi Desa
      </a>
    </div>
  </div>
</section>

@endsection
