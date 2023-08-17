<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="p-4 sm:ml-64">
            <div class="bg-blue">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-dashboard-user>
                       
                    </x-dashboard-user>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
