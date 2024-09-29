<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route("dashboard.index")}}" class="brand-link">
        <img src="{{asset("dist/img/My Pig.jpg")}}" alt="Admin Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">{{Auth::user()->rolename->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- .ຮູບແບບແອັດມິນ -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="padding:30px">
            <div class="text-center">
                <div class="panel panel-primary">
                    <div class="panel-heading">

                        <span style="font-size:12pt; color: yellow">
                            <i class="fa fa-user"></i>
                            ສິດ : {{Auth::user()->rolename->name}}</span>
                    </div>
                    <div class="panel-body" style="padding:5px;position:relative">
                        <div class="btn-float-edit">
                            <a href="#" onclick="$('#form-uploadImg-user #img').trigger('click')"><i
                                    class="fa fa-edit"></i></a>
                        </div>
                        <img src="{{Auth::user()->picture}}" id="profile-img"
                            style="width: 150px; height: 150px; border-radius: 10px; border: 2px solid hsla(359,80%,49%,1.00)">
                        <div style="color:hsl(199, 94%, 67%);font-size:10pt">ຊື່:
                            {{Auth::user()->name}}</div>
                    </div>
                    <!-- <div class="panel-footer" style="padding:0px">
                        <div style="background-color: hsla(359,61%,66%,1.00);padding:5px">
                            <div>
                                <i class="fa fa-user"></i>: <a href="#" data-toggle="popover-x"
                                    data-target="#md-QRCode">07-1006501001</a>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-sm-6 text-right">
                                        <a href="javascript:">{{Auth::user()->phone}}</a>
                                    </div>
                                    <div class="col-sm-6 text-left">
                                        <i class="fa fa-key"></i>: <a href="#" onclick="showHidePass()"
                                            id="lb-pass">****</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /.ຮູບແບບແອັດມິນ -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @if (Auth::user()->rolename->name == 'Admin')
                <li class="nav-item">
                    <a href="{{route("dashboard.index")}}"
                        class="nav-link {{(request()->routeIs('dashboard.index')) ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a href="{{route("employee.index")}}"
                        class="nav-link {{(request()->routeIs('employee.index')) ? 'active' : ''}}">
                        <i class="nav-icon far fa-id-card"></i>
                        <p>
                            ພະນັກງານ
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route("report-emp.index")}}"
                        class="nav-link {{(request()->routeIs('report-emp.index')) ? 'active' : ''}}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>
                            ລາຍງານ
                        </p>
                    </a>
                </li>


                <!.....setting....>
                    @if (Auth::user()->rolename->name == 'Admin')

                    <li class="nav-item">
                        <a href="{{route('province.index')}}"
                            class="nav-link {{(request()->routeIs('province.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fas fa-atlas"></i>
                            <p>
                                ຂໍ້ມູນແຂວງ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('district.index')}}"
                            class="nav-link {{(request()->routeIs('district.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fas fa-city"></i>
                            <p>
                                ຂໍ້ມູນເມືອງ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('village.index')}}"
                            class="nav-link {{(request()->routeIs('village.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fas fa-building"></i>
                            <p>
                                ຂໍ້ມູນບ້ານ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('department.index')}}"
                            class="nav-link {{(request()->routeIs('department.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fa fa-sitemap"></i>
                            <p>
                                ພະແນກການ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('position.index')}}"
                            class="nav-link {{(request()->routeIs('position.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fa fa-user-secret"></i>
                            <p>
                                ຕຳແໜ່ງງານ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('status.index')}}"
                            class="nav-link {{(request()->routeIs('status.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fa fa-id-badge"></i>
                            <p>
                                ສະຖານະພາບ
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('role.index')}}"
                            class="nav-link {{(request()->routeIs('role.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fas fa-user-lock"></i>
                            <p>
                                ສິດນຳໃຊ້ລະບົບ
                            </p>
                        </a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <a href="{{route('user.index')}}"
                            class="nav-link {{(request()->routeIs('user.index')) ? 'active' : ''}}"">
                            <i class=" nav-icon fas fa-user"></i>
                            <p>
                                ຜູ້ໃຊ້ລະບົບ
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>