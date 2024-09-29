<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\Position;
use App\Models\Department;
use App\Models\Status;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Position::where('del',1)->get();
        $department = Department::where('del',1)->get();
        $employee = Employee::orderBy('id', 'desc')->where('del', 1)->get();
        return view('employee.index', compact('employee', 'position', 'department'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $village = Village::where('del',1)->get();
        $district = District::where('del',1)->get();
        $province = Province::where('del',1)->get();
        $position = Position::where('del',1)->get();
        $department = Department::where('del',1)->get();
        $status = Status::where('del',1)->get();
        return view('employee.create', compact('village', 'district','province', 'position', 'department', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'sex'=>'required',
            'bvill_id'=>'required',
            'bdis_id'=>'required',
            'bpro_id'=>'required',
            'vill_id'=>'required',
            'dis_id'=>'required',
            'pro_id'=>'required',
            'phone'=>'required',
            'pos_id'=>'required',
            'dpart_id'=>'required',
        ],[
            'firstname.required'=>'ກະຣຸນາໃສ່ຊື່ກ່ອນ!',
            'lastname.required'=>'ກະຣຸນາໃສ່ກ່ອນ!',
            'sex.required'=>'ກະຣຸນາເລືອກເພດກ່ອນ!',
            'bvill_id.required'=>'ກະຣຸນາເລືອກບ້ານເກີກ່ອນ!',
            'bdis_id.required'=>'ກະຣຸນາເລືອກເມືອງເກີດກ່ອນ!',
            'bpro_id.required'=>'ກະຣຸນາເລືອກແຂວງເກີດກ່ອນ!',
            'vill_id.required'=>'ກະຣຸນາເລືອກບ້ານກ່ອນ!',
            'dis_id.required'=>'ກະຣຸນາເລືອກເມືອງກ່ອນ!',
            'pro_id.required'=>'ກະຣຸນາເລືອກແຂວງກ່ອນ!',
            'phone.required'=>'ກະຣຸນາໃສ່ເບີ້ໂທກ່ອນ!',
            'pos_id.required'=>'ກະຣຸນາເລືອກຕຳແໜ່ງກ່ອນ!',
            'dpart_id.required'=>'ກະຣຸນາເລືອກພະແນກກ່ອນ!',
        ]);

        $pic = $request->picture;
        $picname = time().$pic->getClientOriginalName();
        $file = $request->file;
        $filename = time().$file->getClientOriginalName();

        Employee::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'sex'=>$request->sex,
            'bod'=>$request->bod,
            'bvill_id'=>$request->bvill_id,
            'bdis_id'=>$request->bdis_id,
            'bpro_id'=>$request->bpro_id,
            'address'=>$request->address,
            'vill_id'=>$request->vill_id,
            'dis_id'=>$request->dis_id,
            'pro_id'=>$request->pro_id,
            'phone'=>$request->phone,
            'pos_id'=>$request->pos_id,
            'dpart_id'=>$request->dpart_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status_id'=>$request->status_id,
            'mar_name'=>$request->mar_name,
            'mar_work'=>$request->mar_work,
            'mar_address'=>$request->mar_address,
            'mar_phone'=>$request->mar_phone,
            'note'=>$request->note,
            'picture'=>'pictures/emp/'.$picname,
            'file'=>'files/emp/'.$filename,
        ]);
        $pic->move('pictures/emp/', $picname);
        $file->move('files/emp/', $filename);

        return redirect(route('employee.index'))->with('cuccess', 'ບັນທຶກຂໍ້ມູນສໍາເຫຼັດ!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = Employee::find($id);
        $village = Village::where('del',1)->get();
        $district = District::where('del',1)->get();
        $province = Province::where('del',1)->get();
        $position = Position::where('del',1)->get();
        $department = Department::where('del',1)->get();
        $status = Status::where('del',1)->get();
        return view('employee.show', compact('emp','village','district','province','position','department','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        $village = Village::where('del',1)->get();
        $district = District::where('del',1)->get();
        $province = Province::where('del',1)->get();
        $position = Position::where('del',1)->get();
        $department = Department::where('del',1)->get();
        $status = Status::where('del',1)->get();

        return view('employee.edit', compact('employee','village','district','province','position','department','status'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'sex'=>'required',
            'bvill_id'=>'required',
            'bdis_id'=>'required',
            'bpro_id'=>'required',
            'vill_id'=>'required',
            'dis_id'=>'required',
            'pro_id'=>'required',
            'phone'=>'required',
            'pos_id'=>'required',
            'dpart_id'=>'required',
        ],[
            'firstname.required'=>'ກະຣຸນາໃສ່ຊື່ກ່ອນ!',
            'lastname.required'=>'ກະຣຸນາໃສ່ກ່ອນ!',
            'sex.required'=>'ກະຣຸນາເລືອກເພດກ່ອນ!',
            'bvill_id.required'=>'ກະຣຸນາເລືອກບ້ານເກີກ່ອນ!',
            'bdis_id.required'=>'ກະຣຸນາເລືອກເມືອງເກີດກ່ອນ!',
            'bpro_id.required'=>'ກະຣຸນາເລືອກແຂວງເກີດກ່ອນ!',
            'vill_id.required'=>'ກະຣຸນາເລືອກບ້ານກ່ອນ!',
            'dis_id.required'=>'ກະຣຸນາເລືອກເມືອງກ່ອນ!',
            'pro_id.required'=>'ກະຣຸນາເລືອກແຂວງກ່ອນ!',
            'phone.required'=>'ກະຣຸນາໃສ່ເບີ້ໂທກ່ອນ!',
            'pos_id.required'=>'ກະຣຸນາເລືອກຕຳແໜ່ງກ່ອນ!',
            'dpart_id.required'=>'ກະຣຸນາເລືອກພະແນກກ່ອນ!',
        ]);

        $employee = Employee::find($id);
        if ($request->has('picture')) 
        {
            $pic = $request->picture;
            $picname = time().$pic->getClientOriginalName();
            $pic->move('pictures/emp/', $picname);
            /*
            $file = $request->file;
            $filename = time().$file->getClientOriginalName();
            $file->move('files/emp/', $filename);
            */
        $emp_data=[
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'sex'=>$request->sex,
            'bod'=>$request->bod,
            'bvill_id'=>$request->bvill_id,
            'bdis_id'=>$request->bdis_id,
            'bpro_id'=>$request->bpro_id,
            'address'=>$request->address,
            'vill_id'=>$request->vill_id,
            'dis_id'=>$request->dis_id,
            'pro_id'=>$request->pro_id,
            'phone'=>$request->phone,
            'pos_id'=>$request->pos_id,
            'dpart_id'=>$request->dpart_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status_id'=>$request->status_id,
            'mar_name'=>$request->mar_name,
            'mar_work'=>$request->mar_work,
            'mar_address'=>$request->mar_address,
            'mar_phone'=>$request->mar_phone,
            'note'=>$request->note,
            'picture'=>'pictures/emp/'.$picname,
            // 'file'=>'files/emp/'.$filename,
        ];
        }elseif($request->has('file'))
        {
            /*
            $pic = $request->picture;
            $picname = time().$pic->getClientOriginalName();
            $pic->move('pictures/emp/', $picname);
            */

            $file = $request->file;
            $filename = time().$file->getClientOriginalName();
            $file->move('files/emp/', $filename);
            
        $emp_data=[
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'sex'=>$request->sex,
            'bod'=>$request->bod,
            'bvill_id'=>$request->bvill_id,
            'bdis_id'=>$request->bdis_id,
            'bpro_id'=>$request->bpro_id,
            'address'=>$request->address,
            'vill_id'=>$request->vill_id,
            'dis_id'=>$request->dis_id,
            'pro_id'=>$request->pro_id,
            'phone'=>$request->phone,
            'pos_id'=>$request->pos_id,
            'dpart_id'=>$request->dpart_id,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'status_id'=>$request->status_id,
            'mar_name'=>$request->mar_name,
            'mar_work'=>$request->mar_work,
            'mar_address'=>$request->mar_address,
            'mar_phone'=>$request->mar_phone,
            'note'=>$request->note,
            // 'picture'=>'pictures/emp/'.$picname,
            'file'=>'files/emp/'.$filename,
        ];
        }

        else
        {
            $emp_data=[
                'firstname'=>$request->firstname,
                'lastname'=>$request->lastname,
                'sex'=>$request->sex,
                'bod'=>$request->bod,
                'bvill_id'=>$request->bvill_id,
                'bdis_id'=>$request->bdis_id,
                'bpro_id'=>$request->bpro_id,
                'address'=>$request->address,
                'vill_id'=>$request->vill_id,
                'dis_id'=>$request->dis_id,
                'pro_id'=>$request->pro_id,
                'phone'=>$request->phone,
                'pos_id'=>$request->pos_id,
                'dpart_id'=>$request->dpart_id,
                'start_date'=>$request->start_date,
                'end_date'=>$request->end_date,
                'status_id'=>$request->status_id,
                'mar_name'=>$request->mar_name,
                'mar_work'=>$request->mar_work,
                'mar_address'=>$request->mar_address,
                'mar_phone'=>$request->mar_phone,
                'note'=>$request->note,
            ];
        }
        $employee->update($emp_data);
        return redirect(route('employee.index'))->with('success', 'ບັນທຶກຂໍ້ມູນສຳເຫຼັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->del = 0;
        $employee->save();
        return redirect()->back()->with('success', 'ລຶບຂໍ້ມູນສໍາເຫຼັດ!');
    }

    public function print($id)
    {
        $employee = Employee::find($id);
        return view('employee.print', compact('employee'));
    }

    public function printcart($id)
    {
        $employee = Employee::find($id);
        return view('employee.printcart', compact('employee'));
    }
      
        
}