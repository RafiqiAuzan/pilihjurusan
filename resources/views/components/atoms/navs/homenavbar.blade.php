
  <navbar class="fixed z-20 w-full bg-light-100 backdrop-blur-sm bg-opacity-70" x-cloak x-data="{ navmenu: false }">
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
      
      <div :class="{'hidden lg:block' : !navmenu}">
        <div class="justify-center gap-4 text-center lg:flex lg:items-center">
          <ul class="gap-4  lg:flex">
            <li><a class="transition-all hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold" href="#">Beranda</a></li>
            <li><a class="transition-all hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold" href="#">Layanan</a></li>
            <li><a class="transition-all hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold" href="#">Artikel</a></li>
            <li><a class="transition-all hover:underline hover:decoration-primary-500 hover:underline-offset-2 hover:font-semibold" href="#">Tentang</a></li>
          </ul>
          
          <x-atoms.button size="sm" status="outline"> Login</x-atoms.button>
        </div>
      </div>
    </div>
  </navbar>