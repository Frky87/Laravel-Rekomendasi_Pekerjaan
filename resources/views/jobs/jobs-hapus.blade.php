@extends('layouts.app')

@section('title')
    Hapus Jobs | JobsJIve
@endsection

@section('content')
    <h3>Hapus Employee</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/jobs/destroy/' . $jobs->id_jobs) }}>
                Yes
            </a>
        </button>
        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="/jobs">
                No
            </a>
        </button>
    </div>
@endsection
