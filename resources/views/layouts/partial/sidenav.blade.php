<!-- Left Sidebar -->
<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>

                <li class="submenu">
                    <a class="active" href="{{ route('dashboard') }}"><i class="fa fa-tachometer"></i><span> Dashboard </span> </a>
                </li>

                {{--dropdown submenu--}}
                {{--<li class="submenu">--}}
                    {{--<a href="#"><i class="fa fa-picture-o"></i> <span> Media </span> <span class="menu-arrow"></span></a>--}}
                    {{--<ul class="list-unstyled">--}}
                        {{--<li><a href="{{ route('media.img') }}">Images</a></li>--}}
                        {{--<li><a href="{{ route('media.videos') }}">Videos</a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

                <li class="submenu">
                    <a href="{{ route('media.img') }}"><i class="fa fa-picture-o"></i> <span> Images </span></a>
                </li>

                <li class="submenu">
                    <a href="{{ route('notice.all') }}"><i class="fa fa-sticky-note"></i> <span> Notices </span></a>
                </li>

                <li class="submenu">
                    <a href="{{ route('teachers') }}"><i class="fa fa-user"></i><span> Teachers </span> </a>
                </li>

                <li class="submenu">
                    <a href="{{ route('institute') }}"><i class="fa fa-graduation-cap"></i><span> Institute </span> </a>
                </li>
            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
<!-- End Sidebar -->