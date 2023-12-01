    @extends('dosen.layouts.main')

    @section('content')
    <div class="p-1 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <div class="flex items-center justify-center h-20 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-3xl font-bold text-gray-900 dark:text-white">Detail Mahasiswa</p>
            </div>
            <!-- Semester selection and submit button -->
            <div class="grid grid-cols-2 gap-4">
                <!-- Section 1 -->
                <div class="space-y-4">
                    <div class="">
                        <div>
                            <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mahasiswa</label>
                            <input disabled type="text" id="nama" name="nama" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-s" value="{{ $mahasiswa->nama }}">
                        </div>
                        <div id="NIM-container" data-nim="{{ $mahasiswa->NIM }}"></div>
                        <div>
                            <label for="NIM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                            <input disabled type="text" id="NIM" name="NIM" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-s" value="{{ $mahasiswa->NIM }}">
                        </div>
                        <div>
                            <label for="angkatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Angkatan</label>
                            <input disabled type="text" id="angkatan" name="angkatan" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-s" value="{{ $mahasiswa->angkatan }}">
                        </div>
                        <div>
                            <label for="wali" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wali</label>
                            <input disabled type="text" id="wali" name="wali" class="w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-s" value="{{ $mahasiswa->nama_doswal }}">
                        </div>
                        <div>
                            <!-- Modal toggle -->
                            <button onclick="showDetail('{{ $mahasiswa->NIM }}')" data-modal-target="default-modal" data-modal-toggle="default-modal" class="mb-2 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Section 2 -->
                <div class="flex items-center justify-start p-5">
                    <img class=" w-48 h-48 -full border border-gray-800" src="{{ asset('fotoProfil/'.$mahasiswa->foto) }}" alt="Foto Pengguna">
                </div>
            </div>        
        </div>

    <!-- Main modal -->
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Pilih Semester
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <!-- Semester selection dropdown -->
                    <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Semester</label>
                    <select id="semester" name="semester" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Pilih Semester</option>
                        @for ($i = 1; $i <= 14; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
            
                    <!-- IRS button -->
                    <button onclick="showDetail('{{ $mahasiswa->NIM }}'); showContent('irs');" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">IRS</button>

                    <button onclick="showDetail('{{ $mahasiswa->NIM }}'); showContent('khs');" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">KHS</button>
                    
                    <!-- Content for IRS or KHS -->
                    <div id="content-section" class="hidden">
                        <!-- Content will be displayed here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    </div>

    <script>

    function showDetail(nim) {
        // Simpan nilai NIM ke dalam atribut data pada elemen dengan ID 'NIM-container'
        document.getElementById('NIM-container').setAttribute('data-nim', nim);
    }

    function showContent(type) {
        var selectedSemester = document.getElementById('semester').value;
        var selectedNIM = document.getElementById('NIM-container').getAttribute('data-nim');


        console.log("Selected NIM:", selectedNIM);

        if (selectedSemester && selectedNIM) {
            // Use Ajax to fetch data
            $.ajax({
                url: '/get-data/' + type + '/' + selectedSemester + '/' + selectedNIM,
                type: 'GET',
                dataType: 'json',
                success: function (data) {

                    console.log(data);  // Tambahkan ini

                    var contentSection = document.getElementById('content-section');

                    // Kosongkan konten sebelum menambahkan yang baru
                    contentSection.innerHTML = '';

                    // Append data from the server to the content
                    data.forEach(function (item) {
                        if (type === 'irs') {
                            contentSection.innerHTML += '<p>Semester: ' + item.smst_aktif + '</p>';
                            contentSection.innerHTML += '<p>Jumlah SKS: ' + item.jumlah_sks + '</p>';
                        } else if (type === 'khs') {
                            contentSection.innerHTML += '<p>Semester: ' + item.smt_aktif + '</p>';
                            contentSection.innerHTML += '<p>Jumlah SKS Semester: ' + item.SKS_semester + '</p>';
                            contentSection.innerHTML += '<p>Jumlah SKS Kumulatif: ' + item.SKS_kumulatif + '</p>';
                            contentSection.innerHTML += '<p>IP Semester: ' + item.IP_smt + '</p>';
                            contentSection.innerHTML += '<p>IP Kumulatif: ' + item.IP_kumulatif + '</p>';
                        }
                    });

                    contentSection.style.display = 'block';
                },
                error: function (error) {
                    console.log('Error fetching data:', error);
                }
            });
        } else {
            // Handle the case where no semester or NIM is selected
            alert('Please select a semester and ensure NIM is available.');
        }
    }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    @endsection