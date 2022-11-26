<x-layouts.base>
    <section>
      <div class="w-full h-full bg-[#FAF9F7] flex items-center justify-between">
          <div class="self-start py-16 text-left px-10 lg:text-center mx-auto">
              <div class="mt-32">
                  <h1 class="font-bold text-base-800 text-4xl pb-5">Menarik Bukan?</h1>
              </div>
              <div class=" font-body leading-6 ml-10w-full mx-auto font-bold lg:w-10/12 xl:w-9/12 pb-10">
                  <p class="font-normal text-base-600">Tunggu apalagi? Yuk daftarkan dirimu untuk segera memulai perjalananmu dengan Pilih Jurusan!</p>
              </div>
              <x-atoms.button size="lg" status="solid" class="mx-auto">
                  <i class="bi bi-arrow-right-circle-fill"></i> Daftar Sekarang
              </x-atoms.button>
          </div>
          <div class="self-end hidden lg:block pr-32 ">
            <img src="{{ asset('img/global/frame.webp')}}" alt="Frame">
          </div>
      </div>
    </section>
    <section>
      <footer class="w-full h-full bg-dark-200 ">
        <div class="container mx-auto px-20 py-10">
          <div class="w-full">
            <div class="mb-12">
              <img src="{{ asset('img/global/logo.webp')}}" alt="Logo Pilih Jurusan">
            </div>
          </div>
          <div class="grid grid-cols-2 lg:grid-cols-5 lg:pr-20">
            <div class="grid">
              <div class="grow mb-4">
                <h1 class="text-secondary-500 font-display font-bold text-lg mb-1">Perusahaan</h1>
                <ul class="text-light-200 text-xs font-body">
                  <li class="py-1"><a href="" class="hover:text-secondary-500">Tentang</a></li>
                  <li class="py-1"><a href="" class="hover:text-secondary-500">Produk</a></li>
                  <li class="py-1"><a href="" class="hover:text-secondary-500">Kerjasama</a></li>
                  <li class="py-1"><a href="" class="hover:text-secondary-500">Karier</a></li>
                  <li class="py-1"><a href="" class="hover:text-secondary-500">Lokasi</a></li>           
                </ul>
              </div>
          </div>
            <div class="grow mb-4">
              <h1 class="text-secondary-500 font-display font-bold text-lg mb-1">Layanan</h1>
              <ul class="text-light-200 text-xs font-body py-1">
                <li class="py-1"><a href="" class="hover:text-secondary-500">Workshop</a></li>
                <li class="py-1"><a href="" class="hover:text-secondary-500">Test Psikologi</a></li>
                <li class="py-1"><a href="" class="hover:text-secondary-500">Coaching</a></li>
                <li class="py-1"><a href="" class="hover:text-secondary-500">Webinar</a></li>
              </ul>
            </div>
            <div class="grow mb-4">
              <h1 class="text-secondary-500 font-display font-bold text-lg mb-1">Lainnya</h1>
              <ul class="text-light-200 text-xs font-body">
                <li class="py-1"><a href="" class="hover:text-secondary-500">Kegiatan</a></li>
                <li class="py-1"><a href="" class="hover:text-secondary-500">Artikel</a></li>
              </ul>
            </div>
            <div class="grow mb-4">
              <h1 class="text-secondary-500 font-display font-bold text-lg mb-1">Bantuan</h1>
              <ul class="text-light-200 text-xs font-body">
                <li class="py-1"><a href="" class="hover:text-secondary-500">Kebijakan Privasi</a></li>
                <li class="py-1"><a href="" class="hover:text-secondary-500">Hubungi Kami</a></li>
                <li class="py-1"><a href="" class="hover:text-secondary-500">Pertanyaan</a></li>
              </ul>
            </div>
            <div class="text-light-100">
              <h1 class="text-secondary-500 font-display font-bold text-lg mb-1">Ikuti Kami</h1>
              <ul class="flex">
                <a href="https://www.facebook.com/pilihjurusan.id/?_rdc=1&_rdr"><li><i class="bi-facebook hover:text-secondary-500 px-2"></i></li></a>
                <a href="https://www.tiktok.com/@pilihjurusan.id/?"><li><i class="bi-tiktok hover:text-secondary-500 px-2"></i></li></a>
                <a href="https://www.instagram.com/pilihjurusan.id/"><li><i class="bi-instagram hover:text-secondary-500 px-2 "></i></li></a>
                <a href="https://twitter.com/pilihjurusan_id"><li><i class="bi-twitter hover:text-secondary-500 px-2"></i></li></a>
                <a href="https://www.youtube.com/channel/UCCYChKuM_xasaGUR874GTfg?themeRefresh=1"><li><i class="bi-youtube hover:text-secondary-500 px-2"></i></li></a>
                <a href="https://www.linkedin.com/company/pilihjurusan/"><li><i class="bi-linkedin hover:text-secondary-500 px-2"></i></li></a>
              </ul>
            </div>
          </div>
          <div class="w-full border-t mt-14 text-base-200 text-sm font-display">
            <p class="mt-2">© 2020 - 2022 Pilihjurusan | Merek dagang dari PT. Pilihanmu Indonesia Jaya</p>
          </div>
        </div>
      </footer>
    </section>
  </x-layouts.base>