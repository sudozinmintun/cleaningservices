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


        @can('list video')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('video.index') }}">
                    <i class="bi bi-play"></i>
                    <span>Video Management</span>
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

        @can('list visitor')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('visitor.index') }}">
                    <i class="bi bi-eye"></i>
                    <span>Site Visitor</span>
                </a>
            </li>
        @endcan

        @can('list subscribe')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('subscribe.index') }}">
                    <i class="bi bi-person"></i>
                    <span>Subscribe Users</span>
                </a>
            </li>
        @endcan

        @can('message history')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('sms.index') }}">
                    <i class="bi bi-hourglass-split"></i>
                    <span>Message History</span>
                </a>
            </li>
        @endcan

    </ul>

</aside>
<!-- End Sidebar-->
