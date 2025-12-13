<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIAKAD - Sistem Informasi Akademik</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-slate-600 bg-white">
        
        <nav class="w-full fixed top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-100 transition-all duration-300">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="flex items-center justify-between h-20">
                    <div class="flex-shrink-0 flex items-center gap-3">
                            <img class ="w-10 h-10"src="{{ asset("image/UTM.png") }}" alt="">
                        <span class="font-bold text-xl tracking-tight text-slate-800">SIAKAD<span class="text-indigo-600">.</span></span>
                    </div>

                    @if (Route::has('login'))
                        <div class="flex items-center gap-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="hidden sm:block text-sm font-medium text-slate-600 hover:text-indigo-600 transition px-4 py-2">
                                    Masuk
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="inline-flex justify-center items-center py-2.5 px-5 text-sm font-semibold text-white rounded-lg bg-slate-900 hover:bg-slate-800 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 transition-all shadow-md hover:shadow-lg">
                                        Daftar Sekarang
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </nav>

        <main class="relative pt-32 pb-16 lg:pt-48 lg:pb-32 overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 text-center">
                

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold tracking-tight text-slate-900 mb-6 leading-tight">
                    Sistem Informasi Akademik <br class="hidden md:block" />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-violet-600">Universitas Trunojoyo</span>
                </h1>

                <p class="mt-4 text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed mb-10">
                    Platform digital modern untuk mempermudah manajemen akademik kampus. Terintegrasi, aman, dan mudah digunakan oleh mahasiswa maupun dosen.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/30 ring-1 ring-indigo-600">
                            Akses Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-indigo-600 text-white font-semibold hover:bg-indigo-700 transition shadow-lg shadow-indigo-500/30 ring-1 ring-indigo-600">
                            Mulai Sekarang
                        </a>
                        <a href="#fitur" class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-white text-slate-700 font-semibold border border-slate-200 hover:bg-slate-50 hover:border-slate-300 transition shadow-sm">
                            Pelajari Lebih Lanjut
                        </a>
                    @endauth
                </div>

                <div id="fitur" class="mt-20 pt-10 border-t border-slate-100 grid grid-cols-1 md:grid-cols-3 gap-10 text-left">
                    <div class="group p-4 rounded-2xl hover:bg-slate-50 transition duration-300">
                        <div class="w-12 h-12 rounded-lg bg-blue-50 text-blue-600 flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 text-lg">Kurikulum Terupdate</h3>
                        <p class="text-sm text-slate-500 mt-2">Manajemen mata kuliah dan kurikulum yang fleksibel sesuai standar pendidikan.</p>
                    </div>

                    <div class="group p-4 rounded-2xl hover:bg-slate-50 transition duration-300">
                        <div class="w-12 h-12 rounded-lg bg-purple-50 text-purple-600 flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 text-lg">Statistik Real-time</h3>
                        <p class="text-sm text-slate-500 mt-2">Pantau perkembangan akademik mahasiswa melalui grafik yang mudah dipahami.</p>
                    </div>

                    <div class="group p-4 rounded-2xl hover:bg-slate-50 transition duration-300">
                        <div class="w-12 h-12 rounded-lg bg-green-50 text-green-600 flex items-center justify-center mb-4 group-hover:scale-110 transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        </div>
                        <h3 class="font-bold text-slate-900 text-lg">Keamanan Data</h3>
                        <p class="text-sm text-slate-500 mt-2">Data akademik tersimpan dengan aman menggunakan enkripsi berstandar industri.</p>
                    </div>
                </div>

            </div>
            
            <div class="absolute top-0 left-1/2 -translate-x-1/2 -z-10 w-[1000px] h-[500px] bg-indigo-50 rounded-[100%] blur-3xl opacity-50 pointer-events-none"></div>
        </main>

        <footer class="bg-white border-t border-slate-100 py-8">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-slate-400 text-sm">
                    &copy; {{ date('Y') }} SIAKAD. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm font-medium text-slate-500">
                    <a href="#" class="hover:text-indigo-600 transition">Privacy</a>
                    <a href="#" class="hover:text-indigo-600 transition">Terms</a>
                    <a href="#" class="hover:text-indigo-600 transition">Contact</a>
                </div>
            </div>
        </footer>
    </body>
</html>