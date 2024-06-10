@extends('layouts.app')

@section('title')
    Hapus Employee | JobsJIve
@endsection

@section('content')
    <h3>Hapus Employee</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/employee/destroy/' . $employee->id_employees) }}>
                Yes
            </a>
        </button>
        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="/employee">
                No
            </a>
        </button>
    </div>
@endsection
