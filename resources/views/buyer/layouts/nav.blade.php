        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <!-- <span>
                                <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span> -->
                            <a href="{{ url('/vendor/general_settings') }}">
                            <span class="clear"> <span class="text-muted text-xs block"><strong class="font-bold">{{ Session::get('vendore_user_data')[0] ['vendore_name'] }}</strong></span> </span> </a>
                        </div>
                        <div class="logo-element">
                            {{ Session::get('vendore_user_data')[0] ['vendore_name'] }}
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{ url('/buyer/dashboard') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/orders') }}"><i class="fa fa-first-order"></i> <span class="nav-label">Orders</span    ></a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/report') }}"><i class="fa fa-file"></i> <span class="nav-label">Reports</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/accounting') }}"><i class="fa fa-money"></i> <span class="nav-label">Accounting</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/due_and_outstanding_payment') }}"><i class="fa fa-credit-card"></i> <span class="nav-label">Due & Outstanding Payment</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/supplier_research_and_selection') }}"><i class="fa fa-check-square-o"></i> <span class="nav-label">Supplier Research & Selection</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/favorite_and_credit_vendors') }}"><i class="fa fa-star"></i> <span class="nav-label">Favorite and Credit Vendors</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/my_vendor_products') }}"><i class="fa fa-star-half"></i> <span class="nav-label">My Vendor Products</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/tenders_and_bids') }}"><i class="fa fa-gavel"></i> <span class="nav-label">Tenders & Bids</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('/buyer/vendor_profile') }}"><i class="fa fa-users"></i> <span class="nav-label">Vendor Profile</span> </a>
                    </li>
                    <li>
                        <a href="{{ url('#') }}"><i class="fa fa-star-half"></i> <span class="nav-label">Manage User</span> </a>
                    </li>
                    <!-- <li>
                        <a href="{{ url('/buyer/message') }}"><i class="fa fa-envelope"></i> <span class="nav-label">Message</span><span class="label label-warning pull-right">0/0</span></a>
                    </li> -->
                    <!-- <li>
                        <a href="{{ url('/vendor/mailbox') }}"><i class="fa fa-envelope"></i> <span class="nav-label">Mailbox</span><span class="label label-warning pull-right">0/0</span></a>
                    </li> -->
                    <!-- <li>
                        <a href="{{ url('/vendor/general_settings') }}"><i class="fa fa-cog"></i> <span class="nav-label">General Settings</span></a>
                    </li> -->
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="{{ asset('public/backend/img/buyer/profilePicture/a4.jpg') }}">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="{{ url('/vendor/message') }}">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="{{ url('/vendore/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ url('/vendore/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            </ul>

        </nav>
        </div>