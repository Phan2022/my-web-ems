<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        width: 50%;
    }
    </style>
</head>

<body>
    <div class="title">
        <div class="main-content">
            <h1><b>ຂໍ້ມູນພະນັກງານ</b></h1>
            <hr>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="column">
                <label for="">
                    <h3>ຮູບພະນັກງານ</h3>
                </label> <br>
                <img src="{{asset($employee->picture)}}" alt="" height="200" width="200"> <br>
                <label>ຊື່ ແລະ ນາມສະກຸນ: {{$employee->firstname}} {{$employee->lastname}} </label> <br>
                <label>ເພດ:
                    @if($employee->sex == 1)
                    ເພດຊາຍ
                    @else
                    ເພດຍິງ
                    @endif
                </label> <br>
                <label>ວ,ດ,ປ ເກີດ: {{ date('d/m/Y',strtotime($employee->bod)) }} </label> <br>
                <label>ເບິໂທ: {{$employee->phone}} </label> <br>
                <label>ຕຳແໜ່ງງານ: {{$employee->position_name->name}} </label> <br>
                <label>ບ່ອນປະຈຳການ: {{$employee->department_name->name}} </label> <br>
            </div>
            <div class="column">
                <label for="">
                    <h3>ຂໍ້ມູນທົ່ວໄປ</h3>
                </label> <br>
                <label>ບ້ານ, ເມືອງ, ແຂວງເກີດ: </label> <br>
                {{$employee->bvillname->name}} - {{$employee->bdisname->name}} - {{$employee->bproname->name}}
                <label>ບ້ານ, ເມືອງ, ແຂວງຢູ່ປະຈຸບັນ: </label> <br>
                {{$employee->address}} - {{$employee->villname->name}} - {{$employee->disname->name}} -
                {{$employee->proname->name}}
                <label>ວ,ດ,ປ ເຂົ້າວຽກ: {{$employee->start_date}} - {{$employee->end_date}} </label> <br>
                <label>ສະຖານະພາບ ແລະ ຂໍ້ມູນຄອບຄົວ: {{$employee->statusname->name}} - {{$employee->mar_name}} -
                    {{$employee->mar_work}} - {{$employee->mar_address}} - {{$employee->mar_phone}} </label> <br>
                <label>ລາຍງານອື່ນໆ: {{$employee->note}} </label> <br>
            </div>
        </div>
    </div>
</body>

<script>
window.addEventListener("load", window.print());
</script>

</html>