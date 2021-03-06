 <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" style="max-width: 48px" class="img-circle" src="{{\Auth::user()->getAvatarurl()}}"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{\Auth::user()->getNameOrEmail(true)}}</strong>
                             </span> <span class="text-muted text-xs block">{{\Auth::user()->role->name}} <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        Rollo
                    </div>
                </li>                
                <li>
                    <a href="{{route('dashboard.index')}}"><i class="fa fa-diamond"></i> <span class="nav-label">Dashboard</span></a>
                </li>
                <li class="">
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">RBAC</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                            <li class="active"><a href="{{route('users.index')}}">Users</a></li>
                            <li><a href="{{route('roles.index')}}">Roles</a></li>
                            <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                        </ul>
                    </li>               
            </ul>

        </div>
    </nav>