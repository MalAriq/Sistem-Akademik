@extends('departemen.layouts.main')

@section('content')
<div class="p-1 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
        <div class="grid grid-cols-1 gap-4 mb-4">
            <div class="flex items-center justify-center h-20 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <p class="text-3xl font-bold text-gray-900 dark:text-white uppercase">Data Rekap Status Mahasiswa</p>
            </div>
            <div>
                <a href="{{ route('departemen.cetakrekapstatus') }}" class="text-white bg-blue-500 hover:bg-blue-600 font-medium text-base text-center py-2 px-4 rounded-full" target="_blank">Cetak File</a>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-5">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="text-center">
                            <th scope="col" class="px-6 py-5 text-lg">Status</th>
                            @foreach($tahun as $tahunItem)
                                <th scope="col" class="px-6 py-5 text-lg">
                                    {{ $tahunItem }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="py-2 font-medium">Aktif</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">
                                    <a href="{{ route('departemen.mhsaktif', ['tahun' => $year]) }}">
                                        {{ $jumlahMahasiswaAktif[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                        <!-- <tr class="text-center">
                            <td class="py-2 font-medium">Tidak Aktif</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">                                    
                                    <a href="{{ route('departemen.mhstdkaktif', ['tahun' => $year, 'status' => 'CUTI']) }}">
                                        {{ $jumlahMahasiswaTidakAktif[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr> -->
                        <tr class="text-center">
                            <td class="py-2 font-medium">Cuti</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">                                    
                                    <a href="{{ route('departemen.mhstdkaktif', ['tahun' => $year, 'status' => 'CUTI']) }}">
                                        {{ $jumlahMahasiswaCuti[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                        <tr class="text-center">
                            <td class="py-2 font-medium">Mangkir</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">                                    
                                    <a href="{{ route('departemen.mhstdkaktif', ['tahun' => $year, 'status' => 'MANGKIR']) }}">
                                        {{ $jumlahMahasiswaMangkir[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                        <tr class="text-center">
                            <td class="py-2 font-medium">DO</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">                                    
                                    <a href="{{ route('departemen.mhstdkaktif', ['tahun' => $year, 'status' => 'DO']) }}">
                                        {{ $jumlahMahasiswaDO[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                        <tr class="text-center">
                            <td class="py-2 font-medium">Undur Diri</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">                                    
                                    <a href="{{ route('departemen.mhstdkaktif', ['tahun' => $year, 'status' => 'UNDUR DIRI']) }}">
                                        {{ $jumlahMahasiswaUD[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                        <tr class="text-center">
                            <td class="py-2 font-medium">Lulus</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">                                    
                                    <a href="{{ route('departemen.mhstdkaktif', ['tahun' => $year, 'status' => 'LULUS']) }}">
                                        {{ $jumlahMahasiswaLulus[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                        <tr class="text-center">
                            <td class="py-2 font-medium">Meninggal Dunia</td>
                            @foreach ($tahun as $year)
                                <td class="py-2 text-blue-500 font-medium text-base text-center">                                    
                                    <a href="{{ route('departemen.mhstdkaktif', ['tahun' => $year, 'status' => 'MENINGGAL DUNIA']) }}">
                                        {{ $jumlahMahasiswaMD[$year] }}
                                    </a>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
@endsection
