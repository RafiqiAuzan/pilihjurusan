@props(['class' => ''])

<x-layouts.base class=" {{ $class }}">
  <navbar class="w-full" x-cloak x-data="{ navmenu: false }">
    <div class="container mx-auto lg:flex lg:items-center lg:justify-between">
      <div class="flex justify-between my-4">
        {{-- Kiri --}}
        <div class="">
          <img src="{{ asset('img/global/mainlogo.webp')}}" alt="Logo Pilih Jurusan">
        </div>
        {{-- Kanan --}}
        <div class="flex">
          <span class="lg:hidden" @click="navmenu = ! navmenu">
            <i class="bi-list"></i>
          </span>
        </div>
      </div>
      
      <div :class="{'hidden lg:block' : !navmenu}" 
      x-show="navmenu"
      x-transition:enter.duration.500ms
      x-transition:leave.duration.500ms>
        <div class="text-center justify-center lg:flex lg:items-center">
          <ul class=" lg:flex gap-4">
            <li><a class="hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold transition-all" href="#">Beranda</a></li>
            <li><a class="hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold transition-all" href="#">Layanan</a></li>
            <li><a class="hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold transition-all" href="#">Artikel</a></li>
            <li><a class="hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold transition-all" href="#">Tentang</a></li>
          </ul>
          
          <x-atoms.button size="sm" status="outline"> Login</x-atoms.button>
        </div>
      </div>
    </div>
  </navbar>
  <div class="bg-base-100">
    <div class="min-h-screen container mx-auto py-8">
    {{ $slot }}
    </div>
  </div>
  <footer class="w-full h-full bg-dark-200 text-light-100 py-12">
    <div class="container mx-auto">
      <div class="w-full">
        <div class="mb-14">
          <img src="{{ asset('img/global/logo.webp')}}" alt="Logo Pilih Jurusan">
        </div>
      </div>
      <div class="flex">
        <div class="grow">
          <h1 class="text-secondary-500 font-bold text-lg mb-3">Perusahaan</h1>
          <ul class="font-light text-xs space-y-2">
            <li>Tentang</li>
            <li>Produk</li>
            <li>Kerjasama</li>
            <li>Karier</li>
            <li>Lokasi</li>
          </ul>
        </div>
        <div class="grow">
          <h1 class="text-secondary-500 font-bold text-lg mb-3">Layanan</h1>
          <ul class="font-light text-xs space-y-2">
            <li>Workshop</li>
            <li>Tes Psikologi</li>
            <li>Coaching</li>
          </ul>
        </div>
        <div class="grow">
          <h1 class="text-secondary-500 font-bold text-lg mb-3">Lainnya</h1>
          <ul class="font-light text-xs space-y-2">
            <li>Kegiatan</li>
            <li>Artikel</li>
          </ul>
        </div>
        <div class="grow">
          <h1 class="text-secondary-500 font-bold text-lg mb-3">Bantuan</h1>
          <ul class="font-light text-xs space-y-2">
            <li>Kebijakan Privasi</li>
            <li>Hubungi Kami</li>
            <li>Pertanyaan</li>
          </ul>
        </div>
        <div class="">
          <h1 class="text-secondary-500 font-bold text-lg mb-3">Ikuti Kami</h1>
          <ul class="flex gap-2">
            <li><i class="bi-facebook"></i></li>
            <li><i class="bi-tiktok"></i></li>
            <li><i class="bi-instagram"></i></li>
            <li><i class="bi-twitter"></i></li>
            <li><i class="bi-youtube"></i></li>
            <li><i class="bi-linkedin"></i></li>
          </ul>
        </div>
      </div>
      <div class="w-full border-t mt-14">
        <p>© 2020 - 2022 Pilihjurusan | Merek dagang dari PT. Pilihanmu Indonesia Jaya</p>
      </div>
    </div>
  </footer>
</x-layouts.base> 