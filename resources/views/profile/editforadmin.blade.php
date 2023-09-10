<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>
    <div class="p-4 bg-white block sm:ml-64 sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
        <div class="flex mt-4 gap-2">
                <div class="w-1/3">
                    <div class="bg-white p-4 shadow-lg rounded">
                    @if(isset($datas))    
                        <div>
                            <div class="mb-4">
                                <label for="kegiatan" class="block font-semibold">Profile</label>
                            </div>
                            <p>{{$datas->nama}}</p>
                            <a href="{{ route('profile.editforadmin', ['id' => $user->id]) }}" target="_blank">buka file</a>
                        </div>
                        
                    </div>
                    @endif
                </div>
            <div class=" mb-4 sm:p-8 bg-white dark:text-slate-300 dark:bg-gray-600 shadow sm:rounded-lg">
                <h1>Edit User</h1>
                @if(isset($datas))
                    <p class="dark:text-white">Nama : {{$datas->nama}}</p>
                    <br>
                    <p>Jurusan : {{$datas->jurusan}}</p>
                @endif
                <form method="POST" action="{{ route('profile.updateuser', ['id' => $user->id]) }}">
                    @csrf
                    <div class="flex flex-col">
                    <label for="status">Update Status:</label>
                    <select class="rounded-lg bg-slate-500 my-2" name="status" id="status">
                        <option value="Diterima" {{ $user->status === 'Diterima' ? 'selected' : '' }}>Diterima</option>
                        <option value="Menunggu" {{ $user->status === 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
                    </select>
                    <button class="bg-slate-400 my-2 rounded-lg" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>