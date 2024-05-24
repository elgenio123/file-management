<div class="wrapper-pro">
    <div class="left-sidebar-pro">
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="#"><img src="../img/admin.jpg" alt="" />
                </a>
                <h3>{{ Auth::user()->name }}</h3>
                <p>Administrator</p>
                <strong>FM</strong>
            </div>
            <div class="left-custom-menu-adp-wrap">
                <ul class="nav navbar-nav left-sidebar-menu-pro">
                    <li class="nav-item">
                        <a href="{{ route('admin.home') }}" ><i class="fa fa-home"></i> <span class="mini-dn">Dashboard</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.upload-file') }}" ><i class="fa big-icon fa-building"></i> <span class="mini-dn">Upload file</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.departments') }}" ><i class="fa fa-square"></i> <span class="mini-dn">Department</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.category') }}" ><i class="fa fa-warehouse"></i> <span class="mini-dn">Category</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.department-users') }}" ><i class="fa big-icon fa-users"></i> <span class="mini-dn">Department User</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.files') }}" ><i class="fa big-icon fa-folder"></i> <span class="mini-dn">Files</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.settings') }}" ><i class="fa big-icon fa-cog"></i> <span class="mini-dn">Settings</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.department-report') }}" ><i class="fa fa-square"></i> <span class="mini-dn">Department Reports</span> </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.status-report') }}" ><i class="fa fa-circle"></i> <span class="mini-dn">Status Reports</span> </span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
