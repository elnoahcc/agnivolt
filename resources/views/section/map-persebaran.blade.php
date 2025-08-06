<section style="background-color: #1A7EC4; padding: 60px 40px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
  <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; align-items: flex-start; gap: 40px; justify-content: center;">

    <!-- Kiri: Judul dan Peta -->
    <div style="flex: 1; min-width: 280px;">
      <div style="margin-bottom: 20px;">
        <h2 style="color: white; font-size: 28px; font-weight: 700; margin: 0 0 10px;">
          Peta Persebaran Sumber Mata Air di Kabupaten Klaten
        </h2>
        <p style="color: rgba(255,255,255,0.9); font-size: 16px; font-weight: 500; margin: 0;">
          (Sumber: BPS Kabupaten Klaten, 2015)
        </p>
      </div>
      <img 
        src="{{ asset('assets/peta-persebaran-klaten.svg') }}" 
        alt="Peta Persebaran Sumber Mata Air di Kabupaten Klaten"
        style="width: 100%; max-width: 320px; height: auto;"
      >
    </div>

    <!-- Kanan: Diagram TAM/SAM/SOM -->
    <div style="flex: 1; min-width: 300px; color: white;">
      <div style="margin-bottom: 20px;">
        <h3 style="font-size: 24px; font-weight: 700; margin: 0 0 10px;">Menjangkau Potensi Energi di Seluruh Negeri</h3>
        <p style="font-size: 16px; font-weight: 500; margin: 0;">
          Visualisasi skala potensi pembangunan mikrohidro di Indonesia berdasarkan cakupan wilayah.
        </p>
      </div>
      <img 
        src="{{ asset('assets/tam-sam-som.svg') }}" 
        alt="Diagram TAM SAM SOM"
        style="width: 100%; max-width: 320px; height: auto; margin-bottom: 20px;"
      >
      <div style="font-size: 15px; font-weight: 400; line-height: 1.6;">
        <p><strong>TAM</strong><br>&gt; 52.000 lokasi berpotensi dibangun mikrohidro di Indonesia</p>
        <p><strong>SAM</strong><br>Lokasi berpotensi mikrohidro di wilayah Jawa Tengah</p>
        <p><strong>SOM</strong><br>Beberapa desa di beberapa daerah yang memiliki sumber mata air</p>
      </div>
    </div>

  </div>
</section>
