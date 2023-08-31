<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Setting') }}
        </h2>
    </x-slot>
    <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class=" mb-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <h1>Edit User</h1>
                @if(isset($datas))
                    Nama : {{$datas->nama}}
                @endif
                <form method="POST" action="{{ route('profile.updateuser', ['id' => $user->id]) }}">
                    @csrf
                    <label for="status">Update Status:</label>
                    <select name="status" id="status">
                        <option value="active" {{ $user->status === 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $user->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    <button type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>