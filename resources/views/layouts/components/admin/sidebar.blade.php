<div class="d-block d-sm-block d-xs-block d-md-block d-lg-none">
    <div id="sidebar" class="collapse collapse-horizontal show">
        <div id="sidebar-nav" class="list-group text-sm-start">
            <a href="#sidebar-collapse" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebar-collapse"><span>{{Auth::user()->name}}</span><span class="me-auto bi bi-caret-down-fill float-end"></span> </a>
            <div class="collapse menu-profile" id="sidebar-collapse">
                    <hr>
                <a href="{{url('/')}}" target="_blank" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-eye"></i> <span>View Site</span></a>
                <form action="{{url('/logout')}}" method="post">
                        @csrf
                        <button class="text-danger btn" type="submit"><i class="bi bi-box-arrow-right"></i> <span>Logout</span></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="sidebar" class="collapse collapse-horizontal show">
    <div id="sidebar-nav" class="list-group text-sm-start">
        <a href="{{url('dashboard')}}" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-house-door"></i> <span>Dashboard</span> </a>
        <a href="{{url('landing_page')}}" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-view-list"></i> <span>Landing Page Setting</span></a>
        <a href="{{url('profile')}}" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-person-badge"></i> <span>Profile</span></a>
        <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-newspaper"></i> <span>Article</span></a>
        <a href="{{url('faq')}}" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-question-square"></i> <span>FAQ</span></a>
        <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-person-lines-fill"></i> <span>Contact</span></a>
        <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-file-earmark-pdf"></i> <span>Document</span></a>
        <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-journal-code"></i> <span>SOP & Layanan</span></a>
        <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-card-checklist"></i> <span>Jurnal Kerja</span></a>
        <a href="#master-collapse" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="master-collapse"><i class="bi bi-cpu-fill"></i> <span>Master Data</span><span class="me-auto bi bi-caret-down-fill float-end"></span> </a>
            <div class="collapse menu-profile" id="master-collapse">
                <a href="{{url('master_menu')}}" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-cpu"></i> <span>Master Data Menu</span></a>
                <a href="{{url('master_category')}}" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-cpu"></i> <span>Master Kategori</span></a>
                <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-cpu"></i> <span>Master User Roles</span></a>
                <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-cpu"></i> <span>Master Kategori Pekerjaan</span></a>
                <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-cpu"></i> <span>Master Status Pekerjaan</span></a>
            </div>
        <a href="#" class="list-group-item d-inline-block text-truncate" data-bs-parent="#sidebar"><i class="bi bi-people"></i> <span>Users & Role</span></a>
    </div>
</div>