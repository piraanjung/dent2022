<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Treatment::where('status', "active")->get();
        return view('treatment.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treatment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $treatment->priority = $request->input('priority');
        $treatment->description = $request->input('description');
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
        // return view('treatment.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatment = Treatment::find($id);
        return view('treatment.edit', compact('treatment'));
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
            'priority' => 'required',
            'description' => 'required'
        ]);
        // $treatment = Treatment::find($id);

        $data = array(
            'treatment_name' => $request->treatment_name,
            'sub_category' => $request->sub_category,
            'price' => $request->price,
            'priority' => $request->priority,
            'description' => $request->description,
            'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('treatments')->where('id', $id)->update($data);

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
        dd("deleted");
        //return "Success";
        // DB::table('treatments')->where('id', $id)->delete();
        // $treatment = Treatment::find($id);
        
        // $treatment->deleted = "1";
        // $treatment->status = "deleted";
        // $treatment->updated_at = date('Y-m-d H:i:s');

        // $treatment->save();

        return redirect()->route('treatment.index')
                         ->with('success', 'Treatment deleted successfully.');
    }

    public function delete($id)
    {
        //$deleted = DB::table('treatments')->where('id', $id)->get();
        $data = array(
            'status' => "deleted",
            'deleted' => "1",
            'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('treatments')->where('id', $id)->update($data);
        //$delete = Treatment::where('id', $id)->delete();
        return redirect()->back();
    }
}
