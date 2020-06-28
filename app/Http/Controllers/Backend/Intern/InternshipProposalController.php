<?php

namespace App\Http\Controllers\Backend\Intern;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Internship;
use App\Models\InternshipAgency;
use App\Models\InternshipProposal;
use App\Exceptions;
use Illuminate\Support\Facades\Storage;
use PDF;

class InternshipProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internships = Internship::all();
        return view('backends.klp06.proposals.index', compact('internships'));
    }

    public function filter(Request $request)
    {
        try {
        $filter = $request->filter;
        $internship_agencies = InternshipAgency::where('name','LIKE','%'.$request->filter.'%')->first();
        $id_ = $internship_agencies->id;
        $internship_proposals = InternshipProposal::where('agency_id', $id_)->first();
        $id = $internship_proposals->id;
        $internships = Internship::where('internship_proposal_id', $id)->get();
        }
        
        catch (\Throwable $th) {
            $user_id = 0;
        $internships = Internship::where('student_id', $user_id)->get();

        return view('backends.klp06.proposals.index', compact('internships'));
        }
      
        return view('backends.klp06.proposals.index', compact('internships'));
        
    }

    public function show($id)
    {
        $internships = Internship::find($id);
        return view('backends.klp06.proposals.show', compact('internships'));
     
    }

    public function suratpermohonan($id)
    {
        $internships = Internship::find($id);
        
        $pdf = PDF::loadview('backends.klp06.proposals.suratpermohonan', compact('internships'));
        return $pdf->stream();
    }

    public function surattugas($id)
    {
        $internships = Internship::find($id);
        
        $pdf = PDF::loadview('backends.klp06.proposals.surattugas', compact('internships'));
        return $pdf->stream();
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
    

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
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
