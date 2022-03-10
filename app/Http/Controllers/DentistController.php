<?php

namespace App\Http\Controllers;

use App\Models\Dentist;
use App\Models\Treatment_skill_ratio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DentistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dentist::get();
        $skill = Treatment_skill_ratio::get();
        return view('dentist.index', compact('data', 'skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dentist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'dentist_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);

        $dentist = new Dentist;

        $dentist->dentist_name = $request->input('dentist_name');
        $dentist->phone = $request->input('phone');
        $dentist->email = $request->input('email');
        $dentist->image = $request->input('image');
        $dentist->status = "active";
        $dentist->employee_id = 2;
        $dentist->room_id = 1;

        $dentist->save();

        return redirect()->route('dentist.index')->with('success', 'Dentist created successfully.');
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
        $dentist = Dentist::find($id);
        $skill = DB::table('treatment_skill_ratios')->where('dentist_id', $id)->get();
        return view('dentist.edit', compact('dentist', 'skill'));
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
        $this->validate($request,[
            'dentist_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'image' => 'required',
        ]);
        // $treatment = Treatment::find($id);

        $data = array(
            'dentist_name' => $request->dentist_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $request->image,
            'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('dentists')->where('id', $id)->update($data);

        return redirect()->route('dentist.index')
                         ->with('success', 'Dentist updated successfully.');
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
