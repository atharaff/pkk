@extends('navbar')
@section('nav')


    <!-- Gambar -->
    <div class="image-container">
        <img src="{{asset('foto/jaw.png')}}" alt="Gambar 1" class="moving-image" id="image1">
    </div>

    <!-- Menu -->
    <div class="menu-container">
        <ul class="menu-list">
            <li><a href="/produk">Produk</a></li>
            <!-- Menambahkan link anchor ke bagian Cards -->
            <li><a href="#promo">Promo</a></li> <!-- Klik Promo akan scroll ke bagian promo -->
        </ul>
    </div>

    <!-- moto dan Gambar Saran -->
    <div class="footer-paragraph">
        <p>elamat datang di (Rosan) Nusantara! Nikmati pengalaman kuliner yang menggugah selera, di mana setiap hidangan
            disiapkan dengan penuh cita rasa dan kualitas terbaik. Temukan berbagai pilihan makanan lezat yang siap
            memanjakan lidah Anda!"</p><hr><br>
        <!--  REKOMENDASI 1-->
        <div class="suggestion-container">
            <div class="suggestion-image">
                <img src="{{asset('foto/canai.jfif')}}" alt="Gambar Saran" class="suggestion-img">
            </div>
            <div class="suggestion-text">
                <h3>Rekomendasi untuk kalian nih</h3>
                <p>"Menyediakan variasi menu yang lebih beragam, seperti roti canai dengan berbagai jenis isi atau
                    topping yang unik, akan membuat Soti Canai berbeda dari pesaing. Misalnya, roti canai dengan isi
                    ayam pedas, daging kambing, atau pilihan vegetarian."</p><hr>
            </div>
            <!--  REKOMENDASI 2-->
            <div class="recommendation-container">
                <div class="recommendation-text">
                    <h3>Rekomendasi untuk kalian nih</h3>
                    <p>"Croissant kami dibuat dengan bahan-bahan berkualitas tinggi dan dipanggang dengan sempurna,
                        memberikan sensasi rasa yang mewah di setiap gigitan. Cobalah croissant klasik dengan isian
                        coklat, almond, atau pilihan favorit lainnya!"</p><hr>
                </div>
                <div class="recommendation-image">
                    <img src="{{asset('foto/croisan.jpg')}}" alt="Gambar Saran" class="image">
                </div>
            </div>

        </div>
    </div>

    <!-- Cards -->
    <div class="card-container" id="promo">
        <p class="prm"><b>promo</b></p>
        <div class="card">
            <img src="{{asset('foto/promo canai.png')}}" alt="Gambar 1" class="card-img">
            <div class="card-content">

            </div>
        </div>
        <div class="card">
            <img src="{{asset('foto/tortilla beff.png')}}" alt="Gambar 2" class="card-img">
            <div class="card-content">

            </div>
        </div>
        <div class="card">
            <img src="{{asset('foto/minuman.png')}}" alt="Gambar 3" class="card-img">
            <div class="card-content">

            </div>
        </div>

        <!-- 3 Kartu Tambahan -->
        <div class="card">
            <img src="{{asset('foto/croos.png')}}" alt="Gambar 4" class="card-img">
            <div class="card-content">
                <!-- Konten untuk Kartu 4 -->
            </div>
        </div>
        <div class="card">
            <img src="{{asset('foto/croissanprm.png')}}" alt="Gambar 5" class="card-img">
            <div class="card-content">
                <!-- Konten untuk Kartu 5 -->
            </div>
        </div>
        
    </div>

    <!-- Footer -->
    <div class="footer" id="kontak">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 ">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="sm:col-span-2">
                    <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
                        <svg class="w-8 text-deep-purple-accent-400" viewBox="0 0 24 24" stroke-linejoin="round"
                            stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke="currentColor"
                            fill="none">
                            <rect x="3" y="1" width="7" height="12"></rect>
                            <rect x="3" y="17" width="7" height="6"></rect>
                            <rect x="14" y="1" width="7" height="6"></rect>
                            <rect x="14" y="11" width="7" height="12"></rect>
                        </svg>
                        <span class="ml-2 text-xl font-bold tracking-wide text-white-800 uppercase">Nusantara</span>
                    </a>
                    <div class="mt-6 lg:max-w-sm">
                        <p class="mt-4 text-sm text-white-800">
                            Rosan adalah perusahaan yang memproduksi banyak macam roti.
                        </p>
                    </div>
                </div>
                <div class="space-y-2 text-sm">
                    <p class="text-base font-bold tracking-wide text-white-900">Contacts</p>
                    <div class="flex">
                        <p class="mr-1 text-white-800">Phone:</p>
                        <a href="#" aria-label="Our phone" title="Our phone"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">0851-5854-8344</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-white-800">Email:</p>
                        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">atharaffdidan@gmail.com</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-white-800">Address:</p>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                            aria-label="Our address" title="Our address"
                            class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
                            Jatim, Pasuruan-prigen, tretes
                        </a>
                    </div>
                </div>
                <div>
                    <span class="text-base font-bold tracking-wide text-white-900">Social</span>
                    <div class="flex items-center mt-1 space-x-3">
                        <a href="/" class="0">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z">
                                </path>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/laudzathf_/profilecard/?igsh=YXY3ZTI4encwdDE4"
                            class="text-white-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
                                <circle cx="15" cy="15" r="4"></circle>
                                <path
                                    d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z">
                                </path>
                            </svg>
                        </a>
                        <a href="/"
                            class="text-white-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
                                <path
                                    d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z">
                                </path>
                            </svg>
                        </a>
                        <a href="https://github.com/atharaff"><i class="bi bi-github"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-white-600">
                    © Copyright 2024 RotiNusantara. All rights reserved.
                </p>
                <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                    <li>
                        <a href="/"
                            class="text-sm text-white-600 transition-colors duration-300 hover:text-deep-purple-accent-400">F.A.Q</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-white-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-white-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Terms
                            &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scroll to Top -->
    <i class="bi bi-arrow-up-circle-fill scroll-to-top" id="scrollTopBtn"></i>

    <script>
        // Tombol scroll ke atas
        const scrollTopBtn = document.getElementById('scrollTopBtn');
        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                scrollTopBtn.style.display = 'block';
            } else {
                scrollTopBtn.style.display = 'none';
            }
        });

        // Tombol menu responsif
        const menuToggle = document.getElementById('menuToggle');
        const dropdownMenu = document.getElementById('dropdownMenu');

        menuToggle.addEventListener('click', function () {
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });
    </script>
 @endsection