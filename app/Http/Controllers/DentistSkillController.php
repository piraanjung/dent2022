<?php

namespace App\Http\Controllers;

use App\Models\Dentist;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Treatment_skill_ratio;
use Illuminate\Support\Facades\Redirect;

class DentistSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $treatmentList = DB::table('treatments')->get();
        return view('dentist.skill.create', compact('treatmentList'));
    }

    public function skill_create($id)
    {
        $dentist_id = $id;
        $dentist = Dentist::with(['treatment_skill_ratio'=> function($query){
                            return $query->select('id', 'dentist_id', 'treatment_id');
                         }])
                        ->where('id', $dentist_id)
                        ->get(['id']);

        $treatment_ratio_of_dentist =[];
        foreach($dentist[0]->treatment_skill_ratio as $treatment_ratio){
            array_push($treatment_ratio_of_dentist, $treatment_ratio->treatment_id);
        }
        $treatmentList = Treatment::where(['status' => "active", 'deleted' => "0"])->get();
        // return $treatmentList;
        // return $treatment_ratio_of_dentist;
         $treatmentList_filtered = collect($treatmentList)->filter(function($value) use($treatment_ratio_of_dentist){
            // dd($treatment_ratio_of_dentist);
            return !in_array($value->id, $treatment_ratio_of_dentist);
        
         });
        // return $dentist[0]->treatment_skill_ratio;
        return view('dentist.skill.create', compact('treatmentList_filtered', 'dentist_id'));
    }

   
    public function store(Request $request)
    {
        $skill = new Treatment_skill_ratio;

        $skill->time_spent = $request->input('time_spent');
        $skill->status = "active";
        $skill->treatment_id = $request->input('id');
        $skill->dentist_id = $request->input('dentist_id');;

        $skill->save();

        return redirect()->route('dentist.edit', $request->input('dentist_id'))->with('success', 'Skill created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $dentist_id = $id;

        $treatmentList = DB::table('treatments')->get();

        return view('dentist.skill.create', compact('treatmentList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skill_id = $id;
        $treatmentList = DB::table('treatments')->get();
        $skill = DB::table('treatment_skill_ratios as tsr')
        ->join('dentists as dt', 'dt.id', '=', 'tsr.dentist_id')
        ->join('treatments as tm', 'tm.id', '=', 'tsr.treatment_id')
        ->select(
            'dt.id as dentist_id', 'dt.dentist_name',
            'tsr.treatment_id', 'tsr.id', 'tsr.time_spent',
            'tm.treatment_name'
        )
        ->where('tsr.id', $id)->get();
        
        //return $skill;
        return view('dentist.skill.edit', compact('skill', 'treatmentList', 'skill_id'));
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
        // return $request;
        $data = array(
            'time_spent' => $request->time_spent,
            'updated_at' => date('Y-m-d H:i:s'),
        );
        DB::table('treatment_skill_ratios')->where('id', $id)->update($data);

        return redirect()->route('dentist.edit', $request->input('dentist_id'))
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
        //
    }

}
