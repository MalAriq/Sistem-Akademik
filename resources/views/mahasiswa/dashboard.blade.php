@extends('mahasiswa.layouts.main')

@section('content')
<div class="p-1 sm:ml-64">
   <div class=" p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-8">
    <div class="flex items-center justify-center h-20 mb-4 rounded bg-gray-50 dark:bg-gray-800">
       <p class="uppercase text-3xl font-bold text-gray-900 dark:text-white">Dashboard Mahasiswa</p>
    </div>
    <div class="flex items-center justify-center">
        @if (session('errors'))
            <div class="text-center p-4 mt-3 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 w-full">
                {{ session('errors') }}
            </div>
        @endif
    </div>
    <div class="grid grid-cols-3 gap-4 mb-4">
         <div class="flex items-center justify-center h-80 rounded bg-gray-50 dark:bg-gray-800">
         <p class="text-xl font-semibold text-gray-900 dark:text-white">
         <div class="text-gray-900 dark:text-white text-center">
         <img class="mx-auto w-48 h-48 rounded-full border border-gray-800" src="{{ asset('fotoProfil/'.$mahasiswa->foto) }}" alt="Foto Pengguna">
         <div class="text-xl font-semibold">{{ $mahasiswa->nama }}</div>
            <p class="text-l font-semibold">{{$mahasiswa->NIM}}</p>
            <p class="text-s">{{$mahasiswa->email}}</p>
            <p class="text-s">S1-Informatika <a class="font-semibold">({{$mahasiswa->fakultas}})</a></p>
        </div>
         </div>
        <div class="flex items-center justify-center h-80 rounded bg-gray-50 dark:bg-gray-800 col-span-2 row-span-4">
            <table>
                <tr>
                    <td class="text-left font-semibold">Nama Dosen Wali</td>
                    <td class="px-4"> : </td>
                    <td  class="text-left font-semibold">{{ $mahasiswa->nama_doswal }}</td>
                </tr>
                <tr>
                    <td class="text-left font-semibold">NIP Dosen Wali</td>
                    <td class="px-4"> : </td>
                    <td  class="text-left font-semibold">{{ $mahasiswa->nip }}</td>
                </tr>
                <tr class="mt-3 mb-4">
                    <td class="text-left font-semibold">Semester Terakhir Upload</td>
                    <td class="px-4"> : </td>
                    <td class="text-left font-semibold"> {{ $mahasiswa->semaktif }}</td>
                </tr>
                <tr class="mt-3">
                    <td class="text-left font-semibold">Angkatan</td>
                    <td class="px-4"> : </td>
                    <td  class="text-left font-semibold"> {{ $mahasiswa->angkatan }}</td>
                </tr>
            </table>

        </div>
      </div>
      <div class="grid grid-cols-4 gap-4 mb-4">
      <div class="flex items-center justify-center rounded bg-gray-50 h-72 dark:bg-gray-800 relative">
        <div class="text-xl font-semibold text-center absolute top-2 left-0 right-0 mt-0">IRS</div>
            <div class="mx-auto mt-3">
                <table>
                    <tr>
                        <td>SKS Terakhir Upload</td>
                        <td class="px-1"> : </td>
                        <td class="text-left font-semibold">{{ $mahasiswa->sks }} SKS</td>
                    </tr>
                    <tr>
                        <td>Semester Terakhir Upload</td>
                        <td class="px-1"> : </td>
                        <td class="text-left font-semibold">{{ $mahasiswa->semaktif }}</td>
                    </tr>
                </table>
            </div>
        </div>

      <div class="flex items-center justify-center rounded bg-gray-50 h-72 dark:bg-gray-800 relative">
        <div class="text-xl font-semibold text-center absolute top-2 left-0 right-0 mt-0">KHS</div>
        <table class="flex items-center justify-center">
            <tr class="mx-auto mt-3">
                    <td>SKS Semester</td>
                    <td class="px-1 "> : </td>
                    <td class="text-left font-semibold"> {{ $mahasiswa->skssem }} SKS</td>
            </tr>
            <tr class="mt-3">
                    <td>IP Semester</td>
                    <td class="px-1 "> : </td>
                    <td class="text-left font-semibold"> {{ $mahasiswa->ipsem }}</td>
            </tr>
            <tr class="mt-3">
                    <td>SKS Kumulatif</td>
                    <td class="px-1 "> : </td>
                    <td class="text-left font-semibold"> {{ $mahasiswa->skskum }} SKS</td>
            </tr>
            <tr class="mt-3">
                    <td>IPK Kumulatif</td>
                    <td class="px-1 "> : </td>
                    <td class="text-left font-semibold"> {{ $mahasiswa->ipk }}</td>
            </tr>
            <tr class="mt-3">
                <td>Semester Terakhir Upload</td>
                <td class="px-1 "> : </td>
                <td class="text-left font-semibold"> {{ $mahasiswa->smtKHS }}</td>
            </tr>
        </table>
    </div>
      <div class="flex items-center justify-center rounded bg-gray-50 h-72 dark:bg-gray-800 relative">
        <div class="text-xl font-semibold text-center absolute top-2 left-0 right-0 mt-0">PKL</div>
        <table class="flex items-center justify-center">
            <tr class="mt-3">
                    <td>Status PKL</td>
                    <td class="px-1 "> : </td>
                    <td class="text-left font-semibold"> {{ $mahasiswa->statuspkl }}</td>
            </tr>
            <tr class="mt-3">
                    <td>Nilai PKL</td>
                    <td class="px-1 "> : </td>
                    <td class="text-left font-semibold"> {{ $mahasiswa->nilaipkl }}</td>
            </tr>
        </table>
    </div>
        <div class="flex items-center justify-center rounded bg-gray-50 h-72 dark:bg-gray-800 relative">
            <div class="text-xl font-semibold text-center absolute top-2 left-0 right-0 mt-0">Skripsi</div>
                <table class="flex items-center justify-center">
                    <tr class="mt-3">
                            <td>Status Skripsi</td>
                            <td class="px-1 "> : </td>
                            <td class="text-left font-semibold"> {{ $mahasiswa->statusskripsi }}</td>
                    </tr>
                    <tr class="mt-3">
                            <td>Nilai Skripsi</td>
                            <td class="px-1 "> : </td>
                            <td class="text-left font-semibold"> {{ $mahasiswa->nilaiskripsi }}</td>
                    </tr>
                    <tr class="mt-3">
                            <td>Lama Studi</td>
                            <td class="px-1 "> : </td>
                            <td class="text-left font-semibold"> {{ $mahasiswa->lamastudi }}</td>
                    </tr>
                    <tr class="mt-3">
                            <td>Tanggal Sidang</td>
                            <td class="px-1 "> : </td>
                            <td class="text-left font-semibold"> {{ $mahasiswa->tglsidang }}</td>
                    </tr>
                </table>
                <p class="text-2xl text-gray-400 dark:text-gray-500"></p>
            </div>
        </div>
    <div class="flex items-center justify-center rounded bg-gray-50 h-36 dark:bg-gray-800 relative">
        <div class="text-xl font-semibold text-center absolute top-2 left-0 right-0 mt-2">Data Akademik</div>
        @for ($i = 1; $i <= 14; $i++)
        <div class="flex items-center mt-14 mb-3 w-full justify-center">
            @if (isset($skripsi[$i]) && count($skripsi[$i]) > 0)
                @if ($skripsi[$i][0]->status_skripsi == 'Sudah Skripsi')
                    <a data-modal-target="modal-{{ $i }}" data-modal-toggle="modal-{{ $i }}" type="button" class="w-20 text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-500 font-medium rounded-lg text-sm px-8 py-4 text-center dark:bg-green-400 dark:hover:bg-green-300 dark:focus:ring-green-400">{{ $i }}</a>
                @endif
            @elseif (isset($PKL[$i]) && count($PKL[$i]) > 0)
                @if ($PKL[$i][0]->status_pkl == 'Sudah PKL')
                    <a data-modal-target="modal-{{ $i }}" data-modal-toggle="modal-{{ $i }}" type="button" class="w-20 text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-8 py-4 text-center dark:bg-yellow-400 dark:hover:bg-yellow-300 dark:focus:ring-yellow-400">{{ $i }}</a>
                @endif
            @elseif (isset($allKHS[$i]) && count($allKHS[$i]) > 0)
                @if ($allKHS[$i][0]->persetujuan == 'Disetujui')
                    <a data-modal-target="modal-{{ $i }}" data-modal-toggle="modal-{{ $i }}" type="button" class="w-20 text-white bg-blue-800 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-400 dark:focus:ring-blue-500">{{ $i }}</a>
                @endif
            @elseif (isset($allIRS[$i]) && count($allIRS[$i]) > 0)
                @if ($allIRS[$i][0]->persetujuan == 'Disetujui')
                    <a data-modal-target="modal-{{ $i }}" data-modal-toggle="modal-{{ $i }}" type="button" class="w-20 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-4 text-center dark:bg-blue-600 dark:hover:bg-blue-400 dark:focus:ring-blue-500">{{ $i }}</a>
                @else
                    <a data-modal-target="modal-{{ $i }}" data-modal-toggle="modal-{{ $i }}" type="button" class="w-20 text-white bg-red-700 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-8 py-4 text-center dark:bg-red-600 dark:hover:bg-red-400 dark:focus:ring-red-500">{{ $i }}</a>
                @endif
            @else
                <a href="#" data-modal-target="modal-{{ $i }}" data-modal-toggle="modal-{{ $i }}"  type="button" class="w-20 text-white bg-red-700 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-8 py-4 text-center dark:bg-red-600 dark:hover:bg-red-400 dark:focus:ring-red-500">{{ $i }}</a>
            @endif
            <div id="modal-{{ $i }}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute right-0 top-px text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modal-{{ $i }}">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <br>
                        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                                <li class="me-2">
                                    <button id="irs-tab-{{ $i }}" data-tabs-target="#irs-{{ $i }}" type="button" role="tab" aria-controls="irs" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">IRS</button>
                                </li>
                                <li class="me-2">
                                    <button id="khs-tab-{{ $i }}" data-tabs-target="#khs-{{ $i }}" type="button" role="tab" aria-controls="khs" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">KHS</button>
                                </li>
                                <li class="me-2">
                                    <button id="pkl-tab-{{ $i }}" data-tabs-target="#pkl-{{ $i }}" type="button" role="tab" aria-controls="pkl" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">PKL</button>
                                </li>
                                <li class="me-2">
                                    <button id="skripsi-tab-{{ $i }}" data-tabs-target="#skripsi-{{ $i }}" type="button" role="tab" aria-controls="skripsi" aria-selected="false" class="inline-block p-4 hover:text-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-gray-300">Skripsi</button>
                                </li>
                            </ul>
                            <div id="defaultTabContent">
                                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="irs-{{ $i }}" role="tabpanel" aria-labelledby="irs-tab">
                                @if (isset($allIRS[$i]) && count($allIRS[$i]) > 0)
                                    <div class="form-group">
                                    <label for="semester" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                                        <input type="text" id="semester" name="semester" value="{{ $allIRS[$i][0]->smst_aktif }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="jml_sks" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah SKS</label>
                                        <input type="text" id="jml_sks" name="jml_sks" value="{{ $allIRS[$i][0]->jumlah_sks }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="scan_irs" class="text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scan IRS <a href="{{ asset('berkasIRS/' . $allIRS[$i][0]->berkas_irs) }}" class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Lihat file</a></label>
                                    </div>
                                @else
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Tidak ada progress IRS</p>
                                @endif
                                </div>
                                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="khs-{{ $i }}" role="tabpanel" aria-labelledby="khs-tab">
                                @if(isset($allKHS[$i]) && count($allKHS[$i]) > 0)
                                <div class="form-group">
                                    <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester</label>
                                    <input type="text" id="semester" name="semester" value="{{ $allKHS[$i][0]->smt_aktif }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="sks_smt" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah SKS Semester</label>
                                    <input type="text" id="sks_smt" name="sks_smt" value="{{ $allKHS[$i][0]->SKS_semester }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="sks_kum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah SKS Kumulatif</label>
                                    <input type="text" id="sks_kum" name="sks_kum" value="{{ $allKHS[$i][0]->SKS_kumulatif }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="ips" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IP Semester</label>
                                    <input type="text" id="ips" name="ips" value="{{ $allKHS[$i][0]->IP_smt }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">IP Kumulatif</label>
                                    <input type="text" id="ipk" name="ipk" value="{{ $allKHS[$i][0]->IP_kumulatif }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="scan_khs" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scan KHS <a href="{{ asset('berkasKHS/' . $allKHS[$i][0]->berkas_KHS) }}" class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Lihat file</a></label>
                                </div>
                                @else
                                <p class="mb-3 text-gray-500 dark:text-gray-400">Tidak ada progress KHS</p>
                                @endif
                                </div>
                                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="pkl-{{ $i }}" role="tabpanel" aria-labelledby="pkl-tab">
                                @if(isset($PKL[$i]) && count($PKL[$i]) > 0)
                                    <div class="form-group">
                                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                        <input type="text" id="status" name="status" value="{{ $PKL[$i][0]->status_pkl }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai</label>
                                        <input type="text" id="nilai" name="nilai" value="{{ $PKL[$i][0]->nilai_pkl }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="scan_pkl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scan PKL <a href="{{ asset('berkasPKL/' . $PKL[$i][0]->berkas_PKL) }}" class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Lihat file</a></label>
                                    </div>
                                @else
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Tidak ada progress PKL</p>
                                @endif
                                </div>
                                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="skripsi-{{ $i }}" role="tabpanel" aria-labelledby="skripsi-tab">
                                @if(isset($skripsi[$i]) && count($skripsi[$i]) > 0)
                                    <div class="form-group">
                                        <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                        <input type="text" id="status" name="status" value="{{ $skripsi[$i][0]->status_skripsi }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nilai</label>
                                        <input type="text" id="nilai" name="nilai" value="{{ $skripsi[$i][0]->nilai_skripsi }}" aria-label="disabled input" class="mb-6 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="scan_pkl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scan PKL <a href="{{ asset('berkasSkripsi/' . $skripsi[$i][0]->berkas_skripsi) }}" class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400 inline-flex items-center justify-center">Lihat file</a></label>
                                    </div>
                                @else
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">Tidak ada progress skripsi</p>
                                @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endfor
        </div>
    </div>
</div>
</div>
@endsection

@include('dosen.script')
