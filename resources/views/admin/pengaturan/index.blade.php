@extends('admin.layout.app')

@section('title')
Pengaturan
@endsection

@section('content')
<style>
    .icon-title {
        width: 40px;
        height: 40px;
        margin-right: -2px;
    }
</style>
<div class="container-fluid">
    <div class="card">
        <div class="card-header card-header-primary">
            <h3 class="card-title">Pengaturan Masjid</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-success">
                            <h4 class="card-title d-flex align-items-center">
                                <img src="{{asset('public/assets/img/masjid-mosque.svg')}}" alt="Icon Masjid"
                                    class="icon-title"> Masjid</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="nama">Nama masjid</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required
                                        placeholder="Baiturrahman...." value="Baiturrahman">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" required
                                        placeholder="Jalan Serasi Raya II, Delima...."
                                        value="Jalan Serasi Raya II, Delima">
                                </div>
                                <div class="form-group">
                                    <label for="pengurus">Pengurus</label>
                                    <input type="text" name="pengurus" id="pengurus" class="form-control" required
                                        placeholder="Fahri Susaini...." value="Fahri Susaini">
                                </div>
                                <div class="form-group">
                                    <label for="kontak">Kontak</label>
                                    <input type="text" name="kontak" id="kontak" class="form-control" required
                                        placeholder="082286062083...." value="082286062083">
                                </div>
                                <div class="form-group">
                                    <button type="button" onclick="setLatAndLong()" class="btn btn-primary btn-sm"><span
                                            class="material-icons">location_on</span> Dapatkan latitude dan
                                        longitude</button>
                                    <strong class="mb-1 d-block" id="location"></strong>
                                </div>
                                <div class="form-group">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" name="latitude" id="latitude" class="form-control" required
                                        placeholder="101.2323232....">
                                </div>
                                <div class="form-group">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" name="longitude" id="longitude" class="form-control" required
                                        placeholder="101.2323232....">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary btn-sm px-3"><span class="material-icons">edit</span>
                                        Perbarui</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-warning">
                            <h4 class="card-title"><span class="material-icons">account_balance</span> Akun Bank</h4>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary btn-sm"><span class="material-icons">add</span> Tambah
                                akun</button>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Bank</th>
                                        <th>Nomor Rekening</th>
                                        <th>Atas Nama</th>
                                        <th>Aktif</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">1</td>
                                        <td>BRI Syariah</td>
                                        <td>76612321123</td>
                                        <td>Marzuki</td>
                                        <td>
                                            <label for="toggler" class="btn btn-primary btn-toggle"
                                                onclick="toggleActive(event)"><span></span><input type="checkbox"
                                                    name="toggler" id="toggler" aria-hidden="true" class="d-none"
                                                    onchange="handleActive(event)" /></label>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm"><span
                                                    class="material-icons">edit</span></button>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-info">
                            <h4 class="card-title">Profil Saya</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </div>
</div>
<script>
    function setLatAndLong(e){
        const lat = document.querySelector('#latitude'), long = document.querySelector('#longitude'), location = document.querySelector('#location')
        function success(position){
            const latitude  = position.coords.latitude;
            const longitude = position.coords.longitude;
            const url = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=id`
            fetch(url).then(res => res.json()).then(data => {
                location.innerText = `${data.city!==''?data.city+', ': ''}${data.locality!==''?data.locality+', ': ''}${data.countryName!==''?data.countryName: ''}`
            })
            lat.value = latitude
            long.value = longitude
        }
        function error(){
            swal({
                title: 'Gagal',
                text: 'Gagal mendapatkan lokasi',
                type: 'error'
            })
        }
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(success, error)
        }else{
            swal({
                title: 'Gagal',
                text: 'Browser ini tidak mendukung lokasi, harap atur latitude dan longitude seacara manual!',
                type: 'error'
            })
        }
    }

    function toggleActive(e){
        e.target.classList.contains('active') ? e.target.classList.remove('active') : e.target.classList.add('active')
    }
    function handleActive(e){
        const checked = e.target.checked;
        console.log(checked);
    }
</script>
@endsection