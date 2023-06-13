<nav class="navbar navbar-expand-lg navbar-light fixed-top nb-main">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}" aria-label="logo">
                <div class="nb-wrap">
                    <div class="nb-img" style="background: url('{{asset('images/logo.webp')}}')">

                    </div>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profil
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('/visi-misi')}}">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="{{url('/struktur-organisasi')}}">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="{{url('team')}}">Team</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SOP & Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('/service')}}">Jaringan</a></li>
                        <li><a class="dropdown-item" href="{{url('/service')}}">Website / Sistem Informasi</a></li>
                        <li><a class="dropdown-item" href="{{url('/service')}}">Bantuan Media / Kegiatan Acara</a></li>
                        <li><a class="dropdown-item" href="{{url('/service')}}">Pengajuan Akun / Reset Password</a></li>
                        <li><a class="dropdown-item" href="{{url('/service')}}">Permohonan Permintaan Data</a></li>
                        <li><a class="dropdown-item" href="{{url('/service')}}">Permohonan Pelatihan / Pendampingan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/document')}}">Dokumen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/article')}}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/kontak')}}">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/frequently-asked-questions')}}">FAQ</a>
                </li>
                
            </ul>
            </div>
        </div>
    </nav>