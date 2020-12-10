<div class="sidebar-wrapper">
    <ul class="nav">
        <?php
           $menus = [
               [
                   'title' => 'Beranda',
                   'icon' => 'home',
                   'route' => 'beranda_admin'
               ],
               [
                   'title' => 'Iqomah',
                   'icon' => 'schedule',
                   'route' => 'iqamah_admin'
               ],
               [
                   'title' => 'Petugas Jumat',
                   'icon' => 'today',
                   'route' => 'jumat_admin'
               ],
               [
                   'title' => 'Jadwal Kajian',
                   'icon' => 'event',
                   'route' => 'kajian_admin'
               ],
               [
                   'title' => 'Agenda Masjid',
                   'icon' => 'next_plan',
                   'route' => 'agenda_admin'
               ],
               [
                   'title' => 'Konten',
                   'icon' => 'amp_stories',
                   'route' => 'konten_admin'
               ],
               [
                   'title' => 'Background',
                   'icon' => 'wallpaper',
                   'route' => 'background_admin'
               ],
               [
                   'title' => 'Inventaris',
                   'icon' => 'widgets',
                   'route' => 'inventaris_admin'
               ],
               [
                   'title' => 'Pengaturan',
                   'icon' => 'admin_panel_settings',
                   'route' => 'pengaturan_admin'
               ],
               [
                   'title' => 'Tentang',
                   'icon' => 'info',
                   'route' => 'tentang_admin'
               ],
           ]
        ?>
        @foreach ($menus as $item)
        <li class="nav-item">
            <a class="nav-link" href="{{ route($item['route']) }}">
                <i class="material-icons">{{$item['icon']}}</i>
                <p>{{$item['title']}}</p>
            </a>
        </li>
        @endforeach
    </ul>
</div>

<script>
    document.querySelectorAll('.nav-item').forEach(item => {
        if(item.children[0].href===window.location.href)item.classList.add('active')
    })
</script>