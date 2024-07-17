<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\SubjectGrade;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Student::all();
        //return Student::where('province', 'Oklahoma')->get();
        //return Student::where('province', 'Oklahoma')
            //->orwhere('fname', 'Florine')
            //->orwhere('lname', 'Blick')
            //->get();
        //return Student::where('fname','like', '%t%')->get();
        //return Student::orderBy('fname')->get();
        //return Student::orderBy('fname', 'desc')->get();
        //return Student ::limit(7)->get();
        //return Student::wherein('id', [1,3,5,7,9,11])->get(); 
        //return Student::wherenotin('id', [1,3,5,7,9,11])->get();
        //return Student::where('province', 'Arizona')->first();
        //return Student::with('grades')->get();
        return Student::with(['grades' => function($query)
        {
            return $query->where('grade', '>=', 90);
        }])->get();
        
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //return Student::find($id);
        //$student =Student::find($id);
            //return $student->fname;
        //$student =Student::find($id);
            //return $student->fullname;

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
