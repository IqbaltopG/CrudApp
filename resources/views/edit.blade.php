@extends('layout.main')

@section('container')
<div class="mx-auto">
    <form action="/siswa/{{$post->id}}" method="POST">
    @csrf
    @method('put')
    <div class="mx-auto pt-9 w-96 bg-slate-700 rounded-lg border-8 border-slate-700">

        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="NIK" id="NIK" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" value="{{$post->NIK,old('NIK')}}"/>
            <label for="NIK" class="peer-focus:font-medium absolute text-sm text-white dark:text-white-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIK</label>
            @error('NIK')
                  <div class="text-red-500 text-xs">
                    {{$message}}
                  </div>
              @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  value="{{$post->nama,old('nama')}}"/>
            <label for="nama" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
            @error('nama')
                  <div class="text-red-500 text-xs">
                    {{$message}}
                  </div>
              @enderror
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="alamat" id="alamat" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  value="{{$post->alamat,old('alamat')}}" />
            <label for="alamat" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Alamat</label>
            @error('alamat')
                  <div class="text-red-500 text-xs">
                    {{$message}}
                  </div>
              @enderror
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="kelurahan" id="kelurahan" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  value="{{$post->kelurahan,old('kelurahan')}}"/>
              <label for="kelurahan" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kelurahan</label>
              @error('kelurahan')
              <div class="text-red-500 text-xs">
                {{$message}}
              </div>
          @enderror
          </div>
          <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="kecamatan" id="kecamatan" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  value="{{$post->kecamatan,old('kecamatan')}}"/>
              <label for="kecamatan" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kecamatan</label>
              @error('kecamatan')
                  <div class="text-red-500 text-xs">
                    {{$message}}
                  </div>
              @enderror
          </div>
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
          <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="kota" id="kota" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  value="{{$post->kota,old('kota')}}"/>
              <label for="kota" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kota</label>
              @error('kota')
                  <div class="text-red-500 text-xs">
                    {{$message}}
                  </div>
              @enderror
          </div>
          <div class="relative z-0 w-full mb-6 group">
            <input type="date" name="dob" id="dob" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  value="{{$post->dob,old('dob')}}"/>
            <label for="dob" class="peer-focus:font-medium absolute text-sm text-gray-400 dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Lahir</label>
            @error('dob')
                <div class="text-red-500 text-xs">
                  {{$message}}
                </div>
            @enderror
        </div>
        </div>
        <div class="relative z-0 w-full mb-6 group">
            <input type="text" name="provinsi" id="provinsi" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  value="{{$post->provinsi,old('provinsi')}}"/>
            <label for="provinsi" class="peer-focus:font-medium absolute text-sm text-white dark:text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Provinsi</label>
            @error('provinsi')
                <div class="text-red-500 text-xs">
                  {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ml-32">UPDATE</button>

    </form>
</div>


@endsection
