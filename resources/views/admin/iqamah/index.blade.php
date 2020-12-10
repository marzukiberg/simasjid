@extends('admin.layout.app')

@section('title', 'Waktu Iqomah')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Tabel Waktu Iqamah</h4>
            <p class="card-category">Disini Anda dapat mengatur jeda waktu iqamah setelah Adzan dan jeda layar
                mati.</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            Waktu
                        </th>
                        <th>
                            Jeda Iqamah
                            <div class="help">
                                <span class="material-icons help_icon">help
                                </span>
                                <span class="help_text">Jeda menuju Iqamah setelah Adzan dikumandangkan.</span>
                            </div>
                        </th>
                        <th>
                            Jeda Layar Mati
                            <div class="help">
                                <span class="material-icons help_icon">help
                                </span>
                                <span class="help_text">Jeda layar mati setelah Adzan dikumandangkan.</span>
                            </div>
                        </th>
                        <th>
                            Aksi
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection