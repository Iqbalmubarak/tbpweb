<?php

namespace App\Http\Controllers\Backend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\Lecturer;
use Illuminate\Support\Facades\DB;
class InternshipSupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internships = Internship::all();

        return view('backends.klp06.supervisors.index', compact('internships'));
    }

    public function mass_edit($id)
    {
        $internship=Internship::find($id);
        $i = DB::table('internships')->where('id',$id)->get();

        foreach($i as $data)
        {
            $id_lecturers = $data->advisor_id;
        }

        $lecturers = Lecturer::all()->pluck('name','id');
  
        return view('backends.klp06.supervisors.edit', compact('internship','lecturers'));
    }

    public function mass_update(Request $request,Internship $internship)
    {
        $internship->update(['advisor_id' => $request->id]);

        $internships = Internship::all();

        return view('backends.klp06.supervisors.index', compact('internships'));
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
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
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
