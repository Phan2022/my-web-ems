@extends('layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ພະນັກງານ</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">ໜ້າແລກ</a></li>
                    <li class="breadcrumb-item active">ພະນັກງານ</li>
                </ol>
            </div>
        </div>
    </div>
</section>
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
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fas fa-ban"> ມີບັນຫາ</i></br>
                        @foreach($errors->all() as $error)
                        {{$error}} </br>
                        @endforeach
                    </div>
                </div>
                @endif


                <form method="POST" action="{{route('employee.update', $employee->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">ຊື່ພະນັກງານ</label>
                                            <input type="text" class="form-control" name="firstname"  value="{{$employee->firstname}}"
                                                placeholder="ຊື່ພະນັກງານ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">ນາມສະກຸນ</label>
                                            <input type="text" class="form-control" name="lastname" value="{{$employee->lastname}}"
                                                placeholder="ນາມສະກຸນ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="bod">ວ,ດ,ປ ເກີດ</label>
                                            <input type="date" class="form-control" name="bod" value="{{$employee->bod}}" placeholder="ວ,ດ,ປ ເກີດ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ເພດ</label>
                                            <select class="form-control" name="sex" style="width: 100%;">
                                                <option value="1" {{$employee->sex == 1 ? 'selected' : ''}}>ຊາຍ</option>
                                                <option value="2" {{$employee->sex == 2 ? 'selected' : ''}}>ຍິງ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ບ້ານເກີດ</label>
                                            <select class="form-control select2" name="bvill_id" style="width: 100%;">
                                                @foreach ($village as $item)
                                                <option 
                                                    @if ($employee->bvill_id == $item->id)
                                                        {{'selected'}}
                                                    @endif
                                                    
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ເມືອງເກີດ</label>
                                            <select class="form-control select2" name="bdis_id" style="width: 100%;">
                                                @foreach ($district as $item)
                                                <option 
                                                @if ($employee->bdis_id == $item->id)
                                                        {{'selected'}}
                                                    @endif
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ແຂວງເກີດ</label>
                                            <select class="form-control select2" name="bpro_id" style="width: 100%;">
                                                @foreach ($province as $item)
                                                <option 
                                                
                                                @if ($employee->bpro_id == $item->id)
                                                {{'selected'}}
                                                @endif
                                                
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">ທີ່ຢູ່ປະຈຸບັນ</label>
                                            <input type="text" class="form-control" name="address" value="{{$employee->address}}"
                                                placeholder="ທີ່ຢູ່ປະຈຸບັນ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ບ້ານ</label>
                                            <select class="form-control select2" name="vill_id" style="width: 100%;">
                                                @foreach ($village as $item)
                                                <option 
                                                @if ($employee->vill_id == $item->id)
                                                {{'selected'}}
                                                @endif
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ເມືອງ</label>
                                            <select class="form-control select2" name="dis_id" style="width: 100%;">
                                                @foreach ($district as $item)
                                                <option 
                                                @if ($employee->dis_id == $item->id)
                                                {{'selected'}}
                                                @endif
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ແຂວງ</label>
                                            <select class="form-control select2" name="pro_id" style="width: 100%;">
                                                @foreach ($province as $item)
                                                <option 
                                                @if ($employee->pro_id == $item->id)
                                                {{'selected'}}
                                                @endif
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">ເບີ້ໂທ</label>
                                            <input type="text" class="form-control" name="phone" value="{{$employee->phone}}" placeholder="ເບີ້ໂທ">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.col -->

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ຕຳແໜ່ງງານ</label>
                                            <select class="form-control select2" name="pos_id" style="width: 100%;">
                                                @foreach ($position as $item)
                                                <option 
                                                @if ($employee->pos_id == $item->id)
                                                {{'selected'}}
                                                @endif
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ພະແນກການ</label>
                                            <select class="form-control select2" name="dpart_id" style="width: 100%;">
                                                @foreach ($department as $item)
                                                <option 
                                                @if ($employee->dpart_id == $item->id)
                                                {{'selected'}}
                                                @endif
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="start_date">ວ,ດ,ປ ເຊັນສັນຍາ</label>
                                            <input type="date" class="form-control" name="start_date" value="{{$employee->start_date}}"
                                                placeholder="ວ,ດ,ປ ເຊັນສັນຍາ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="end_date">ວ,ດ,ປ ໝົດສັນຍາ</label>
                                            <input type="date" class="form-control" name="end_date" value="{{$employee->end_date}}"
                                                placeholder="ວ,ດ,ປ ໝົດສັນຍາ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ສະຖານະພາບ</label>
                                            <select class="form-control select2" name="status_id" style="width: 100%;">
                                                @foreach ($status as $item)
                                                <option 
                                                @if ($employee->status_id == $item->id)
                                                {{'selected'}}
                                                @endif
                                                value="{{ $item->id}}">{{ $item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="mar_name">ຊື່ຜົວ ຫຼື ເມຍ</label>
                                            <input type="text" class="form-control" name="mar_name" value="{{$employee->mar_name}}"
                                                placeholder="ຊື່ຜົວ ຫຼື ເມຍ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mar_work">ບ່ອນເຮັດວຽກ</label>
                                            <input type="text" class="form-control" name="mar_work" value="{{$employee->mar_work}}"
                                                placeholder="ບ່ອນເຮັດວຽກ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mar_address">ທີ່ຢູ່</label>
                                            <input type="text" class="form-control" name="mar_address" value="{{$employee->mar_address}}"
                                                placeholder="ທີ່ຢູ່">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mar_phone">ເບີ້ໂທ</label>
                                            <input type="text" class="form-control" name="mar_phone" value="{{$employee->mar_phone}}"
                                                placeholder="ເບີ້ໂທ">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="note">ໝາຍເຫດ</label>
                                            <input type="text" class="form-control" name="note" value="{{$employee->note}}" placeholder="ໝາຍເຫດ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="picture">ຮູບພະນັກງານ</label>
                                            <input type="file" class="form-control" name="picture" id="picture">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="file">ຟາຍສັນຍາ</label>
                                            <input type="file" class="form-control" name="file" id="file">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">ບັນທຶກ</button>
                        <a class="btn btn-warning" href="{{route('employee.index')}}">ກັບຄືນ</a>
                    </div>
                </form>

            </div>

        </div>
    </div>
</section>
@endsection