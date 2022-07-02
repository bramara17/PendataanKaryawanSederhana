<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\datamahasiswa;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = datamahasiswa::all();
        return view('index', ['employees' => $employees]);
    }

    public function indexdetail()
    {
        $employees = datamahasiswa::all();
        return view('karyawan.index', ['karyawann' => $employees]);
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        datamahasiswa::create($request->all());
        return redirect('/') ->with ('status', 'Data Karyawan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(datamahasiswa $kyn)
    {
        return view('karyawan.details',compact('kyn'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(datamahasiswa $kyn)
    {
        return view('karyawan.edit',compact('kyn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datamahasiswa $kyn)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|size:2'
            ]);
            
            datamahasiswa::where('id', $kyn->id)
            ->update([
            'name' => $request->name,
            'age' => $request->age,
            'region' => $request->region,
            ]);
            return redirect('/') ->with ('status', 'Data Karyawan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(datamahasiswa $a)
    {
        datamahasiswa::destroy($a->id);
        return redirect('/') -> with ('status','Data Karyawan Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $cari = $request->search;
        $post = DB::table('employees')
        ->where('name','like',"%".$cari."%")
        ->paginate();
        return view('index',['employees' => $post]);
    }
}
