<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Input Jadwal') }}
        </h2>
    </x-slot>

    <div class="p-6 block sm:flex sm:ml-64">
        <div class="min-h-screen justify-center dark:text-white">
        <nav class="flex mb-5" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                        <li class="inline-flex items-center">
                            <a href="#" class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                Home
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <a href="#" class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Admin</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500" aria-current="page">Jadwal</span>
                            </div>
                        </li>
                    </ol>
                </nav>
                
            <h1 class="font-bold text-lg mb-10">Input Jadwal mahasiswa</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- mahasiswa yang lulus -->
                @foreach($siswa as $sis)
                <div class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="https://media.istockphoto.com/id/1337144146/id/vektor/vektor-ikon-profil-avatar-default.jpg?s=612x612&w=0&k=20&c=oMrbNlS6EplbdwqmGml8h5Sbk33Pu3FHQRJ7OyRro2o=" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-600">{{ $sis->name }}</h2>
                        <p class="text-sm text-gray-600">{{ $sis->status }}</p>
                        <p class="text-sm text-gray-600"></p>
                        <div class="mt-4">
                            <a href="{{ route('profile.jadwalcontrol', ['id' => $sis->id]) }}" class="text-primary-500 hover:underline">Lihat Profil</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>

</x-app-layout>