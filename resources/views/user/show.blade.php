@extends('layout.index')
@section('content')
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
                             src="{{asset($emp->picture)}}"
                             alt="User profile picture">
                      </div>
      
                      <h3 class="profile-username text-center">
                        @if($emp->sex == 1)
                            ທ່ານ
                        @else
                            ທ່ານ ນາງ
                        @endif
                        {{$emp->firstname}} {{$emp->lastname}}
                      </h3>
      
                      <p class="text-muted text-center">{{$emp->position_name->name}} - {{$emp->department_name->name}}</p>
      
                      <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                          <b>ວ,ດ,ປ ເກີດ</b> <a class="float-right">{{ date('d/m/Y',strtotime($emp->bod)) }}</a>
                        </li>
                        <li class="list-group-item">
                          <b>ເບີ້ໂທລະສັບ</b> <a class="float-right">{{$emp->phone}}</a>
                        </li>
                        <li class="list-group-item">
                          <b>ເພດ</b>
                          <a class="float-right">
                                @if($emp->sex == 1)
                                    ເພດຊາຍ
                                @else
                                    ເພດຍິງ
                                @endif
                          </a>
                        </li>
                      </ul>
                      <a href="{{route('employee.index')}}" class="btn btn-warning"> ກັບຄືນ</a>
                      <a href="{{url($emp->file)}}" target="_blank" class="btn btn-primary"><b>ເບິ່ງຟາຍ</b></a>
                      <a href="{{route('employee.print',$emp->id)}}" target="_blank" class="btn btn-info btn-sm"><i
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
                      <h3 class="card-title">ກ່ຽວກັບພະນັກງານ</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <strong><i class="fas fa-location-arrow mr-1"></i> ບ້ານ, ເມືອງ, ແຂວງ ເກີດ</strong>
                      <p class="text-muted">
                        {{$emp->bvillname->name}} - {{$emp->bdisname->name}} - {{$emp->bproname->name}}
                      </p>
      
                      <hr>
      
                      <strong><i class="fas fa-map-marker-alt mr-1"></i> ທີ່ຢູ່ປະຈຸບັນ, ບ້ານ, ເມືອງ, ແຂວງ</strong>
                      <p class="text-muted">
                      {{$emp->address}} - {{$emp->villname->name}} - {{$emp->disname->name}} - {{$emp->proname->name}}
      
                      <hr>
      
                      <strong><i class="fas fa-clock mr-1"></i>ວ,ດ,ປ ເລີ່ມວຽກ - ວ,ດ,ປ ໝົດສັນຍາ</strong>
                      <p class="text-muted"> {{$emp->start_date}} - {{$emp->end_date}} </p>
      
                      <hr>
      
                      <strong><i class="far fa-file-alt mr-1"></i> ສະຖານະພາບ</strong>
                      <p class="text-muted"> {{$emp->statusname->name}} - {{$emp->mar_name}} - {{$emp->mar_work}} - {{$emp->mar_address}} - {{$emp->mar_phone}} </p>

                      <hr>
      
                      <strong><i class="fas fa-book mr-1"></i>ລາຍລະອຽດ</strong>
                      <p class="text-muted"> {{$emp->note}} </p>

                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>

              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
@endsection