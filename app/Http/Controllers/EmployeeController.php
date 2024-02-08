<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index(){
        $data = Employee::all();
        // dd($data);

        return view('datapegawai',compact('data'));
    }
    public function tambahpegawai(){
        return view('tambahdata');
    }
    public function insertdata(Request $request){
        // dd($request->all());
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('success','Data Added Successfully');
    }
    public function tampildata($id){
        $data=Employee::find($id);
        // dd($data);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data=Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data Updated Successfully');
    }

    public function delete($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Removed Successfully');

    }
}
