<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;


class JobsController extends Controller
{
    public function index()
    {
        $jobs = Jobs::all();
        return view('jobs.jobs', compact('jobs'));
    }

    public function create()
    {
        return view('jobs.jobs-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'nama_pekerjaan' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
            'gaji' => 'required',
        ]);


        Jobs::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,
            'syarat' => $request->syarat,
            'gaji' => $request->gaji,
        ]);

        return redirect('/jobs');
    }

    public function edit($id_jobs)
    {
        $jobs = Jobs::find($id_jobs);
        return view('jobs.jobs-edit', compact('jobs'));
    }

    public function update(Request $request, $id_jobs)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'nama_pekerjaan' => 'required',
            'deskripsi' => 'required',
            'syarat' => 'required',
            'gaji' => 'required',
        ]);

        $jobs = Jobs::find($id_jobs);
        $jobs->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'nama_pekerjaan' => $request->nama_pekerjaan,
            'deskripsi' => $request->deskripsi,
            'syarat' => $request->syarat,
            'gaji' => $request->gaji,
        ]);

        return redirect('/jobs');
    }

    public function delete($id_jobs)
    {
        $jobs = Jobs::find($id_jobs);
        return view('jobs.jobs-hapus', compact('jobs'));
    }

    public function destroy($id_jobs)
    {
        $jobs = Jobs::find($id_jobs);
        $jobs->delete();
        return redirect('/jobs');
    }
}
