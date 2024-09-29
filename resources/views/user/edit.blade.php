@extends('layout.index')
@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ຜູ້ໃຊ້ລະບົບ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">ໜ້າແລກ</a></li>
                    <li class="breadcrumb-item active">ຜູ້ໃຊ້ລະບົບ</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle"
                                src="https://www.asio.gov.au/sites/default/files/styles/teaser_stacked/public/2022-06/WhyISpy%20characters-07%20125_104.png?itok=rX32XNw8"
                                alt="User profile picture">
                        </div>

                        <p class="text-muted text-center">
                            ຍິນດິຕ້ອນຮັບ</p>

                        <h3 class="profile-username text-center">
                            {{Auth::user()->name}}
                        </h3>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>ຊື່ຜູ້ໃຊ້ </b> <a class="float-right">{{Auth::user()->name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>ເບີ້ໂທລະສັບ</b> <a class="float-right">{{Auth::user()->phone}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>ອີເມວ </b> <a class="float-right">{{Auth::user()->email}}</a>
                            </li>

                            <li class="list-group-item">
                                <b>ສິດນຳໃຊ້</b> <a class="float-right">{{Auth::user()->rolename->name}}</a>
                            </li>
                            <li class="list-group-item">
                                <b>ທີ່ຢູ່</b> <a class="float-right">{{Auth::user()->address}}</a>
                            </li>

                            <li class="list-group-item">
                                <b></b> <a class="float-right">ຂໍຂອບໃຈທີ່ທ່ານເຂົ້າໃຊ້ລະບົບຂອງພວກເຮົາ</a>
                            </li>
                        </ul>

                        <!-- <a href="{{route('user.index')}}" class="btn btn-warning"> ກັບຄືນ</a> -->
                        <a href="#" target="_blank" class="btn btn-primary"><b>ເບິ່ງປ້າຍ</b></a>
                        <a href="{{route('user.print',$user->id)}}" target="_blank" class="btn btn-warning"><i
                                class="fas fa-print"></i> ພີມອອກ</a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-8">
                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">ແກ້ໄຂຂໍ້ມູນສ່ວນຕົວຜູ້ໃຊ້</h3>
                    </div>
                    <br />
                    <!-- /.card-header -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="col-lg-12">
                                <div class="card card-default">

                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <h4 class="card-title">ແກ້ໄຂ</h4>
                                        </h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>

                                    @if(count($errors)>0)
                                    <div class="card-body">
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-hidden="true">&times;</button>
                                            <i class="icon fas fa-ban"> ມີບັນຫາ </i></br>
                                            @foreach($errors->all() as $error)
                                            {{$error}} </br>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif


                                    <form method="POST" action="{{route('user.update', $user->id)}}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="card-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="username">ຊື່ຜູ້ໃຊ້</label>
                                                                <input type="text" class="form-control" name="name"
                                                                    value="{{$user->name}}" placeholder="ຊື່ຜູ້ໃຊ້">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="phone">ເບີໂທລະສັບ</label>
                                                                <input type="text" class="form-control" name="phone"
                                                                    value="{{$user->phone}}" placeholder="ເບີໂທລະສັບ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="email">Email</label>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="{{$user->email}}" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.col -->

                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="password">ລະຫັດຜ່ານ</label>
                                                                <input type="password" class="form-control"
                                                                    name="password" placeholder="ລະຫັດຜ່ານ">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="confirmpassword">ຢືນຢັນລະຫັດຜ່ານ</label>
                                                                <input type="password" class="form-control"
                                                                    name="confirmpassword"
                                                                    placeholder="ຢືນຢັນລະຫັດຜ່ານ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>ສິດນຳໃຊ້ລະບົບ</label>
                                                                <select class="form-control select2" name="role_id"
                                                                    style="width: 100%;">
                                                                    @foreach($role as $rl)
                                                                    <option @if ($user->role_id == $rl->id)
                                                                        {{'selected'}}
                                                                        @endif
                                                                        value="{{$rl->id}}">{{$rl->name}}
                                                                    </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">ທີ່ຢູ່</label>
                                                        <input type="text" class="form-control" name="address"
                                                            value="{{$user->address}}" placeholder="ທີ່ຢູ່">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="picture">ຮູບໂປຟາຍ</label>
                                                        <input type="file" class="form-control" name="picture"
                                                            id="picture">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">ບັນທຶກ</button>
                                            <a class="btn btn-warning" href="{{route('user.index')}}">ກັບຄືນ</a>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
@endsection