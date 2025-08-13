<style>
  .products-section {
    background-color: white;
    padding: 96px 24px;
  }

  .container {
    max-width: 1152px;
    margin: 0 auto;
  }

  /* Section Header */
  .section-header {
    text-align: center;
    margin-bottom: 64px;
  }

  .section-title {
    font-family: 'Poppins', sans-serif;
    font-size: 36px;
    font-weight: 700;
    color: #111827;
    margin: 0 0 16px;
    line-height: 1.2;
  }

  .title-divider {
    width: 64px;
    height: 4px;
    background-color: #111827;
    margin: 0 auto 24px;
  }

  .section-description {
    font-family: 'Inter', sans-serif;
    font-size: 18px;
    color: #4B5563;
    max-width: 512px;
    margin: 0 auto;
    line-height: 1.6;
  }

  /* Main Grid */
  .main-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 48px;
    align-items: center;
  }

  /* Image Section */
  .image-container {
    position: relative;
  }

  .product-image-wrapper {
    aspect-ratio: 4/3;
    width: 100%;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
  }

  .product-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.7s ease;
  }

  .product-image:hover {
    transform: scale(1.05);
  }

  .decorative-circle {
    position: absolute;
    bottom: -16px;
    right: -16px;
    width: 80px;
    height: 80px;
    background-color: #DBEAFE;
    border-radius: 50%;
    z-index: -1;
  }

  /* Content Section */
  .content-section {
    display: flex;
    flex-direction: column;
    gap: 32px;
  }

  .product-features {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .product-title {
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
    font-weight: 700;
    color: #111827;
    margin: 0;
    line-height: 1.3;
  }

  .product-description {
    font-family: 'Inter', sans-serif;
    font-size: 18px;
    color: #374151;
    line-height: 1.75;
    margin: 0;
  }

  .features-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .feature-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
  }

  .feature-bullet {
    width: 8px;
    height: 8px;
    background-color: #2563EB;
    border-radius: 50%;
    margin-top: 10px;
    flex-shrink: 0;
  }

  .feature-text {
    font-family: 'Inter', sans-serif;
    color: #4B5563;
    margin: 0;
    line-height: 1.6;
  }

  /* SDG Badge */
  .sdg-badge {
    padding-top: 16px;
  }

  .sdg-content {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 16px;
  }

  .sdg-image {
    height: 64px;
    width: auto;
  }

  .sdg-title {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: #111827;
    margin: 0 0 4px;
  }

  .sdg-subtitle {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    color: #4B5563;
    margin: 0;
  }

  /* Mentoring Button */
  .mentoring-button {
    padding: 12px 24px;
    background-color: #2563EB;
    color: white;
    border-radius: 8px;
    font-family: 'Inter', sans-serif;
    font-weight: 600;
    font-size: 16px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
    align-self: flex-start;
  }

  .mentoring-button:hover {
    background-color: #1d4ed8;
  }

  /* Modal Styles - Made Smaller */
  .modal {
    width: 70%;
    max-width: 480px;
    padding: 24px;
    border: none;
    border-radius: 16px;
    box-shadow: 0 25px 50px rgba(0,0,0,0.2);
    font-family: 'Inter', sans-serif;
  }

  .modal::backdrop {
    background-color: rgba(0, 0, 0, 0.5);
  }

  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }

  .modal-title {
    font-size: 18px;
    font-weight: 600;
    color: #111827;
  }

  .modal-close {
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    color: #6b7280;
    padding: 4px;
  }

  .modal-close:hover {
    color: #374151;
  }

  /* Application Description */
  .app-description {
    margin-bottom: 20px;
    padding: 16px;
    background-color: #f9fafb;
    border-radius: 8px;
    border-left: 4px solid #2563EB;
  }

  .app-description h4 {
    font-size: 16px;
    font-weight: 600;
    color: #111827;
    margin: 0 0 8px;
  }

  .app-description p {
    font-size: 14px;
    color: #4b5563;
    margin: 0 0 8px;
    line-height: 1.5;
  }

  .app-features {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .app-features li {
    font-size: 13px;
    color: #6b7280;
    margin-bottom: 4px;
    padding-left: 16px;
    position: relative;
  }

  .app-features li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #10b981;
    font-weight: bold;
  }

  .modal-images {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 12px;
    margin-bottom: 20px;
  }

  .modal-image {
    width: 100%;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .store-badges {
    display: flex;
    justify-content: center;
    gap: 12px;
  }

  .store-badge {
    height: 40px;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .products-section {
      padding: 60px 24px;
    }
    
    .main-grid {
      grid-template-columns: 1fr;
      gap: 32px;
    }
    
    .section-title {
      font-size: 28px;
    }
    
    .product-title {
      font-size: 20px;
    }

    .content-section {
      order: 1;
    }
    
    .image-container {
      order: 2;
    }

    .modal {
      width: 90%;
      max-width: 400px;
      padding: 20px;
    }

    .modal-title {
      font-size: 16px;
    }

    .modal-header {
      margin-bottom: 16px;
    }

    .app-description {
      margin-bottom: 16px;
      padding: 12px;
    }

    .app-description h4 {
      font-size: 15px;
    }

    .app-description p {
      font-size: 13px;
    }

    .app-features li {
      font-size: 12px;
    }

    .store-badges {
      flex-direction: column;
      align-items: center;
    }

    .store-badge {
      width: 100%;
      max-width: 160px;
      height: 36px;
    }

    .modal-images {
      grid-template-columns: repeat(2, 1fr);
      gap: 8px;
      margin-bottom: 16px;
    }
  }

  @media (max-width: 480px) {
    .modal {
      width: 95%;
      padding: 16px;
    }

    .modal-images {
      grid-template-columns: 1fr 1fr;
    }
  }
</style>

<section id="products" class="products-section">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  
  <div class="container">
    <!-- Section Header -->
    <div class="section-header">
      <h2 class="section-title">Produk Kami</h2>
      <div class="title-divider"></div>
      <p class="section-description">
        Solusi energi terbarukan yang inovatif dan berkelanjutan untuk kebutuhan listrik masa depan
      </p>
    </div>

    <!-- Main Content Grid -->
    <div class="main-grid">
      <!-- Image Section -->
      <div class="image-container">
        <div class="product-image-wrapper">
          <img
            src="{{ asset('assets/product-agnivolt.svg') }}"
            alt="PLTMH Modular Technology"
            class="product-image"
          />
        </div>
        <div class="decorative-circle"></div>
      </div>

      <!-- Content Section -->
      <div class="content-section">
        <!-- Product Features -->
        <div class="product-features">
          <h3 class="product-title">
            PLTMH Modular dengan IoT Monitoring
          </h3>
          
          <p class="product-description">
            Teknologi pembangkit listrik tenaga mikro hidro (PLTMH) berbasis modular yang dilengkapi dengan sistem monitoring IoT untuk solusi energi yang dapat diandalkan dan efisien.
          </p>

          <div class="features-list">
            <div class="feature-item">
              <div class="feature-bullet"></div>
              <p class="feature-text">
                Desain modular yang mudah diimplementasikan dan dipelihara
              </p>
            </div>
            <div class="feature-item">
              <div class="feature-bullet"></div>
              <p class="feature-text">
                Sistem monitoring real-time dengan teknologi IoT
              </p>
            </div>
            <div class="feature-item">
              <div class="feature-bullet"></div>
              <p class="feature-text">
                Solusi ideal untuk daerah terpencil dan sistem cadangan
              </p>
            </div>
            <div class="feature-item">
              <div class="feature-bullet"></div>
              <p class="feature-text">
                Ramah lingkungan dan berkelanjutan
              </p>
            </div>
          </div>
        </div>

        <!-- SDG Badge -->
        <div class="sdg-badge">
          <div class="sdg-content">
            <img
              src="{{ asset('assets/badge-7-affordableandcleanenergy.svg') }}"
              alt="SDG 7 - Affordable and Clean Energy"
              class="sdg-image"
            />
            <div>
              <p class="sdg-title">Mendukung SDG 7</p>
              <p class="sdg-subtitle">Energi Bersih dan Terjangkau</p>
            </div>
          </div>
        </div>

        <!-- Mentoring Button -->
        <button class="mentoring-button" onclick="document.getElementById('mentoringModal').showModal()">
          Lihat Aplikasi Mentoring
        </button>
      </div>
    </div>
  </div>

  <!-- Modal - Made Smaller with App Description -->
  <dialog id="mentoringModal" class="modal">
    <div class="modal-header">
      <h3 class="modal-title">Aplikasi Mentoring PLTMH</h3>
      <button class="modal-close" onclick="document.getElementById('mentoringModal').close()">&times;</button>
    </div>

    <!-- Application Description -->
    <div class="app-description">
      <h4>AgniVolt Mentoring App</h4>
      <p>Aplikasi pendampingan dan monitoring untuk teknologi PLTMH modular yang membantu pengguna memahami dan mengoptimalkan sistem energi terbarukan.</p>
      <ul class="app-features">
        <li>Panduan instalasi dan pemeliharaan PLTMH</li>
        <li>Monitoring real-time performa sistem</li>
        <li>Tutorial interaktif dan troubleshooting</li>
        <li>Konsultasi dengan ahli energi terbarukan</li>
        <li>Analisis efisiensi dan optimasi sistem</li>
      </ul>
    </div>

    <!-- Modal Images -->
    <div class="modal-images">
      <img src="{{ asset('assets/mentoring/14.svg') }}" class="modal-image" alt="Mentoring 1">
      <img src="{{ asset('assets/mentoring/15.svg') }}" class="modal-image" alt="Mentoring 2">
      <img src="{{ asset('assets/mentoring/16.svg') }}" class="modal-image" alt="Mentoring 3">
      
    </div>

    <!-- Store Badges -->
    <div class="store-badges">
      <img src="{{ asset('assets/badge-gplay.png') }}" alt="Download on App Store" class="store-badge">
      <img src="{{ asset('assets/badge-appstore.png') }}" alt="Get it on Google Play" class="store-badge">
    </div>
  </dialog>

  <!-- Browser Support Fallback -->
  <script>
    if (!HTMLDialogElement.prototype.showModal) {
      alert("Browser kamu tidak mendukung fitur dialog. Gunakan browser modern.");
    }
  </script>
</section>