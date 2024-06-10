@extends('layouts.app')

@section('title')
    Edit Job | JobsJive
@endsection

@section('content')
    <h3>Edit Job</h3>
    <div class="form-login">
        <form action="{{ url('/jobs/update/' . $jobs->id_jobs) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="nama_perusahaan">Nama Perusahaan</label>
            <input class="input" type="text" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan"
                value="{{ old('nama_perusahaan', $jobs->nama_perusahaan) }}" />
            @error('nama_perusahaan')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="nama_pekerjaan">Nama Pekerjaan</label>
            <input class="input" type="text" name="nama_pekerjaan" id="nama_pekerjaan" placeholder="Nama Pekerjaan"
                value="{{ old('nama_pekerjaan', $jobs->nama_pekerjaan) }}" />
            @error('nama_pekerjaan')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="deskripsi">Deskripsi</label>
            <textarea class="input" name="deskripsi" id="deskripsi" placeholder="Deskripsi">{{ old('deskripsi', $jobs->deskripsi) }}</textarea>
            @error('deskripsi')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="syarat">Syarat</label>
            <textarea class="input" name="syarat" id="syarat" placeholder="Syarat">{{ old('syarat', $jobs->syarat) }}</textarea>
            @error('syarat')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <label for="gaji">Gaji</label>
            <input class="input" type="text" name="gaji" id="gaji" placeholder="Gaji"
                value="{{ old('gaji', $jobs->gaji) }}" />
            @error('gaji')
                <p style="font-size: 10px; color: blue">{{ $message }}</p>
            @enderror

            <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
                Edit
            </button>
        </form>
    </div>
@endsection
