<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$province Province::all();
        $province = Province::where('del',1)->get();
        return view('province.index', compact('province'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('province.create');
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
            'name' => 'required'
        ],[
            'name.required' => 'ກະຣູນາໃສ່ຊື່ແຂວງກ່ອນ!'
        ]);
        Province::create($request->all());
        return redirect()->route('province.index')->with('success', 'ບັນທຶກຂໍ້ມູນສໍາເລັດ!');
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
        $province = province::find($id);
        return view('province.edit', compact('province'));
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
        $province = province::find($id);
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'ກະຣຸນາແກ້ໄຂຊື່ແຂວງກ່ອນ!'
        ]);
        $province->update($request->all());
        return redirect()->route('province.index')->with('success', 'ແກ້ໄຂຂໍ້ມູນສໍາເລັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $province = Province::find($id);
        $province->del = 0;
        $province->save();
        return redirect()->back()->with('success', 'ລຶບຂໍ້ມູນສໍາເຫຼັດ!');
    }
}