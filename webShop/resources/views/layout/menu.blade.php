
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <form action="{{route('PostCompany')}}" method="post">
                    @csrf
                    <div class="row">
                        <input class="form-control form-control-sidebar col-lg-9" name="items" type="text" placeholder="Thêm danh mục" aria-label="Search">
                        <div class="input-group-append col-lg-3">
                        <input type="submit" value="Thêm">
                    </div>
                </form>
            </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="/" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('Widgets')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Widgets
                    <span class="right badge badge-danger">New</span>
                </p>
                </a>
            </li>
            <li class="nav-item">
                {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('Icons')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Icons</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Buttons')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Buttons</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Navbar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Navbar & Tabs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Timeline')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Timeline</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Ribbons')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ribbons</p>
                    </a>
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Forms
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('General')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>General Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Advanced')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Advanced Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('Validation')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Validation</p>
                    </a>
                </li>
                </ul>
            </li> --}}
            <li class="nav-header">EXAMPLES</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Quản lý khách hàng
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                @if (Auth::check())
                    <li class="nav-item">
                    <a href="{{route('ListCustomer',Auth::id())}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách khách hàng</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('MaiBox')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Khách hàng liên hệ trực tiếp</p>
                    </a>
                    </li>
                @endif
                
                <li class="nav-item">
                    {{-- <a href="{{route('ReadMail')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Read</p>
                    </a> --}}
                </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Quản lý sản phẩm
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                {{-- <li class="nav-item">
                    <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Order của trang font wweb</p>
                    </a>
                </li> --}}
                @if (Auth::check())
                    <li class="nav-item">
                        <a href="{{route('Manager')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm sản phẩm</p>
                            <i class="fas fa-angle-left right"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            @foreach ($categories as $key=>$value)
                                <li class="nav-item">
                                    <a href="{{route('AddProduct',$value->id)}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{$value->categories}}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul> 
                    </li>
                    <li class="nav-item">
                        <a href="{{route('Contact', ['id', Auth::id()])}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Contact us</p>
                        </a>
                    </li>
                @endif
                {{-- <li class="nav-item">
                    <a href="pages/examples/faq.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Trang liên hệ chúng tôi</p>
                    </a>
                </li> --}}
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
                <p>
                    Quản lý đơn hàng
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                @if (Auth::check())
                    <li class="nav-item">
                    <a href="{{route('InformationCart')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Danh sách đơn hàng</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="{{route('MaiBox')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Phản hồi khách hàng</p>
                    </a>
                    </li>
                    {{-- <li class="nav-item">
                    <a href="{{route('Compose')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Liên hệ khách hàng</p>
                    </a>
                    </li> --}}
                @endif
                
                <li class="nav-item">
                    {{-- <a href="{{route('ReadMail')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Read</p>
                    </a> --}}
                </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                    Extras
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Login & Register v1
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login v1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register v1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/examples/forgot-password.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Forgot Password v1</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/examples/recover-password.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recover Password v1</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                        Login & Register v2
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="pages/examples/login-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Login v2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/examples/register-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Register v2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Forgot Password v2</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pages/examples/recover-password-v2.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recover Password v2</p>
                        </a>
                    </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/lockscreen.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Lockscreen</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Legacy User Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/language-menu.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Language Menu</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/404.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Error 404</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/500.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Error 500</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/pace.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pace</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/examples/blank.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Blank Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="starter.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Starter Page</p>
                    </a>
                </li>
                </ul>
            </li>
            @if (Auth::check())
            <li class="nav-item">
                <a href="{{route('Categories',1)}}}" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                    Quản lý danh mục
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách danh mục</p>
                            <i class="fas fa-angle-left right"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            @foreach ($categories as $key=>$value)
                                <li class="nav-item">
                                    <a href="{{route('Categories',$value->id)}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{$value->categories}}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul> 
                    </li>

                    
                    </ul> 
                </li>
            @endif

            @if (Auth::check())
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                    Quản lý bài viết
                    <i class="fas fa-angle-left right"></i>
                </p>
                </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('ListPost', 1)}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Danh sách bài viết</p>
                            <i class="fas fa-angle-left right"></i>
                        </a>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm bài viết</p>
                                <i class="fas fa-angle-left right"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                @foreach ($categories as $key=>$value)
                                <li class="nav-item">
                                    <a href="{{route('AddPost', $value->id)}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>{{$value->categories}}</p>
                                    </a>
                                </li>
                                @endforeach
                            </ul> 
                        </li>
                        </li>
                    </ul> 
                </li>
            @endif
            </ul> 
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>