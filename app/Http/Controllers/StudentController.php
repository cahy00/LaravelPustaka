<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\InputClass;



class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::with('inputclass')->orderBy('nis', 'ASC')->get();
        $i = 1;
        return view('students.index', compact('student', 'i'));
        // return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $student = Student::orderBy('nis', 'ASC')->get();
        $class = InputClass::get();
        return view('students.create', compact('class'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nisn'                      => 'required|numeric',
        //     'nama'                      => 'required',
        //     'classroom_id'              => 'required',
        //     'alamat'                    => 'required',
        //     'jenis_kelamin'             => 'required'
        // ]);

        try{
            $student = Student::create([
                'nama'                  => $request->nama,
                'nis'                   => $request->nis,
                'classroom_id'          => $request->classroom_id,
                'alamat'                => $request->alamat,
                'jenis_kelamin'         => $request->jenis_kelamin
            ]);
            
            return redirect()->route('student.index')->with(['success' => 'Data Berhasil Di input']);
            // return $request->classroom_id;
            
        }catch(\Exception $e){
            return redirect()->route('student.index')->with(['error' => $e->getMessage()]);
            // return $request->all();
        }
        
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
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
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
        $student = Student::findOrFail($id);
        $student->update([
            'nama'          => $request->nama,
            'nis'           => $request->nis,
            'classroom_id'  => $request->classroom_id,
            'alamat'        => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        return $student;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
    }

    public function inputKelas(Request $request)
    {
        $i     = 1; 
        $class = InputClass::create($request->all())->get();
        // $getclass = InputClass::get();
        return redirect()->route('student.create', compact('class', 'i'))->with(['success' => 'Data Kelas Berhasil Di input']);
    }

    public function hapusKelas($id)
    {
        return $id ;
    }
}

