<html>
				<head>
				 	<title>ຂໍ້ມູນພະນັກງານ</title>
				 	<style>
				 	.main-content {
                        font-family: Phetsarath OT;
					    text-align: center;
					    width: 100%;
					}
                    .column {
                        font-family: Phetsarath OT;
                        float: left;
                        width: 33.33%;
                    }
                    .column-left{
                        font-family: Phetsarath OT;
                        text-align: left;
                    }
                    .column-center{
                        font-family: Phetsarath OT;
                        text-align: center;
                    }
                    .column-right{
                        font-family: Phetsarath OT;
                        text-align: right;
                    }

                    .column-four {
                        font-family: Phetsarath OT;
                        float: center;
                        width: 100%;
                    }
                    .label-sum{
                        font-family: Phetsarath OT;
                        text-align: left
                    }

                    .header-company-info{
                        font-family: Phetsarath OT;
                        text-align: left;
                        width:50%
                    }

					table.table {
                        font-family: Phetsarath OT;
					    width: 100%;
                        border-collapse : collapse; 
                        border : 1px solid black;
					    margin: 0 auto;
					    text-align: left;
					}

                    #customers {
                    border-collapse: collapse;
                    width: 100%;
                    }

                    #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 5px;
                    }

                    #customers tr:nth-child(even){background-color: #f2f2f2;}

                    #customers tr:hover {background-color: #ddd;}

                    #customers th {
                    padding-top: 5px;
                    padding-bottom: 5px;
                    text-align: center;
                    }

				 	</style>
				</head>
				<body>
                    <div class="hearder-title">
                        <div class="main-content">
                            <label>ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ</label> <br>
                            <label>ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນະຖາວອນ</label> <br>
                        </div>
                    </div> <br>

                    <div class="hearder-content">
                        <div class="row">
                            <div class="column">
                                <div class="column-left">
                                    <label><b>ບໍລິສັດ ຊີທີໄອທີ ຈຳກັດຜູດ້ຽວ</b></label> <br>
                                    <label>ບ້ານຫ້ວຍຫົງ, ເມືອງຈັນທະບູລີ, ນະຄອນຫຼວງວຽງຈັນ</label> <br>
                                    <label>ໂທ: 02058189995, 02058189996</label> <br>
                                </div>
                            </div>
                            <div class="column">
                                <div class="column-center">
                                    <br><br>
                                    <label><h3><b>ລາຍງານພະນັກງານທັງໝົດ</b></h3></label>
                                </div>
                            </div>
                            <div class="column">
                                <div class="column-right">
                                    <br><br><br><br>
                                    <label>ນະຄອນຫຼວງວຽງຈັນ, ວັນທີ: @php echo date("d/m/Y") @endphp</label><br><br>
                                </div>
                            </div>
                        </div>
                    </div>

					<div class="main-content">
						<div class="parking-info">

                            <table id="customers">
                                <thead>
                                    <tr align="center">
                                        <th style="width: 10px">ລດ</th>
                                        <th>ຮູບພາບ</th>
                                        <th>ຊື່ ແລະ ນາມສະກຸນ</th>
                                        <th>ວ,ດ,ປ ເກີດ</th>
                                        <th>ເພດ</th>
                                        <th>ຕຳແໜ່ງງານ</th>
                                        <th>ພະແນກການ</th>
                                        <th>ເບີ້ໂທ</th>
                                        {{--  <th>ທີ່ຢູ່ປະຈຸບັນ</th>  --}}
                                    </tr>
                                </thead>
                                @php
                                    $stt = 1;    
                                @endphp
                                <tbody>
                                   
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

                    <div class="hearder-content">
                        <div class="row">
                            <br>
                            <div class="column">
                                <div class="column-center">
                                    <label><b>ຫົວໜ້າບໍລິສັດ</b></label>
                                </div>
                            </div>
                            <div class="column">
                                <div class="column-center">
                                    <label><b>ຜູ້ກວດກາ</b></label>
                                </div>
                            </div>
                            <div class="column">
                                <div class="column-center">
                                    <label><b>ພະນັກງານ</b></label>
                                </div>
                            </div>
                        </div>
                    </div>		
				</body>
                <script>
                    window.addEventListener("load", window.print());
                </script>
			</html>