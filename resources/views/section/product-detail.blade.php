<section id="products" class="bg-white px-6 md:px-20 py-24">
  <div class="max-w-6xl mx-auto">

    <!-- Centered Section Title -->
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Produk Kami</h2>
      <div class="w-16 h-1 bg-gray-900 mx-auto mb-6"></div>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Solusi energi terbarukan yang inovatif dan berkelanjutan untuk kebutuhan listrik masa depan
      </p>
    </div>

    <!-- Grid Layout -->
    <div class="grid md:grid-cols-2 gap-12 items-center">

      <!-- Image Section -->
      <div class="order-2 md:order-1">
        <div class="relative">
          <div class="aspect-[4/3] w-full rounded-2xl overflow-hidden shadow-2xl">
            <img
              src="{{ asset('assets/about-us.jpg') }}"
              alt="PLTMH Modular Technology"
              class="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
            >
          </div>
          <!-- Decorative element -->
          <div class="absolute -bottom-4 -right-4 w-20 h-20 bg-blue-100 rounded-full -z-10"></div>
        </div>
      </div>

      <!-- Content Section -->
      <div class="order-1 md:order-2 space-y-8">

        <!-- Product Features -->
        <div class="space-y-6">
          <h3 class="text-2xl font-bold text-gray-900 mb-4">
            PLTMH Modular dengan IoT Monitoring
          </h3>
          
          <p class="text-lg text-gray-700 leading-relaxed">
            Teknologi pembangkit listrik tenaga mikro hidro (PLTMH) berbasis modular yang dilengkapi dengan sistem monitoring IoT untuk solusi energi yang dapat diandalkan dan efisien.
          </p>

          <div class="space-y-4">
            <div class="flex items-start space-x-3">
              <div class="w-2 h-2 bg-blue-600 rounded-full mt-2.5 flex-shrink-0"></div>
              <p class="text-gray-600">Desain modular yang mudah diimplementasikan dan dipelihara</p>
            </div>
            <div class="flex items-start space-x-3">
              <div class="w-2 h-2 bg-blue-600 rounded-full mt-2.5 flex-shrink-0"></div>
              <p class="text-gray-600">Sistem monitoring real-time dengan teknologi IoT</p>
            </div>
            <div class="flex items-start space-x-3">
              <div class="w-2 h-2 bg-blue-600 rounded-full mt-2.5 flex-shrink-0"></div>
              <p class="text-gray-600">Solusi ideal untuk daerah terpencil dan sistem cadangan</p>
            </div>
            <div class="flex items-start space-x-3">
              <div class="w-2 h-2 bg-blue-600 rounded-full mt-2.5 flex-shrink-0"></div>
              <p class="text-gray-600">Ramah lingkungan dan berkelanjutan</p>
            </div>
          </div>
        </div>

        <div class="pt-4 -ml -9">
          <div class="flex justify-start items-center">
            <img
              src="{{ asset('assets/badge-7-affordableandcleanenergy.svg') }}"
              alt="SDG 7 - Affordable and Clean Energy"
              class="h-16 w-auto"
            >
             <div>
              <p class="text-sm font-medium text-gray-900">Mendukung SDG 7</p>
              <p class="text-sm text-gray-600">Energi Bersih dan Terjangkau</p>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>