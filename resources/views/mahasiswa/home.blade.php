<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>
<div class="py-12 px-4">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 dark:border-strokedark sm:px-7.5 xl:pb-1">
        @if (session()->has('success'))
            <div class="bg-green-500 text-black px-4 py-2">
                {{session('success')}}
            </div>
            @endif
        <div class="flex justify-between items-center bg-gray-200 dark:bg-gray-200 p-5 rounded-md">
            <div>
                <h1 class="text-xl text-semibold">Data Mahasiswa ( {{$total}} )</h1>
            </div>
            <div>
                <a href="{{ route('create') }}" style="background-color: #1b1464" class="px-5 py-2 rounded-md text-white text-lg shadow-md">Tambah</a>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-200">
                            <thead class="bg-gray-100 dark:bg-gray-200">
                                <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        NIM
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Nama Mahasiswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Alamat Mahasiswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Nomor Telepon
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Email Mahasiswa
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Tempat Lahir
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Tanggal Lahir
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Status
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-500 dark:divide-gray-200">
                            
                                @forelse ($mahasiswas as $mahasiswa)
                                <tr class="hover:bg-gray-100 dark:bg-gray-200 dark:hover:bg-gray-400">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$mahasiswa->id}}</td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->nama_mahasiswa}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->alamat_mahasiswa}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->nomor_telepon}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->email_mahasiswa}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->tempat_lahir}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->tanggal_lahir}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->jenis_kelamin}}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            {{$mahasiswa->status->status}}
                                        </td>
                                        <td class="flex flex-row space-x-4 mt-2">
                                            <a href="{{ route('edit', ['id'=>$mahasiswa->id]) }}" class="flex items-center justify-center w-8 h-8 rounded-full" style="cursor: pointer; background-color: #1b1464; color: white">
                                                <svg  width="15"
                                                height="15"
                                                class="flex m-auto"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                                            </a>
                                            <a href="{{ route('delete', ['id'=>$mahasiswa->id]) }}" class="flex items-center justify-center w-8 h-8 rounded-full" style="cursor: pointer; background-color: #ED1C24; color: white" onclick="return confirm('Apakah Anda yakin ingin menghapus?');">
                                                <svg width="15" height="15" class="flex m-auto" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                                                </svg>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="dark:bg-gray-500">
                                        <td>
                                            <h2>Data Mahasiswa Tidak Ditemukan</h2>
                                        </td>
                                    </tr>
                                    @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>