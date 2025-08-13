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

</style>
<section id="news" class="py-24 px-4">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-poppins font-semibold mb-4 fade-in">
      Berita <span class="text-cyan-400">Terbaru</span>
    </h2>
    <p class="font-inter text-lg md:text-xl mb-12 max-w-3xl mx-auto fade-in" style="animation-delay: 0.2s;">
      Ikuti perkembangan terkini dari inovasi, proyek, dan kegiatan terbaru kami di berbagai daerah.
    </p>

    <div class="grid gap-8 md:grid-cols-3 fade-in" style="animation-delay: 0.4s;">
      <!-- Card 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300">
        <img src="{{ asset('assets/news1.jpg') }}" alt="Berita 1" class="w-full h-48 object-cover">
        <div class="p-5 text-left">
          <h3 class="text-xl font-semibold mb-2">Proyek PLTMH Baru di Klaten</h3>
          <p class="text-gray-400 text-sm mb-4">
            Agnivolt resmi memulai pembangunan sistem modular PLTMH di wilayah Klaten, Jawa Tengah.
          </p>
          <a href="#" class="text-cyan-400 hover:underline text-sm font-medium">Baca selengkapnya →</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300">
        <img src="{{ asset('assets/news2.jpg') }}" alt="Berita 2" class="w-full h-48 object-cover">
        <div class="p-5 text-left">
          <h3 class="text-xl font-semibold mb-2">Peluncuran Aplikasi Monitoring</h3>
          <p class="text-gray-400 text-sm mb-4">
            Aplikasi mobile Agnivolt diluncurkan untuk memantau sistem tenaga secara real-time dari jarak jauh.
          </p>
          <a href="#" class="text-cyan-400 hover:underline text-sm font-medium">Baca selengkapnya →</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow hover:shadow-lg transition-all duration-300">
        <img src="{{ asset('assets/news3.jpg') }}" alt="Berita 3" class="w-full h-48 object-cover">
        <div class="p-5 text-left">
          <h3 class="text-xl font-semibold mb-2">Kolaborasi dengan Desa Digital</h3>
          <p class="text-gray-400 text-sm mb-4">
            Kerjasama strategis dengan program Desa Digital untuk memperluas jangkauan elektrifikasi hijau.
          </p>
          <a href="#" class="text-cyan-400 hover:underline text-sm font-medium">Baca selengkapnya →</a>
        </div>
      </div>
    </div>
  </div>
</section>
