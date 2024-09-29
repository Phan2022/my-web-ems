@extends('layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ຂໍ້ມູນແຂວງ</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">ໜ້າແລກ</a></li>
            <li class="breadcrumb-item active">ຂໍ້ມູນແຂວງ</li>
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
              <h3 class="card-title"><h4 class="card-title">ແກ້ໄຂ</h4></h3>
  
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
                  <i class="icon fas fa-ban"> ມີບັນຫາ </i></br>
                  @foreach($errors->all() as $error)
                  {{$error}} </br>
                  @endforeach
                </div>
              </div>
            @endif 
            
            
            <form method="POST" action="{{route('province.update', $province->id)}}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="name">ຊື່ແຂວງ</label>
                            <input type="text" class="form-control" name="name" value="{{$province->name}}" placeholder="ຊື່ແຂວງ">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">ບັນທຶກ</button>
                    <a class="btn btn-warning" href="{{route('province.index')}}" >ກັບຄືນ</a>
                </div>
            </form>
            
          </div>

      </div>
    </div>
  </section>
@endsection