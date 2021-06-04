<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        INFO-SC
    </div>
    <div class="container-fluid">
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/matkul"><i class="lnr lnr-home"></i> <span>Beranda</span></a></li>
                <li><a href="/forum"><i class="lnr lnr-users"></i> <span>Forum</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span>{{auth()->user()->name}}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="/profilsaya"><i class="lnr lnr-user"></i> <span>Profil Saya</span></a></li>
                        <li><a href="/logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>