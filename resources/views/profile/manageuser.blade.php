<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <form action="{{ route('profile.manageuser') }}" method="POST">
    @csrf
    @if (auth()->user()->role == 'mahasiswa')
    
        <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-16 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full min-h-screen">
                <div class="">
                    <div class="">
                    @if (auth()->user()->sesi)
                        <p class="text-green-500">"Terima kasih! Data Anda telah berhasil disimpan.<br> Kami menghargai kontribusi Anda."</p>
                    @else
                        
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Lengkap</label>
                            <input type="text" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">NIM</label>
                            <input type="text"  name="nim" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="NIM" required>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Instansi</label>
                            <input type="text" name="Instansi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Nama Instansi" required>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Jurusan</label>
                            <input type="text"  name="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Jurusan" required>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">Semester</label>
                            <input type="text" name="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Semester" required>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">No Hp</label>
                            <input type="text" name="nohp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="no hp" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900 ">File</label>
                            <input type="file" name="file" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  required>
                        </div>
                        
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </div>
                    @endif
                </div>
    @endif

    

    @if (auth()->user()->role == 'admin')
        <div class="py-10 sm:ml-64">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                @include('profile.partials.chart-form')
            </div>
        </div>
    @endif
    </form>
</x-app-layout>