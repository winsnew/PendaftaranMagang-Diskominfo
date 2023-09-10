<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('pengumuman') }}
        </h2>
    </x-slot>
    @if (auth()->user()->role == 'mahasiswa')
    <div class="p-4 bg-white block sm:flex items-center lg:ml-64 border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="dark:text-white">
            <div class="mt-5 flex">
                @foreach($data as $dt)
                @foreach($jadwal as $jd)
                <div class="justify-center">
                    <div class="bg-white text-black dark:text-white">
                        <h5 class="text-black">Pengumuman</h5>
                        <div class="text-black">
                            {{$dt->status}}
                        </div>
                        <div class="text-black">
                            <p>Tanggal Masuk: {{$jd->tanggal}}</p>
                            <p>Tanggal Selesai: {{$jd->tanggalselesai}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
                <div class="mt-2" id="calendaruser">

                </div>
            </div>
        </div>
    </div>
    @endif
</x-app-layout>