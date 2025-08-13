<section id="potensi" style="background-color: #1A7EC4; padding: 80px 0; font-family: 'Segoe UI', sans-serif;">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">

  <div style="max-width: 1200px; margin: 0 auto; padding: 0 40px;">
    <div class="potensi-grid">
      
      <!-- Bagian Kiri: Peta -->
      <div>
        <h2 style="font-family: 'Poppins', sans-serif; color: white; font-size: 32px; font-weight: 700; margin-bottom: 8px; line-height: 1.2;">
          Peta Persebaran Sumber Mata Air di Kabupaten Klaten
        </h2>
        <p style="font-family: 'Inter', sans-serif; color: rgba(255,255,255,0.85); font-size: 16px; font-weight: 500; margin-bottom: 40px;">
          (Sumber: BPS Kabupaten Klaten, 2015)
        </p>
        <div style="padding: 30px; border-radius: 8px;">
          <img src="{{ asset('assets/peta-persebaran-klaten.svg') }}" alt="Peta Persebaran" style="width: 100%; height: auto; display: block;" />
        </div>
      </div>

      <!-- Bagian Kanan: TAM/SAM/SOM -->
      <div>
        <h3 style="font-family: 'Poppins', sans-serif; font-size: 32px; font-weight: 700; margin-bottom: 8px; color: white; line-height: 1.2;">
          Menjangkau Potensi Energi di Seluruh Negeri
        </h3>
        <p style="font-family: 'Inter', sans-serif; font-size: 16px; font-weight: 500; margin-bottom: 30px; color: rgba(255,255,255,0.85); line-height: 1.5;">
          Visualisasi skala potensi pembangunan mikrohidro di Indonesia berdasarkan cakupan wilayah.
        </p>

        <!-- Diagram Lingkaran -->
        <div class="diagram-wrapper">
          <div class="circle tam"><span>TAM</span></div>
          <div class="circle sam"><span>SAM</span></div>
          <div class="circle som"><span>SOM</span></div>
        </div>

        <!-- Definisi -->
        <div style="color: white; margin-top: 30px;">
          <div style="margin-bottom: 25px; padding-left: 20px; border-left: 4px solid #E53E3E;">
            <h4 style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 600; margin-bottom: 6px;">
              TAM - Total Addressable Market
            </h4>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.9);">
              Lebih dari 52.000 lokasi berpotensi dibangun mikrohidro di seluruh Indonesia
            </p>
          </div>
          <div style="margin-bottom: 25px; padding-left: 20px; border-left: 4px solid #38A169;">
            <h4 style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 600; margin-bottom: 6px;">
              SAM - Serviceable Addressable Market
            </h4>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.9);">
              Lokasi berpotensi mikrohidro yang dapat dijangkau di wilayah Jawa Tengah
            </p>
          </div>
          <div style="padding-left: 20px; border-left: 4px solid #3182CE;">
            <h4 style="font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 600; margin-bottom: 6px;">
              SOM - Serviceable Obtainable Market
            </h4>
            <p style="font-family: 'Inter', sans-serif; font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.9);">
              Target desa-desa prioritas dengan sumber mata air yang layak untuk pengembangan awal
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <style>
    /* Grid utama */
    .potensi-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: start;
    }
    /* Diagram */
    .diagram-wrapper {
      display: flex;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .circle {
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
    }
    .tam { background-color: #E53E3E; width: 120px; height: 120px; font-size: 22px; }
    .sam { background-color: #38A169; width: 100px; height: 100px; font-size: 18px; }
    .som { background-color: #3182CE; width: 80px; height: 80px; font-size: 16px; }

    /* Responsif Mobile */
    @media (max-width: 768px) {
      .potensi-grid {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      .diagram-wrapper {
        margin-bottom: 20px;
      }
    }
  </style>
</section>
