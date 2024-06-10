<!DOCTYPE html>
<html>
<head>
    <title>Data Employees</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <h3>Data Employees</h3>
    <table>
        <thead>
            <tr>
                <th>Photo</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Pendidikan Terakhir</th>
                <th>Keahlian</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td><img src="{{ public_path('img_employees/' . $employee->gambar) }}" alt="{{ $employee->nama_lengkap }}"></td>
                    <td>{{ $employee->nama_lengkap }}</td>
                    <td>{{ $employee->jenis_kelamin }}</td>
                    <td>{{ $employee->alamat }}</td>
                    <td>{{ $employee->pendidikan_terakhir }}</td>
                    <td>{{ $employee->keahlian }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
