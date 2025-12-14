<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Kelas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('kelas.update', $kelas->id) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="kode_kelas" :value="__('Kode Kelas')" />
                            <x-text-input id="kode_kelas" class="block mt-1 w-full" type="text" name="kode_kelas" :value="old('kode_kelas', $kelas->kode_kelas)" required />
                            <x-input-error :messages="$errors->get('kode_kelas')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="nama_kelas" :value="__('Nama Kelas')" />
                            <x-text-input id="nama_kelas" class="block mt-1 w-full" type="text" name="nama_kelas" :value="old('nama_kelas', $kelas->nama_kelas)" required />
                            <x-input-error :messages="$errors->get('nama_kelas')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="kapasitas" :value="__('Kapasitas Mahasiswa')" />
                            <x-text-input id="kapasitas" class="block mt-1 w-full" type="number" name="kapasitas" :value="old('kapasitas', $kelas->kapasitas)" required />
                            <x-input-error :messages="$errors->get('kapasitas')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('kelas.index') }}" class="text-gray-600 hover:text-gray-900 text-sm">Batal</a>
                            <x-primary-button class="bg-emerald-600 hover:bg-emerald-700">
                                {{ __('Perbarui Kelas') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>