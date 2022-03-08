<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Http\Controllers\Auth;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = Treatment::get();
        return view('treatment.index',compact('data'));
        // if($request->search == ""){
        //     $data = Treatment::orderBy('id','DESC')->paginate(5);
        //     $roles = Role::pluck('name','name')->all();
        //     return view('treatment.index',compact('data'))
        //         ->with('i', ($request->input('page', 1) - 1) * 5);
        // }else{
        //     $data = Treatment::where('name', 'LIKE', '%' .$request->search.'%'
        //     )->paginate(5);
        //     $roles = Role::pluck('name','name')->all();
        //     $data->appends($request->only('users.index'));
        //     return view('treatment.index',compact('data'))
        //         ->with('i', ($request->input('page', 1) - 1) * 5);
        // }
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
        //dd('test');
        $this->validate($request,[
            'treatment_name' => 'required',
            'sub_category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'priority' => 'required'
        ]);

        $treatment = new Treatment;

        $treatment->treatment_name = $request->input('treatment_name');
        $treatment->sub_category = $request->input('sub_category');
        $treatment->price = $request->input('price');
        $treatment->description = $request->input('description');
        $treatment->priority = $request->input('priority');
        $treatment->status = "active";

        $treatment->save();

        return redirect()->route('treatment.index')->with('success', 'Treatment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('treatment.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('treatment.edit', compact('post'));
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
            'treatment_name' => 'required',
            'sub_category' => 'required',
            'price' => 'required',
            'description' => 'required',
            'priority' => 'required'
        ]);
        $user = Treatment::find($id);
        //dd($user);

        $user->update($request->all());

        return redirect()->route('treatment.index')
                         ->with('success', 'Treatment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Treatment::find($id);
        $user->delete();

        return redirect()->route('treatment.index')
                         ->with('success', 'Treatment deleted successfully.');
    }
}
