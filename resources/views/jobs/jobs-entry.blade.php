@extends('layouts.app')

@section('title')
    Tambah Jobs | JobsJive
@endsection

@section('content')
    <h3>Input Jobs</h3>
    <div class="form-login">
        <form action="{{ url('/jobs/store') }}" method="post" enctype="multipart/form-data">
            @csrf <!-- Add CSRF token for security -->

            <label for="nama_perusahaan">Nama Perusahaan</label>
            <input class="input" type="text" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" value="{{ old('nama_perusahaan') }}" />
            @error('nama_perusahaan')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="nama_pekerjaan">Nama Pekerjaan</label>
            <input class="input" type="text" name="nama_pekerjaan" id="nama_pekerjaan" placeholder="Nama Pekerjaan" value="{{ old('nama_pekerjaan') }}" />
            @error('nama_pekerjaan')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="deskripsi">Deskripsi</label>
            <textarea class="input" name="deskripsi" id="deskripsi" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
            @error('deskripsi')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="deskripsi">Syarat</label>
            <textarea class="input" name="syarat" id="syarat" placeholder="Syarat">{{ old('syarat') }}</textarea>
            @error('syarat')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="gaji">Gaji</label>
            <input class="input" type="number" name="gaji" id="gaji" placeholder="Gaji" value="{{ old('gaji') }}" />
            @error('gaji')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">Simpan</button>
        </form>
    </div>
@endsection
