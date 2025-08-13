<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Agnivolt')</title>

  <link rel="icon" type="image/png" href="{{ asset('assets/icon-agnivolt.svg') }}">

  <!-- Tailwind CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Tailwind Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            inter: ['Inter', 'sans-serif'],
            poppins: ['Poppins', 'sans-serif'],
            googlesans: ['"Google Sans"', 'sans-serif'],
          },
          colors: {
            'sportflux-blue': '#1e40af',
            'sportflux-dark': '#0f172a',
            'sportflux-gray': '#64748b'
          },
          animation: {
            fadeInUp: 'fadeInUp 1s ease-out',
            fadeIn: 'fadeIn 1s ease-out',
            float: 'float 3s ease-in-out infinite',
            pulse: 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
          },
          keyframes: {
            fadeInUp: {
              '0%': { opacity: 0, transform: 'translateY(20px)' },
              '100%': { opacity: 1, transform: 'translateY(0)' },
            },
            fadeIn: {
              '0%': { opacity: 0 },
              '100%': { opacity: 1 },
            },
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-10px)' },
            }
          }
        }
      }
    }
  </script>
</head>
<body class="font-sans antialiased bg-gray-50">

  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('section.partner-section') 
  @include('section.about-us')
  @include('section.product-detail')
  @include('section.target-section')
  @include('section.map-persebaran')
  @include('section.news-agnivolt')

  @include('partials.footer')

</body>
</html>
