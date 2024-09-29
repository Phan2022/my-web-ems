@extends('layout.index')

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">ຍິນດີຕ້ອນຮັບ</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$count_employee}}</h3>

                        <p>ພະນັກງານທັງໝົດ</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="{{route('employee.index')}}" class="small-box-footer">ເພີ່ມເຕີມ<i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$count_emp_women}}</h3>

                        <p>ເພດຍິງທັງໝົດ</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">ເພີ່ມເຕີມ <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>{{$count_role}}</h3>

                        <p>ສິດນຳໃຊ້ລະບົບ</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('role.index')}}" class="small-box-footer">ເພີ່ມເຕີມ <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>{{$count_user}}</h3>

                        <p>ຊື່ຜູ້ໃຊ້ທັງໝົດ</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{route('user.index')}}" class="small-box-footer">ເພີ່ມເຕີມ <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                    <div class="info-box-content">
                        <a href="{{route('village.index')}}" <span class="info-box-text">ຂໍ້ມູນບ້ານ</span>
                            <span class="info-box-number">
                                {{$count_village}} </a>
                        {{--  <small>%</small>  --}}
                        </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <a href="{{route('district.index')}}" <span class="info-box-text">ຂໍ້ມູນເມືງ</span>
                            <span class="info-box-number">{{$count_district}}</span> </a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <a href="{{route('province.index')}}" <span class="info-box-text">ຂໍ້ມູນແຂວງ</span>
                            <span class="info-box-number">{{$count_province}}</span> </a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <a href="{{route('position.index')}}" <span class="info-box-text">ຕຳແໜ່ງງານ</span>
                            <span class="info-box-number">{{$count_position}}</span> </a>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="card">
            <div class="card-header border-0">
                <h3 class="card-title">ພະນັກງານເພີ່ມໃໝ່ຫຼ້າສຸດ</h3>
                <div class="card-tools">
                    <a href="{{route('report-emp.print')}}" target="_blank" class="btn btn-tool btn-sm">
                        <i class="fas fa-download"></i>
                    </a>
                    <a href="{{route('employee.index')}}" target="_blank" class="btn btn-tool btn-sm">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                    <thead>
                        <tr>
                            <th>ຮູບພາບ - ຊື່ ແລະ ນາມສະກຸນ</th>
                            <th>ວ,ດ,ປ ເກີດ</th>
                            <th>ເພດ</th>
                            <th>ເບີ້ໂທ</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($new_emp as $item)
                        <tr>
                            <td>
                                <img src="{{asset($item->picture)}}" alt="Product 1"
                                    class="img-circle img-size-32 mr-2">
                                {{$item->firstname}} {{$item->lastname}}
                            </td>
                            <td>{{date('d/m/Y', strtotime($item->bod))}}</td>
                            <td>
                                @if($item->sex == 1)
                                ຊາຍ
                                @else
                                ຍິງ
                                @endif
                            </td>
                            <td>
                                {{$item->phone}}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection