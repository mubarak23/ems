<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("compaines.list") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                     Dashboard 
                </a>
            </li>
            
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="{{ route("company.create") }}">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        Create  Company 
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                 Employees
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                 Admin 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                 Users 
                            </a>
                        </li>
                    </ul>
                </li>
           
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key">

                    </i>
                    Change password
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout')}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    Logout
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>