<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('redirect')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HRMS Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('redirect')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Side bar heading
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee1"
        aria-expanded="true" aria-controls="collapseEmployee1">
        <i class="fas fa-fw fa-cog"></i>
        <span>Employee</span>
    </a>
    <div id="collapseEmployee1" class="collapse" aria-labelledby="headingEmployee1" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Employee Fields:</h6>
            <a class="collapse-item" href="{{url('vieweremployee')}}">Register Employee</a>
            <a class="collapse-item" href="{{url('allemployee')}}">Display Employee</a>
        </div>
    </div>
</li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Department</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">ADD Department</a>
                        <a class="collapse-item" href="utilities-border.html">View Department</a> 
                    </div>
                </div>
            </li>

            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Scholar Ship
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Scholarship Info</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="{{url('viewescholarship')}}">Add Scholarship</a>
                        <a class="collapse-item" href="{{url('viewscholarship')}}">View Scholarship</a>
                        <a class="collapse-item" href="forgot-password.html">Complated</a>
                        <a class="collapse-item" href="forgot-password.html">pending</a>
                        <a class="collapse-item" href="forgot-password.html">Fail</a>
                    </div>
                </div>
            </li>



<!-- Another Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee2"
        aria-expanded="true" aria-controls="collapseEmployee2">
        <i class="fas fa-fw fa-cog"></i>
        <span>Semester</span>
    </a>
    <div id="collapseEmployee2" class="collapse" aria-labelledby="headingEmployee2" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Semester Fields:</h6>
            <a class="collapse-item" href="{{url('viewesemester')}}">Register Semester</a>
            <a class="collapse-item" href="{{url('viewssemester')}}">Display Employee</a>
        </div>
    </div>
</li>



<li class="nav-item">
                <a class="nav-link" href="{{url('/checkmissresult')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Missig result</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/failsemester')}}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Failed Semester</span></a>
            </li>
            
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
        </ul>