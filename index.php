<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB Online - Selamat Datang Calon Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans leading-normal tracking-normal">

    <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src="assest/img/logo-sekolah.png" alt="Logo Sekolah" class="h-12 w-auto mr-3">
            
            <div class="flex flex-col">
                <span class="font-bold text-xl text-gray-800 leading-none tracking-tight">
                    SMK TADIKA PERTIWI
                </span>
                <span class="text-xs text-blue-600 font-semibold tracking-widest mt-1">
                    PPDB ONLINE 2026
                </span>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-8">
            <a href="index.php" class="text-gray-600 hover:text-blue-600 font-medium flex items-center transition">
                <i class="fas fa-home mr-2"></i> Beranda
            </a>
            <a href="cek-status.php" class="text-gray-600 hover:text-blue-600 font-medium flex items-center transition">
                <i class="fas fa-search mr-2"></i> Cek Status
            </a>
            <a href="edit.php" class="text-gray-600 hover:text-blue-600 font-medium flex items-center transition">
                <i class="fas fa-edit mr-2"></i> Edit Data
            </a>

            <a href="#alur" class="text-gray-600 hover:text-blue-600 font-medium transition">Alur</a>
            <a href="#kontak" class="text-gray-600 hover:text-blue-600 font-medium transition">Bantuan</a>
            
            <a href="login.php" class="flex items-center bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition border border-gray-200">
                <i class="fas fa-lock text-blue-600 md:mr-2"></i>
                <span class="hidden md:inline font-medium">Login Admin</span>
            </a>
        </div>
    </div>
</nav>




    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 py-20 px-6">
        <div class="container mx-auto text-center text-white">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Masa Depanmu Dimulai di Sini</h1>
            <p class="text-lg md:text-xl mb-10 text-blue-100 max-w-2xl mx-auto">Pendaftaran Peserta Didik Baru (PPDB) Tahun Ajaran 2026/2027 telah dibuka secara online. Mari bergabung bersama kami.</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="formdaftar.php" class="bg-yellow-400 text-yellow-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-yellow-300 transition-all transform hover:scale-105">
                    <i class="fas fa-edit mr-2"></i> Isi Formulir Pendaftaran
                </a>
                <a href="#alur" class="bg-white/20 backdrop-blur-md text-white border border-white/30 px-8 py-4 rounded-full font-bold text-lg hover:bg-white/30 transition">
                    Lihat Panduan
                </a>
            </div>
        </div>
    </section>

    <section id="alur" class="py-20 px-6">
        <div class="container mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800">Alur Pendaftaran Online</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto mt-4"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center">
                    <div class="bg-blue-100 text-blue-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">1</div>
                    <h3 class="font-bold text-gray-800 mb-2">Daftar</h3>
                    <p class="text-gray-500 text-sm">Klik tombol daftar dan isi data diri dengan lengkap.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center">
                    <div class="bg-blue-100 text-blue-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">2</div>
                    <h3 class="font-bold text-gray-800 mb-2">Verifikasi</h3>
                    <p class="text-gray-500 text-sm">Tim admin akan memverifikasi berkas yang Anda unggah.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center">
                    <div class="bg-blue-100 text-blue-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">3</div>
                    <h3 class="font-bold text-gray-800 mb-2">Seleksi</h3>
                    <p class="text-gray-500 text-sm">Pengumuman hasil seleksi dilakukan secara online.</p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 text-center">
                    <div class="bg-blue-100 text-blue-600 w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-xl">4</div>
                    <h3 class="font-bold text-gray-800 mb-2">Daftar Ulang</h3>
                    <p class="text-gray-500 text-sm">Lengkapi administrasi jika dinyatakan diterima.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="bg-gray-800 py-16 px-6 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Ada Pertanyaan?</h2>
            <p class="text-gray-400 mb-8">Hubungi kami melalui WhatsApp atau Email jika mengalami kesulitan pendaftaran.</p>
            <div class="flex justify-center gap-6 text-2xl">
                <a href="#" class="hover:text-green-400"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="hover:text-blue-400"><i class="fas fa-envelope"></i></a>
                <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </section>

    <footer class="bg-gray-900 py-8 text-center text-gray-500 text-sm border-t border-gray-800">
        <p>&copy; 2026 PPDB Online System. Hak Cipta Dilindungi.</p>
    </footer>

</body>
</html>
