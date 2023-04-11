<nav class="navbar-default navbar-static-side" role="navigation" style="background: #ffff;">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="..." class="logo" src="{{ asset('assets/img/logo/logo-black-mobile.png') }}"
                        width="100%">
                    {{-- <img alt="image" class="rounded-circle" src="img/profile_small.jpg" />
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">David Williams</span>
                        <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul> --}}
                </div>
                <div class="logo-element">
                    CMS
                </div>
            </li>
            <li class="{{ request()->routeIs('dashboard.index') ? 'active' : '' }}">
                <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Beranda</span></a>
            </li>
            <li>
                <a
                    href="{{ Route::currentRouteName() === 'staff.index' || Route::currentRouteName() === 'category.index' ? 'active' : '' }}"><i
                        class="fa fa-th-large"></i> <span class="nav-label">Master</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('staff.index') }}">Staff</a></li>
                    <li><a href="{{ route('category.index') }}">Category Press</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Content</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('carrousel.index') }}">Carrousel Benner</a></li>
                    <li><a href="{{ route('article.index') }}">Press/Article</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Projects</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('decoration_cms.index') }}">Decoration</a></li>
                    <li><a href="{{ route('floral_cms.index') }}">Floral Styling</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Keamanan</span>
                    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ route('m_access.index') }}">Management Access</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Log Activitas</span></a>
            </li>
        </ul>

    </div>
</nav>
