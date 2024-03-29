@extends('layout.main')


@section('container')
@if (session()->has('success'))
<div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md" role="alert">
    <div class="flex">

        <p class="font-bold">{{session('success')}}</p>

      </div>
    </div>
  </div>
@endif
@if (session()->has('delete'))
<div id="alert-additional-content-2" class="p-4 mb-4 text-red-800 border border-red-600 rounded-lg bg-red-300 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
    <div class="flex items-center">
      <svg class="flex-shrink-0 w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <h3 class="text-lg font-medium">{{session('delete')}}</h3>
    </div>
    <div class="flex">
      <button type="button" class="text-red-800 bg-transparent border border-red-800 hover:bg-red-900 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:hover:bg-red-600 dark:border-red-600 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800" data-dismiss-target="#alert-additional-content-2" aria-label="Close">
        Dismiss
      </button>
    </div>
</div>
@endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-white dark:text-white">
        <thead class="text-xs text-gray-100 uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    @sortablelink('NIK')
                </th>
                <th scope="col" class="px-6 py-3 ">
                    @sortablelink('nama')
                </th>
                <th scope="col" class="px-6 py-3 ">
                    DOB
                </th>
                <th scope="col" class="px-6 py-3 ">
                    UMUR(th)
                </th>
                <th scope="col" class="px-6 py-3 ">
                    Alamat
                 </th>
                 <th scope="col" class="px-6 py-3 ">
                    Kelurahan
                 </th>
                 <th scope="col" class="px-6 py-3 ">
                    Kecamatan
                 </th>
                 <th scope="col" class="px-6 py-3 ">
                    @sortablelink('kota')
                 </th>
                 <th scope="col" class="px-6 py-3 ">
                    Provinsi
                 </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($post as $item)
            <tr class="{{ $loop->even ? 'bg-gray-600' : 'bg-slate-500' }} border-gray-900 dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-400">
                <th scope="row" class="px-6 py-1 font-medium text-white whitespace-nowrap dark:text-white">
                    {{$item->NIK}}
                </th>
                <td class=" px-6 py-1">
                    {{$item->nama}}
                </td>
                <td class=" px-6 py-1">
                    {{$item->dob}}
                </td>
                <td class=" px-6 py-1">
                    {{\Carbon\Carbon::parse($item->dob)->diff(\Carbon\Carbon::now())->format('%y');}}
                </td>
                <td class="px-6 py-1">
                    {{$item->alamat}}
                </td>
                <td class="px-6 py-1">
                    {{$item->kelurahan}}
                </td>
                <td class="px-6 py-1">
                    {{$item->kecamatan}}
                </td>
                <td class="px-6 py-1">
                    {{$item->kota}}
                </td>
                <td class="px-6 py-1">
                    {{$item->provinsi}}
                </td>
                <td class="px-1 w-2 py-1 inline-flex ">
                    <div>
                            <button data-modal-target="default-modal-{{$item->id}}" data-modal-toggle="default-modal-{{$item->id}}"  class="pl-5  text-yellow-300 background-transparent font-bold uppercase px-3  text-xs outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 hover:underline">detail</button>
                            {{-- modal spot --}}

                            <div id="default-modal-{{$item->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-2xl max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-gray-900 rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-800 dark:border-gray-800">
                                            <h3 class="text-xl font-semibold text-white dark:text-white">
                                                DETAIL
                                            </h3>
                                            <button type="button" class="text-white bg-transparent hover:bg-gray-600 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal-{{$item->id}}">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5 space-y-4 bg-gray-700">
                                            <h1 class="text-white font-bold">NIK : {{$item->NIK}}</h1>
                                            <h1 class="text-white font-bold">Nama : {{$item->nama}}</h1>
                                            <h1 class="text-white font-bold">Alamat : {{$item->alamat}}</h1>
                                            <h1 class="text-white font-bold">Kelurahan : {{$item->kelurahan}}</h1>
                                            <h1 class="text-white font-bold">kecamatan : {{$item->kecamatan}}</h1>
                                            <h1 class="text-white font-bold">Kota : {{$item->kota}}</h1>
                                            <h1 class="text-white font-bold">Provinsi : {{$item->provinsi}}</h1>

                                        </div>
                                        <!-- Modal footer -->
                                        <div class="items-center p-4 md:p-5 border-t border-gray-600 ro

                                        unded-b dark:border-gray-600 inline-flex">
                                            <a class="font-bold pb-1 uppercase ease-linear text-blue-400 dark:text-blue-800 hover:underline" href="/siswa/{{$item->id}}/edit"> EDIT </a>
                                            <form action="/siswa/{{$item->id}}" method="POST">
                                                @method('DELETE')
                                                @csrf



                                                <button class="pl-3 font-bold  text-rose-500 background-transparent uppercase px-3  outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 hover:underline" onclick="return confirm('Yakin ???')" type="submit">delete</button>
                                            </form>
                                            {{-- <button data-modal-hide="default-modal-{{$item->id}}" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 ">CLOSE</button> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        {{-- <a class="font-medium text-blue-400 dark:text-blue-500 hover:underline" href="/siswa/{{$item->id}}/edit"> EDIT </a> --}}

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


    @endsection
