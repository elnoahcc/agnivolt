<section class="bg-white px-6 md:px-20 py-20">
<h2 class="font-poppins text-4xl font-bold mb-10 text-center">Target Implementasi</h2>

  <!-- Pembungkus untuk skala -->
  <div class="font-inter transform scale-[0.85] origin-top mx-auto max-w-[1600px]">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      <!-- KIRI -->
      <div class="relative overflow-hidden rounded-2xl w-full aspect-[3/4] group cursor-pointer transition-all duration-300 group-hover:shadow-2xl">
        <img src="{{ asset('assets/wilayah perairan dengan skala kecil.svg') }}" alt="Wilayah Perairan" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
        <div class="absolute inset-0 bg-black/40 flex justify-center items-end p-4">
          <div class="text-center text-white transition-all duration-300 transform translate-y-0 group-hover:-translate-y-16">
            <p class="text-sm font-semibold">Wilayah Perairan dengan skala kecil</p>
            <p class="text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-300">Saluran irigasi kecil yang dimanfaatkan masyarakat sekitar.</p>
          </div>
        </div>
      </div>

      <!-- TENGAH -->
      <div class="flex flex-col justify-between gap-1">
        <!-- Card Atas -->
        <div class="relative overflow-hidden rounded-2xl w-full aspect-[16/9] group cursor-pointer transition-all duration-300 group-hover:shadow-2xl">
          <img src="{{ asset('assets/Pusat Studi Manufaktur.svg') }}" alt="Pusat Studi Manufaktur" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
          <div class="absolute inset-0 bg-black/40 flex justify-center items-end p-4">
            <div class="text-center text-white transition-all duration-300 transform translate-y-0 group-hover:-translate-y-12">
              <p class="text-sm font-semibold">Pusat Studi Manufaktur</p>
              <p class="text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-300">Tempat pembuatan prototipe alat turbin mikrohidro.</p>
            </div>
          </div>
        </div>

        <!-- Card Bawah -->
        <div class="relative overflow-hidden rounded-2xl w-full aspect-[16/9] group cursor-pointer transition-all duration-300 group-hover:shadow-2xl">
          <img src="{{ asset('assets/Di hilir mata air ponggok.svg') }}" alt="Hilir mata air ponggok" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
          <div class="absolute inset-0 bg-black/40 flex justify-center items-end p-4">
            <div class="text-center text-white transition-all duration-300 transform translate-y-0 group-hover:-translate-y-12">
              <p class="text-sm font-semibold">Di Hilir mata air ponggok</p>
              <p class="text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-300">Aliran hilir mata air yang digunakan sebagai tempat uji coba.</p>
            </div>
          </div>
        </div>
      </div>

      <!-- KANAN -->
      <div class="relative overflow-hidden rounded-2xl w-full aspect-[3/4] group cursor-pointer transition-all duration-300 group-hover:shadow-2xl">
        <img src="{{ asset('assets/Di dekat mata air umbul sigedang.svg') }}" alt="Umbul Sigedang" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110" />
        <div class="absolute inset-0 bg-black/40 flex justify-center items-end p-4">
          <div class="text-center text-white transition-all duration-300 transform translate-y-0 group-hover:-translate-y-16">
            <p class="text-sm font-semibold">Di dekat mata air umbul sigedang</p>
            <p class="text-xs mt-2 opacity-0 group-hover:opacity-100 transition duration-300">Lokasi uji coba alat langsung pada aliran mata air.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
