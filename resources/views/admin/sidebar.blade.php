<!-- navbar side -->

<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="{{asset('assets')}}/admin/assets/img/user.jpg" alt="">
                    </div>
                    <div class="user-info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                        <a href="/logoutuser" class="text-uppercase">Logout</a>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="sidebar-search">
                <!-- search section-->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!--end search section-->
            <li class="">
                <a href="index.html"><i class="fa fa-home fa-home"></i><b>&nbsp;Dashboard</b></a>
            </li>
            <li>
                <a href="/admin/transfer"><i class="fa fa-bar-chart-o fa-fw"></i><b>Transfer</b><span class="fa arrow"></span></a>

                <!-- second-level-items -->
            </li>

            <li>
                <a href="/admin/category"><i class="fa fa-bar-chart-o fa-fw"></i><b>&nbsp;Category</b></a>
                <a href="/admin/rezervation"><i class="fa fa-edit fa-fw"></i><b>&nbsp;Rezervation</b></a>
                <a href="/admin/location"><i class="fa fa-flask fa-location-arrow"> </i><b>&nbsp;Location</b></a>
                <a href="{{route('admin.message.index')}}"><i class="fa fa-flask fa-mail-reply-all"></i><b>&nbsp;Messages</b></a>
                <a href="{{route('admin.faq.index')}}"><i class="fa fa-flask fa-question"></i><b>&nbsp;Faq</b></a>
                <a href="/admin/comment"><i class="fa fa-flask fa-comment-o"></i><b>&nbsp;Comments</b></a>
                <a href="/admin/user"><i class="fa fa-user fa-user"></i><b>&nbsp;Users</b></a>
                <a href="/admin/social"><i class="fa fa-facebook-square fa-facebook-square"></i><b>&nbsp;Social</b></a>
                <a href="/admin/setting"><i class="fa fa-wrench fa-fw"></i><b>&nbsp;Settings</b></a>


            </li>
        </ul>
        <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
</nav>

