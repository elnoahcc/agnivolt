<section id="about" style="background-color: white; padding: 96px 24px;">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  
  <div style="max-width: 1152px; margin: 0 auto;">

    <!-- Section Title -->
    <div style="margin-bottom: 64px;">
      <h2 style="font-family: 'Poppins', sans-serif; font-size: 36px; font-weight: 700; color: #111827; margin: 0 0 12px; line-height: 1.2;">
        Apa yang Mendorong Kami
      </h2>
      <div style="width: 64px; height: 4px; background-color: #111827;"></div>
    </div>

    <!-- Grid Layout -->
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start;">

      <!-- Image Section -->
      <div>
        <div style="position: relative;">
          <div style="aspect-ratio: 1/1; width: 100%; border-radius: 8px; overflow: hidden; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);">
            <img
              src="{{ asset('assets/about-us.jpg') }}"
              alt="Teknologi PLTMH Modular"
              style="width: 100%; height: 100%; object-fit: cover;"
            />
          </div>
        </div>
      </div>

      <!-- Content Section -->
      <div style="display: flex; flex-direction: column; gap: 24px;">

        <p style="font-family: 'Inter', sans-serif; font-size: 18px; font-weight: 600; color: #374151; line-height: 1.75; margin: 0;">
          Kami percaya akses energi bersih adalah hak fundamental setiap manusia. Dengan memanfaatkan potensi air di Indonesia, kami mengembangkan PLTMH modular yang inovatif dan berkelanjutan.
        </p>

        <p style="font-family: 'Inter', sans-serif; color: #4B5563; line-height: 1.75; margin: 0;">
          Teknologi PLTMH berbasis modular dengan monitoring IoT dirancang untuk daerah terpencil dan sistem cadangan. Desain modular memungkinkan instalasi mudah, perawatan minimal, dan monitoring jarak jauh.
        </p>

        <div style="padding: 20px; background-color: #F9FAFB; border-radius: 8px; border-left: 4px solid #2563EB;">
          <p style="font-family: 'Inter', sans-serif; font-weight: 500; color: #1F2937; margin: 0; line-height: 1.6;">
            <strong>Misi kami:</strong> Menyediakan energi bersih dan terjangkau untuk seluruh Indonesia, mendorong kemandirian energi masyarakat, dan berkontribusi pada SDG 7.
          </p>
        </div>

      </div>
    </div>

    <!-- Responsive Design -->
    <style>
      @media (max-width: 768px) {
        #about {
          padding: 60px 24px !important;
        }
        
        #about > div > div:nth-child(2) {
          grid-template-columns: 1fr !important;
          gap: 32px !important;
        }
        
        #about h2 {
          font-size: 28px !important;
        }
      }
    </style>

  </div>
</section>