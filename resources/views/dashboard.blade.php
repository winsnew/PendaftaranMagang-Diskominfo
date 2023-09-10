<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-4 lg:ml-64 bg-white h-full sm:flex mt-5 items-center border-b border-gray-300  dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 min-h-screen w-full">

            <section class="bg-center bg-no-repeat bg-cover bg-[url('https://semarangkota.go.id/assets/iconsosmed/TamanBalkot.jpg')] bg-gray-700 bg-blend-multiply">
                <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
                    <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Selamat Datang</h1>
                    <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Peluang unik untuk mendapatkan wawasan langsung tentang pengelolaan informasi dan teknologi di pemerintahan. Selama magang, peserta akan terlibat dalam proyek-proyek penting, berkolaborasi dengan profesional berpengalaman, dan memperluas pengetahuan dalam teknologi informasi. Diskominfo membuka pintu bagi para magang untuk belajar dan berkontribusi dalam memajukan layanan publik dan inovasi teknologi.</p>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                        
                        <a href="https://diskominfo.semarangkota.go.id/" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                            Kunjungi
                        </a>
                    </div>
                </div>
            </section>

        </div>
    </div>
</x-app-layout>