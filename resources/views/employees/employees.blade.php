@extends('layouts.app')

@section('title')
    Employee | JobsJive
@endsection

@section('content')
    <h3>Data Employees</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/employee/create">Tambah Data</a>
    </button>
    <button type="button" class="btn btn-cetak">
        <a href="{{ route('employee.pdf') }}" target="_blank">Cetak PDF</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th scope="col" style="width: 20%">Photo</th>
                <th>Nama Lengkap</th>
                <th scope="col" style="width: 15%">Jenis Kelamin</th>
                <th scope="col" style="width: 30%">Alamat</th>
                <th scope="col" style="width: 20%">Pendidikan Terakhir</th>
                <th scope="col" style="width: 20%">Keahlian</th>
                <th scope="col" style="width: 20%">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td><img src="{{ asset('img_employees/' . $employee->gambar) }}" alt="" width="100px"></td>
                    <td>{{ $employee->nama_lengkap }}</td>
                    <td>{{ $employee->jenis_kelamin }}</td>
                    <td>{{ $employee->alamat }}</td>
                    <td>{{ $employee->pendidikan_terakhir }}</td>
                    <td>{{ $employee->keahlian }}</td>
                    <td>
                        <a class='btn-edit' href="/employee/edit/{{ $employee->id_employees }}">Edit</a>
                        |
                        <a class='btn-delete' href="/employee/delete/{{ $employee->id_employees}}">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
