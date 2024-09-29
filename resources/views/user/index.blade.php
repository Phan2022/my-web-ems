@extends('layout.index')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ຜູ້ໃຊ້ລະບົບ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">ຜູ້ໃຊ້ລະບົບ</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        @if (Auth::user()->rolename->name == 'Admin' || Auth::user()->rolename->name == 'manager')
                        <a class="btn btn-sm btn-primary" href="{{route('user.create')}}">ເພີ່ມໃໝ່</a>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ລດ</th>
                                    <th>ຮູບ</th>
                                    <th>ຊື່</th>
                                    <th>email</th>
                                    <th>ເບີື້ໂທ</th>
                                    <th>ທີ່ຢູ່</th>
                                    <th>ສິດນຳໃຊ້</th>
                                    <th>ປູ່ມຄຳສັ່ງ</th>
                                </tr>
                            </thead>
                            @php
                            $stt = 1;
                            @endphp
                            <tbody>
                                @foreach ($user as $item)
                                <tr>
                                    <td>{{$stt++}}</td>
                                    <td>
                                        <img src="{{asset($item->picture)}}" height="50px" alt="picture">
                                    </td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->rolename->name}}</td>
                                    <td>

                                        @if (Auth::user()->rolename->name == 'Admin' || Auth::user()->rolename->name ==
                                        'manager')
                                        <form action=" {{ route('user.destroy', $item->id) }} " method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('user.edit', $item->id) }}"
                                                class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>

                                            <a href="{{ route('user.edit', $item->id) }}"
                                                class="btn btn-default btn-sm"><i class="fas fa-eye"></i></a>

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('ທ່ານຕ້ອງການລຶບຂໍ້ມູນນີ້ ຫຼື ບໍ?')"><i
                                                    class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection