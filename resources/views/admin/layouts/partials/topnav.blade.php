<!-- top bar navigation -->
<div class="headerbar">

    <!-- LOGO -->
    <div class="headerbar-left">
        <a href="{{ route('dashboard') }}" class="logo"><img alt="Logo" src="{{ asset('admin-view/images/logo.png') }}" class="img-fluid"><span class="text-capitalize">Green Street Intl. School</span></a>
    </div>

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fa fa-fw fa-question-circle"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5><small>Help and Support</small></h5>
                    </div>

                    <!-- item-->
                    <a target="_blank" href="#" class="dropdown-item notify-item">
                        <p class="notify-details ml-0">
                            <b>Do you want custom development?</b>
                            <span>Contact Us</span>
                        </p>
                    </a>

                    <!-- item-->
                    <a target="_blank" href="#" class="dropdown-item notify-item">
                        <p class="notify-details ml-0">
                            <b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet.</b>
                            <span>Try Our Service</span>
                        </p>
                    </a>

                    <!-- All-->
                    <a title="Clcik to visit Pike Admin Website" target="_blank" href="#" class="dropdown-item notify-item notify-all">
                        <i class="fa fa-link"></i> Visit Our Website
                    </a>

                </div>
            </li>

            {{--<li class="list-inline-item dropdown notif">--}}
                {{--<a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">--}}
                    {{--<i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">--}}
                    {{--<!-- item-->--}}
                    {{--<div class="dropdown-item noti-title">--}}
                        {{--<h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>--}}
                    {{--</div>--}}

                    {{--<!-- item-->--}}
                    {{--<a href="#" class="dropdown-item notify-item">--}}
                        {{--<p class="notify-details ml-0">--}}
                            {{--<b>Jokn Doe</b>--}}
                            {{--<span>New message received</span>--}}
                            {{--<small class="text-muted">2 minutes ago</small>--}}
                        {{--</p>--}}
                    {{--</a>--}}

                    {{--<!-- item-->--}}
                    {{--<a href="#" class="dropdown-item notify-item">--}}
                        {{--<p class="notify-details ml-0">--}}
                            {{--<b>Michael Jackson</b>--}}
                            {{--<span>New message received</span>--}}
                            {{--<small class="text-muted">15 minutes ago</small>--}}
                        {{--</p>--}}
                    {{--</a>--}}

                    {{--<!-- item-->--}}
                    {{--<a href="#" class="dropdown-item notify-item">--}}
                        {{--<p class="notify-details ml-0">--}}
                            {{--<b>Foxy Johnes</b>--}}
                            {{--<span>New message received</span>--}}
                            {{--<small class="text-muted">Yesterday, 13:30</small>--}}
                        {{--</p>--}}
                    {{--</a>--}}

                    {{--<!-- All-->--}}
                    {{--<a href="#" class="dropdown-item notify-item notify-all">--}}
                        {{--View All--}}
                    {{--</a>--}}

                {{--</div>--}}
            {{--</li>--}}

            {{--<li class="list-inline-item dropdown notif">--}}
                {{--<a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">--}}
                    {{--<i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">--}}
                    {{--<!-- item-->--}}
                    {{--<div class="dropdown-item noti-title">--}}
                        {{--<h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>--}}
                    {{--</div>--}}

                    {{--<!-- item-->--}}
                    {{--<a href="#" class="dropdown-item notify-item">--}}
                        {{--<div class="notify-icon bg-faded">--}}
                            {{--<img src="{{ asset('admin-view/images/avatars/avatar2.png') }}" alt="img" class="rounded-circle img-fluid">--}}
                        {{--</div>--}}
                        {{--<p class="notify-details">--}}
                            {{--<b>John Doe</b>--}}
                            {{--<span>User registration</span>--}}
                            {{--<small class="text-muted">3 minutes ago</small>--}}
                        {{--</p>--}}
                    {{--</a>--}}

                    {{--<!-- item-->--}}
                    {{--<a href="#" class="dropdown-item notify-item">--}}
                        {{--<div class="notify-icon bg-faded">--}}
                            {{--<img src="{{ asset('admin-view/images/avatars/avatar3.png') }}" alt="img" class="rounded-circle img-fluid">--}}
                        {{--</div>--}}
                        {{--<p class="notify-details">--}}
                            {{--<b>Michael Cox</b>--}}
                            {{--<span>Task 2 completed</span>--}}
                            {{--<small class="text-muted">12 minutes ago</small>--}}
                        {{--</p>--}}
                    {{--</a>--}}

                    {{--<!-- item-->--}}
                    {{--<a href="#" class="dropdown-item notify-item">--}}
                        {{--<div class="notify-icon bg-faded">--}}
                            {{--<img src="{{ asset('admin-view/images/avatars/avatar4.png') }}" alt="img" class="rounded-circle img-fluid">--}}
                        {{--</div>--}}
                        {{--<p class="notify-details">--}}
                            {{--<b>Michelle Dolores</b>--}}
                            {{--<span>New job completed</span>--}}
                            {{--<small class="text-muted">35 minutes ago</small>--}}
                        {{--</p>--}}
                    {{--</a>--}}

                    {{--<!-- All-->--}}
                    {{--<a href="#" class="dropdown-item notify-item notify-all">--}}
                        {{--View All Allerts--}}
                    {{--</a>--}}

                {{--</div>--}}
            {{--</li>--}}

            <li class="list-inline-item dropdown notif">
                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{ asset('admin-view/images/avatars/admin.png') }}" alt="Profile image" class="avatar-rounded">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                    </div>

                    <!-- item-->
                    <a href="profile" class="dropdown-item notify-item">
                        <i class="fa fa-user"></i> <span>Profile</span>
                    </a>

                    <!-- item-->
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-power-off"></i> <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </li>
        </ul>

    </nav>

</div>
<!-- End Navigation -->