<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Province;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function index()
    {
        $district = District::orderBy('id','desc')->where('del',1)->get();
        return view('district.index', compact('district'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $province = Province:: where('del',1)->get();
        return view('district.create', compact('province'));
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
            'pro_id' => 'required'
        ],[
            'name.required' => 'ໃສ່ຊື່ເມືອງກ່ອນ!',
            'pro_id.required' => 'ເລືອກແຂວງກ່ອນ!
            '
        ]);
        District::create($request->all());
            return redirect()->route('district.index')->with('success', 'ບັນທຶກຂໍ້ມູນສໍາເຫຼັດ!');
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
        $district = District::find($id);
        $province = province::where('del',1)->get();
        return view('district.edit', compact('district','province'));
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
        $district = District::find($id);
        $request->validate([
            'name'=>'required',
            'pro_id' => 'required'
        ],[
            'name.required' => 'ໃສ່ຊື່ເມືອງກ່ອນ!',
            'pro_id.required' => 'ເລືອກແຂວງກ່ອນ!
            '
        ]);
        $district->update($request->all());
        return redirect()->route('district.index')->with('success', 'ແກ້ໄຂຂໍ້ມູນສໍາເຫຼັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $district = District::find($id);
        $district->del = 0;
        $district->save();
        return redirect()->back()->with('success', 'ລຶບຂໍ້ມູນສໍາເຫຼັດ!');
    }
}