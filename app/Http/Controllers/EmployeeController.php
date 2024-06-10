<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.employees', compact('employees'));
    }

    public function create()
    {
        return view('employees.employees-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|mimes:png,jpg,jpeg|max:2048',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'keahlian' => 'required',
        ]);

        $gambar = $request->file('gambar');
        $photo = time() . '_' . $gambar->getClientOriginalName();
        $tujuan_upload = 'img_employees';
        $gambar->move($tujuan_upload, $photo);

        Employee::create([
            'gambar' => $photo,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'keahlian' => $request->keahlian,
        ]);

        return redirect('/employee');
    }

    public function edit($id_employees)
    {
        $employee = Employee::find($id_employees);
        return view('employees.employees-edit', compact('employee'));
    }

    public function update(Request $request, $id_employees)
    {
        $request->validate([
            'gambar' => 'file|mimes:png,jpg,jpeg|max:2048',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'keahlian' => 'required',
        ]);

        $employee = Employee::find($id_employees);

        if($request->hasFile('gambar')) {
            File::delete('img_employees/'.$employee->gambar);
            $gambar = $request->file('gambar');
            $photo = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_employees';
            $gambar->move($tujuan_upload, $photo);
            $employee->gambar = $photo;
        }

        $employee->update([
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'keahlian' => $request->keahlian,
        ]);

        return redirect('/employee');
    }

    public function delete($id_employees)
    {
        $employee = Employee::find($id_employees);
        return view('employees.employees-hapus', compact('employee'));
    }

    public function destroy($id_employees)
    {
        $employee = Employee::find($id_employees);
        File::delete('img_employees/'.$employee->gambar);
        $employee->delete();
        return redirect('/employee');
    }

    public function generatePDF()
{
    $employees = Employee::all();
    $pdf = PDF::loadView('employees.employees-pdf', compact('employees'));
    return $pdf->download('employees.pdf');
}
}
