@extends('admin.layout.app')

@section('title', 'Inventaris')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Tabel @yield('title')</h4>
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
                            Nama barang
                        </th>
                        <th>
                            Tanggal masuk
                        </th>
                        <th>
                            Sumber
                        </th>
                        <th>
                            Kondisi
                        </th>
                        <th>
                            Keterangan
                        </th>
                        <th>
                            Aksi
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>AC</td>
                            <td>21 Januari 2021
                            </td>
                            <td>
                                Kas Masjid
                            </td>
                            <td>Baru</td>
                            <td>-</td>
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
<script>
    function toggleActive(e){
        e.target.classList.contains('active') ? e.target.classList.remove('active') : e.target.classList.add('active')
    }
    function handleActive(e){
        const checked = e.target.checked;
        console.log(checked);
    }
</script>
@endsection