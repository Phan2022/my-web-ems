<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::where('del',1)->get();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        return view('user.create', compact('role'));
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
            'name'=>'required',
            'phone'=>'required|unique:users',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'confirmpassword'=>'required|same:password',
            'role_id'=>'required'
        ],[
            'name.required'=>'ໃສ່ຊື້ຜູ້ໃຊ້ກ່ອນ!',
            'phone.required'=>'ກະລຸນາໃສ່ເບິ້ໂທກ່ອນ!',
            'phone.unique'=>'ເບີ້ໂທນີ້ໄດ້ມີໃນລະບົບແລ້ວ!',
            'email.required'=>'ໃຫ້ທ່ານໃສ່ອີເມວກ່ອນ!',
            'email.email'=>'ຮູບແບບອີເມວບໍ່ຖືກຕ້ອງ!',
            'password.required'=>'ໃສ່ລະຫັດຜ່ານກ່ອນ!',
            'password.min'=>'ລະຫັດຜ່ານໜ້ອຍກ່ວາ 6 ຕົວ!',
            'confirmpassword.required'=>'ກະລຸນາຢືນຢັນລະຫັດຜ່ານກ່ອນ!',
            'confirmpassword.same'=>'ຢືນຢັນລະຫັດຜ່ານບໍ່ຕົງກັນ!',
            'role_id.required'=>'ທ່ານຍັງບໍ່ທັນໄດ້ເລືອກສິດນຳໃຊ້'
        ]);
        $picture = $request->picture;
        $picturename = time().$picture->getClientOriginalName();
        
        User::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'address'=>$request->address,
            'role_id'=>$request->role_id,
            'picture'=>'pictures/user/' .$picturename,
        ]);
        $picture->move('pictures/user/', $picturename);

        return redirect()->route('user.index')->with('success','ເພີ່ມຂໍ້ມູນສຳເຫຼັດ!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$emp = Employee::find($id);
        //$village = Village::where('del',1)->get();
        //$district = District::where('del',1)->get();
        //$province = Province::where('del',1)->get();
        //$position = Position::where('del',1)->get();
        //$department = Department::where('del',1)->get();
        //$status = Status::where('del',1)->get();
        //return view('employee.show', compact('emp','village','district','province','position','department','status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $role = Role::all();
        return view('user.edit', compact('user','role'));
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
        $user = User::find($id);
        $request->validate([
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'role_id'=>'required'
        ],[
            'name.required'=>'ໃສ່ຊື້ຜູ້ໃຊ້ກ່ອນ!',
            'phone.required'=>'ກະລຸນາໃສ່ເບິ້ໂທກ່ອນ!',
            'email.required'=>'ໃຫ້ທ່ານໃສ່ອີເມວກ່ອນ!',
            'email.email'=>'ຮູບແບບອີເມວບໍ່ຖືກຕ້ອງ!',
            'role_id.required'=>'ທ່ານຍັງບໍ່ທັນໄດ້ເລືອກສິດນຳໃຊ້'
        ]);
        
        if($request->input('password'))
        {
            $user_data = [
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'address'=>$request->address,
                'role_id'=>$request->role_id
            ];
        }
        if($request->has('picture'))
        {
            $picture = $request->picture;
            $picturename = time().$picture->getClientOriginalName();
            $picture->move('pictures/user/',$picturename);

            $user_data = [
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'address'=>$request->address,
                'role_id'=>$request->role_id,
                'picture'=>'pictures/user/' .$picturename,
            ];
        }
        else
        {
            $user_data = [
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->address,
                'role_id'=>$request->role_id
            ];            
        }

        $user->update($user_data);
        return redirect()->route('user.index')->with('success','ແກ້ໄຂຂໍ້ມູນສຳເຫຼັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->del=0;
        $user->save();
        return redirect()->back()->with('success','ລຶບຂໍ້ມູນສຳເຫຼັດ!');
    }

    public function print($id)
    {
        $user = User::find($id);
        return view('user.print', compact('user'));
    }
}