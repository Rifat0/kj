        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Session::get('admin_user_data')[0] ['admin_user_name'] }}</strong>
                             </span> <span class="text-muted text-xs block">User Role {{ Session::get('admin_user_data')[0] ['admin_user_role'] }}<b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            KJ
                        </div>
                    </li>
                    <li class="active">
                        <a href="{{ url('/admin/home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Content</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('/admin/category') }}">Category</a></li>
                            <li><a href="{{ url('/admin/sub-category') }}">Sub-Category</a></li>
                            <li><a href="{{ url('/admin/today_fetured') }}">Today Feature</a></li>
                            <li><a href="{{ url('/admin/banar') }}">Banar</a></li>
                            <li><a href="{{ url('/admin/adv_sec_1') }}">Advert Section 1</a></li>
                            <li><a href="{{ url('/admin/adv_sec_2') }}">Advert Section 2</a></li>
                            <li><a href="{{ url('/admin/others') }}">Others</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Product</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('/admin/product_ap_rj') }}">Approve/Reject</a></li>
                            <li><a href="#">Add Product</a></li>
                            <li><a href="{{ url('/admin/update_product_ap_rj') }}">App/Rej Update</a></li>
                            <li><a href="{{ url('/admin/product_data') }}">Product Data</a></li>
                            <li><a href="#">Export Data</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/admin/vendor_ap_rj') }}"><i class="fa fa-laptop"></i> <span class="nav-label">Vendors/Sellers</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/coustomer_buyer_list') }}"><i class="fa fa-laptop"></i> <span class="nav-label">Coustomer/Buyer</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/orders_list') }}"><i class="fa fa-laptop"></i> <span class="nav-label">Orders</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/requisitions_list') }}"><i class="fa fa-laptop"></i> <span class="nav-label">Requisitions</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Order Financials</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Product Price</a></li>
                            <li><a href="#">Total Order Price</a></li>
                            <li><a href="#">Commission Price</a></li>
                            <li><a href="#">Total Order Commission Price</a></li>
                            <li><a href="#">Due Amount</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Account</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Payments</a></li>
                            <li><a href="#">Track Payments</a></li>
                            <li><a href="#">Outstanding Payment</a></li>
                            <li><a href="#">Wallets Payment</a></li>
                            <li><a href="#">Credit Payment</a></li>
                            <li><a href="#">Delivery Fee</a></li>
                            <li><a href="#">Commission Fee</a></li>
                            <li><a href="#">Currency Converter</a></li>
                            <li><a href="#">Acount Summary</a></li>
                            <li><a href="#">Delivery Fee Manual</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/admin/user_list') }}"><i class="fa fa-laptop"></i> <span class="nav-label">User Management</span></a>
                    </li>
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
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
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
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
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
                    <a href="{{ url('/admin/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                </li>
            </ul>

        </nav>
        </div>