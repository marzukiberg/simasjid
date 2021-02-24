@extends('admin.layout.app')

@section('title', 'Jadwal Kajian Islam')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tabel @yield('title')</h4>
            <p class="card-category">Disini Anda dapat mengatur jadwal kajian yang akan dilaksanakan.</p>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <button class="btn btn-primary">Tambah</button>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            No.
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Judul
                        </th>
                        <th>
                            Pengisi
                        </th>
                        <th>
                            Waktu
                        </th>
                        <th>
                            Aksi
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>12 Januari 2021</td>
                            <td>Bahaya Riba</td>
                            <td>Ust. Fahri Susaini</td>
                            <td>Ba'da Ashar</td>
                            <td>
                                <button class="btn btn-info btn-sm"><span class="material-icons">edit</span></button>
                                <button class="btn btn-danger btn-sm"><span
                                        class="material-icons">delete</span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection