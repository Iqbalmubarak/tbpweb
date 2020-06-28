<?php

namespace App\Http\Controllers\Backend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InternshipProposal;
use App\Models\Internship;
use Illuminate\Support\Facades\DB;  
class InternshipAcceptanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proposal = InternshipProposal::find($id);
        $internships = DB::table('internships')
                    ->where('internship_proposal_id',$id)->get();
        $statuses = InternshipProposal::STATUSES;
        return view('backends.klp06.verification.index', compact('proposal','statuses','internships'));
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
        // dd($request->all());
        $proposal=InternshipProposal::find($id);
        $proposal->update($request->all());
        if($request->hasfile('file'))
        {
            $request->file('file')->move('surat_balasan/',$request->file('file')->getClientOriginalName());
            $proposal->file = $request->file('file')->getClientOriginalName();
            $proposal->save();
        }
        $internships = Internship::all();
        return view('backends.klp06.proposals.index', compact('internships'));

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
