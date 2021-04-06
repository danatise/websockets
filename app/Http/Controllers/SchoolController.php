<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $schools = DB::table('schools')->orderBy('name','ASC')->paginate(); //this is for pagination

        return view ('school.showschools',['schools'=>$schools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('school.createschool');
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


        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
           
            'slug'=>['string','max:255','unique:schools'],
            'email_suffix' => ['required', 'max:255', 'unique:schools'],
            'username_prefix'=> ['required', 'max:255', 'unique:schools'], 
            'teacher_password_root'=> ['required', 'max:255'], 
            'school_id'=>['integer','unique:schools'],
            'password_root'=>['string'],
           
           
            ]);
       $id = School::create($data);

        return  redirect('/schools');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //

        $users = User::where('school_id',$school->school_id)->pluck('id')->toArray();
        
        User::destroy($users);
        return redirect('/schools')->with('success',['alert-success','School Updated successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
        return view('school.editschoolform',['school'=>$school]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'slug' => 'string|unique:schools,slug,'.$school->id,
                 ]);
        $school->update($data);

        return redirect('/schools')->with('success',['alert-success','School Updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
        
        $users = User::where('school_id',$school->school_id)->pluck('id')->toArray();
        School::destroy($school->id);
        User::destroy($users);
        return redirect('/schools')->with('success',['alert-success','School Updated successfully!']);
    }
}

