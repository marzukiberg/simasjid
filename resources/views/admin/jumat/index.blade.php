@extends('admin.layout.app')

@section('title', 'Petugas Jumat')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabel Petugas Jumat</h4>
            <p class="card-category">Disini Anda dapat mengatur Petugas Jumat pada Jumat-jumat mendatang.</p>
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
                            Muadzin
                        </th>
                        <th>
                            Khatib
                        </th>
                        <th>
                            Khatib Cadangan
                        </th>
                        <th>
                            Imam
                        </th>
                        <th>Aksi</th>
                    </thead>
                    <tbody id="jumat">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    const year = new Date().getFullYear()
    const month = new Date().getMonth() + 1
    let jumat = []
    for (let i = 0; i < 31; i++) {
        if(new Date(new Date(`${year}-${month}-${i}`).toLocaleDateString()).getDay() === 5){
        jumat.push(new Date(`${year}-${month}-${i}`).toLocaleDateString('id-ID', {
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        })) 
        }
    }
    document.querySelector("#jumat").innerHTML = `${jumat.map((item, index) => {
        return `
            <tr>
                <td>${index+1}</td>
                <td>Jumat, ${item}</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>
                    <button class="btn btn-primary btn-sm" title="Edit">
                        <span class="material-icons">edit</span>
                    </button>
                </td>
            </tr>
        `
    }).join('')}`
</script>
@endsection