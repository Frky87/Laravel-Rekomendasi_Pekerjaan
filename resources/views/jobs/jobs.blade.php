@extends('layouts.app')

@section('title')
    Jobs | JobsJive
@endsection

@section('content')
    <h3>Data Jobs</h3>
    <button type="button" class="btn btn-tambah">
        <a href="/jobs/create">Tambah Data</a>
    </button>
    <table class="table-data">
        <thead>
            <tr>
                <th>Nama Perusahaan</th>
                <th scope="col" style="width: 15%">Nama Pekerjaan</th>
                <th scope="col" style="width: 30%">Deskripsi</th>
                <th scope="col" style="width: 30%">Syarat</th>
                <th scope="col" style="width: 20%">Gaji</th>
                <th scope="col" style="width: 20%">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($jobs as $job)
                <tr>
                    <td>{{ $job->nama_perusahaan }}</td>
                    <td>{{ $job->nama_pekerjaan }}</td>
                    <td>{{ $job->deskripsi }}</td>
                    <td>{{ $job->syarat }}</td>
                    <td>{{ $job->gaji }}</td>
                    <td>
                        <a class='btn-edit' href="/jobs/edit/{{ $job->id_jobs }}">Edit</a>
                        |
                        <a class='btn-delete' href="/jobs/delete/{{ $job->id_jobs}}">Hapus</a>
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
