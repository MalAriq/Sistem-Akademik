@extends('departemen.layouts.main')

@section('content')
<div class="p-1 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
       <div class="grid grid-cols-1 gap-4 mb-4">
         <div class="flex items-center justify-center h-20 mb-4 rounded bg-gray-50 dark:bg-gray-800">
           <p class="text-3xl font-bold text-gray-900 dark:text-white uppercase">Data Belum Skripsi Mahasiswa Angkatan {{$tahun}}</p>
        </div>
        <div>
            <a href="{{ route('departemen.cetakbelumskripsi', ['tahun' => $tahun]) }}" class="text-white bg-blue-500 hover:bg-blue-600 font-medium text-base text-center py-2 px-4 rounded-full" target="_blank">Cetak File</a>
            <table class="mt-3" style="width: 60%;">
                <tr>
                    <td style="border: none;">Nama Dosen Wali</td>
                    <td class="text-left" style="border: none;">: {{$doswal->nama_doswal}}</td>
                </tr>
                <tr>
                    <td style="border: none;">NIP</td>
                    <td class="text-left" style="border: none;">: {{$doswal->NIP}}</td>
                </tr>
            </table>
            <table class="mt-5 w-full text-sm text-left text-gray-500 dark:text-gray-400">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                   <tr>
                       <th scope="col" class="px-6 py-5 text-sm">
                           NIM
                       </th>
                       <th scope="col" class="px-6 py-5 text-sm">
                           Nama Mahasiswa
                       </th>
                       <th scope="col" class="px-6 py-5 text-sm">
                           Angkatan
                       </th>
                       <th scope="col" class="px-6 py-5 text-sm">
                           Status
                       </th>
                       <th scope="col" class="px-6 py-5 text-sm">
                            Nilai Skripsi
                       </th>
                       <th scope="col" class="px-6 py-5 text-sm">
                            Tanggal Sidang
                       </th>
                   </tr>
               </thead>
               <tbody>
                   @foreach($skripsi as $skripsi)
                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 text-center">
                           <td class="px-6 py-4">{{ $skripsi->NIM }}</td>
                           <td class="px-6 py-4">{{ $skripsi->nama }}</td>
                           <td class="px-6 py-4">{{ $skripsi->angkatan }}</td>
                           <td class="px-6 py-4">{{ $skripsi->status_skripsi }}</td>
                           <td class="px-6 py-4">{{ $skripsi->nilai_skripsi }}</td>
                           <td class="px-6 py-4">{{ $skripsi->tanggal_sidang }}</td>
                       </tr>
                  @endforeach
               </tbody>
           </table>
        </div>
    </div>
 </div>
@endsection
