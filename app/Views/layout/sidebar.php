<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">Nomen Nescio</a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="\dashboard" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#data" aria-expanded="false" aria-controls="data">
                <i class="lni lni-protection"></i>
                <span>Data</span>
            </a>
            <ul id="data" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="/pemain" class="sidebar-link">Data Pemain</a>
                </li>
                <li class="sidebar-item">
                    <a href="/pengurus" class="sidebar-link">Data Pengurus</a>
                </li>
                <li class="sidebar-item">
                    <a href="/calon" class="sidebar-link">Data Calon Anggota</a>
                </li>
                <li class="sidebar-item">
                    <a href="/jadwal_turnamen" class="sidebar-link">Jadwal Turnamen</a>
                </li>


            </ul>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="/logout" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>