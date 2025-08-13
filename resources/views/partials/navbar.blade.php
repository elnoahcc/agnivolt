

<!-- Navbar -->
<nav id="navbar" class="font-semibold font-inter font-bold fixed w-full top-0 z-40 bg-white/80 backdrop-blur border-b border-gray-100 transition duration-300">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center h-16">
      
      <!-- Logo -->
      <a href="/" class="block w-20 h-12">
        <img src="{{ asset('assets/logoagnivolt.svg') }}" alt="Agnivolt Logo" class="w-full h-full object-contain">
      </a>

      <!-- Desktop Menu -->
      <div class="hidden md:flex items-center space-x-8">
        <a href="#home" class="nav-link text-sm font-medium text-gray-700 hover:text-blue-600">Home</a>
        <a href="#about" class="nav-link text-sm font-medium text-gray-600 hover:text-blue-600">About</a>
        <a href="#products" class="nav-link text-sm font-medium text-gray-600 hover:text-blue-600">Products</a>
        <a href="#news" class="nav-link text-sm font-medium text-gray-600 hover:text-blue-600">News</a>
        <a href="#contact" class="nav-link text-sm font-medium text-gray-600 hover:text-blue-600">Contact</a>
      </div>

      <!-- CTA Button Desktop -->
      <div class="hidden md:block">
        <button class="px-4 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-lg hover:bg-blue-50 transition">
          Get Started
        </button>
      </div>

      <!-- Mobile Menu Toggle -->
      <div class="md:hidden relative z-60">
        <button id="hamburger" class="flex flex-col justify-between w-6 h-5">
          <span class="block h-0.5 bg-gray-800 transition-transform duration-300"></span>
          <span class="block h-0.5 bg-gray-800 transition-opacity duration-300"></span>
          <span class="block h-0.5 bg-gray-800 transition-transform duration-300"></span>
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu" class="fixed top-0 right-0 h-full w-72 bg-white shadow-xl z-50 transform translate-x-full transition-transform duration-300 md:hidden">
  <div class="p-6 font-inter">
   
   <!-- Close Button -->
<div class="flex items-center justify-between mb-8">
  <div class="w-12 h-12 rounded-lg overflow-hidden">
    <img src="{{ asset('assets/logoagnivolt.svg') }}" alt="Agnivolt Logo" class="w-full h-full object-contain">
  </div>
  <button id="close-menu" class="p-2 hover:bg-gray-100 rounded-lg transition">
    <svg class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>
</div>



    <div class="space-y-1">
      <a href="#home" class="mobile-nav-link block px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">Home</a>
      <a href="#about" class="mobile-nav-link block px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">About</a>
      <a href="#products" class="mobile-nav-link block px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">Products</a>
      <a href="#news" class="mobile-nav-link block px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">News</a>
      <a href="#contact" class="mobile-nav-link block px-4 py-3 text-gray-600 hover:text-blue-600 hover:bg-gray-50 rounded-lg transition">Contact</a>
    </div>

    <div class="mt-8">
      <button class="w-full px-4 py-3 text-blue-600 font-medium border border-blue-600 rounded-lg hover:bg-blue-50 transition">
        Get Started
      </button>
    </div>
  </div>
</div>

<!-- Overlay -->
<div id="mobile-overlay" class="fixed inset-0 bg-black/20 z-45 opacity-0 pointer-events-none transition-opacity duration-300 md:hidden"></div>

<!-- Script -->
<script>
  const hamburger = document.getElementById('hamburger');
  const closeMenu = document.getElementById('close-menu');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileOverlay = document.getElementById('mobile-overlay');
  const navLinks = document.querySelectorAll('.nav-link');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
  const navbar = document.getElementById('navbar');

  let isMenuOpen = false;

  // Hamburger animation
  function toggleHamburger() {
    const spans = hamburger.querySelectorAll('span');
    if (isMenuOpen) {
      spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
      spans[1].style.opacity = '0';
      spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
    } else {
      spans[0].style.transform = 'rotate(0) translate(0, 0)';
      spans[1].style.opacity = '1';
      spans[2].style.transform = 'rotate(0) translate(0, 0)';
    }
  }

  function openMobileMenu() {
    isMenuOpen = true;
    mobileMenu.classList.remove('translate-x-full');
    mobileOverlay.classList.remove('opacity-0', 'pointer-events-none');
    mobileOverlay.classList.add('opacity-100');
    document.body.style.overflow = 'hidden';
    toggleHamburger();
  }

  function closeMobileMenu() {
    isMenuOpen = false;
    mobileMenu.classList.add('translate-x-full');
    mobileOverlay.classList.add('opacity-0', 'pointer-events-none');
    mobileOverlay.classList.remove('opacity-100');
    document.body.style.overflow = '';
    toggleHamburger();
  }

  hamburger.addEventListener('click', () => {
    if (isMenuOpen) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  closeMenu.addEventListener('click', closeMobileMenu);
  mobileOverlay.addEventListener('click', closeMobileMenu);
  mobileNavLinks.forEach(link => link.addEventListener('click', closeMobileMenu));

  window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
      navbar.classList.add('shadow-sm');
    } else {
      navbar.classList.remove('shadow-sm');
    }
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && isMenuOpen) closeMobileMenu();
  });
</script>

<style>
.z-45 { z-index: 45; }
.z-60 { z-index: 60; }
</style>