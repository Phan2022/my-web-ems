<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            // 'name'=>'required',
            'phone'=>'required',
            'password'=>'required',
        ],[
            // 'name.required'=>'ກະລຸນາໃສ່ຊື່ຜູ້ໃຊ້ກ່ອນ!',
            'phone.required'=>'ກະລຸນາໃສ່ເບິໂທລະສັບກ່ອນ!',
            'password.required'=>'ກະລຸນາໃສ່ລະຫັດຜ່ານກ່ອນ!'
        ]);

        if(Auth::attempt([
            // 'name'=>$request->name,
            'phone'=>$request->phone,
            'password'=>$request->password
        ]))
        {
            return redirect()->route('dashboard.index')->with('success','ເຂົ້າລະບົບສຳເຫຼັດ!');
        }else
        {
            return redirect()->back()->with('message','ເບີ້ໂທ ຫຼື ລະຫັດຜ່ານບໍ່ຖືກຕ້ອງ ກະລຸນາກວດຄືນໃໝ່');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}