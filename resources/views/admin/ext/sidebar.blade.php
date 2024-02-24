
            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="d-none d-lg-block blur-up lazyloaded"
                                src="{{asset('backend')}}/images/dashboard/multikart-logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="sidebar custom-scrollbar">
                    <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                            aria-hidden="true"></i></a>
                    <div class="sidebar-user">
                        <img class="img-60" src="{{asset('backend')}}/images/dashboard/user3.jpg" alt="#">
                        <div>
                            <h6 class="f-14">Krishna</h6>
                            <p>Admin</p>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="dashboard">
                            <a class="sidebar-header" href="{{route('admin.index')}}">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        
                        <li class="slider">
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="image"></i>
                                <span>Sliders</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('slider.index')}}">
                                        <i class="fa fa-circle"></i>Slider List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('slider.create')}}">
                                        <i class="fa fa-circle"></i>Add Slider
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="category">
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="activity"></i>
                                <span>Categories</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('category.index')}}">
                                        <i class="fa fa-circle"></i>Category List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('category.create')}}">
                                        <i class="fa fa-circle"></i>Add Category
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="product">
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="box"></i>
                                <span>Products</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('product.index')}}">
                                        <i class="fa fa-circle"></i>Product List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('product.create')}}">
                                        <i class="fa fa-circle"></i>Add Product
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="testimonial">
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="box"></i>
                                <span>Testimonial</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="{{route('testimonial.index')}}">
                                        <i class="fa fa-circle"></i>Testimonial List
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('testimonial.create')}}">
                                        <i class="fa fa-circle"></i>Add Testimonial
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="blog">
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="box"></i>
                                <span>Blog</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="product-listdigital.html">
                                        <i class="fa fa-circle"></i>Blog List
                                    </a>
                                </li>

                                <li>
                                    <a href="add-digital-product.html">
                                        <i class="fa fa-circle"></i>Add Blog
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="team">
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="user-check"></i>
                                <span>Team</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>

                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="product-listdigital.html">
                                        <i class="fa fa-circle"></i>Team List
                                    </a>
                                </li>

                                <li>
                                    <a href="add-digital-product.html">
                                        <i class="fa fa-circle"></i>Add Team
                                    </a>
                                </li>
                            </ul>
                        </li>
                        

                        <li class="customer">
                            <a class="sidebar-header" href="javascript:void(0)">
                                <i data-feather="users"></i>
                                <span>Customer</span>
                                <i class="fa fa-angle-right pull-right"></i>
                            </a>
                            <ul class="sidebar-submenu">
                                <li>
                                    <a href="list-vendor.html">
                                        <i class="fa fa-circle"></i>Customer List
                                    </a>
                                </li>
                                <li>
                                    <a href="create-vendors.html">
                                        <i class="fa fa-circle"></i>Create Customer
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="report">
                            <a class="sidebar-header" href="reports.html"><i
                                    data-feather="bar-chart"></i><span>Reports</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="javascript:void(0)"><i
                                    data-feather="settings"></i><span>Settings</span><i
                                    class="fa fa-angle-right pull-right"></i></a>
                                    <ul class="sidebar-submenu">

                                        <li>
                                            <a href="profile.html"><i class="fa fa-circle"></i>Change Logo</a>
                                        </li>
                                        
                                        <li>
                                            <a href="profile.html"><i class="fa fa-circle"></i>Contact Detail</a>
                                        </li>
                                        
                                        <li>
                                            <a href="profile.html"><i class="fa fa-circle"></i>Social Media</a>
                                        </li>
                                        

                                        <li>
                                            <a href="profile.html"><i class="fa fa-circle"></i>Custom JavaScript</a>
                                        </li>
                                        
                                        <li>
                                            <a href="profile.html"><i class="fa fa-circle"></i>Custom CSS</a>
                                        </li>
                                        
                                    </ul>
                        </li>


                        <li>
                            <a class="sidebar-header" href="forgot-password.html">
                                <i data-feather="key"></i>
                                <span>Forgot Password</span>
                            </a>
                        </li>

                        <li>
                            <a class="sidebar-header" href="login.html">
                                <i data-feather="log-in"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
