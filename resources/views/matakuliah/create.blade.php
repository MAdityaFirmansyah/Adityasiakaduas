<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Mata Kuliah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('matakuliah.store') }}" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="kode_mk" :value="__('Kode Mata Kuliah')" />
                            <x-text-input id="kode_mk" class="block mt-1 w-full" type="text" name="kode_mk" :value="old('kode_mk')" required autofocus placeholder="Contoh: MK-001" />
                            <x-input-error :messages="$errors->get('kode_mk')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="nama_mk" :value="__('Nama Mata Kuliah')" />
                            <x-text-input id="nama_mk" class="block mt-1 w-full" type="text" name="nama_mk" :value="old('nama_mk')" required placeholder="Contoh: Algoritma & Pemrograman" />
                            <x-input-error :messages="$errors->get('nama_mk')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="sks" :value="__('SKS (Satuan Kredit Semester)')" />
                            <x-text-input id="sks" class="block mt-1 w-full" type="number" name="sks" :value="old('sks')" required min="1" max="6" />
                            <x-input-error :messages="$errors->get('sks')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="semester" :value="__('Semester')" />
                            <x-text-input id="semester" class="block mt-1 w-full" type="number" name="semester" :value="old('semester')" required min="1" max="8" />
                            <x-input-error :messages="$errors->get('semester')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('matakuliah.index') }}" class="text-gray-600 hover:text-gray-900 text-sm">Batal</a>
                            <x-primary-button class="bg-indigo-600 hover:bg-indigo-700">
                                {{ __('Simpan Data') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>