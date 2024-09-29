@extends('layout.index')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>ລາຍງານ</h1>
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
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('report-emp.print')}}" target="_blank" class="btn btn-primary btn-sm"> <i
                                class="fas fa-print"></i>-ພິມ</a>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr style="text-align: center">
                                    <th>ລດ</th>
                                    <th>ຮູບພາບ</th>
                                    <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                    <th>ວ,ດ,ປ ເກີດ</th>
                                    <th>ເພດ</th>
                                    <th>ຕຳແໜ່ງງານ</th>
                                    <th>ພະແນກການ</th>
                                    <th>ເບີ້ໂທ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $stt = 1;
                                @endphp
                               
                                @foreach ($employee as $emp)
                                <tr>
                                    <td width=5%>{{$stt++}}</td>
                                    <td>
                                    <a href="{{ route('employee.show', $emp->id) }}"><img src = "{{asset($emp->picture)}}" height="50" alt=""></a>
                                    </td>
                                    <td>
                                        <a href="{{ route('employee.show', $emp->id) }}">{{$emp->firstname}}
                                            {{$emp->lastname}}</a>
                                    </td>
                                    <td>{{date('d/m/Y', strtotime($emp->bod)) }}</td>
                                    <td>
                                        @if($emp->sex == 1)
                                            ເພດຊາຍ
                                        @else
                                            ເພດຍິງ
                                        @endif
                                    </td>
                                    <td>
                                    {{$emp->position_name->name}}
                                    </td>
                                    <td>
                                    {{$emp->department_name->name}}
                                    </td> 

                                    <td>
                                    {{$emp->phone}}
                                    </td> 
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection