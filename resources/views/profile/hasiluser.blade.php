<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pengumuman Hasil') }}
        </h2>
    </x-slot>
    <form>
        @if (auth()->user()->role == 'mahasiswa')
        @foreach($datas as $data)
        <div class="p-4 pt-0 min-h-screen bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="w-full mb-1">
                <div class="flex flex-row ">
                    <div class="flex-none bg-white p-8 rounded-lg shadow-md w-96">
                        <div class="flex justify-center">
                            <img src="profile-image.jpg" alt="Profile Image" class="w-32 h-32 rounded-full border-4 border-purple-500">
                        </div>
                        <h1 class="text-3xl font-semibold mt-4 text-center">{{$data->nama}}</h1>
                        <p class="text-purple-500 text-center mt-1">Mahasiswa</p>
                        <div class="mt-6">
                            <h2 class="text-xl font-semibold">Contact Information</h2>
                            <ul class="mt-0 text-gray-700">
                                <li class="flex items-center space-x-2">
                                    
                                    <span>Email: john@example.com</span>
                                </li>
                                <li class="flex items-center space-x-2 mt-2">
                                    
                                    <span>Phone: 0{{$data->nohp}}</span>
                                </li>
                                <li class="flex items-center space-x-2 mt-2">
                                    
                                    <span>Phone: +123456789</span>
                                </li>
                                <li class="flex items-center space-x-2 mt-2">
                                    
                                    <span>Phone: +123456789</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                        
                </div>
                    
                </div>
                
                    
                



            </div>
        </div>




        @endforeach
        @endif

    </form>
    <script>
        // Data nilai siswa untuk grafik
        var gradeData = {
            labels: ["Database", "Comp Science", "Data Mining", "Toefl", "Design"],
            datasets: [{
                label: "Grades",
                data: [85, 78, 92, 88, 70],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        };

        // Opsi konfigurasi grafik
        var gradeOptions = {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        };

        // Inisialisasi grafik nilai siswa dengan Chart.js
        var gradeChart = new Chart(document.getElementById('gradeChart'), {
            type: 'bar',
            data: gradeData,
            options: gradeOptions
        });
    </script>
</x-app-layout>