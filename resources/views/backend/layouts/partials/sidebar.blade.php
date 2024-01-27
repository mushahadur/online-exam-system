<nav class="pcoded-navbar pt-2 ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">

                </li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Exam </label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i
                                class="feather icon-box"></i></span><span class="pcoded-mtext">Exam List</span></a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('english') }}">English</a></li>
                        <li><a href="{{ route('math') }}">Math</a></li>
                    </ul>
                </li>

                <li class="nav-item pcoded-menu-caption pcoded-mtex">
                    <label>Pages</label>
                </li>
                <li class="nav-item pcoded-hasmenu pcoded-trigger">
                    <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Result</span></a>
                    <ul class="pcoded-submenu" style="display: block;">
                        <li><a href="{{ route('my.result', ['id' =>  Auth::user()->id]) }}" >Your Result</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>
