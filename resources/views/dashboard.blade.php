<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-2xl mb-8 border border-gray-100">
                <div class="p-8 text-gray-900 flex flex-col md:flex-row justify-between items-center gap-4">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">Halo, {{ Auth::user()->name }}! 👋</h3>
                        <p class="text-gray-500 mt-1">Sistem siap digunakan. Berikut adalah ringkasan data akademik Anda.</p>
                    </div>
                    <div>
                        <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-indigo-50 text-indigo-700 border border-indigo-100 shadow-sm">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ now()->translatedFormat('l, d F Y') }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-xl bg-indigo-100 text-indigo-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <span class="px-2 py-1 text-xs font-bold text-indigo-600 bg-indigo-50 rounded-lg">
                                MAHASISWA
                            </span>
                        </div>
                        <div class="flex items-baseline gap-2">
                            <h4 class="text-4xl font-black text-gray-900">{{ $total_mahasiswa }}</h4>
                            <span class="text-sm text-gray-400">Orang</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Total mahasiswa aktif terdaftar.</p>
                        <div class="mt-6 pt-4 border-t border-gray-50">
                            <a href="{{ route('mahasiswa.index') }}" class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 flex items-center group">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-xl bg-emerald-100 text-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <span class="px-2 py-1 text-xs font-bold text-emerald-600 bg-emerald-50 rounded-lg">
                                KELAS
                            </span>
                        </div>
                        <div class="flex items-baseline gap-2">
                            <h4 class="text-4xl font-black text-gray-900">{{ $total_kelas }}</h4>
                            <span class="text-sm text-gray-400">Ruangan</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Kelas yang tersedia saat ini.</p>
                        <div class="mt-6 pt-4 border-t border-gray-50">
                            <a href="{{ route('kelas.index') }}" class="text-sm font-semibold text-emerald-600 hover:text-emerald-800 flex items-center group">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-xl sm:rounded-2xl border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="p-3 rounded-xl bg-orange-100 text-orange-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="px-2 py-1 text-xs font-bold text-orange-600 bg-orange-50 rounded-lg">
                                MATA KULIAH
                            </span>
                        </div>
                        <div class="flex items-baseline gap-2">
                            <h4 class="text-4xl font-black text-gray-900">{{ $total_matakuliah }}</h4>
                            <span class="text-sm text-gray-400">Mapel</span>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Kurikulum yang diajarkan.</p>
                        <div class="mt-6 pt-4 border-t border-gray-50">
                            <a href="{{ route('matakuliah.index') }}" class="text-sm font-semibold text-orange-600 hover:text-orange-800 flex items-center group">
                                Lihat Detail
                                <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
                 <div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 to-purple-700 rounded-2xl shadow-xl p-8 text-white">
                    <div class="relative z-10">
                        <h3 class="text-2xl font-bold mb-2">Input Data Baru?</h3>
                        <p class="text-indigo-100 mb-6 max-w-sm">Tambahkan data mahasiswa, kelas, atau mata kuliah baru ke dalam sistem dengan cepat.</p>
                        <div class="flex flex-wrap gap-3">
                            <a href="{{ route('mahasiswa.create') }}" class="px-4 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/50 rounded-lg text-sm font-semibold transition">
                                + Mahasiswa
                            </a>
                            <a href="{{ route('kelas.create') }}" class="px-4 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/50 rounded-lg text-sm font-semibold transition">
                                + Kelas
                            </a>
                            <a href="{{ route('matakuliah.create') }}" class="px-4 py-2 bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/50 rounded-lg text-sm font-semibold transition">
                                + Mata Kuliah
                            </a>
                        </div>
                    </div>
                    <div class="absolute top-0 right-0 -mr-16 -mt-16 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 -ml-16 -mb-16 w-40 h-40 bg-purple-500/30 rounded-full blur-2xl"></div>
                 </div>

                 <div class="relative overflow-hidden bg-white border border-gray-200 rounded-2xl shadow-sm p-8 flex flex-col justify-center">
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Informasi Sistem</h3>
                    <ul class="space-y-3 mt-2">
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="w-2 h-2 rounded-full bg-green-500 mr-3"></span>
                            Status Database: <span class="font-semibold text-gray-800 ml-1">Terhubung</span>
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="w-2 h-2 rounded-full bg-blue-500 mr-3"></span>
                            Versi Aplikasi: <span class="font-semibold text-gray-800 ml-1">v2.1.0</span>
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <span class="w-2 h-2 rounded-full bg-gray-400 mr-3"></span>
                            Terakhir Login: <span class="font-semibold text-gray-800 ml-1">{{ Auth::user()->updated_at->diffForHumans() }}</span>
                        </li>
                    </ul>
                 </div>
            </div>

        </div>
    </div>
</x-app-layout>