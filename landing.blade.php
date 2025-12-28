<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    {{-- Vite --}}
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">
                WebsiteSandi
            </h1>
            <nav class="space-x-6 hidden md:block">
                <a href="#home" class="hover:text-indigo-600">Home</a>
                <a href="#features" class="hover:text-indigo-600">Fitur</a>
                <a href="#about" class="hover:text-indigo-600">Tentang</a>
                <a href="#contact" class="hover:text-indigo-600">Kontak</a>
            </nav>
        </div>
    </header>

    {{-- Hero Section --}}
    <section id="home" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-6 py-24 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6">
                Bangun Website Profesional
            </h2>
            <p class="text-lg md:text-xl mb-8 max-w-2xl mx-auto">
                Solusi landing page modern, cepat, dan responsif untuk kebutuhan bisnis dan akademik Anda.
            </p>
            <a href="#contact"
               class="inline-block bg-white text-indigo-600 font-semibold px-8 py-3 rounded-full shadow hover:bg-gray-100 transition">
                Mulai Sekarang
            </a>
        </div>
    </section>

    {{-- Features --}}
    <section id="features" class="py-20">
        <div class="max-w-7xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12">
                Fitur Unggulan
            </h3>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-3 text-indigo-600">
                        Cepat & Ringan
                    </h4>
                    <p>
                        Dibangun dengan Laravel dan Vite untuk performa optimal.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-3 text-indigo-600">
                        Responsif
                    </h4>
                    <p>
                        Tampilan menyesuaikan di semua ukuran layar.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-3 text-indigo-600">
                        Mudah Dikustom
                    </h4>
                    <p>
                        Struktur rapi dan mudah dikembangkan sesuai kebutuhan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="about" class="bg-gray-100 py-20">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-6">
                Tentang Kami
            </h3>
            <p class="text-lg">
                Kami membantu individu dan organisasi membangun website modern
                menggunakan teknologi terbaru agar tampil profesional dan terpercaya.
            </p>
        </div>
    </section>

    {{-- Call To Action --}}
    <section id="contact" class="py-20">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold mb-6">
                Siap Memulai?
            </h3>
            <p class="mb-8">
                Hubungi kami sekarang dan wujudkan website impian Anda.
            </p>
            <a href="#"
               class="bg-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-indigo-700 transition">
                Hubungi Kami
            </a>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-gray-300 py-6">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>
                &copy; {{ date('Y') }} WebsiteSandi. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>
