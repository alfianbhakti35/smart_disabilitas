<div class="sidebar sidebar-style-2">			
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{URL::to('/')}}/backend/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Admin</h4>
                </li>
                <li class="nav-item {{ Request::is('materi*') ? 'active' : '' }}">
                    <a href="/materi">
                        <i class="fas fa-book-open"></i>
                        <p>Materi</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('matkul*') ? 'active' : '' }}">
                    <a href="/matkul">
                        <i class="fas fa-list-alt"></i>
                        <p>Mata Kuliah</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('kelas*') ? 'active' : '' }}">
                    <a href="/kelas">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <p>Kelas</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('fakultas*') ? 'active' : '' }}">
                    <a href="/fakultas">
                        <i class="fas fa-university"></i>
                        <p>Fakultas</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('prodi*') ? 'active' : '' }}">
                    <a href="/prodi">
                        <i class="fas fa-suitcase"></i>
                        <p>Program Studi</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('pengguna*') ? 'active' : '' }}">
                    <a href="/pengguna">
                        <i class="fas fa-book-reader"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('akun*') ? 'active' : '' }}">
                    <a href="/akun">
                        <i class="fas fa-user-friends"></i>
                        <p>Akun</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>