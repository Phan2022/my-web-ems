<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;


class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $village = village::orderBy('id','desc')->where('del', 1)->get();
        return view('village.index', compact('village'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = district:: where('del',1)->get();
        $province = province:: where('del',1)->get();
        return view('village.create', compact('district', 'province'));
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
            'dis_id' => 'required',
            'pro_id' => 'required'
        ],[
            'name.required' => 'ໃສ່ຊື່ບ້ານກ່ອນ!',
            'dis_id.required' => 'ເລືອກເມືອງກ່ອນ!',
            'pro_id.required' => 'ເລືອກແຂວງກ່ອນ!'
        ]);
        $villag->update($request->all());
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
        $village = Village::find($id);
        $district = district:: where('del',1)->get();
        $province = province:: where('del',1)->get();
        return view('village.edit', compact('village','district','province'));
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
        $village = Village::find($id);
        $request->validate([
            'name'=>'required',
            'dis_id' => 'required',
            'pro_id' => 'required'
        ],[
            'name.required' => 'ໃສ່ຊື່ເມືອງກ່ອນ!',
            'pro_id.required' => 'ເລືອກເມືອງກ່ອນ!',
            'pro_id.required' => 'ເລືອກແຂວງກ່ອນ!'
        ]);
        $village->update($request->all());
        return redirect()->route('village.index')->with('success', 'ແກ້ໄຂຂໍ້ມູນສໍາເຫຼັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $village = Village::find($id);
        $village->del = 0;
        $village->save();
        return redirect()->back()->with('success', 'ລຶບຂໍ້ມູນສໍາເຫຼັດ!');
    }
}