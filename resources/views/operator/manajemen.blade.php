@extends('operator.layouts.main')

@section('content')
<div class="p-1 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
       <div class="grid grid-cols-1 gap-4 mb-4">

         <div class="flex items-center justify-center h-20 mb-4 rounded bg-gray-50 dark:bg-gray-800">
           <p class="text-3xl font-bold text-gray-900 dark:text-white uppercase">Manajemen Akun Mahasiswa</p>
        </div>
        <div class="">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">{{ session('success') }}</span>
            </div>      
        @else
        @endif
       </div>          
        <div class="relative overflow-x-auto">
           <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                   <tr class="">
                       <th scope="col" class="px-6 py-5 text-xl ">
                           NIM
                       </th>
                       <th scope="col" class="px-6 py-5 text-xl">
                           Nama
                       </th>
                       <th scope="col" class="px-6 py-5 text-xl">
                           Tindakan
                       </th>
                   </tr>
               </thead>
               <tbody>
                <div class="justify-center  ">
                @foreach($mahasiswa as $m)
                    <tr class="text-lg bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-center">
                        <td class="px-6 py-4">{{ $m->NIM }}</td>
                        <td class="px-6 py-4">{{ $m->Nama }}</td>
                        <td class="flex items-center justify-center px-6 py-4 space-x-3">
                            <a href="{{ route('operator.edit', $m->NIM) }}" class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Edit
                            </a>
                            <a href="javascript:void(0);" onclick="deleteMahasiswa('{{ route('operator.delete', $m->NIM) }}')" class="px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-700">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                <script>
                    function deleteMahasiswa(url, nim) {
                        Swal.fire({
                            title: 'Apakah Anda yakin?',
                            text: 'Mahasiswa akan dihapus secara permanen!',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, hapus!',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: url,
                                    type: 'DELETE',
                                    cache: false,
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    },
                                    success: function (data) {
                                        console.log(data);
                                        Swal.fire({
                                            title: 'Oke!',
                                            text: 'Mahasiswa berhasil dihapus.',
                                            icon: 'success',
                                        }).then(() => {
                                            // Hapus baris dari DOM
                                            $('tr[data-nim="'+ nim +'"]').remove();

                                            // Perbarui tabel tanpa perlu me-refresh halaman
                                            updateTable();
                                        });
                                    },
                                });
                            }
                        });
                    }

                    function updateTable() {
                        $.get('{{ route("operator.manajemen") }}', function(data) {
                            // Gantikan isi tabel dengan data baru
                            $('.table-container').html(data);
                        });
                    }
                </script>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

                </div>
               </tbody>
           </table>
        </div>
       </div>
        <div class="flex items-center justify-start p-2 mx-3 mt-4">
            {{ $mahasiswa->links() }}
        </div>
    </div>
 </div>
@endsection