<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayam Tobat</title>
    <link rel="shortcut icon" href="{{ asset('img/logo_aya_tobat_2-removebg-preview.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="img/pngtree-letter-h-logo-png-image_4000899-removebg-preview.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'primary-purple': 'rebeccapurple',
              'secondary-indigo': 'indigo',
            },
          }
        }
      }
    </script>
    
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body id="beranda" class="scroll-smooth font-['Poppins']">
    
    <div class="navbar py-5">
        <div class="container mx-auto w-4/5 lg:w-4/5 md:w-[90%] px-4">
            <div class="navbar-box flex justify-between items-center">
                <div class="logo flex items-center gap-2">
                    <img src="{{ asset('img/logo_aya_tobat_2-removebg-preview.png') }}" alt="Logo Ayam Tobat" class="w-10 h-auto">
                    <h1 class="text-xl font-semibold">Ayam Tobat</h1>
                </div>
                
                <ul id="menu" class="menu hidden md:flex gap-10">
                    <li><a href="#beranda" class="text-black text-lg hover:border-b-3 hover:border-primary-purple transition-all pb-1">Beranda</a></li>
                    <li><a href="#layanan" class="text-black text-lg hover:border-b-3 hover:border-primary-purple transition-all pb-1">Layanan</a></li>
                    <li><a href="#lokasi" class="text-black text-lg hover:border-b-3 hover:border-primary-purple transition-all pb-1">Lokasi</a></li>
                    <li><a href="#produk" class="text-black text-lg hover:border-b-3 hover:border-primary-purple transition-all pb-1">Produk</a></li>
                    <li><a href="#kontak" class="text-black text-lg hover:border-b-3 hover:border-primary-purple transition-all pb-1">Kontak</a></li>
                </ul>
                
                <i id="hamburger" class="ri-menu-3-line text-2xl font-bold md:hidden cursor-pointer"></i>

                <ul id="menu-mobile-overlay" class="menu absolute top-[-100%] left-1/2 -translate-x-1/2 flex flex-col text-center bg-primary-purple w-full py-10 transition-all duration-200 ease-in-out opacity-0 md:hidden">
                    <li><a href="#beranda" class="text-white text-xl underline py-2 block">Beranda</a></li>
                    <li><a href="#layanan" class="text-white text-xl underline py-2 block">Layanan</a></li>
                    <li><a href="#produk" class="text-white text-xl underline py-2 block">Produk</a></li>
                    <li><a href="#kontak" class="text-white text-xl underline py-2 block">Kontak</a></li>
                </ul>

            </div>
        </div>
    </div>
    
    <div class="hero py-20 bg-gray-50">
        <div class="container mx-auto w-4/5 lg:w-4/5 md:w-[90%] px-4">
            <div class="hero-box grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                
                <div class="hero-text md:text-left text-center" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="text-4xl lg:text-5xl text-gray-800 mb-5 font-bold">Ayam Tobat <br>Gegerkalong</h1>
                    <p class="text-lg text-gray-600 mb-8">
                        Berlokasi di Gegerkalong, Ayam Tobat hadir sebagai surga bagi pecinta ayam geprek dengan cita rasa juara. Ayamnya renyah di luar, juicy di dalam, digeprek langsung dan disiram dengan berbagai pilihan saus spesial yang menggoda selera. Mulai dari saus sambal pedas nampol, keju creamy, BBQ manis gurih, hingga saus pilihan lainnya—semua bisa kamu sesuaikan dengan level pedas favoritmu!
Dengan harga ramah di kantong dan porsi yang memuaskan, Ayam Tobat cocok buat makan siang, makan malam, atau sekadar ngidam pedas bareng teman. Sekali coba, dijamin susah move on.
Ayo mampir ke Ayam Tobat Gegerkalong—bertobatlah dari lapar! 😋🔥
                    <a href="#produk" class="btn inline-block bg-primary-purple text-white py-3 px-6 rounded-lg text-lg font-medium transition-colors duration-300 hover:bg-secondary-indigo">Detail Produk</a>
                </div>

                <div class="hero-img" data-aos="fade-down" data-aos-duration="1000">
                    <img src="{{ asset('img/halutama.jpeg') }}" alt="ayam tobat" class="w-full rounded-xl shadow-xl">
                </div>
            </div>
        </div>
    </div>

    <div class="Layanan py-24 lg:py-36" id="layanan">
        <div class="container mx-auto w-4/5 lg:w-4/5 md:w-[90%] px-4">
            <div class="layanan-box grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="box bg-white p-5 rounded-xl shadow-lg transition-all duration-300 hover:bg-primary-purple group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <i class="ri-star-fill text-2xl text-primary-purple group-hover:text-white"></i>
                    <h2 class="mt-5 mb-1 text-xl font-semibold group-hover:text-white">Produk Original</h2>
                    <p class="text-gray-600 group-hover:text-white">Produk yang dijual di Ayam Tobat adala ayam original 100% dengan kualitas terjamin. Setiap ayam kami didatangkan langsung dari distributor resmi dan telah melalui proses pengecekan untuk memastikan keaslian serta mutu terbaik.</p>
                </div>
                
                <div class="box bg-white p-5 rounded-xl shadow-lg transition-all duration-300 hover:bg-primary-purple group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <i class="ri-price-tag-fill text-2xl text-primary-purple group-hover:text-white"></i>
                    <h2 class="mt-5 mb-1 text-xl font-semibold group-hover:text-white">Harga Terjangkau</h2>
                    <p class="text-gray-600 group-hover:text-white">Dengan harga yang terjangkau untuk semua kalangan. Kami percaya bahwa produk berkualitas tidak harus mahal. Setiap barang yang kami jual berasal dari distributor resmi, sehingga keaslian dan mutunya terjamin.</p>
                </div>  
                
                <div class="box bg-white p-5 rounded-xl shadow-lg transition-all duration-300 hover:bg-primary-purple group" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <i class="ri-shopping-cart-fill text-2xl text-primary-purple group-hover:text-white"></i>
                    <h2 class="mt-5 mb-1 text-xl font-semibold group-hover:text-white">Terjual 10.000+</h2>
                    <p class="text-gray-600 group-hover:text-white">Sudah lebih dari 10.000 pelanggan puas memilih produk kami karena keaslian dan mutu yang selalu terjaga.</p>
                </div>
            </div>
        </div>
    </div>
      
    <div class="flex flex-col items-center justify-center"id="lokasi">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Lokasi gerai Kami</h1>
            <p class="text-gray-600 mt-2">Silakan kunjungi kami pada jam operasional.</p>
        </div>
    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2289370785634!2d107.58595497367111!3d-6.863144393135407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7f397f9e8f3%3A0xf4616908c3fead81!2sAyam%20tobat!5e0!3m2!1sid!2sid!4v1766509747400!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    </div>

    <div class="py-24 lg:py-36 bg-gray-50" id="produk">
        <div class="container mx-auto w-4/5 lg:w-4/5 md:w-[90%] px-4">
            <h2 class="text-3xl lg:text-4xl font-bold text-center mb-16" data-aos="fade-up" data-aos-duration="1000">Katalog Produk Toko</h2>

            <div class="produk-box">
                
                <ul class="flex justify-center gap-5 mb-12 flex-wrap" id="filter-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    
                    <li class="active bg-primary-purple text-white p-3 rounded-md cursor-pointer text-sm font-medium transition-colors duration-200" data-filter="all produk">All Produk</li>
                    
                    @php
                        $categories = ['ayam', 'saos', 'minuman'];
                    @endphp

                    @foreach ($categories as $category)
                        <li class="bg-white text-gray-800 p-3 rounded-md cursor-pointer text-sm font-medium transition-colors duration-200 hover:bg-gray-100" data-filter="{{ $category }}">
                            {{ ucfirst($category) }}
                        </li>
                    @endforeach
                </ul>

                <div class="produk-list flex flex-wrap justify-center gap-6">
                    @foreach ($menus as $menu)
                    
                    <div class="menu-item w-60 h-auto bg-white p-3 rounded-lg shadow-md cursor-pointer transition-all duration-200 ease-in-out hover:bg-primary-purple hover:scale-105 group" data-filter="{{ $menu->kategori }}">
                        
                        {{-- Logika Menampilkan Gambar Produk (sudah benar) --}}
                        @if ($menu->gambar)
                            <img src="{{ Storage::url('public/menus/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-40 object-cover rounded mb-3">
                            {{-- BARIS DIBAWAH INI ADALAH KESALAHAN DAN SUDAH DIHAPUS: --}}
                            {{-- <form method="POST" action="[URL_POST_DATA]" enctype="multipart/form-data"> </form> --}}
                            {{-- <input type="file" name="gambar_produk"> --}}
                        @else
                            <img src="https://via.placeholder.com/250x200?text=No+Image" alt="Placeholder" class="w-full h-40 object-cover rounded mb-3">
                        @endif
                        
                        <div class="p-2">
                            <h4 class="font-semibold text-lg text-gray-800 group-hover:text-white">{{ $menu->nama }}</h4>
                            <p class="text-sm text-gray-600 group-hover:text-gray-200">{{ Str::limit($menu->deskripsi, 50) }}</p>
                            <span class="block mt-2 text-xl font-bold text-primary-purple group-hover:text-white">
                                Rp {{ number_format($menu->harga, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="footer bg-white py-6 px-4" id="kontak">
        <div class="container mx-auto w-4/5 lg:w-4/5 md:w-[90%] flex justify-between items-center flex-wrap gap-5">
            
            <div class="box">
                <p class="text-sm md:text-base">&copy; copyright 2025 by <span class="font-bold text-primary-purple">hanip</span>. All Rights Reserved</p>
            </div>
            
            <div class="box flex items-center gap-4">
                <a href="https://wa.me/6285747479426" target="_blank" aria-label="WhatsApp">
                    <i class="ri-whatsapp-fill text-2xl cursor-pointer transition-colors duration-200 hover:text-primary-purple"></i>
                </a>
                <a href="https://www.instagram.com/ayamt_obat/?utm_source=ig_web_button_share_sheet" target="_blank" aria-label="Instagram">
                    <i class="ri-instagram-fill text-2xl cursor-pointer transition-colors duration-200 hover:text-primary-purple"></i>
                </a>
            </div>
            
        </div>
    </div>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        
        // Logika Mobile Menu
        const menuMobileOverlay = document.getElementById('menu-mobile-overlay');
        const hamburger = document.getElementById('hamburger');
        
        hamburger.addEventListener("click", () => {
            menuMobileOverlay.classList.toggle("top-[100px]"); 
            menuMobileOverlay.classList.toggle("opacity-100");
            menuMobileOverlay.classList.toggle("opacity-0");
        });
        
        window.addEventListener("scroll", () => {
            menuMobileOverlay.classList.remove("top-[100px]", "opacity-100");
            menuMobileOverlay.classList.add("opacity-0");
        });

        // === LOGIKA FILTER PRODUK AYAM, SAOS, MINUMAN ===
        const btnfilter = document.querySelectorAll("#filter-list li"); 
        const itemfilter = document.querySelectorAll(".menu-item");

        btnfilter.forEach((data) => {
            data.addEventListener("click", () => {
                
                const btntext = data.getAttribute("data-filter");

                // 1. Mengelola Class Active (Styling)
                btnfilter.forEach((btn) => {
                    btn.classList.remove("bg-primary-purple", "text-white");
                    btn.classList.add("bg-white", "text-gray-800", "hover:bg-gray-100");
                });

                data.classList.add("bg-primary-purple", "text-white");
                data.classList.remove("bg-white", "text-gray-800", "hover:bg-gray-100");


                // 2. Filter Item Produk
                itemfilter.forEach((item) => {
                    const kategori = item.getAttribute("data-filter"); 
                    
                    if (btntext === "all produk" || kategori === btntext) {
                        item.style.display = "block";
                    } else {
                        item.style.display = "none";
                    }
                });
            });
        });
        
    </script>
</body>
</html>