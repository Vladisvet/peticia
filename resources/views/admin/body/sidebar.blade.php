<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-users"></i>
        </div> --}}
        <div class="ml-3 sidebar-brand-icon">
            <i class="fas fa-users fa-5x"></i>
        </div>
        <div class="sidebar-brand-icon">
            <i class="fas fa-users fa-5x"></i>
        </div>
        <div class="sidebar-brand-icon">
            <i class="fas fa-users fa-5x"></i>
        </div>
        <div class="sidebar-brand-text mr-3 ml-1" ><sub>.peticia</sub></div>
        {{-- <div class="sidebar-brand-text mr-3 rotate-n-15"><sup >.org</sup></div> --}}
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link active" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-user"></i>
            <span>Organizátori/Users</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Organizátori:</h6>
                <a class="collapse-item" href="{{ route('backend-users') }}">Manažment organizátorov</a>

            </div>
        </div>
    </li>

        <!-- Nav Item - Users Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePet"
                aria-expanded="true" aria-controls="collapsePet">
                <i class="fas fa-fw fa-user"></i>
                <span>Petície</span>
            </a>
            <div id="collapsePet" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Petície:</h6>
                    <a class="collapse-item" href="{{ route('backend-petitions') }}">Zoznam petícií</a>

                </div>
            </div>
        </li>

    <!-- Nav Item - Kategorie Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
            aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-clipboard-list"></i>
            <span>Kategórie</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kategórie:</h6>
                <a class="collapse-item" href="{{ route('categories') }}">Správa Kategórií</a>

            </div>
        </div>
    </li>

        <!-- Nav Item - SEO Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                aria-expanded="true" aria-controls="collapseFour">
                <i class="fas fa-fw fa-search-location"></i>
                <span>SEO </span>
            </a>
            <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">SEO:</h6>
                    <a class="collapse-item" href="{{ route('seo.setting') }}">Správa SEO</a>

                </div>
            </div>
        </li>



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item collapsed">
        <a class="nav-link" href="{{ route('register') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
