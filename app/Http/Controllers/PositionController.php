<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $position = Position::orderBy('id', 'desc')->where('del', 1)->get();
        return view('position.index', compact('position'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('position.create');
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
            'name.required' => 'ກະຣູນາໃສ່ຊື່ຕຳແໜ່ງງານກ່ອນ!'
        ]);
        Position::create($request->all());
        return redirect()->route('position.index')->with('success', 'ບັນທຶກຂໍ້ມູນສໍາເລັດ!');
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
        $position = position::find($id);
        return view('position.edit', compact('position'));
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
        $position = position::find($id);
        $request->validate([
            'name' => 'required'
        ],[
            'name.required' => 'ກະຣຸນາແກ້ໄຂຊື່ຕຳແໜ່ງງານກ່ອນ!'
        ]);
        $position->update($request->all());
        return redirect()->route('position.index')->with('success', 'ແກ້ໄຂຂໍ້ມູນສໍາເຫຼັດ!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $position = Position::find($id);
        $position->del = 0;
        $position->save();
        return redirect()->back()->with('success', 'ລຶບຂໍ້ມູນສໍາເຫຼັດ!');
    }
}