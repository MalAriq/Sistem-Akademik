@extends('dosen.layouts.main')

@section('content')
<div class="p-1 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
     <div class="flex items-center justify-center h-20 mb-4 rounded bg-gray-50 dark:bg-gray-800">
        <p class="text-3xl font-bold text-gray-900 dark:text-white">List Mahasiswa Perwalian</p>
     </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table border="1" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class=" text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                <tr>
                    <th class="border px-4 py-2">NIM</th>
                    <th class="border px-4 py-2">NAMA</th>
                    <th class="border px-4 py-2">IRS</th>
                    <th class="border px-4 py-2">KHS</th>
                    <th class="border px-4 py-2">PKL</th>
                    <th class="border px-4 py-2">SKRIPSI</th>
                    <th class="border px-4 py-2">STATUS</th>
                    <th class="border px-4 py-2">PERSETUJUAN</th>
                    <th class="border px-4 py-2">Action</th>
                </tr>
            </thead>
            @foreach ($mahasiswa as $m)
            <tbody>
                <tr class="text-s bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white border py2">{{ $m->NIM }}</th>
                    <td class="border px-4 py-2">{{ $m->nama }}</td>
                    <td class="border px-4 py-2">
                        @if ($m->irs)
                            <button class="view-pdf-button text-blue-600 underline" data-src="{{ asset('berkasIRS/' . $m->irs) }}">Lihat IRS</button>
                        @else
                            <p>IRS tidak ditemukan.</p>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        @if ($m->khs)
                            <button class="view-pdf-button text-blue-600 underline" data-src="{{ asset('berkasKHS/' . $m->khs) }}">Lihat KHS</button>
                        @else
                            <p>KHS tidak ditemukan.</p>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        @if ($m->pkl)
                            <button class="view-pdf-button text-blue-600 underline" data-src="{{ asset('berkasPKL/' . $m->pkl) }}">Lihat PKL</button>
                        @else
                            <p>PKL tidak ditemukan.</p>
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        @if ($m->skripsi)
                            <button class="view-pdf-button text-blue-600 underline" data-src="{{ asset('berkasSkripsi/' . $m->skripsi) }}">Lihat Skripsi </button>
                        @else
                            <p>Skripsi tidak ditemukan.</p>
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $m->status }}</td>
                    <td class="border px-4 py-2">{{ $m->persetujuan }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('dosen.verifikasi', ['id' => $m->id_mhs]) }}" class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ubah Persetujuan</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div class="p-4">
            {{ $mahasiswa->links() }}
        </div>
    </div>
</div>
@endsection

@include('dosen.script')
