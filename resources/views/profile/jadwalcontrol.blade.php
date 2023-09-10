<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Input Jadwal') }}
        </h2>
    </x-slot>
    <div class="p-6 block sm:flex sm:ml-64">
        <div class="min-h-screen justify-center">
            

            <div class="flex">
                <div class="w-1/3 p-4">
                    <div class="bg-white p-4 shadow-lg rounded">
                        <div>
                            <div class="mb-4">
                                <label for="kegiatan" class="block font-semibold">Profile</label>
                            </div>
                            <div class="mb-4">
                                <label for="kegiatan" class="block font-semibold">Nama</label>
                                <p>{{$user->name}}</p>
                            </div>
                            <div class="mb-4">
                                <label for="mulai" class="block font-semibold">Status</label>
                                <p>{{$user->status}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="w-1/3 p-4">
                    <div class="bg-yellow-200 text-yellow-800 p-4 rounded">
                        <h4 class="text-xl">Form Kegiatan</h4>
                    </div>
                    <div class="bg-white p-4 shadow-lg rounded">
                        <form action="{{route('profile.postjadwal', ['id' => $user->id])}}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="kegiatan" class="block font-semibold">Keterangan Tempat</label>
                                <textarea name="keterangantempat" class="w-full p-2 border rounded" cols="30" rows="2"></textarea>
                            </div>
                            <div class="mb-4">
                                <label for="mulai" class="block font-semibold">Tgl Mulai</label>
                                <input type="date" class="w-full p-2 border rounded" name="tanggal">
                            </div>
                            <div class="mb-4">
                                <label for="selesai" class="block font-semibold">Tgl Selesai</label>
                                <input type="date" class="w-full p-2 border rounded" name="tanggalselesai">
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-2/3 p-4">
                    <div id="calendar" class="bg-white p-4 shadow-lg rounded"></div>
                </div>
            </div>
        
        </div>
    </div>

</x-app-layout>