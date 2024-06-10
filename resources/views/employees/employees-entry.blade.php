@extends('layouts.app')

@section('title')
    Tambah Employee | JobsJIve
@endsection

@section('content')
    <h3>Input Employee</h3>
    <div class="form-login">
        <form action="{{ url('/employee/store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="photo">Gambar</label>
            <input type="file" name="gambar" id="photo" />
            @error('gambar')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror
            <br><br>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input class="input" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" value="{{ old('nama_lengkap') }}" />
            @error('nama_lengkap')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="input" name="jenis_kelamin" id="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="alamat">Alamat</label>
            <textarea class="input" name="alamat" id="alamat" placeholder="Alamat">{{ old('alamat') }}</textarea>
            @error('alamat')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <input class="input" type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir" value="{{ old('pendidikan_terakhir') }}" />
            @error('pendidikan_terakhir')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="keahlian">Keahlian</label>
            <input class="input" type="text" name="keahlian" id="keahlian" placeholder="Keahlian" value="{{ old('keahlian') }}" />
            @error('keahlian')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror
            <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">Simpan</button>
        </form>
    </div>
@endsection
