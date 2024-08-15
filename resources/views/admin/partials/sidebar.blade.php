<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        @can('list user')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.users') }}">
                    <i class="bi bi-person"></i>
                    <span>User Management</span>
                </a>
            </li>
        @endcan

        @can('list role')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('role.index') }}">
                    <i class="bi bi-key"></i>
                    <span>Roles Management</span>
                </a>
            </li>
        @endcan

        @can('list permission')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('permission.index') }}">
                    <i class="bi bi-list"></i>
                    <span>Permission Management</span>
                </a>
            </li>
        @endcan

        @can('list blog')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.post') }}">
                    <i class="bi bi-file"></i>
                    <span>Blog Management</span>
                </a>
            </li>
        @endcan


        @can('list faq')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('manage_faq.index') }}">
                    <i class="bi bi-question"></i>
                    <span>Faq Management</span>
                </a>
            </li>
        @endcan


        @can('list estimate page')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.estimate') }}">
                    <i class="bi bi-list"></i>
                    <span>Estimate Management</span>
                </a>
            </li>
        @endcan


        @can('list contact')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.contact') }}">
                    <i class="bi bi-list"></i>
                    <span>Contact Management</span>
                </a>
            </li>
        @endcan

    </ul>

</aside>
<!-- End Sidebar-->
