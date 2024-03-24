<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>
<div class="py-12 px-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:border-strokedark sm:px-7.5 xl:pb-1">
        @if (session()->has('error'))
            <div class="bg-red-500 text-black px-4 py-2">
                {{session('error')}}
            </div>
        @endif
        <div>
            <h1 class="mb-8 text-center text-3xl font-bold dark:text-white">Tambah Mahasiswa</h1>
            <form action="" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div>
                        <!-- Contoh pengaturan lebar tetap untuk nama mahasiswa -->
                        <label for="nama_mahasiswa" class="text-md font-bold dark:text-white">Nama Mahasiswa</label>
                        <input type="text" name="nama_mahasiswa" class="block w-full border px-2 py-2 text-md rounded-md my-2" id="nama_mahasiswa">
                        @error('nama_mahasiswa')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="nomor_telepon" class="text-md font-bold dark:text-white">Nomor Telepon</label>
                        <input type="text" name="nomor_telepon" class="block w-full border px-2 py-2 text-md rounded-md my-2" id="nomor_telepon">
                        @error('nomor_telepon')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                </div> 
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div>
                        <label for="" class="text-md font-bold dark:text-white">Email Mahasiswa</label>
                        <input type="email" name="email_mahasiswa" class="block w-full border px-2 py-2 text-md rounded-md my-2" id="">
                        @error('email_mahasiswa')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="" class="text-md font-bold dark:text-white">
                            <span class="label-text">Jenis Kelamin</span>
                        </label>
                        <select class="block w-full border px-2 py-2 text-md rounded-md my-2" name="jenis_kelamin" id="">
                            <option disabled="disabled" selected>Pilih Jenis Kelamin</option> 
                            <option value="Laki-Laki" {{ (old('jenis_kelamin') == "Laki-Laki") ? 'selected' : ""}}> Laki-Laki</option>
                            <option value="Perempuan" {{ (old('jenis_kelamin') == "Perempuan") ? "selected" : ""}}> Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                  </div>   
                  <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                    <div>
                        <label for="" class="text-md font-bold dark:text-white">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="block w-full border px-2 py-2 text-md rounded-md my-2" id="">
                        @error('tempat_lahir')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="" class="text-md font-bold dark:text-white">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="block w-full border px-2 py-2 text-md rounded-md my-2" id="">
                        @error('tanggal_lahir')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                  </div>            
                <div class="mb-8">
                    <label for="" class="text-md font-bold dark:text-white">Alamat Mahasiswa</label>
                    <input type="text" name="alamat_mahasiswa" class="block w-full border px-2 py-2 text-md rounded-md my-2" id="">
                    @error('alamat_mahasiswa')
                    <span class="text-red-500">{{$message}}</span>
                    @enderror
                </div>
                <button style="background-color: #1b1464" class="w-full px-5 py-3 bg-emerald-500 rounded-md text-white text-lg shadow-md">Save</button>
            </form>
        </div>
    </div>
</div>
</x-app-layout>