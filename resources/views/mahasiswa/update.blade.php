<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>
    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:border-strokedark sm:px-7.5 xl:pb-1">
            {{-- <a href="{{ route('home') }}" class="px-5 py-2 bg-red-500 rounded-md text-white text-lg shadow-md">Kembali</a> --}}
            <div class="my-3">
                <h1 class="mb-8 text-center text-3xl font-bold dark:text-white">Edit Mahasiswa</h1>
                <form action="" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div>
                            <label for="" class="text-md font-bold dark:text-white">Nama Mahasiswa</label>
                            <input type="text" value="{{$mahasiswas->nama_mahasiswa}}" name="nama_mahasiswa" class="block w-full border outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                            @error('nama_mahasiswa')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="" class="text-md font-bold dark:text-white">Nomor Telepon</label>
                            <input type="text" value="{{$mahasiswas->nomor_telepon}}" name="nomor_telepon" class="block w-full border outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                            @error('nomor_telepon')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div>
                            <label for="" class="text-md font-bold dark:text-white">Email Mahasiswa</label>
                            <input type="email" value="{{$mahasiswas->email_mahasiswa}}" name="email_mahasiswa" class="block w-full border outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                            @error('email_mahasiswa')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="" class="text-md font-bold dark:text-white">
                                <span class="label-text">Jenis Kelamin</span>
                            </label>
                            <select class="block w-full border outline-emerald-800 px-2 py-2 text-md rounded-md my-2" name="jenis_kelamin" id="">
                                <option disabled="disabled" selected>Pilih Jenis Kelamin</option> 
                                <option value="Laki-Laki" {{ ($mahasiswas->jenis_kelamin == "Laki-Laki") ? 'selected' : ""}}> Laki-Laki</option>
                                <option value="Perempuan" {{ ($mahasiswas->jenis_kelamin == "Perempuan") ? "selected" : ""}}> Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div>
                            <label for="" class="text-md font-bold dark:text-white">Tempat Lahir</label>
                            <input type="text" value="{{$mahasiswas->tempat_lahir}}" name="tempat_lahir" class="block w-full border outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                            @error('tempat_lahir')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="" class="text-md font-bold dark:text-white">Tanggal Lahir</label>
                            <input type="date" value="{{$mahasiswas->tanggal_lahir}}" name="tanggal_lahir" class="block w-full border outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                            @error('tanggal_lahir')
                            <span class="text-red-500">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-8">
                        <label for="" class="text-md font-bold dark:text-white">Alamat Mahasiswa</label>
                        <input type="text" value="{{$mahasiswas->alamat_mahasiswa}}" name="alamat_mahasiswa" class="block w-full border outline-emerald-800 px-2 py-2 text-md rounded-md my-2" id="">
                        @error('alamat_mahasiswa')
                        <span class="text-red-500">{{$message}}</span>
                        @enderror
                    </div>
                    <button style="background-color: #1b1464" class="w-full px-5 py-3 bg-emerald-500 rounded-md text-white text-lg shadow-md">Update</button>
            </div>
        </div>
    </div>
</x-app-layout>