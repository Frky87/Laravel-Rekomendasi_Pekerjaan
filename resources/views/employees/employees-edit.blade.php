@extends('layouts.app')

@section('title')
    Edit Employee | JobsJIve
@endsection

@section('content')
    <h3>Edit Employee</h3>
    <div class="form-login">
        <form action="{{ url('/employee/update/' . $employee->id_employees) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="photo">Gambar</label>
            <img src="{{ asset('img_employees/' . $employee->gambar) }}" alt="" width="200px">
            <input type="file" name="gambar" id="photo" />
            @error('gambar')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <br><br>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input class="input" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap"
                value="{{ old('nama_lengkap', $employee->nama_lengkap) }}" />
            @error('nama_lengkap')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="input" name="jenis_kelamin" id="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki" {{ old('jenis_kelamin', $employee->jenis_kelamin) == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ old('jenis_kelamin', $employee->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jenis_kelamin')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="alamat">Alamat</label>
            <textarea class="input" name="alamat" id="alamat" placeholder="Alamat">{{ old('alamat', $employee->alamat) }}</textarea>
            @error('alamat')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
            <input class="input" type="text" name="pendidikan_terakhir" id="pendidikan_terakhir" placeholder="Pendidikan Terakhir"
                value="{{ old('pendidikan_terakhir', $employee->pendidikan_terakhir) }}" />
            @error('pendidikan_terakhir')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="keahlian">Keahlian</label>
            <input class="input" type="text" name="keahlian" id="keahlian" placeholder="Keahlian"
                value="{{ old('keahlian', $employee->keahlian) }}" />
            @error('keahlian')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
                Edit
            </button>
        </form>
    </div>
@endsection
